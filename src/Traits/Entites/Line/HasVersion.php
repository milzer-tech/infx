<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasVersion
{
    /**
     * The version of NFIX.
     */
    #[Field(
        position: 1,
        length: 2,
        validationRules: ['int', 'min:1', 'max:2']
    )]
    protected string $version = '01';

    /**
     * Get the version of the Line.
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Set the version of the Line.
     */
    public function setVersion(int $version): static
    {
        $this->version = $version === 2 ? '01' : '00';

        return $this;
    }
}
