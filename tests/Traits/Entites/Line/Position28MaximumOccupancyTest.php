<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the maximum occupancy', function (): void {
    $line = Line::make()->setMaximumOccupancy(6);

    expect($line->getMaximumOccupancy())->toBe(6);
});

it('has the correct Field attribute for maximumOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('maximumOccupancy');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(28)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
