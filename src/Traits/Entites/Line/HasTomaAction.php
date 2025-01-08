<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaAction
{
    /**
     * The TOMA action of the line.
     */
    #[Field(
        position: 55,
        length: 2,
        validationRules: 'required|string|min:1|max:2',
        required: true,
    )]
    protected string $tomaAction;

    /**
     * Get the TOMA action of the line.
     */
    public function getTomaAction(): string
    {
        return $this->tomaAction;
    }

    /**
     * Set the TOMA action of the line.
     */
    public function setTomaAction(string $value): static
    {
        $this->validate(
            property: 'tomaAction',
            value: $value,
        );

        $this->tomaAction = $value;

        return $this;
    }
}
