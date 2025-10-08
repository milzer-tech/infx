<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the first child price', function (): void {
    $line = Line::make()->setFirstChildPrice(89.99);

    expect($line->getFirstChildPrice())->toBe(89.99);
});

it('has the correct Field attribute for firstChildPrice property', function (): void {
    $attributes = getAttributesOfLineProperty('firstChildPrice');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(37)
        ->length->toBe(12)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
