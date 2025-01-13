<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTitleInfo
{
    /**
     * The title info of the line.
     */
    #[Field(
        position: 77,
        length: 18,
        validationRules: ['string', 'min:1', 'max:18']
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
     */
    public function setTitleInfo(string $text): static
    {
        $this->titleInfo = $text;

        return $this;
    }
}
