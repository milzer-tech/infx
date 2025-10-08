<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the offer number', function (): void {
    $line = Line::make()->setOfferNumber('TO123');

    expect($line->getOfferNumber())->toBe('TO123');
});

it('has the correct Field attribute for offerNumber property', function (): void {
    $reflectionClass = new ReflectionClass(Line::class);
    $property = $reflectionClass->getProperty('offerNumber');
    $attributes = $property->getAttributes(Field::class);

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(5)
        ->length->toBe(10)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:10'])
        ->validationMessages->toEqualCanonicalizing([]);
});
