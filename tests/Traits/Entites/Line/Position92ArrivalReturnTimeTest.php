<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the arrival return time', function (): void {
    $line = Line::make()->setArrivalReturnTime('1530');

    expect($line->getArrivalReturnTime())->toBe('1530');
});

it('has the correct Field attribute for arrivalReturnTime property', function (): void {
    $attributes = getAttributesOfLineProperty('arrivalReturnTime');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(92)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(239)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);
});
