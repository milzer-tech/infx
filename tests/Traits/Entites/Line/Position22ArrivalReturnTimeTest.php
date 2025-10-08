<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the arrival return time', function (): void {
    $line = Line::make()->setArrivalReturnTime('1530');

    expect($line->getArrivalReturnTime())->toBe('1530');
});

it('has the correct Field attribute for arrivalReturnTime property', function (): void {
    $attributes = getAttributesOfLineProperty('arrivalReturnTime');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(22)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);
});
