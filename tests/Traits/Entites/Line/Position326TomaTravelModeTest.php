<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the toma travel mode', function (): void {
    $line = Line::make()->setTomaTravelMode('BUS');

    expect($line->getTomaTravelMode())->toBe('BUS');
});

it('has the correct Field attribute for tomaTravelMode property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaTravelMode');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(326)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(568)
        ->length->toBe(1)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:1'])
        ->validationMessages->toEqualCanonicalizing([]);
});
