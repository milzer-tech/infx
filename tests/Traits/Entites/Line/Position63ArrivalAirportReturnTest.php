<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the arrival airport return', function (): void {
    $line = Line::make()->setArrivalAirportReturn('DUSS');

    expect($line->getArrivalAirportReturn())->toBe('DUSS');
});

it('has the correct Field attribute for arrivalAirportReturn property', function (): void {
    $attributes = getAttributesOfLineProperty('arrivalAirportReturn');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(63)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(16)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
