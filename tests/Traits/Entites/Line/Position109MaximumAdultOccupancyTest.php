<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the maximum adult occupancy', function (): void {
    $line = Line::make()->setMaximumAdultOccupancy(3);

    expect($line->getMaximumAdultOccupancy())->toBe(3);
});

it('has the correct Field attribute for maximumAdultOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('maximumAdultOccupancy');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(109)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(582)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
