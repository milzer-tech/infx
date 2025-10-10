<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the priority', function (): void {
    $line = Line::make()->setPriority('A1');

    expect($line->getPriority())->toBe('A1');
});

it('has the correct Field attribute for priority property', function (): void {
    $attributes = getAttributesOfLineProperty('priority');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(806)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);
});
