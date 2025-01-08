<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasSecondLongText
{
    /**
     * The second-long text of the line.
     */
    #[Field(
        position: 69,
        length: 80,
        validationRules: 'required|string|min:1|max:80',
    )]
    protected string $secondLongText;

    /**
     * Get the second-long text of the line.
     */
    public function getSecondLongText(): string
    {
        return $this->secondLongText;
    }

    /**
     * Set the second-long text of the line.
     *
     * @throws ReflectionException
     */
    public function setSecondLongText(string $text): static
    {
        $this->validate(
            property: 'secondLongText',
            value: $text,
        );

        $this->secondLongText = $text;

        return $this;
    }
}
