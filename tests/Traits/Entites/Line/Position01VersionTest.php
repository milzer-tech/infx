<?php

use Milzer\Infx\Entities\Line; // Assuming `Line` uses `HasVersion` trait
use Milzer\Infx\Enums\InfxVersion;

it('gets the default version', function (): void {
    $line = Line::make()->setVersion(InfxVersion::Second);

    expect($line->getVersion())
        ->toBe(InfxVersion::Second);
});

it('sets the version to First', function (): void {
    $line = Line::make()->setVersion(InfxVersion::First);

    expect($line->getVersion())->toBe(InfxVersion::First);
});

it('has the correct Field attribute for version property', function (): void {
    $attributes = getAttributesOfLineProperty('version');

    expect($attributes)->toHaveCount(2);

    $fieldAttribute = $attributes[0]->newInstance();
    $phoenix = $attributes[1]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(1)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);

    expect($phoenix)
        ->position->toBe(1)
        ->length->toBe(2)
        ->validationRules->toEqualCanonicalizing([])
        ->validationMessages->toEqualCanonicalizing([]);
});
