<?php

namespace Milzer\Infx\Helpers;

use Illuminate\Validation\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Validator;

class ValidatorHelper
{
    /**
     * Validate the given data against rules.
     *
     * @param array<string, string|int|float|null> $data
     * @param array<string, string|array<string>> $rules
     * @param array<string, array<string, string>>  $messages
     *
     * @throws ValidationException
     */
    public static function validate(array $data, array $rules, array $messages): Validator
    {
        $translator = new Translator(new ArrayLoader(), 'en');

        $validator = new Factory($translator);

        return $validator->make($data, $rules, $messages);
    }
}
