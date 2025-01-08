<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasEquipment
{
    /**
     * The equipment of the line.
     */
    #[Field(
        position: 70,
        length: 80,
        validationRules: 'required|string|min:1|max:80',
    )]
    protected string $equipment;

    /**
     * Get the equipment of the line.
     */
    public function getEquipment(): string
    {
        return $this->equipment;
    }

    /**
     * Set the equipment of the line.
     *
     * @throws ReflectionException
     */
    public function setEquipment(string $text): static
    {
        $this->validate(
            property: 'equipment',
            value: $text,
        );

        $this->equipment = $text;

        return $this;
    }
}
