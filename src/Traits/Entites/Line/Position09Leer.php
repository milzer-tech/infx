<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position09Leer
{
    /**
     * The format of the sentence.
     */
    #[Field(position: 9, length: 6)]
    #[Phoenix(position: 19, length: 5)]
    protected string $leer;
}
