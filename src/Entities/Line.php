<?php

declare(strict_types=1);

namespace Milzer\Infx\Entities;

use BackedEnum;
use InvalidArgumentException;
use Milzer\Infx\Traits\Entites\Line as LineHelper;
use ReflectionException;
use Stringable;

class Line implements Stringable
{
    use LineHelper\HasAdditionalInformation;
    use LineHelper\HasAirlineOutbound;
    use LineHelper\HasAirlineReturn;
    use LineHelper\HasArrivalAirportOutbound;
    use LineHelper\HasArrivalAirportReturn;

    // TODO : Check with simon. it's not on the documentation.
    use LineHelper\HasArrivalOutboundTim;

    // TODO : Check with simon. it's not on the documentation.
    use LineHelper\HasArrivalReturnTime;
    use LineHelper\HasBoardCode;
    use LineHelper\HasBoardDescription;
    use LineHelper\HasCatalogName;
    use LineHelper\HasCatalogPage;
    use LineHelper\HasCurrency;
    use LineHelper\HasDepartureAirportOutbound;
    use LineHelper\HasDepartureAirportReturn;
    use LineHelper\HasDepartureOutboundTime;
    use LineHelper\HasDepartureReturnTime;

    //    not documented
    use LineHelper\HasDestinationLocation;
    use LineHelper\HasEndDate;
    use LineHelper\HasEquipment;
    use LineHelper\HasExpected;
    use LineHelper\HasExpectedDepartureReturnTime;

    //   TODO : Check with format. [+/]-/% als Prefix
    use LineHelper\HasFirstChildAgeFrom;
    use LineHelper\HasFirstChildAgeTo;
    use LineHelper\HasFirstChildPrice;
    use LineHelper\HasFirstLongText;
    use LineHelper\HasFreeFlightSeats;
    use LineHelper\HasFreeHotelPlaces;
    use LineHelper\HasHotelCategory;
    use LineHelper\HasHotelName;

    //     TODO : Check with format. [+/]-/% als Prefix
    use LineHelper\HasInfantPrice;
    use LineHelper\HasLeer;
    use LineHelper\HasmaximumAdultOccupancy;
    use LineHelper\HasMaximumChildrenOccupancy;
    use LineHelper\HasMaximumOccupancy;
    use LineHelper\HasMediaLink;
    use LineHelper\HasMinimumAdultOccupancy;
    use LineHelper\HasMinimumOccupancy;
    use LineHelper\HasOccupancy;
    use LineHelper\HasOfferNumber;
    use LineHelper\HasOutboundFlightIdentification;
    use LineHelper\HasOutboundFlightNumber;
    use LineHelper\HasPartner;
    use LineHelper\HasPrice;
    use LineHelper\HasPriority;
    use LineHelper\HasReturnFlightIdentification;
    use LineHelper\HasReturnFlightNumber;
    use LineHelper\HasRoomDescription;

    use LineHelper\HasRoomShortCode;
    //     [+/]-/% als Prefix
    use LineHelper\HasSecondChildAgeFrom;
    use LineHelper\HasSecondChildAgeTo;

    use LineHelper\HasSecondChildPrice;
    //     not documented
    use LineHelper\HasSecondLeer;

    use LineHelper\HasSecondLongText;
    //     TODO : Check with format. 201.29
    use LineHelper\HasSeniorPrice;

    use LineHelper\HasSentenceFormat;

    //     not documented
    use LineHelper\HasSpecialChildrenDiscount;
    //
    //     [+/]-/% als Prefix//
    use LineHelper\HasSpecialDiscount;
    use LineHelper\HasStartDate;

    use LineHelper\HasTitleInfo;
    //
    //     default value ??
    use LineHelper\HasTomaAction;
    use LineHelper\HasTomaFirstAccommodation;
    use LineHelper\HasTomaFirstPerformance;
    use LineHelper\HasTomaFirstRequirement;
    use LineHelper\HasTomaFourthAccommodation;
    use LineHelper\HasTomaFourthPerformance;
    use LineHelper\HasTomaFourthRequirement;
    use LineHelper\HasTomaOrganizer;
    use LineHelper\HasTomaSecondAccommodation;
    use LineHelper\HasTomaSecondPerformance;
    use LineHelper\HasTomaSecondRequirement;
    use LineHelper\HasTomaThirdAccommodation;
    use LineHelper\HasTomaThirdPerformance;
    use LineHelper\HasTomaThirdRequirement;
    use LineHelper\HasTomaTravelMode;
    use LineHelper\HasTourOperatorCode;
    use LineHelper\HasTravelType;
    use LineHelper\HasTravelTypeDescription;
    use LineHelper\HasVersion;
    use LineHelper\LineFormatter;
    use LineHelper\Validator;

    /**
     * The default values for the properties.
     *
     * @var array<string, string|int|float|BackedEnum>
     */
    private static array $defaultValues = [];

    /**
     * Create a new instance of Line.
     */
    final public function __construct()
    {
        $this->assignDefaultValues();
    }

    /**
     * Create a new instance of Line statically.
     */
    public static function make(): static
    {
        return new static;
    }

    /**
     * Set the default values for the properties.
     *
     * @param  array<string, string|int|float|BackedEnum>  $values
     */
    public static function setDefaultValues(array $values): void
    {
        foreach ($values as $property => $value) {
            if (! property_exists(static::class, $property)) {
                throw new InvalidArgumentException("The property $property does not exist on ".static::class);
            }

            self::$defaultValues[$property] = $value;
        }
    }

    /**
     * Returns string representation of the object
     *
     * @throws ReflectionException
     */
    public function __toString(): string
    {
        return $this->toString();
    }

    /**
     * Assign the default values to the properties.
     */
    private function assignDefaultValues(): void
    {
        foreach (self::$defaultValues as $property => $value) {
            $this->{$property} = $value;
        }
    }
}
