<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the second child price', function (): void {
    $line = Line::make()->setSecondChildPrice(89.99);

    expect($line->getSecondChildPrice())->toBe(89.99);
});

it('has the correct Field attribute for secondChildPrice property', function (): void {
    $attributes = getAttributesOfLineProperty('secondChildPrice');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(40)
        ->length->toBe(12)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
