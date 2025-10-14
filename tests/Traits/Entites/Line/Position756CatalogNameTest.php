<?php

use Milzer\Infx\Entities\Line;

it('sets and gets the catalog name', function (): void {
    $line = Line::make()->setCatalogName('Premium Catalog');

    expect($line->getCatalogName())->toBe('Premium Catalog');
});

it('has the correct Field attribute for catalogName property', function (): void {
    $attributes = getAttributesOfLineProperty('catalogName');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(756)
        ->length->toBe(40)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:40'])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(398)
        ->length->toBe(40)
        ->validationRules->toEqualCanonicalizing(['string', 'min:0', 'max:40'])
        ->validationMessages->toEqualCanonicalizing([]);
});
