<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the first child age to', function (): void {
    $line = Line::make()->setFirstChildAgeTo(12);

    expect($line->getFirstChildAgeTO())->toBe(12);
});

it('has the correct Field attribute for firstChildAgeTo property', function (): void {
    $attributes = getAttributesOfLineProperty('firstChildAgeTo');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(36)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['integer', 'min:0', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
