<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma fourth requirement', function (): void {
    $line = Line::make()->setTomaFourthRequirement('REQ');

    expect($line->getTomaFourthRequirement())->toBe('REQ');
});

it('has the correct Field attribute for tomaFourthRequirement property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFourthRequirement');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(59)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
