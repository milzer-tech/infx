<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the minimum adult occupancy', function (): void {
    $line = Line::make()->setMinimumAdultOccupancy(2);

    expect($line->getMinimumAdultOccupancy())->toBe(2);
});

it('has the correct Field attribute for minimumAdultOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('minimumAdultOccupancy');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(29)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
