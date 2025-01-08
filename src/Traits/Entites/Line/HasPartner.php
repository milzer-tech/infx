<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasPartner
{
    /**
     * The offer number.
     */
    #[Field(
        position: 6,
        length: 9,
        validationRules: 'required|string|min:1|max:9',
        required: true
    )]
    protected string $partner;

    /**
     * Get the partner of the Line.
     */
    public function getPartner(): string
    {
        return $this->partner;
    }

    /**
     * Set the partner of the Line.
     *
     * @throws ReflectionException
     */
    public function setPartner(string $partner): static
    {
        $this->validate(
            property: 'partner',
            value: $partner,
        );

        $this->partner = $partner;

        return $this;
    }
}
