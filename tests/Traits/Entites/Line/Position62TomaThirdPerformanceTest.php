<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the toma third performance', function (): void {
    $line = Line::make()->setTomaThirdPerformance('Performance');

    expect($line->getTomaThirdPerformance())->toBe('Performance');
});

it('has the correct Field attribute for tomaThirdPerformance property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaThirdPerformance');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(378)
        ->length->toBe(17)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:17'])
        ->validationMessages->toEqualCanonicalizing([]);
});
