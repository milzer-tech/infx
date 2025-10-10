<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the toma first performance', function (): void {
    $line = Line::make()->setTomaFirstPerformance('Performance');

    expect($line->getTomaFirstPerformance())->toBe('Performance');
});

it('has the correct Field attribute for tomaFirstPerformance property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaFirstPerformance');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(344)
        ->length->toBe(17)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
