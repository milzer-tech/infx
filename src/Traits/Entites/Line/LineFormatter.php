<?php

namespace Milzer\Infx\Traits\Entites\Line;

use BackedEnum;
use Carbon\Carbon;
use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;
use Milzer\Infx\Enums\InfxVersion;
use ReflectionException;
use ReflectionProperty;

trait LineFormatter
{
    /**
     * Returns string representation of the object.
     *
     * @throws ReflectionException
     */
    public function toString(): string
    {
        $properties = [];
        $reflectionProperties = self::getReflectionProperties();
        $this->validateRequiredProperty($reflectionProperties);

        foreach ($reflectionProperties as $property => $reflectionProperty) {
            $field = self::getFieldInstance((string) $property);
            if (is_null($field)) {
                continue;
            }

            $properties[$field->position] = [
                'property' => $property,
                'field' => $field,
                'value' => $reflectionProperty->isInitialized($this)
                    ? $this->{$property}
                    : null,
            ];
        }

        ksort($properties);

        return $this->createResult($properties);
    }

    /**
     * Create the result string.
     *
     * @param  array<int, array{property: string, field: Field, value: mixed}>  $properties
     */
    private function createResult(array $properties): string
    {
        $result = '';

        foreach ($properties as $property) {
            if ($property['value'] instanceof Carbon) {
                $value = $property['value']->format(self::getCarbonFormat());
            } elseif ($property['value'] instanceof BackedEnum) {
                $value = $property['value']->value;
            } else {
                $value = strval($property['value']);
            }

            $result .= mb_str_pad(
                string: strval($value),
                length: $property['field']->length,
            );
        }

        return $result;
    }

    /**
     * Get the Field instance for the property.
     *
     * @throws ReflectionException
     */
    private static function getFieldInstance(string $name): ?Field
    {
        $reflectionProperty = new ReflectionProperty(Line::class, $name);

        $attributes = $reflectionProperty->getAttributes(static::getCurrentAttributeClass());

        if ($attributes === [] || ! $attributes[0]->newInstance() instanceof Field) {
            return null;
        }

        return $attributes[0]->newInstance();
    }

    /**
     * Get all ReflectionProperty instances for the class properties.
     *
     * @return array<string, ReflectionProperty>
     */
    private static function getReflectionProperties(): array
    {
        $reflectionClass = new \ReflectionClass(Line::class);
        $properties = $reflectionClass->getProperties(ReflectionProperty::IS_PROTECTED);
        $propertyArray = [];

        foreach ($properties as $property) {
            $propertyArray[$property->getName()] = $property;
        }

        return $propertyArray;
    }

    public static function parseInfx(string $offer): Line
    {
        $properties = [];
        $reflectionProperties = self::getReflectionProperties();

        foreach ($reflectionProperties as $property => $reflectionProperty) {
            $field = self::getFieldInstance((string) $property);
            if (is_null($field)) {
                continue;
            }

            $properties[$field->position] = [
                'name' => $property,
                'length' => $field->length,
                // @phpstan-ignore-next-line
                'type' => $reflectionProperty->getType()?->getName(),
            ];
        }

        ksort($properties);

        $data = [];
        foreach ($properties as $position => ['name' => $name, 'length' => $length, 'type' => $type]) {
            $value = mb_substr($offer, $position - 1, $length);

            // skip empty values
            if (($type === 'int' || $type === 'float') && trim($value) === '') {
                continue;
            }

            $value = match ($type) {
                InfxVersion::class => InfxVersion::from($value),
                Carbon::class => Carbon::createFromFormat(self::getCarbonFormat(), $value),
                'string' => $value,
                'int' => (int) $value,
                'float' => (float) $value,
                default => $value,
            };

            $data[$name] = $value;
        }

        return Line::make()->bulkAssign($data);
    }
}
