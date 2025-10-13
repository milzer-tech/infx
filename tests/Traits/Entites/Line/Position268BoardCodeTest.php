<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the board code', function (): void {
    $line = Line::make()->setBoardCode('HB');

    expect($line->getBoardCode())->toBe('HB');
});

it('has the correct Field attribute for boardCode property', function (): void {
    $attributes = getAttributesOfLineProperty('boardCode');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(268)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(64)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
