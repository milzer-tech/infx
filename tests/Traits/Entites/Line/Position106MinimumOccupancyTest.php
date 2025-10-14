<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the minimum occupancy', function (): void {
    $line = Line::make()->setMinimumOccupancy(2);

    expect($line->getMinimumOccupancy())->toBe(2);
});

it('has the correct Field attribute for minimumOccupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('minimumOccupancy');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(106)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(579)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
