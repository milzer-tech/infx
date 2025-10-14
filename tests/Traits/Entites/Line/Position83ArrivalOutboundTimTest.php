<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the arrival outbound time', function (): void {
    $line = Line::make()->setArrivalOutboundTime('1530');

    expect($line->getArrivalOutboundTime())->toBe('1530');
});

it('has the correct Field attribute for arrivalOutboundTime property', function (): void {
    $attributes = getAttributesOfLineProperty('arrivalOutboundTime');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(83)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(215)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);
});
