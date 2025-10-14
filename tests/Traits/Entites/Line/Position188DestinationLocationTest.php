<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the destination location', function (): void {
    $line = Line::make()->setDestinationLocation('Berlin City Center');

    expect($line->getDestinationLocation())->toBe('Berlin City Center');
});

it('has the correct Field attribute for destinationLocation property', function (): void {
    $attributes = getAttributesOfLineProperty('destinationLocation');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(188)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(135)
        ->length->toBe(20)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:20'])
        ->validationMessages->toEqualCanonicalizing([]);
});
