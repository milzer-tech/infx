<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the departure airport return', function (): void {
    $line = Line::make()->setDepartureAirportReturn('DUSS');

    expect($line->getDepartureAirportReturn())->toBe('DUSS');
});

it('has the correct Field attribute for departureAirportReturn property', function (): void {
    $attributes = getAttributesOfLineProperty('departureAirportReturn');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(60)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(13)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
