<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the return flight number', function (): void {
    $line = Line::make()->setReturnFlightNumber('AB12');

    expect($line->getReturnFlightNumber())->toBe('AB12');
});

it('has the correct Field attribute for returnFlightNumber property', function (): void {
    $attributes = getAttributesOfLineProperty('returnFlightNumber');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(100)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(227)
        ->length->toBe(8)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:8'])
        ->validationMessages->toEqualCanonicalizing([]);
});
