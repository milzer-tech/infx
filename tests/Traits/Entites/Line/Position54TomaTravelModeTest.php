<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma travel mode', function (): void {
    $line = Line::make()->setTomaTravelMode('BUS');

    expect($line->getTomaTravelMode())->toBe('BUS');
});

it('has the correct Field attribute for tomaTravelMode property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaTravelMode');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(54)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);
});
