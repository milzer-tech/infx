<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the catalog name', function (): void {
    $line = Line::make()->setCatalogName('Premium Catalog');

    expect($line->getCatalogName())->toBe('Premium Catalog');
});

it('has the correct Field attribute for catalogName property', function (): void {
    $attributes = getAttributesOfLineProperty('catalogName');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(756)
        ->length->toBe(40)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:40'])
        ->validationMessages->toEqualCanonicalizing([]);
});
