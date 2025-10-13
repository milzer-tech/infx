<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the occupancy', function (): void {
    $line = Line::make()->setOccupancy(4);

    expect($line->getOccupancy())->toBe(4);
});

it('has the correct Field attribute for occupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('occupancy');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(104)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(67)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
