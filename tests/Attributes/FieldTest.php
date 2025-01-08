<?php

use Milzer\Infx\Attributes\Field;

it('initializes a Field attribute correctly', function (): void {
    $validationRules = ['required', 'string', 'max:10'];
    $validationMessages = ['required' => 'This field is required.'];

    $field = new Field(
        position: 1,
        length: 10,
        validationRules: $validationRules,
        validationMessages: $validationMessages,
        required: true
    );

    expect($field->position)->toBe(1)
        ->and($field->length)->toBe(10)
        ->and($field->validationRules)->toBe($validationRules)
        ->and($field->validationMessages)->toBe($validationMessages)
        ->and($field->required)->toBeTrue();
});

it('initializes a Field attribute with string validation rule', function (): void {
    $validationRules = 'required|string';

    $field = new Field(
        position: 2,
        length: 5,
        validationRules: $validationRules
    );

    expect($field->position)->toBe(2)
        ->and($field->length)->toBe(5)
        ->and($field->validationRules)->toBe($validationRules)
        ->and($field->validationMessages)->toBeEmpty()
        ->and($field->required)->toBeFalse();
});

it('retrieves Field attribute using reflection', function (): void {
    $classWithAttribute = new class
    {
        #[Field(position: 1, length: 10, required: true)]
        public string $example;
    };

    $reflectionProperty = new \ReflectionProperty($classWithAttribute, 'example');
    $attributes = $reflectionProperty->getAttributes(Field::class);

    expect($attributes)->toHaveCount(1);

    $fieldInstance = $attributes[0]->newInstance();

    expect($fieldInstance->position)->toBe(1)
        ->and($fieldInstance->length)->toBe(10)
        ->and($fieldInstance->required)->toBeTrue();
});
