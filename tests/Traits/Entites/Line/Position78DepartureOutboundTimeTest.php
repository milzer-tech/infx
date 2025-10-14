<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the departure outbound time', function (): void {
    $line = Line::make()->setDepartureOutboundTime('1530');

    expect($line->getDepartureOutboundTime())->toBe('1530');
});

it('has the correct Field attribute for departureOutboundTime property', function (): void {
    $attributes = getAttributesOfLineProperty('departureOutboundTime');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(78)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(211)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/'])
        ->validationMessages->toEqualCanonicalizing([]);
});
