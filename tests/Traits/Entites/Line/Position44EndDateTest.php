<?php

use Carbon\Carbon;
use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the end date', function (): void {
    $line = Line::make()->setEndDate(Carbon::create(2024, 11, 06));

    expect($line->getEndDate())->toBeInstanceOf(Carbon::class)
        ->and($line->getEndDate()->toDateString())->toBe('2024-11-06');
});

it('has the correct Field attribute for end date property', function (): void {
    $attributes = getAttributesOfLineProperty('endDate');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(44)
        ->length->toBe(10)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
