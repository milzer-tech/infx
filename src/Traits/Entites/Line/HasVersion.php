<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasVersion
{
    /**
     * The version of NFIX.
     */
    #[Field(
        position: 1,
        length: 2,
        validationRules: 'required|int|min:1|max:2',
        required: true
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
     *
     * @throws ReflectionException
     */
    public function setVersion(int $version): static
    {
        $this->validate(
            property: 'version',
            value: $version,
        );

        $this->version = $version === 1 ? '00' : '01';

        return $this;
    }
}
