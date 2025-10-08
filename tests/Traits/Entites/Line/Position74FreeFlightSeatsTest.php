<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the free flight seats', function (): void {
    $line = Line::make()->setFreeFlightSeats(150);

    expect($line->getFreeFlightSeats())->toBe(150);
});

it('has the correct Field attribute for freeFlightSeats property', function (): void {
    $attributes = getAttributesOfLineProperty('freeFlightSeats');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(74)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:999'])
        ->validationMessages->toEqualCanonicalizing([]);
});
