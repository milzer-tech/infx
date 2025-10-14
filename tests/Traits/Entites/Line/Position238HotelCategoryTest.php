<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the hotel category', function (): void {
    $line = Line::make()->setHotelCategory('5*');

    expect($line->getHotelCategory())->toBe('5*');
});

it('has the correct Field attribute for hotelCategory property', function (): void {
    $attributes = getAttributesOfLineProperty('hotelCategory');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(238)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(395)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

});
