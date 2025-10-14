<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the departure return time', function (): void {
    $line = Line::make()->setDepartureReturnTime('1530');

    expect($line->getDepartureReturnTime())->toBe('1530');
});

it('has the correct Field attribute for departureReturnTime property', function (): void {
    $attributes = getAttributesOfLineProperty('departureReturnTime');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(87)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(235)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);
});
