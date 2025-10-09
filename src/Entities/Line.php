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
    use LineHelper\LineFormatter;
    use LineHelper\Position01Version;
    use LineHelper\Position02SentenceFormat;
    use LineHelper\Position03TourOperatorCode;
    use LineHelper\Position04Leer;
    use LineHelper\Position05OfferNumber;
    use LineHelper\Position06Partner;
    use LineHelper\Position07StartDate;
    use LineHelper\Position08EndDate;
    use LineHelper\Position09DepartureAirportOutbound;
    use LineHelper\Position10ArrivalAirportOutbound;
    use LineHelper\Position11DepartureAirportReturn;
    use LineHelper\Position12ArrivalAirportReturn;
    use LineHelper\Position13AirlineOutbound;
    use LineHelper\Position14AirlineReturn;
    use LineHelper\Position15OutboundFlightIdentification;
    use LineHelper\Position16ReturnFlightIdentification;
    use LineHelper\Position17DepartureOutboundTime;
    use LineHelper\Position18Expected;
    use LineHelper\Position19ArrivalOutboundTim;    // TODO : Check with simon. it's not on the documentation.
    use LineHelper\Position20DepartureReturnTime;
    use LineHelper\Position21ExpectedDepartureReturnTime;
    use LineHelper\Position22ArrivalReturnTime; // TODO : Check with simon. it's not on the documentation.
    use LineHelper\Position23OutboundFlightNumber;
    use LineHelper\Position24ReturnFlightNumber;
    use LineHelper\Position25Occupancy;
    use LineHelper\Position26MaximumChildrenOccupancy;
    use LineHelper\Position27MinimumOccupancy;
    use LineHelper\Position28MaximumOccupancy;
    use LineHelper\Position29MinimumAdultOccupancy;
    use LineHelper\Position30MaximumAdultOccupancy;
    use LineHelper\Position31Currency;
    use LineHelper\Position32Price;
    use LineHelper\Position33SeniorPrice;   //     TODO : Check with format. 201.29
    use LineHelper\Position34InfantPrice;  //     TODO : Check with format. [+/]-/% als Prefix
    use LineHelper\Position35FirstChildAgeFrom; //   TODO : Check with format. [+/]-/% als Prefix
    use LineHelper\Position36FirstChildAgeTo;
    use LineHelper\Position37FirstChildPrice;
    use LineHelper\Position38SecondChildAgeFrom;  //     [+/]-/% als Prefix
    use LineHelper\Position39SecondChildAgeTo;
    use LineHelper\Position40SecondChildPrice;
    use LineHelper\Position41SpecialDiscount;    //     [+/]-/% als Prefix//
    use LineHelper\Position42SpecialChildrenDiscount;   //     not documented
    use LineHelper\Position43SecondLeer;    //     not documented
    use LineHelper\Position44DestinationLocation; //    not documented
    use LineHelper\Position45HotelName;
    use LineHelper\Position46HotelCategory;
    use LineHelper\Position47RoomShortCode;
    use LineHelper\Position48RoomDescription;
    use LineHelper\Position49BoardCode;
    use LineHelper\Position50BoardDescription;
    use LineHelper\Position51TravelType;
    use LineHelper\Position52TravelTypeDescription;
    use LineHelper\Position53TomaOrganizer;
    use LineHelper\Position54TomaTravelMode;
    use LineHelper\Position55TomaAction;    //     default value ??
    use LineHelper\Position56TomaFirstRequirement;
    use LineHelper\Position57TomaSecondRequirement;
    use LineHelper\Position58TomaThirdRequirement;
    use LineHelper\Position59TomaFourthRequirement;
    use LineHelper\Position60TomaFirstPerformance;
    use LineHelper\Position61TomaSecondPerformance;
    use LineHelper\Position62TomaThirdPerformance;
    use LineHelper\Position63TomaFourthPerformance;
    use LineHelper\Position64TomaFirstAccommodation;
    use LineHelper\Position65TomaSecondAccommodation;
    use LineHelper\Position66TomaThirdAccommodation;
    use LineHelper\Position67TomaFourthAccommodation;
    use LineHelper\Position68FirstLongText;
    use LineHelper\Position69SecondLongText;
    use LineHelper\Position70Equipment;
    use LineHelper\Position71AdditionalInformation;
    use LineHelper\Position72CatalogName;
    use LineHelper\Position73CatalogPage;
    use LineHelper\Position74FreeFlightSeats;
    use LineHelper\Position75FreeHotelPlaces;
    use LineHelper\Position76Priority;
    use LineHelper\Position77TitleInfo;
    use LineHelper\Position78MediaLink;
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
