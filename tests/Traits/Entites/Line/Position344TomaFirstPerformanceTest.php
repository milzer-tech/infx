<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the toma first performance', function (): void {
    $line = Line::make()->setTomaFirstPerformance('Performance');

    expect($line->getTomaFirstPerformance())->toBe('Performance');
});

it('has the correct Field attribute for tomaFirstPerformance property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFirstPerformance');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(344)
        ->length->toBe(17)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(44)
        ->length->toBe(17)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
