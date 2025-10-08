<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma second requirement', function (): void {
    $line = Line::make()->setTomaSecondRequirement('REQ');

    expect($line->getTomaSecondRequirement())->toBe('REQ');
});

it('has the correct Field attribute for tomaSecondRequirement property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaSecondRequirement');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(57)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
