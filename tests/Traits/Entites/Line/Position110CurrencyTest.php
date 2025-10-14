<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the currency', function (): void {
    $line = Line::make()->setCurrency('EUR');

    expect($line->getCurrency())->toBe('EUR');
});

it('has the correct Field attribute for currency property', function (): void {
    $attributes = getAttributesOfLineProperty('currency');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(110)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(583)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
