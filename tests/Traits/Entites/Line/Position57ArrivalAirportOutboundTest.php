<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the arrival airport outbound', function (): void {
    $line = Line::make()->setArrivalAirportOutbound('DUSS');

    expect($line->getArrivalAirportOutbound())->toBe('DUSS');
});

it('has the correct Field attribute for arrivalAirportOutbound property', function (): void {
    $attributes = getAttributesOfLineProperty('arrivalAirportOutbound');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(57)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(10)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
