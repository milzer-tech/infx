<?php

use Carbon\Carbon;
use Milzer\Infx\Entities\Line;
use Milzer\Infx\Enums\InfxVersion;

it('make returns a Line instance', function (): void {
    expect(Line::make())->toBeInstanceOf(Line::class);
});

it('__toString delegates to toString', function (): void {
    $line = Line::make()
        ->setTourOperatorCode('TO')
        ->setStartDate(Carbon::parse('2025-01-15'))
        ->setCurrency('EUR')
        ->setPrice('123.45')
        ->setTomaOrganizer('ABCD')
        ->setTomaAction('OK');

    expect((string) $line)
        ->toBe($line->toString())
        ->and(mb_strlen((string) $line))
        ->toBe(985);
});

it('tests setDefaultValues and unsetDefaultValues', function (): void {
    Line::setDefaultValues([
        'partner' => 'PARTNER1',
    ]);

    expect(Line::make()->getPartner())->toBe('PARTNER1');

    Line::unsetDefaultValues('partner');

    expect(fn (): string => Line::make()->getPartner())->toThrow(Error::class);
});

it('setDefaultValues throws when property does not exist', function (): void {
    expect(fn () => Line::setDefaultValues(['doesNotExist' => 'x']))
        ->toThrow(InvalidArgumentException::class, 'The property doesNotExist does not exist on '.Line::class);
});

it('creates a real line', function (): void {
    $real = '01VSAT        R25                02.07.202511.07.2025BERDUBDUBBER                V        V            2 2322EUR2569.00                               142569                               Irland - Nordirland      Flugreise Irland und Nord   DZDoppelzimmer             FMV                                                   SAT     B F  H  KV    BER DUB                                                                   28                FL-IRNIT                                                                        Flugreise Irland und Nordirland                                                                                                                                                                                                                 SAT Touristik 2025                          1                         Doppelzimmer                                                                                                                                                    ';

    $line = Line::make()
        ->setVersion(InfxVersion::Second)
        ->setSentenceFormat('V')
        ->setTourOperatorCode('SAT')
        ->setOfferNumber('R25')
        ->setStartDate(Carbon::parse('2025-07-02'))
        ->setEndDate(Carbon::parse('2025-07-11'))
        ->setDepartureAirportOutbound('BER')
        ->setarrivalAirportOutbound('DUB')
        ->setDepartureAirportReturn('DUB')
        ->setArrivalAirportReturn('BER')
        ->setOccupancy(2)
        ->setMinimumOccupancy(2)
        ->setMaximumOccupancy(3)
        ->setMinimumAdultOccupancy(2)
        ->setMaximumAdultOccupancy(2)
        ->setCurrency('EUR')
        ->setPrice('2569.00')
        ->setBoardCode('FM')
        ->setBoardDescription('V')
        ->setCatalogName('SAT Touristik 2025')
        ->setDestinationLocation('Irland - Nordirland')
        ->setFirstChildAgeTo(14)
        ->setFirstChildPrice(2569.00)
        ->setFirstLongText('FL-IRNIT')
        ->setFreeFlightSeats(1)
        ->setHotelName('Flugreise Irland und Nord')
        ->setMediaLink('Doppelzimmer')
        ->setRoomDescription('Doppelzimmer')
        ->setRoomShortCode('DZ')
        ->setSecondLongText('Flugreise Irland und Nordirland')
        ->setTomaOrganizer('SAT')
        ->setTomaAction('B')
        ->setTomaFirstPerformance('BER DUB')
        ->setTomaFirstRequirement('F')
        ->setTomaSecondAccommodation('28')
        ->setTomaSecondRequirement('H')
        ->setTomaThirdRequirement('KV');

    expect($line->toString())
        ->toBe($real)
        ->and(mb_strlen((string) $line))
        ->toBe(985);
});
