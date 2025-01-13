<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaOrganizer
{
    /**
     * The TOMA organizer of the line.
     */
    #[Field(
        position: 53,
        length: 4,
        validationRules: ['required', 'string', 'min:1', 'max:4']
    )]
    protected string $tomaOrganizer;

    /**
     * Get the TOMA organizer of the line.
     */
    public function getTomaOrganizer(): string
    {
        return $this->tomaOrganizer;
    }

    /**
     * Set the TOMA organizer of the line.
     */
    public function setTomaOrganizer(string $value): static
    {
        $this->tomaOrganizer = $value;

        return $this;
    }
}
