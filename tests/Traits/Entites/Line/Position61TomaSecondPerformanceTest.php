<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma second performance', function (): void {
    $line = Line::make()->setTomaSecondPerformance('Performance');

    expect($line->getTomaSecondPerformance())->toBe('Performance');
});

it('has the correct Field attribute for tomaSecondPerformance property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaSecondPerformance');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(61)
        ->length->toBe(17)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
