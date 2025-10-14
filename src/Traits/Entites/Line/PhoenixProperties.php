<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Phoenix;

trait PhoenixProperties
{
    #[Phoenix(position: 34, length: 10, validationRules: ['integer', 'min:0', 'max:9999'])]
    protected int $duration;

    #[Phoenix(position: 195, length: 8, validationRules: ['string', 'min:0', 'max:8'])]
    protected string $outboundFlightRoute;

    #[Phoenix(position: 219, length: 8, validationRules: ['string', 'min:0', 'max:8'])]
    protected string $returnFlightRoute;

    #[Phoenix(position: 286, length: 2, validationRules: ['integer', 'min:0', 'max:99'])]
    protected int $maxChildAge;

    #[Phoenix(position: 578, length: 1, validationRules: ['integer', 'min:0', 'max:9'])]
    protected int $numberOfUnit;

    #[Phoenix(position: 448, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $firstAirportOfOutboundFlightStopover;

    #[Phoenix(position: 451, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $secondAirportOfOutboundFlightStopover;

    #[Phoenix(position: 454, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $thirdAirportOfOutboundFlightStopover;

    #[Phoenix(position: 457, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $firstAirportOfReturnFlightStopover;

    #[Phoenix(position: 460, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $secondAirportOfReturnFlightStopover;

    #[Phoenix(position: 463, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $thirdAirportOfReturnFlightStopover;

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getOutboundFlightRoute(): string
    {
        return $this->outboundFlightRoute;
    }

    public function setOutboundFlightRoute(string $outboundFlightRoute): static
    {
        $this->outboundFlightRoute = $outboundFlightRoute;

        return $this;
    }

    public function getReturnFlightRoute(): string
    {
        return $this->returnFlightRoute;
    }

    public function setReturnFlightRoute(string $returnFlightRoute): static
    {
        $this->returnFlightRoute = $returnFlightRoute;

        return $this;
    }

    public function getMaxChildAge(): int
    {
        return $this->maxChildAge;
    }

    public function setMaxChildAge(int $maxChildAge): static
    {
        $this->maxChildAge = $maxChildAge;

        return $this;
    }

    public function getNumberOfUnit(): int
    {
        return $this->numberOfUnit;
    }

    public function setNumberOfUnit(int $numberOfUnit): static
    {
        $this->numberOfUnit = $numberOfUnit;

        return $this;
    }

    public function getFirstAirportOfOutboundFlightStopover(): string
    {
        return $this->firstAirportOfOutboundFlightStopover;
    }

    public function setFirstAirportOfOutboundFlightStopover(string $firstAirportOfOutboundFlightStopover): static
    {
        $this->firstAirportOfOutboundFlightStopover = $firstAirportOfOutboundFlightStopover;

        return $this;
    }

    public function getSecondAirportOfOutboundFlightStopover(): string
    {
        return $this->secondAirportOfOutboundFlightStopover;
    }

    public function setSecondAirportOfOutboundFlightStopover(string $secondAirportOfOutboundFlightStopover): static
    {
        $this->secondAirportOfOutboundFlightStopover = $secondAirportOfOutboundFlightStopover;

        return $this;
    }

    public function getThirdAirportOfOutboundFlightStopover(): string
    {
        return $this->thirdAirportOfOutboundFlightStopover;
    }

    public function setThirdAirportOfOutboundFlightStopover(string $thirdAirportOfOutboundFlightStopover): static
    {
        $this->thirdAirportOfOutboundFlightStopover = $thirdAirportOfOutboundFlightStopover;

        return $this;
    }

    public function getFirstAirportOfReturnFlightStopover(): string
    {
        return $this->firstAirportOfReturnFlightStopover;
    }

    public function setFirstAirportOfReturnFlightStopover(string $firstAirportOfReturnFlightStopover): static
    {
        $this->firstAirportOfReturnFlightStopover = $firstAirportOfReturnFlightStopover;

        return $this;
    }

    public function getSecondAirportOfReturnFlightStopover(): string
    {
        return $this->secondAirportOfReturnFlightStopover;
    }

    public function setSecondAirportOfReturnFlightStopover(string $secondAirportOfReturnFlightStopover): static
    {
        $this->secondAirportOfReturnFlightStopover = $secondAirportOfReturnFlightStopover;

        return $this;
    }

    public function getThirdAirportOfReturnFlightStopover(): string
    {
        return $this->thirdAirportOfReturnFlightStopover;
    }

    public function setThirdAirportOfReturnFlightStopover(string $thirdAirportOfReturnFlightStopover): static
    {
        $this->thirdAirportOfReturnFlightStopover = $thirdAirportOfReturnFlightStopover;

        return $this;
    }
}
