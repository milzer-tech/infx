<p align="center">
 <img src="https://milzer.de/wp-content/uploads/2025/02/milzer-logo.svg" width="200" />
</p>

# INFX Package for Travel Offers

[![Latest Version](https://img.shields.io/packagist/v/milzer/infx?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/milzer/infx?style=flat-square)]()

A robust PHP library to generate, validate, and serialize **INFX** travel offer records according to version 1.0.5.

---

## 📌 What is INFX?

INFX is a **fixed width**, field based text format widely used in the tourism industry to transmit structured travel offers—covering package tours, flight only deals, and round trips. This library encapsulates the full spec, offering modular, validated, trait based field assembly.

---

## ⚙️ Features

- ✅ Full coverage of INFX v1.0.5 spec
- ⚙️ Modular traits and PHP 8 attributes for fields
- 🧬 Handles complex data: pricing tiers, occupancy, flights
- 🔄 Exclusive string → INFX export pipeline
- 🛡 Central validation via `ValidatorHelper`

---

## 📦 Installation

```bash
composer require milzer/infx
```

---

## 🚀 Quickstart

```php
use milzer\Infx\Entities\Line;

$line = (new Line())
    ->setOfferNumber('ABC1234567')
    ->setPartner('SAT')
    ->setDepartureDate('2025-07-21')
    ->setReturnDate('2025-07-28')
    ->setDepartureAirportOutbound('FRA')
    ->setArrivalAirportOutbound('PMI')
    ->setCurrency('EUR')
    ->setPrice('1199.00')
    ->setHotelName('Club Palma')
    ->setBoardCode('HP')
    ->setOccupancy(2);

echo $line; // Outputs fixed-width INFX line
```

---

## 📁 Architecture

```text
src/
├── Attributes/Field.php         # Field position/type metadata
├── Entities/Line.php           # Main offer entity
├── Traits/…/HasXYZ.php         # Modular field traits
└── Helpers/ValidatorHelper.php # Central validation logic
```

Each `Line` represents a full offer. Fields are trait-composed; central validator ensures consistency.

---

## 🏗 Development

```bash
git clone git@github.com:milzer/infx.git
cd infx
composer install
./vendor/bin/phpunit
```

Coding standards are enforced via GitHub Actions CI (PHPUnit, PHP-CS-Fixer, PHPStan).

---

## 🤝 Contributing

We welcome bug reports, feature requests, and PRs!  
Please open an issue to discuss larger changes.  
All contributions require completing our CLA.  
Refer to [CONTRIBUTING.md](CONTRIBUTING.md) for details.

---

## 📞 Contact

**milzer GmbH**  
Anna-Klöcker-Straße 25
52222 Stolberg (Rhld.)
Germany  
🌐 [milzer.de](https://milzer.de)  
📧 kontakt@milzer.de | ☎️ +49 2402 9066190
