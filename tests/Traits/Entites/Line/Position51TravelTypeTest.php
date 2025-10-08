<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the travel type', function (): void {
    $line = Line::make()->setTravelType('RT');

    expect($line->getTravelType())->toBe('RT');
});

it('has the correct Field attribute for travelType property', function (): void {
    $attributes = getAttributesOfLineProperty('travelType');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(51)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);
});
