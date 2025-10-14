<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the price', function (): void {
    $line = Line::make()->setPrice('123.45');

    expect($line->getPrice())->toBe('123.45');
});

it('has the correct Field attribute for price property', function (): void {
    $attributes = getAttributesOfLineProperty('price');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(113)
        ->length->toBe(12)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(68)
        ->length->toBe(5)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
