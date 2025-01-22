<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasPartner
{
    /**
     * The offer number.
     */
    #[Field(
        position: 6,
        length: 9,
        validationRules: ['string', 'min:1', 'max:9']
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
     */
    public function setPartner(string $partner): static
    {
        $this->partner = $partner;

        return $this;
    }
}
