<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the arrival airport outbound', function (): void {
    $line = Line::make()->setArrivalAirportOutbound('DUSS');

    expect($line->getArrivalAirportOutbound())->toBe('DUSS');
});

it('has the correct Field attribute for arrivalAirportOutbound property', function (): void {
    $attributes = getAttributesOfLineProperty('arrivalAirportOutbound');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(57)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
