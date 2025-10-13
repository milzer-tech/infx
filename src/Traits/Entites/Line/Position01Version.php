<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;
use Milzer\Infx\Enums\InfxVersion;

trait Position01Version
{
    /**
     * The version of NFIX.
     */
    #[Field(position: 1, length: 2, )]
    #[Phoenix(position: 1, length: 2)]
    protected InfxVersion $version;

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
