<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the first child age from', function (): void {
    $line = Line::make()->setFirstChildAgeFrom(5);

    expect($line->getFirstChildAgeFrom())->toBe(5);
});

it('has the correct Field attribute for firstChildAgeFrom property', function (): void {
    $attributes = getAttributesOfLineProperty('firstChildAgeFrom');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(35)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['integer', 'min:0', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
