<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the title info', function (): void {
    $line = Line::make()->setTitleInfo('Summer sale offer');

    expect($line->getTitleInfo())->toBe('Summer sale offer');
});

it('has the correct Field attribute for titleInfo property', function (): void {
    $attributes = getAttributesOfLineProperty('titleInfo');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(77)
        ->length->toBe(18)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:18'])
        ->validationMessages->toEqualCanonicalizing([]);
});
