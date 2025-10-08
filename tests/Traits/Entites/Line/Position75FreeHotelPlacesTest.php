<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the free hotel places', function (): void {
    $line = Line::make()->setFreeHotelPlaces(80);

    expect($line->getFreeHotelPlaces())->toBe(80);
});

it('has the correct Field attribute for freeHotelPlaces property', function (): void {
    $attributes = getAttributesOfLineProperty('freeHotelPlaces');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(75)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:999'])
        ->validationMessages->toEqualCanonicalizing([]);
});
