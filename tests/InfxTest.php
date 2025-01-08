<?php
use Milzer\Infx\Infx;
use Milzer\Infx\Entities\Line;

it('adds a single line to Infx', function () {
    $infx = Infx::make();
    $line = new Line();

    $infx->addLine($line);

    expect($infx->getLines())->toHaveCount(1)
        ->and($infx->getLines()[0])->toBe($line);
});

it('adds multiple lines to Infx', function () {
    $infx = Infx::make();
    $line1 = new Line();
    $line2 = new Line();

    $infx->addLines([$line1, $line2]);

    expect($infx->getLines())->toHaveCount(2)
        ->and($infx->getLines()[0])->toBe($line1)
        ->and($infx->getLines()[1])->toBe($line2);
});

it('throws an exception when adding invalid lines', function () {
    $infx = Infx::make();
    $invalidLine = new stdClass();

    $infx->addLines([$invalidLine]);
})->throws(
    InvalidArgumentException::class,
    'The line must be an instance of Milzer\Infx\Entities\Line'
);
