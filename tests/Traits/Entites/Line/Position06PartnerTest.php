<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the partner', function (): void {
    $line = Line::make()->setPartner('TO123');

    expect($line->getPartner())->toBe('TO123');
});

it('has the correct Field attribute for partner property', function (): void {
    $attributes = getAttributesOfLineProperty('partner');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(6)
        ->length->toBe(9)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);
});
