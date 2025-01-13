<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasMediaLink
{
    /**
     * The media link of the line.
     */
    #[Field(
        position: 78,
        length: 160,
        validationRules: ['string', 'min:1', 'max:160']
    )]
    protected string $mediaLink;

    /**
     * Get the media link of the line.
     */
    public function getMediaLink(): string
    {
        return $this->mediaLink;
    }

    /**
     * Set the media link of the line.
     *
     * @throws ReflectionException
     */
    public function setMediaLink(string $link): static
    {
        $this->mediaLink = $link;

        return $this;
    }
}
