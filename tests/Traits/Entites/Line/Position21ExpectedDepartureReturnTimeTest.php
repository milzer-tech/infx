<?php

use Milzer\Infx\Attributes\Field;

it('has the correct Field attribute for expectedDepartureReturnTime property', function (): void {
    $attributes = getAttributesOfLineProperty('expectedDepartureReturnTime');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(21)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:1'])
        ->validationMessages->toEqualCanonicalizing([]);
});
