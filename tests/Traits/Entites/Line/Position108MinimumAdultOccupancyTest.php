<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the minimum adult occupancy', function (): void {
    $line = Line::make()->setMinimumAdultOccupancy(2);

    expect($line->getMinimumAdultOccupancy())->toBe(2);
});

it('has the correct Field attribute for minimumAdultOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('minimumAdultOccupancy');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(108)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(581)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
