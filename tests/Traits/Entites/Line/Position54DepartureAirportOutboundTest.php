<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the departure airport outbound', function (): void {
    $line = Line::make()->setDepartureAirportOutbound('DUSS');

    expect($line->getDepartureAirportOutbound())->toBe('DUSS');
});

it('has the correct Field attribute for departureAirportOutbound property', function (): void {
    $attributes = getAttributesOfLineProperty('departureAirportOutbound');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(54)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(7)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
