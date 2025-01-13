<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Carbon\Carbon;
use InvalidArgumentException;
use Milzer\Infx\Helpers\ValidatorHelper;
use ReflectionException;
use ReflectionProperty;

trait Validator
{
    /**
     * Validate the required property.
     *
     * @param  array<int, ReflectionProperty>  $reflectionProperties
     *
     * @throws ReflectionException
     */
    private function validateRequiredProperty(array $reflectionProperties): void
    {
        $data = [];
        $rules = [];
        $messages = [];

        foreach ($reflectionProperties as $property) {
            if ($property->isInitialized(object: $this)) {
                $value = $this->{$property->name};

                $data[$property->name] = $value instanceof Carbon ? $value->format('d.m.Y') : $value;
            }

            $rules[$property->name] = $this->getFieldInstance(name: $property->name)->validationRules;
            $messages[$property->name] = $this->getFieldInstance(name: $property->name)->validationMessages;
        }

        $validator = ValidatorHelper::validate(data: $data, rules: $rules, messages: $messages);

        if ($validator->fails()) {
            throw new InvalidArgumentException(
                message: PHP_EOL.'Validation Errors: '.PHP_EOL.implode(
                    separator: PHP_EOL,
                    array: $validator->errors()->all()
                )
            );
        }
    }

    /**
     * Set the start date.
     */
    private function correctTime(string $time): string
    {
        return str_replace(search: ':', replace: '', subject: $time);
    }
}
