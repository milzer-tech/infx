<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the room description', function (): void {
    $line = Line::make()->setRoomDescription('Deluxe sea view room');

    expect($line->getRoomDescription())->toBe('Deluxe sea view room');
});

it('has the correct Field attribute for roomDescription property', function (): void {
    $attributes = getAttributesOfLineProperty('roomDescription');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(48)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);
});
