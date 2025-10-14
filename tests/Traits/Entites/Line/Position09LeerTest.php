<?php

it('has the correct Field attribute for leer property', function (): void {
    $attributes = getAttributesOfLineProperty('leer');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(9)
        ->length->toBe(6)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($fieldAttribute)
        ->position->toBe(19)
        ->length->toBe(5)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
