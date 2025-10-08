<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the toma third accommodation', function (): void {
    $line = Line::make()->setTomaThirdAccommodation('Hotel');

    expect($line->getTomaThirdAccommodation())->toBe('Hotel');
});

it('has the correct Field attribute for tomaThirdAccommodation property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaThirdAccommodation');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(66)
        ->length->toBe(6)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:6'])
        ->validationMessages->toEqualCanonicalizing([]);
});
