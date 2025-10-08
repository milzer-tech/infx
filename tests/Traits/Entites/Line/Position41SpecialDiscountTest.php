<?php

use Milzer\Infx\Attributes\Field;

it('has the correct Field attribute for specialDiscount property', function (): void {
    $attributes = getAttributesOfLineProperty('specialDiscount');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(41)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
