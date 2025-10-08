<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the travel type description', function (): void {
    $line = Line::make()->setTravelTypeDescription('Guided round trip package');

    expect($line->getTravelTypeDescription())->toBe('Guided round trip package');
});

it('has the correct Field attribute for travelTypeDescription property', function (): void {
    $attributes = getAttributesOfLineProperty('travelTypeDescription');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(52)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);
});
