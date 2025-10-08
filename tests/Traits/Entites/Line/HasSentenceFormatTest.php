<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

it('gets the default sentence format', function (): void {
    expect(Line::make()->getSentenceFormat())
        ->toBe('V');
});

it('sets the sentence format', function (): void {
    $line = Line::make()->setSentenceFormat('A');

    expect($line->getSentenceFormat())->toBe('A');
});

it('has the correct Field attribute for sentenceFormat property', function (): void {
    $reflectionClass = new ReflectionClass(Line::class);
    $property = $reflectionClass->getProperty('sentenceFormat');
    $attributes = $property->getAttributes(Field::class);

    expect($attributes)
        ->toHaveCount(1)
        ->and($attributes[0]->getName())->toBe(Field::class);

    $fieldAttribute = $attributes[0]->newInstance();

    expect($fieldAttribute)
        ->position->toBe(2)
        ->length->toBe(1);
});
