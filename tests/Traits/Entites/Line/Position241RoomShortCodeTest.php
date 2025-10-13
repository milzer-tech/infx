<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the room short code', function (): void {
    $line = Line::make()->setRoomShortCode('DX');

    expect($line->getRoomShortCode())->toBe('DX');
});

it('has the correct Field attribute for roomShortCode property', function (): void {
    $attributes = getAttributesOfLineProperty('roomShortCode');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(241)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(61)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
