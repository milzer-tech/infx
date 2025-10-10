<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the board code', function (): void {
    $line = Line::make()->setBoardCode('HB');

    expect($line->getBoardCode())->toBe('HB');
});

it('has the correct Field attribute for boardCode property', function (): void {
    $attributes = getAttributesOfLineProperty('boardCode');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(268)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);
});
