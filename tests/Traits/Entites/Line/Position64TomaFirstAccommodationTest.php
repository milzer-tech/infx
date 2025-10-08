<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the toma first accommodation', function (): void {
    $line = Line::make()->setTomaFirstAccommodation('Hotel');

    expect($line->getTomaFirstAccommodation())->toBe('Hotel');
});

it('has the correct Field attribute for tomaFirstAccommodation property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFirstAccommodation');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(64)
        ->length->toBe(6)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:6'])
        ->validationMessages->toEqualCanonicalizing([]);
});
