<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the equipment', function (): void {
    $line = Line::make()->setEquipment('Heated outdoor pool and spa');

    expect($line->getEquipment())->toBe('Heated outdoor pool and spa');
});

it('has the correct Field attribute for equipment property', function (): void {
    $attributes = getAttributesOfLineProperty('equipment');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(596)
        ->length->toBe(80)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:80'])
        ->validationMessages->toEqualCanonicalizing([]);
});
