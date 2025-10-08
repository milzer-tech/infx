<?php

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Entities\Line;

/**
 * @return ReflectionAttribute[]
 */
function getAttributesOfLineProperty(string $name): array
{
    $reflectionClass = new ReflectionClass(Line::class);

    $property = $reflectionClass->getProperty($name);

    return $property->getAttributes(Field::class);
}
