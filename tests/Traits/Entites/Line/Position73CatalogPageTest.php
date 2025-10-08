<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the catalog page', function (): void {
    $line = Line::make()->setCatalogPage(123);

    expect($line->getCatalogPage())->toBe(123);
});

it('has the correct Field attribute for catalogPage property', function (): void {
    $attributes = getAttributesOfLineProperty('catalogPage');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(73)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['int', 'min:1', 'max:9999'])
        ->validationMessages->toEqualCanonicalizing([]);
});
