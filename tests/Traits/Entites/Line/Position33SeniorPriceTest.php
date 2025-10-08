<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the senior price', function (): void {
    $line = Line::make()->setSeniorPrice(123.45);

    expect($line->getSeniorPrice())->toBe(123.45);
});

it('has the correct Field attribute for seniorPrice property', function (): void {
    $attributes = getAttributesOfLineProperty('seniorPrice');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(33)
        ->length->toBe(12)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
