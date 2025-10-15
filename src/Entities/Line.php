<?php

declare(strict_types=1);

namespace Milzer\Infx\Entities;

use BackedEnum;
use Carbon\Carbon;
use InvalidArgumentException;
use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;
use Milzer\Infx\Enums\InfxVersion;
use Milzer\Infx\Enums\Layout;
use Milzer\Infx\Traits\Entites\Line as LineHelper;
use ReflectionException;
use Stringable;

class Line implements Stringable
{
    use LineHelper\LineFormatter;
    use LineHelper\PhoenixProperties;
    use LineHelper\Position01Version;
    use LineHelper\Position03SentenceFormat;
    use LineHelper\Position04TourOperatorCode;
    use LineHelper\Position09Leer;
    use LineHelper\Position100ReturnFlightNumber;
    use LineHelper\Position104Occupancy;
    use LineHelper\Position105MaximumChildrenOccupancy;
    use LineHelper\Position106MinimumOccupancy;
    use LineHelper\Position107MaximumOccupancy;
    use LineHelper\Position108MinimumAdultOccupancy;
    use LineHelper\Position109MaximumAdultOccupancy;
    use LineHelper\Position110Currency;
    use LineHelper\Position113Price;
    use LineHelper\Position125SeniorPrice;
    //     TODO : Check with format. 201.29

    use LineHelper\Position137InfantPrice;
    //     TODO : Check with format. [+/]-/% als Prefix

    use LineHelper\Position149FirstChildAgeFrom;
    //   TODO : Check with format. [+/]-/% als Prefix

    use LineHelper\Position151FirstChildAgeTo;
    use LineHelper\Position153FirstChildPrice;
    use LineHelper\Position15OfferNumber;
    use LineHelper\Position165SecondChildAgeFrom;
    //     [+/]-/% als Prefix

    use LineHelper\Position167SecondChildAgeTo;
    use LineHelper\Position169SecondChildPrice;
    use LineHelper\Position181SpecialDiscount;
    //     [+/]-/% als Prefix//

    use LineHelper\Position182SpecialChildrenDiscount;
    //     not documented

    use LineHelper\Position183SecondLeer;
    //     not documented

    use LineHelper\Position188DestinationLocation;
    //    not documented

    use LineHelper\Position213HotelName;
    use LineHelper\Position238HotelCategory;
    use LineHelper\Position241RoomShortCode;
    use LineHelper\Position243RoomDescription;
    use LineHelper\Position25Partner;
    use LineHelper\Position268BoardCode;
    use LineHelper\Position270BoardDescription;
    use LineHelper\Position295TravelType;
    use LineHelper\Position297TravelTypeDescription;
    use LineHelper\Position322TomaOrganizer;
    use LineHelper\Position326TomaTravelMode;
    use LineHelper\Position330TomaAction;
    //     default value ??

    use LineHelper\Position332TomaFirstRequirement;
    use LineHelper\Position335TomaSecondRequirement;
    use LineHelper\Position338TomaThirdRequirement;
    use LineHelper\Position341TomaFourthRequirement;
    use LineHelper\Position344TomaFirstPerformance;
    use LineHelper\Position34StartDate;
    use LineHelper\Position361TomaSecondPerformance;
    use LineHelper\Position378TomaThirdPerformance;
    use LineHelper\Position395TomaFourthPerformance;
    use LineHelper\Position412TomaFirstAccommodation;
    use LineHelper\Position418TomaSecondAccommodation;
    use LineHelper\Position424TomaThirdAccommodation;
    use LineHelper\Position430TomaFourthAccommodation;
    use LineHelper\Position436FirstLongText;
    use LineHelper\Position44EndDate;
    use LineHelper\Position516SecondLongText;
    use LineHelper\Position54DepartureAirportOutbound;
    use LineHelper\Position57ArrivalAirportOutbound;
    use LineHelper\Position596Equipment;
    use LineHelper\Position60DepartureAirportReturn;
    use LineHelper\Position63ArrivalAirportReturn;
    use LineHelper\Position66AirlineOutbound;
    use LineHelper\Position676AdditionalInformation;
    use LineHelper\Position69AirlineReturn;
    use LineHelper\Position72OutboundFlightIdentification;
    use LineHelper\Position756CatalogName;
    use LineHelper\Position75ReturnFlightIdentification;
    use LineHelper\Position78DepartureOutboundTime;
    use LineHelper\Position796CatalogPage;
    use LineHelper\Position800FreeFlightSeats;
    use LineHelper\Position803FreeHotelPlaces;
    use LineHelper\Position806Priority;
    use LineHelper\Position808TitleInfo;
    use LineHelper\Position826MediaLink;
    use LineHelper\Position82Expected;
    use LineHelper\Position83ArrivalOutboundTim;
    // TODO : Check with simon. it's not on the documentation.

    use LineHelper\Position87DepartureReturnTime;
    use LineHelper\Position91ExpectedDepartureReturnTime;
    use LineHelper\Position92ArrivalReturnTime;
    // TODO : Check with simon. it's not on the documentation.

    use LineHelper\Position96OutboundFlightNumber;
    use LineHelper\Validator;

    /**
     * The default values for the properties.
     *
     * @var array<string, string|int|float|BackedEnum>
     */
    private static array $defaultValues = [];

    private static Layout $layout = Layout::Infx;

    /**
     * @var array<string, string>
     */
    private static array $carbonFormats = [
        Layout::Infx->value => 'd.m.Y',
        Layout::Phoenix->value => 'd.m.y',
    ];

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
     * Unset the default values for the properties.
     */
    public static function unsetDefaultValues(string ...$properties): void
    {
        foreach ($properties as $property) {
            if (! property_exists(static::class, $property)) {
                throw new InvalidArgumentException("The property $property does not exist on ".static::class);
            }
        }

        foreach ($properties as $property) {
            unset(self::$defaultValues[$property]);
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
     * Returns the INFX offer.
     *
     * @throws ReflectionException
     */
    public function generateInfx(): string
    {
        return $this->toString();
    }

    /**
     * Bulk assign properties to the line.
     *
     * @param  array<string, Carbon|float|int|InfxVersion|string|null>  $data
     */
    public function bulkAssign(array $data): Line
    {
        foreach ($data as $property => $value) {
            if (! property_exists(static::class, $property)) {
                throw new InvalidArgumentException("The property $property does not exist on ".static::class);
            }

            $this->{$property} = $value;
        }

        return $this;
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

    /**
     * Set the layout to Infx.
     */
    public static function setLayoutToInfx(): void
    {
        self::$layout = Layout::Infx;
    }

    /**
     * Set the layout to Phoenix.
     */
    public static function setLayoutToPhoenix(): void
    {
        self::$layout = Layout::Phoenix;
    }

    public static function setInfxDefaultValues(): void
    {
        self::$defaultValues = [
            'version' => InfxVersion::Second,
            'sentenceFormat' => 'V',
            'expected' => 'V',
            'expectedDepartureReturnTime' => 'V',
        ];
    }

    public static function setPhoenixDefaultValues(): void
    {
        self::$defaultValues = [
            'version' => InfxVersion::Second,
        ];
    }

    /**
     * Get the current attribute class.
     */
    protected static function getCurrentAttributeClass(): string
    {
        return self::$layout->value === Layout::Infx->value
            ? Field::class
            : Phoenix::class;
    }

    /**
     * Get the Carbon format for the current layout.
     */
    protected static function getCarbonFormat(): string
    {
        return self::$carbonFormats[self::$layout->value];
    }
}
