<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the airline return', function (): void {
    $line = Line::make()->setAirlineReturn('AAA');

    expect($line->getAirlineReturn())->toBe('AAA');
});

it('has the correct Field attribute for airlineReturn property', function (): void {
    $attributes = getAttributesOfLineProperty('airlineReturn');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(69)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
