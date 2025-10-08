<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the first long text', function (): void {
    $line = Line::make()->setFirstLongText('Detailed information about the offer');

    expect($line->getFirstLongText())->toBe('Detailed information about the offer');
});

it('has the correct Field attribute for firstLongText property', function (): void {
    $attributes = getAttributesOfLineProperty('firstLongText');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(68)
        ->length->toBe(80)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:80'])
        ->validationMessages->toEqualCanonicalizing([]);
});
