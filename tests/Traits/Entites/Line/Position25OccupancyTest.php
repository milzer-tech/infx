<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the occupancy', function (): void {
    $line = Line::make()->setOccupancy(4);

    expect($line->getOccupancy())->toBe(4);
});

it('has the correct Field attribute for occupancy property', function (): void {
    $attributes = getAttributesOfLineProperty('occupancy');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(25)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
