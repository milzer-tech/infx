<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the hotel name', function (): void {
    $line = Line::make()->setHotelName('Grand Plaza');

    expect($line->getHotelName())->toBe('Grand Plaza');
});

it('has the correct Field attribute for hotelName property', function (): void {
    $attributes = getAttributesOfLineProperty('hotelName');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(213)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(115)
        ->length->toBe(20)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:20'])
        ->validationMessages->toEqualCanonicalizing([]);
});
