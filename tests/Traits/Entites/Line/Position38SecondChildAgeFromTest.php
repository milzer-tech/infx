<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the second child age from', function (): void {
    $line = Line::make()->setSecondChildAgeFrom(5);

    expect($line->getSecondChildAgeFrom())->toBe(5);
});

it('has the correct Field attribute for secondChildAgeFrom property', function (): void {
    $attributes = getAttributesOfLineProperty('secondChildAgeFrom');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(38)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['integer', 'min:0', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
