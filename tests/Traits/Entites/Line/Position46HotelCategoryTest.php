<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the hotel category', function (): void {
    $line = Line::make()->setHotelCategory('5*');

    expect($line->getHotelCategory())->toBe('5*');
});

it('has the correct Field attribute for hotelCategory property', function (): void {
    $attributes = getAttributesOfLineProperty('hotelCategory');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(46)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
