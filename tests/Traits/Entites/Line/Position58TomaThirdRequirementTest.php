<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma third requirement', function (): void {
    $line = Line::make()->setTomaThirdRequirement('REQ');

    expect($line->getTomaThirdRequirement())->toBe('REQ');
});

it('has the correct Field attribute for tomaThirdRequirement property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaThirdRequirement');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(58)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
