<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the infant price', function (): void {
    $line = Line::make()->setInfantPrice(123.45);

    expect($line->getInfantPrice())->toBe(123.45);
});

it('has the correct Field attribute for infantPrice property', function (): void {
    $attributes = getAttributesOfLineProperty('infantPrice');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(34)
        ->length->toBe(12)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
