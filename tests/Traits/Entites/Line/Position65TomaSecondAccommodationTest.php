<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma second accommodation', function (): void {
    $line = Line::make()->setTomaSecondAccommodation('Hotel');

    expect($line->getTomaSecondAccommodation())->toBe('Hotel');
});

it('has the correct Field attribute for tomaSecondAccommodation property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaSecondAccommodation');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(65)
        ->length->toBe(6)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:6'])
        ->validationMessages->toEqualCanonicalizing([]);
});
