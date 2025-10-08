<?php

use Carbon\Carbon;
use Milzer\Infx\Entities\Line;
use Milzer\Infx\Enums\InfxVersion;

it('formats properties by position with padding and special types', function (): void {
    $line = Line::make()
        ->setVersion(InfxVersion::First)
        ->setTourOperatorCode('TO')
        ->setOfferNumber('OFF123')
        ->setPartner('PARTNER')
        ->setStartDate(Carbon::create(2025, 1, 2))
        ->setEndDate(Carbon::create(2025, 1, 9))
        ->setCurrency('EUR')
        ->setPrice('123.45')
        ->setTomaOrganizer('ABCD')
        ->setTomaAction('A1');

    $expectedPrefix = '';
    $expectedPrefix .= '00';
    $expectedPrefix .= 'V';
    $expectedPrefix .= 'TO'.str_repeat(' ', 3);
    $expectedPrefix .= str_repeat(' ', 6);
    $expectedPrefix .= 'OFF123'.str_repeat(' ', 4);
    $expectedPrefix .= 'PARTNER'.str_repeat(' ', 2);
    $expectedPrefix .= '02.01.2025';
    $expectedPrefix .= '09.01.2025';

    $string = $line->toString();

    expect(substr($string, 0, strlen($expectedPrefix)))->toBe($expectedPrefix);
    expect(substr($string, 0, 2))->toBe('00');
    expect(substr($string, 2, 1))->toBe('V');
    expect(substr($string, 3, 5))->toBe('TO   ');
    expect(substr($string, 8, 6))->toBe(str_repeat(' ', 6));
    expect(substr($string, 14, 10))->toBe('OFF123'.str_repeat(' ', 4));
    expect(substr($string, 24, 9))->toBe('PARTNER  ');
    expect(substr($string, 33, 10))->toBe('02.01.2025');
    expect(substr($string, 43, 10))->toBe('09.01.2025');
});

it('__toString proxies to toString', function (): void {
    $line = Line::make()
        ->setVersion(InfxVersion::Second)
        ->setTourOperatorCode('AB')
        ->setOfferNumber('N')
        ->setPartner('X')
        ->setStartDate(Carbon::create(2024, 12, 31))
        ->setEndDate(Carbon::create(2025, 1, 1))
        ->setCurrency('USD')
        ->setPrice('0.99')
        ->setTomaOrganizer('ORG')
        ->setTomaAction('B2');

    expect((string) $line)->toBe($line->toString());
});
