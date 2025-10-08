<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the return flight number', function (): void {
    $line = Line::make()->setReturnFlightNumber('AB12');

    expect($line->getReturnFlightNumber())->toBe('AB12');
});

it('has the correct Field attribute for returnFlightNumber property', function (): void {
    $attributes = getAttributesOfLineProperty('returnFlightNumber');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(24)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);
});
