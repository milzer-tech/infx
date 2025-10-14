<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the travel type', function (): void {
    $line = Line::make()->setTravelType('RT');

    expect($line->getTravelType())->toBe('RT');
});

it('has the correct Field attribute for travelType property', function (): void {
    $attributes = getAttributesOfLineProperty('travelType');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(295)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(570)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:1'])
        ->validationMessages->toEqualCanonicalizing([]);
});
