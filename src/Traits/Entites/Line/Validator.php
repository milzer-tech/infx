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
     * Validate the properties of the Line.
     *
     * @throws ReflectionException
     */
    private function validate(string $property, string|int|null|Carbon $value): void
    {
        $field = $this->getFieldInstance($property);

        $validator = ValidatorHelper::validate(
            data: [$property => $value instanceof Carbon ? $value->format('d.m.Y') : $value],
            rules: [$property => $field->validationRules],
            messages: [$property => $field->validationMessages]
        );

        if ($validator->fails()) {
            throw new InvalidArgumentException(
                message: implode(
                    separator: ', ',
                    array: $validator->errors()->all()
                )
            );
        }
    }

    /**
     * Validate the required property.
     *
     * @throws ReflectionException
     */
    private function validateRequiredProperty(ReflectionProperty $reflectionProperty): void
    {
        if (
            !$reflectionProperty->isInitialized($this)
            && $this->getFieldInstance($reflectionProperty->name)->required
        ) {
            throw new InvalidArgumentException(
                message: "The property named $reflectionProperty->name is required."
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
