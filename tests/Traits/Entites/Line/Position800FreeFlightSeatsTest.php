<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the free flight seats', function (): void {
    $line = Line::make()->setFreeFlightSeats(150);

    expect($line->getFreeFlightSeats())->toBe(150);
});

it('has the correct Field attribute for freeFlightSeats property', function (): void {
    $attributes = getAttributesOfLineProperty('freeFlightSeats');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(800)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:999'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(442)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:999'])
        ->validationMessages->toEqualCanonicalizing([]);
});
