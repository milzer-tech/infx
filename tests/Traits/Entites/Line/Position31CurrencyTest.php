<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the currency', function (): void {
    $line = Line::make()->setCurrency('EUR');

    expect($line->getCurrency())->toBe('EUR');
});

it('has the correct Field attribute for currency property', function (): void {
    $attributes = getAttributesOfLineProperty('currency');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(31)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['required', 'string', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
