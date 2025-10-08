<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the destination location', function (): void {
    $line = Line::make()->setDestinationLocation('Berlin City Center');

    expect($line->getDestinationLocation())->toBe('Berlin City Center');
});

it('has the correct Field attribute for destinationLocation property', function (): void {
    $attributes = getAttributesOfLineProperty('destinationLocation');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(44)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);
});
