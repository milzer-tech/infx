<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Enums\InfxVersion;

trait HasVersion
{
    /**
     * The version of NFIX.
     */
    #[Field(
        position: 1,
        length: 2,
    )]
    protected InfxVersion $version = InfxVersion::Second;

    /**
     * Get the version of the Line.
     */
    public function getVersion(): InfxVersion
    {
        return $this->version;
    }

    /**
     * Set the version of the Line.
     */
    public function setVersion(InfxVersion $version): static
    {
        $this->version = $version;

        return $this;
    }
}
