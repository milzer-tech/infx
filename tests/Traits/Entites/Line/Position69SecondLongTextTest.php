<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the second long text', function (): void {
    $line = Line::make()->setSecondLongText('More insights about the travel package');

    expect($line->getSecondLongText())->toBe('More insights about the travel package');
});

it('has the correct Field attribute for secondLongText property', function (): void {
    $attributes = getAttributesOfLineProperty('secondLongText');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(69)
        ->length->toBe(80)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:80'])
        ->validationMessages->toEqualCanonicalizing([]);
});
