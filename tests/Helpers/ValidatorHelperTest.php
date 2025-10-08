<?php

use Illuminate\Validation\Validator as IlluminateValidator;
use Milzer\Infx\Helpers\ValidatorHelper;

it('returns a Validator and passes with valid data', function (): void {
    $data = [
        'name' => 'John',
        'age' => 30,
    ];

    $rules = [
        'name' => ['required', 'string', 'min:2'],
        'age' => ['required', 'integer', 'min:18'],
    ];

    $validator = ValidatorHelper::validate($data, $rules);

    expect($validator)
        ->toBeInstanceOf(IlluminateValidator::class)
        ->and($validator->passes())->toBeTrue();
});

it('fails with default english messages when data is invalid', function (): void {
    $data = [
        'name' => null,
    ];

    $rules = [
        'name' => ['required'],
    ];

    $validator = ValidatorHelper::validate($data, $rules);

    expect($validator->fails())->toBeTrue();

    $message = $validator->errors()->first('name');

    expect($message)->toBe('The name field is required.');
});

it('applies custom messages per field and rule', function (): void {
    $data = [
        'name' => '',
    ];

    $rules = [
        'name' => ['required', 'min:2'],
    ];

    $messages = [
        'name' => [
            'required' => 'Name is required.',
            'min' => 'Name must be at least 2 characters.',
        ],
    ];

    $validator = ValidatorHelper::validate($data, $rules, $messages);

    expect($validator->fails())->toBeTrue();

    $errors = $validator->errors()->get('name');

    expect($errors)
        ->toContain('Name is required.');
});
