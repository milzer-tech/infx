<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the tour operator code', function (): void {
    $line = Line::make()->setTourOperatorCode('TO123');

    expect($line->getTourOperatorCode())->toBe('TO123');
});

it('has the correct Field attribute for tourOperatorCode property', function (): void {
    $attributes = getAttributesOfLineProperty('tourOperatorCode');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(4)
        ->length->toBe(5)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:5'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(3)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);
});
