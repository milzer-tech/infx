<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the departure airport return', function (): void {
    $line = Line::make()->setDepartureAirportReturn('DUSS');

    expect($line->getDepartureAirportReturn())->toBe('DUSS');
});

it('has the correct Field attribute for departureAirportReturn property', function (): void {
    $attributes = getAttributesOfLineProperty('departureAirportReturn');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(11)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
