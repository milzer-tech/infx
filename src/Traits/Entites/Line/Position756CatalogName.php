<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position756CatalogName
{
    /**
     * The catalog name of the line.
     */
    #[Field(position: 756, length: 40, validationRules: ['string', 'min:0', 'max:40'])]
    #[Phoenix(position: 398, length: 40, validationRules: ['string', 'min:0', 'max:40'])]
    protected string $catalogName;

    /**
     * Get the catalog name of the line.
     */
    public function getCatalogName(): string
    {
        return $this->catalogName;
    }

    /**
     * Set the catalog name of the line.
     */
    public function setCatalogName(string $name): static
    {
        $this->catalogName = $name;

        return $this;
    }
}
