<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the maximum adult occupancy', function (): void {
    $line = Line::make()->setMaximumAdultOccupancy(3);

    expect($line->getMaximumAdultOccupancy())->toBe(3);
});

it('has the correct Field attribute for maximumAdultOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('maximumAdultOccupancy');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(30)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
