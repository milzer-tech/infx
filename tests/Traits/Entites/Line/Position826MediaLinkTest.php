<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('sets and gets the media link', function (): void {
    $line = Line::make()->setMediaLink('https://example.com/media.jpg');

    expect($line->getMediaLink())->toBe('https://example.com/media.jpg');
});

it('has the correct Field attribute for mediaLink property', function (): void {
    $attributes = getAttributesOfLineProperty('mediaLink');

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(826)
        ->length->toBe(160)
        ->validationRules->toEqualCanonicalizing(['string', 'min:1', 'max:160'])
        ->validationMessages->toEqualCanonicalizing([]);
});
