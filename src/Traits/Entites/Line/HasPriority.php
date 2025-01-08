<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasPriority
{
    /**
     * The priority of the line.
     */
    #[Field(
        position: 76,
        length: 2,
        validationRules: 'required|string|min:1|max:2',
    )]
    protected string $priority;

    /**
     * Get the priority of the line.
     */
    public function getPriority(): string
    {
        return $this->priority;
    }

    /**
     * Set the priority of the line.
     *
     * @throws ReflectionException
     */
    public function setPriority(string $value): static
    {
        $this->validate(
            property: 'priority',
            value: $value,
        );

        $this->priority = $value;

        return $this;
    }
}
