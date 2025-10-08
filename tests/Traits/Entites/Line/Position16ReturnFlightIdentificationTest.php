<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the return flight identification', function (): void {
    $line = Line::make()->setReturnFlightIdentification('ABC');

    expect($line->getReturnFlightIdentification())->toBe('ABC');
});

it('has the correct Field attribute for returnFlightIdentification property', function (): void {
    $attributes = getAttributesOfLineProperty('returnFlightIdentification');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(16)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
