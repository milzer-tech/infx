<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line; // Assuming `Line` uses `HasVersion` trait
use Milzer\Infx\Enums\InfxVersion;

it('gets the default version', function () {
    expect(Line::make()->getVersion())
        ->toBe(InfxVersion::Second);
});

it('sets the version to First', function () {
    $line = new Line();

    $line->setVersion(InfxVersion::First);

    expect($line->getVersion())->toBe(InfxVersion::First);
});

it('has the correct Field attribute for version property', function () {
    $reflectionClass = new ReflectionClass(Line::class);
    $property = $reflectionClass->getProperty('version');
    $attributes = $property->getAttributes(Field::class);

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(1)
        ->length->toBe(2);
});
