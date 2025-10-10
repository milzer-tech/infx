<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the second child age to', function (): void {
    $line = Line::make()->setSecondChildAgeTo(12);

    expect($line->getSecondChildAgeTo())->toBe(12);
});

it('has the correct Field attribute for secondChildAgeTo property', function (): void {
    $attributes = getAttributesOfLineProperty('secondChildAgeTo');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(167)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['integer', 'min:0', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
