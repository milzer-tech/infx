<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the toma first requirement', function (): void {
    $line = Line::make()->setTomaFirstRequirement('REQ');

    expect($line->getTomaFirstRequirement())->toBe('REQ');
});

it('has the correct Field attribute for tomaFirstRequirement property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFirstRequirement');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(332)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(73)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);
});
