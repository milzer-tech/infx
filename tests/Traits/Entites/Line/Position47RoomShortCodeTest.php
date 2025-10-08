<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the room short code', function (): void {
    $line = Line::make()->setRoomShortCode('DX');

    expect($line->getRoomShortCode())->toBe('DX');
});

it('has the correct Field attribute for roomShortCode property', function (): void {
    $attributes = getAttributesOfLineProperty('roomShortCode');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(47)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:2'])
        ->validationMessages->toEqualCanonicalizing([]);
});
