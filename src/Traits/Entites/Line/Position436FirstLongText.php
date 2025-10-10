<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position436FirstLongText
{
    /**
     * The first long text of the line.
     */
    #[Field(
        position: 436,
        length: 80,
        validationRules: ['string', 'min:1', 'max:80']
    )]
    protected string $firstLongText;

    /**
     * Get the first long text of the line.
     */
    public function getFirstLongText(): string
    {
        return $this->firstLongText;
    }

    /**
     * Set the first long text of the line.
     */
    public function setFirstLongText(string $text): static
    {
        $this->firstLongText = $text;

        return $this;
    }
}
