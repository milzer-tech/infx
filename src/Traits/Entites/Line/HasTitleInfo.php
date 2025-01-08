<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTitleInfo
{
    /**
     * The title info of the line.
     */
    #[Field(
        position: 77,
        length: 18,
        validationRules: 'required|string|min:1|max:18',
    )]
    protected string $titleInfo;

    /**
     * Get the title info of the line.
     */
    public function getTitleInfo(): string
    {
        return $this->titleInfo;
    }

    /**
     * Set the title info of the line.
     *
     * @throws ReflectionException
     */
    public function setTitleInfo(string $text): static
    {
        $this->validate(
            property: 'titleInfo',
            value: $text,
        );

        $this->titleInfo = $text;

        return $this;
    }
}
