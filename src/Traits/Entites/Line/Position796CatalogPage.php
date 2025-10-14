<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position796CatalogPage
{
    /**
     * The catalog page of the line.
     */
    #[Field(position: 796, length: 4, validationRules: ['int', 'min:0', 'max:9999'])]
    #[Phoenix(position: 438, length: 4, validationRules: ['int', 'min:0', 'max:9999'])]
    protected int $catalogPage;

    /**
     * Get the catalog page of the line.
     */
    public function getCatalogPage(): int
    {
        return $this->catalogPage;
    }

    /**
     * Set the catalog page of the line.
     */
    public function setCatalogPage(int $page): static
    {
        $this->catalogPage = $page;

        return $this;
    }
}
