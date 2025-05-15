<?php

namespace Milzer\Infx\Traits\Entites\Line;

use BackedEnum;
use Carbon\Carbon;
use Milzer\Infx\Attributes\Field;
use ReflectionException;
use ReflectionProperty;

trait LineFormatter
{
    /**
     * Returns string representation of the object.
     *
     * @throws ReflectionException
     */
    public function toString(): string
    {
        $properties = [];

        $reflectionProperties = $this->getReflectionProperties();

        $this->validateRequiredProperty($reflectionProperties);

        foreach ($reflectionProperties as $property => $reflectionProperty) {
            $field = $this->getFieldInstance((string) $property);

            $properties[$field->position] = [
                'property' => $property,
                'field' => $field,
                'value' => $reflectionProperty->isInitialized($this)
                    ? $this->{$property}
                    : null,
            ];
        }

        ksort($properties);

        return $this->createResult($properties);
    }

    /**
     * Create the result string.
     *
     * @param  array<int, array{property: string, field: Field, value: mixed}>  $properties
     */
    private function createResult(array $properties): string
    {
        $result = '';

        foreach ($properties as $property) {
            if ($property['value'] instanceof Carbon) {
                $value = $property['value']->format('d.m.Y');
            } elseif ($property['value'] instanceof BackedEnum) {
                $value = $property['value']->value;
            } else {
                $value = strval($property['value']);
            }

            $result .= str_pad(
                string: $value,
                length: $property['field']->length,
            );
        }

        return $result;
    }

    /**
     * Get the Field instance for the property.
     *
     * @throws ReflectionException
     */
    private function getFieldInstance(string $name): Field
    {
        $reflectionProperty = new ReflectionProperty($this, $name);

        return $reflectionProperty->getAttributes(Field::class)[0]->newInstance();
    }

    /**
     * Get all ReflectionProperty instances for the class properties.
     *
     * @return array<string, ReflectionProperty>
     */
    private function getReflectionProperties(): array
    {
        $reflectionClass = new \ReflectionClass($this);
        $properties = $reflectionClass->getProperties(ReflectionProperty::IS_PROTECTED);
        $propertyArray = [];

        foreach ($properties as $property) {
            $propertyArray[$property->getName()] = $property;
        }

        return $propertyArray;
    }
}
