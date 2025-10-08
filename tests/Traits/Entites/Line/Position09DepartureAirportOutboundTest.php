<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the departure airport outbound', function (): void {
    $line = Line::make()->setDepartureAirportOutbound('DUSS');

    expect($line->getDepartureAirportOutbound())->toBe('DUSS');
});

it('has the correct Field attribute for departureAirportOutbound property', function (): void {
    $attributes = getAttributesOfLineProperty('departureAirportOutbound');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(9)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
