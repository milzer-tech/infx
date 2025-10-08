<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the hotel name', function (): void {
    $line = Line::make()->setHotelName('Grand Plaza');

    expect($line->getHotelName())->toBe('Grand Plaza');
});

it('has the correct Field attribute for hotelName property', function (): void {
    $attributes = getAttributesOfLineProperty('hotelName');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(45)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);
});
