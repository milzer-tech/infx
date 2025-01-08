<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasSecondLeer
{
    /**
     * The second leer.
     */
    #[Field(
        position: 43,
        length: 5,
    )]
    protected string $secondleer;
}
