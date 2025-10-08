<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the maximum children occupancy', function (): void {
    $line = Line::make()->setMaximumChildrenOccupancy(4);

    expect($line->getMaximumChildrenOccupancy())->toBe(4);
});

it('has the correct Field attribute for maximumChildrenOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('maximumChildrenOccupancy');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(26)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
