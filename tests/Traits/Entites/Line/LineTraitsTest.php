<?php

use Carbon\Carbon;
use InvalidArgumentException;
use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;
use Milzer\Infx\Enums\InfxVersion;
use Milzer\Infx\Traits\Entites\Line\LineFormatter;
use Milzer\Infx\Traits\Entites\Line\Validator;
use ReflectionClass;
use ReflectionMethod;
use ReflectionNamedType;
use ReflectionType;

$allTraits = class_uses(Line::class);
$excludedTraits = [
    LineFormatter::class,
    Validator::class,
];

$traitsWithAccessors = [];
$traitsWithoutAccessors = [];

foreach ($allTraits as $trait) {
    if (in_array($trait, $excludedTraits, true)) {
        continue;
    }

    $reflection = new ReflectionClass($trait);
    $hasSetter = false;

    foreach ($reflection->getMethods() as $method) {
        if (str_starts_with($method->getName(), 'set')) {
            $hasSetter = true;
            break;
        }
    }

    if ($hasSetter) {
        $traitsWithAccessors[$trait] = [$trait];
    } else {
        $traitsWithoutAccessors[$trait] = [$trait];
    }
}

ksort($traitsWithAccessors);
ksort($traitsWithoutAccessors);

dataset('line_traits_with_accessors', $traitsWithAccessors);
dataset('line_traits_without_accessors', $traitsWithoutAccessors);

it('allows setting and getting values through Line accessors', function (string $trait) {
    $line = Line::make();

    $traitReflection = new ReflectionClass($trait);
    $property = $traitReflection->getProperties()[0] ?? null;
    expect($property)->not()->toBeNull();

    $attributes = $property->getAttributes(Field::class);
    expect($attributes)->toHaveCount(1);

    $setter = firstMethodWithPrefix($traitReflection, 'set');
    $getter = firstMethodWithPrefix($traitReflection, 'get');

    $parameterType = $setter->getParameters()[0]->getType();
    $valueForSetter = sampleValueForType($parameterType);

    $result = $line->{$setter->getName()}($valueForSetter);
    expect($result)->toBeInstanceOf(Line::class);

    $expected = transformValueForReturn($valueForSetter, $getter->getReturnType());

    expect($line->{$getter->getName()}())->toEqual($expected);
})->with('line_traits_with_accessors');

it('supports default handling for traits without explicit accessors', function (string $trait) {
    $lineReflection = new ReflectionClass(Line::class);
    $defaultsProperty = $lineReflection->getProperty('defaultValues');
    $defaultsProperty->setAccessible(true);
    $defaultsProperty->setValue(null, []);

    $traitReflection = new ReflectionClass($trait);
    $property = $traitReflection->getProperties()[0] ?? null;
    expect($property)->not()->toBeNull();

    $attributes = $property->getAttributes(Field::class);
    expect($attributes)->toHaveCount(1);

    $propertyName = $property->getName();
    $traitDefaults = $traitReflection->getDefaultProperties();

    if (array_key_exists($propertyName, $traitDefaults)) {
        $line = Line::make();
        $lineProperty = $lineReflection->getProperty($propertyName);
        $lineProperty->setAccessible(true);

        expect($lineProperty->isInitialized($line))->toBeTrue();
        expect($lineProperty->getValue($line))->toEqual($traitDefaults[$propertyName]);
    } else {
        $value = sampleValueForType($property->getType());
        Line::setDefaultValues([$propertyName => $value]);
        $line = Line::make();
        $lineProperty = $lineReflection->getProperty($propertyName);
        $lineProperty->setAccessible(true);

        expect($lineProperty->getValue($line))->toEqual($value);
    }

    $defaultsProperty->setValue(null, []);
})->with('line_traits_without_accessors');

function firstMethodWithPrefix(ReflectionClass $reflection, string $prefix): ReflectionMethod
{
    foreach ($reflection->getMethods() as $method) {
        if (str_starts_with($method->getName(), $prefix)) {
            return $method;
        }
    }

    throw new InvalidArgumentException(sprintf('No method with prefix %s found on %s', $prefix, $reflection->getName()));
}

function sampleValueForType(?ReflectionType $type): mixed
{
    if (! $type instanceof ReflectionNamedType) {
        return 'sample';
    }

    return match ($type->getName()) {
        'string' => 'sample-value',
        'int' => 1,
        'float' => 123.45,
        'bool' => true,
        Carbon::class => Carbon::create(2024, 1, 1),
        InfxVersion::class => InfxVersion::First,
        default => throw new InvalidArgumentException(sprintf('Unhandled type %s', $type->getName())),
    };
}

function transformValueForReturn(mixed $value, ?ReflectionType $returnType): mixed
{
    if (! $returnType instanceof ReflectionNamedType || ! $returnType->isBuiltin()) {
        return $value;
    }

    return match ($returnType->getName()) {
        'int' => (int) $value,
        'float' => (float) $value,
        'string' => (string) $value,
        'bool' => (bool) $value,
        default => $value,
    };
}
