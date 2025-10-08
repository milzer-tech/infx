<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma fourth performance', function (): void {
    $line = Line::make()->setTomaFourthPerformance('Performance');

    expect($line->getTomaFourthPerformance())->toBe('Performance');
});

it('has the correct Field attribute for tomaFourthPerformance property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFourthPerformance');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(63)
        ->length->toBe(17)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
