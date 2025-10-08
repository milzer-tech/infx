<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the airline outbound', function (): void {
    $line = Line::make()->setAirlineOutbound('AAA');

    expect($line->getAirlineOutbound())->toBe('AAA');
});

it('has the correct Field attribute for airlineOutbound property', function (): void {
    $attributes = getAttributesOfLineProperty('airlineOutbound');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(13)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
