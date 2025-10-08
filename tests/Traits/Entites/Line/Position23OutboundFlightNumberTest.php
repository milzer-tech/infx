<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the outbound flight number', function (): void {
    $line = Line::make()->setOutboundFlightNumber('AB12');

    expect($line->getOutboundFlightNumber())->toBe('AB12');
});

it('has the correct Field attribute for outboundFlightNumber property', function (): void {
    $attributes = getAttributesOfLineProperty('outboundFlightNumber');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(23)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:4'])
        ->validationMessages->toEqualCanonicalizing([]);
});
