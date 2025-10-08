<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the toma first requirement', function (): void {
    $line = Line::make()->setTomaFirstRequirement('REQ');

    expect($line->getTomaFirstRequirement())->toBe('REQ');
});

it('has the correct Field attribute for tomaFirstRequirement property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFirstRequirement');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(56)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
