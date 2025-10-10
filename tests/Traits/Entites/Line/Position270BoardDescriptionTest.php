<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the board description', function (): void {
    $line = Line::make()->setBoardDescription('Half board with drinks');

    expect($line->getBoardDescription())->toBe('Half board with drinks');
});

it('has the correct Field attribute for boardDescription property', function (): void {
    $attributes = getAttributesOfLineProperty('boardDescription');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(270)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);
});
