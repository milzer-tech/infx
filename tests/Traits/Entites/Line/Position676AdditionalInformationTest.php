<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the additional information', function (): void {
    $line = Line::make()->setAdditionalInformation('Late checkout available upon request');

    expect($line->getAdditionalInformation())->toBe('Late checkout available upon request');
});

it('has the correct Field attribute for additionalInformation property', function (): void {
    $attributes = getAttributesOfLineProperty('additionalInformation');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(676)
        ->length->toBe(80)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:80'])
        ->validationMessages->toEqualCanonicalizing([]);
});
