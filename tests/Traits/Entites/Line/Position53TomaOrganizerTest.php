<?php

use Milzer\\Infx\\Attributes\\Field;
use Milzer\\Infx\\Entities\\Line;

it('sets and gets the toma organizer', function (): void {
    $line = Line::make()->setTomaOrganizer('ORGA');

    expect($line->getTomaOrganizer())->toBe('ORGA');
});

it('has the correct Field attribute for tomaOrganizer property', function (): void {
    $attributes = getAttributesOfLineProperty('tomaOrganizer');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(53)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['required', 'string', 'min:1', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);
});
