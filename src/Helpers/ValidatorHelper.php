<?php

namespace Milzer\Infx\Helpers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class ValidatorHelper
{
    /**
     * Validate the given data against rules.
     *
     * @param  array<string, string|int|float|null>  $data
     * @param  array<string, string|array<string>>  $rules
     * @param  array<string, array<string, string>>  $messages
     *
     * @throws ValidationException
     */
    public static function validate(array $data, array $rules, array $messages = []): Validator
    {
        $translationPath = self::findTranslationPath();

        $fileLoader = new FileLoader(new Filesystem, $translationPath);

        $translator = new Translator($fileLoader, 'en');

        $validator = new Factory($translator);

        return $validator->make($data, $rules, $messages);
    }


    /**
     * Find the correct translation path.
     */
    private static function findTranslationPath(): string
    {
        $vendorPath = dirname(__DIR__, 3) . '/vendor/illuminate/translation/lang';

        return is_dir($vendorPath)
            ? $vendorPath
            : __DIR__ . '/../../vendor/illuminate/translation/lang';
    }
}
