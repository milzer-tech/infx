<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('has the correct Field attribute for leer property', function (): void {
    $reflectionClass = new ReflectionClass(Line::class);
    $property = $reflectionClass->getProperty('leer');
    $attributes = $property->getAttributes(Field::class);

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(9)
        ->length->toBe(6)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
