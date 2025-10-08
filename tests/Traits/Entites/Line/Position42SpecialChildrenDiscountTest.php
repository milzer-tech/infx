<?php

use Milzer\Infx\Attributes\Field;

it('has the correct Field attribute for specialChildrenDiscount property', function (): void {
    $attributes = getAttributesOfLineProperty('specialChildrenDiscount');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(42)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
