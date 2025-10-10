<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the tour operator code', function (): void {
    $line = Line::make()->setTourOperatorCode('TO123');

    expect($line->getTourOperatorCode())->toBe('TO123');
});

it('has the correct Field attribute for tourOperatorCode property', function (): void {
    $reflectionClass = new ReflectionClass(Line::class);
    $property = $reflectionClass->getProperty('tourOperatorCode');
    $attributes = $property->getAttributes(Field::class);

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(4)
        ->length->toBe(5)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:5'])
        ->validationMessages->toEqualCanonicalizing([]);
});
