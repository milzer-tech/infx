<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the outbound flight number', function (): void {
    $line = Line::make()->setOutboundFlightNumber('AB12');

    expect($line->getOutboundFlightNumber())->toBe('AB12');
});

it('has the correct Field attribute for outboundFlightNumber property', function (): void {
    $attributes = getAttributesOfLineProperty('outboundFlightNumber');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(96)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(203)
        ->length->toBe(8)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:8'])
        ->validationMessages->toEqualCanonicalizing([]);
});
