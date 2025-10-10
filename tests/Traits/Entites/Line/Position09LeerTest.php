<?php

use Milzer\Infx\Attributes\Field;

it('has the correct Field attribute for leer property', function (): void {
    $attributes = getAttributesOfLineProperty('leer');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(9)
        ->length->toBe(6)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
