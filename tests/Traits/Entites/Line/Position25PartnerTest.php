<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the partner', function (): void {
    $line = Line::make()->setPartner('TO123');

    expect($line->getPartner())->toBe('TO123');
});

it('has the correct Field attribute for partner property', function (): void {
    $attributes = getAttributesOfLineProperty('partner');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(25)
        ->length->toBe(9)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:9'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(32)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
