<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasAdditionalInformation
{
    /**
     * The additional information of the line.
     */
    #[Field(
        position: 71,
        length: 80,
        validationRules: 'required|string|min:1|max:80',
    )]
    protected string $additionalInformation;

    /**
     * Get the additional information of the line.
     */
    public function getAdditionalInformation(): string
    {
        return $this->additionalInformation;
    }

    /**
     * Set the additional information of the line.
     *
     * @throws ReflectionException
     */
    public function setAdditionalInformation(string $text): static
    {
        $this->validate(
            property: 'additionalInformation',
            value: $text,
        );

        $this->additionalInformation = $text;

        return $this;
    }
}
