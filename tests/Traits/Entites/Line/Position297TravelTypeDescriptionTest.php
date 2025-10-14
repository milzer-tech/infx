<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the travel type description', function (): void {
    $line = Line::make()->setTravelTypeDescription('Guided round trip package');

    expect($line->getTravelTypeDescription())->toBe('Guided round trip package');
});

it('has the correct Field attribute for travelTypeDescription property', function (): void {
    $attributes = getAttributesOfLineProperty('travelTypeDescription');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(297)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(155)
        ->length->toBe(40)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:40'])
        ->validationMessages->toEqualCanonicalizing([]);
});
