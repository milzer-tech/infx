<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the outbound flight identification', function (): void {
    $line = Line::make()->setOutboundFlightIdentification('ABC');

    expect($line->getOutboundFlightIdentification())->toBe('ABC');
});

it('has the correct Field attribute for outboundFlightIdentification property', function (): void {
    $attributes = getAttributesOfLineProperty('outboundFlightIdentification');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(15)
        ->length->toBe(3)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:3'])
        ->validationMessages->toEqualCanonicalizing([]);
});
