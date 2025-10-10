<?php

use Carbon\Carbon;
use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the start date', function (): void {
    $line = Line::make()->setStartDate(Carbon::create(2024, 12, 31));

    expect($line->getStartDate())->toBeInstanceOf(Carbon::class)
        ->and($line->getStartDate()->toDateString())->toBe('2024-12-31');
});

it('has the correct Field attribute for start date property', function (): void {
    $attributes = getAttributesOfLineProperty('startDate');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(34)
        ->length->toBe(10)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
