<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the room description', function (): void {
    $line = Line::make()->setRoomDescription('Deluxe sea view room');

    expect($line->getRoomDescription())->toBe('Deluxe sea view room');
});

it('has the correct Field attribute for roomDescription property', function (): void {
    $attributes = getAttributesOfLineProperty('roomDescription');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(243)
        ->length->toBe(25)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:25'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(75)
        ->length->toBe(40)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:40'])
        ->validationMessages->toEqualCanonicalizing([]);
});
