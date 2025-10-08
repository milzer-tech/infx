<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma fourth accommodation', function (): void {
    $line = Line::make()->setTomaFourthAccommodation('Hotel');

    expect($line->getTomaFourthAccommodation())->toBe('Hotel');
});

it('has the correct Field attribute for tomaFourthAccommodation property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFourthAccommodation');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(67)
        ->length->toBe(6)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:6'])
        ->validationMessages->toEqualCanonicalizing([]);
});
