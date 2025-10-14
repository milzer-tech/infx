<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the maximum occupancy', function (): void {
    $line = Line::make()->setMaximumOccupancy(6);

    expect($line->getMaximumOccupancy())->toBe(6);
});

it('has the correct Field attribute for maximumOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('maximumOccupancy');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(107)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(580)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
