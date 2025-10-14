<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the catalog page', function (): void {
    $line = Line::make()->setCatalogPage(123);

    expect($line->getCatalogPage())->toBe(123);
});

it('has the correct Field attribute for catalogPage property', function (): void {
    $attributes = getAttributesOfLineProperty('catalogPage');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(796)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9999'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(438)
        ->length->toBe(4)
        ->validationRules->toEqualCanonicalizing(['int', 'min:0', 'max:9999'])
        ->validationMessages->toEqualCanonicalizing([]);
});
