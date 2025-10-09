<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the toma action', function (): void {
    $line = Line::make()->setTomaAction('TA');

    expect($line->getTomaAction())->toBe('TA');
});

it('has the correct Field attribute for tomaAction property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaAction');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(55)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);
});
