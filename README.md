# Introduction

In this package we've introduced a new type package that focuses on validating object types.

This package not only allows you to validate basic data types but also supports complex object structures. Using Laravel's fluent validation syntax, you can define the expected properties of an object to ensure their types and existence.

<p align="left">
    <a href="https://github.com/xdevor/type/actions"><img src="https://github.com/xdevor/type/actions/workflows/tests.yml/badge.svg" alt="Test Status"></a>
    <a href="https://packagist.org/packages/xdevor/type"><img src="https://poser.pugx.org/xdevor/type/d/total.svg" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/xdevor/type"><img src="https://img.shields.io/packagist/v/xdevor/type.svg?v=1.5.0" alt="packagist"></a>
    <a href="https://packagist.org/packages/xdevor/type"><img src="https://poser.pugx.org/xdevor/type/license.svg" alt="License"></a>
</p>

## Installation
Require this package with composer:
```bash
composer require xdevor/type
```

## Usage

- ❌ Without object type
```php

function increase(int $count)
{
    if ($count < 1) {
        throw new InvalidArgumentException('Receive invalid argument');
    }
    return $this->value + $count;
}

```

- ✅ With object type
```php
use Xdevor\Type\Numbers\PositiveInt;

function increase(PositiveInt $count)
{
    return $this->value + $count->value();
}
```

## Features

### Supports
1. **PositiveInt**: Positive integer
2. **NegativeInt**: Negative integer

### Todo
3. **NonZeroInt**: Non-zero integer
4. **PositiveFloat**: Positive floating-point number
5. **NegativeFloat**: Negative floating-point number
6. **NonZeroFloat**: Non-zero floating-point number
7. **NonEmptyString**: Non-empty string
8. **EmailAddress**: Email address
9. **Url**: URL
10. **PhoneNumber**: Phone number
11. **Date**: Date
12. **DateTime**: Date and time
13. **Uuid**: Universally Unique Identifier (UUID)
14. **IPv4Address**: IPv4 address
15. **IPv6Address**: IPv6 address
16. **HexColorCode**: Hexadecimal color code
17. **AlphanumericString**: Alphanumeric string
18. **Json**: JSON string
19. **ArrayOfType**: Array of a specific type
20. **CustomEnum**: Custom enumeration type
21. **CreditCardNumber**: Credit card number
22. **SocialSecurityNumber**: Social Security number
23. **LatitudeLongitude**: Latitude and longitude coordinates
24. **CurrencyAmount**: Currency amount
25. **Percentage**: Percentage value
26. **FileSize**: File size
27. **TimeInterval**: Time interval
28. **ISBN**: International Standard Book Number (ISBN)
29. **MACAddress**: MAC address
30. **IBAN**: International Bank Account Number (IBAN)
31. **Password**: Password with specific constraints
32. **PostalCode**: Postal code
33. **CreditScore**: Credit score
34. **FahrenheitTemperature**: Temperature in Fahrenheit
35. **CelsiusTemperature**: Temperature in Celsius
36. **BinaryData**: Binary data
37. **Gender**: Gender (Male/Female/Other)
38. **Latitude**: Latitude coordinate
39. **Longitude**: Longitude coordinate
40. **ISBN13**: ISBN-13
41. **IMEI**: International Mobile Equipment Identity (IMEI)
42. **CreditCardExpirationDate**: Credit card expiration date
43. **VATNumber**: Value Added Tax (VAT) number
44. **HexadecimalNumber**: Hexadecimal number
45. **BooleanString**: Boolean represented as a string
46. **RomanNumeral**: Roman numeral
47. **PassportNumber**: Passport number
48. **MIMEType**: Multipurpose Internet Mail Extensions (MIME) type
49. **MACAddressOUI**: MAC address Organizationally Unique Identifier (OUI)
50. **EAN13**: International Article Number (EAN-13)
51. **EAN8**: International Article Number (EAN-8)
52. **VehicleIdentificationNumber (VIN)**: VIN for vehicles
53. **ISSN**: International Standard Serial Number (ISSN)
54. **UPC**: Universal Product Code (UPC)
55. **GS1Barcode**: GS1 Barcode
56. **MD5Hash**: MD5 hash
57. **SHA1Hash**: SHA-1 hash
58. **SHA256Hash**: SHA-256 hash
59. **SHA512Hash**: SHA-512 hash
60. **RGBColor**: RGB color
61. **RGBAColor**: RGBA color (with alpha channel)
62. **HSLColor**: HSL color
63. **HSLAColor**: HSLA color (with alpha channel)
64. **HTMLColorName**: HTML color name
65. **Base64EncodedString**: Base64-encoded string
66. **ISBN10**: ISBN-10
67. **USStateAbbreviation**: US state abbreviation
68. **CanadianPostalCode**: Canadian postal code
69. **SocialMediaUsername**: Social media username
70. **HexadecimalRGBColor**: Hexadecimal RGB color
71. **AlphabeticalString**: Alphabetical string
72. **MongoDBObjectId**: MongoDB Object ID
73. **JWToken**: JSON Web Token (JWT)
74. **UnixTimestamp**: Unix timestamp
75. **YouTubeVideoId**: YouTube video ID
76. **HexadecimalUUID**: Hexadecimal UUID
77. **HTTPStatusCode**: HTTP status code
78. **SemVer**: Semantic versioning string
79. **EpochTime**: Epoch time
80. **HexadecimalMACAddress**: Hexadecimal MAC address
81. **GoogleAnalyticsTrackingId**: Google Analytics tracking ID
82. **USZipCode**: US ZIP code
83. **Slug**: URL-friendly slug
84. **TwitterHandle**: Twitter handle
85. **HexadecimalBinary**: Hexadecimal binary data
86. **RandomGuid**: Randomly generated GUID
87. **ICAOAirportCode**: ICAO airport code
88. **HexadecimalHTMLColor**: Hexadecimal HTML color code
89. **GitCommitHash**: Git commit hash
90. **CustomMimeType**: Custom MIME type
91. **GPSCoordinates**: GPS coordinates
92. **AmericanExpressCardNumber**: American Express credit card number
93. **MasterCardNumber**: MasterCard credit card number
94. **VisaCardNumber**: Visa credit card number
95. **DinersClubCardNumber**: Diners Club credit card number
96. **DiscoverCardNumber**: Discover credit card number
97. **JCBCardNumber**: JCB credit card number
98. **DebitCardNumber**: Debit card number
99. **WindowsFilePath**: Windows file path
100. **UnixFilePath**: Unix file path
1. **CurrencyCode**: Represents the code of a currency (e.g., USD, EUR).
2. **CurrencyAmount**: Represents the numerical value of an amount in a specific currency.
3. **ExchangeRate**: Represents the exchange rate between two currencies.
4. **CryptocurrencyCode**: Represents the code of a cryptocurrency (e.g., BTC, ETH).
5. **CryptocurrencyAmount**: Represents the numerical value of an amount in a specific cryptocurrency.
6. **BitcoinAddress**: Represents a Bitcoin wallet address.
7. **EthereumAddress**: Represents an Ethereum wallet address.
8. **LitecoinAddress**: Represents a Litecoin wallet address.
9. **RippleAddress**: Represents a Ripple wallet address.
10. **MoneroAddress**: Represents a Monero wallet address.
11. **StellarAddress**: Represents a Stellar wallet address.
12. **EOSAddress**: Represents an EOS wallet address.
13. **DashAddress**: Represents a Dash wallet address.
14. **ZcashAddress**: Represents a Zcash wallet address.
15. **USDCurrency**: Represents the United States Dollar (USD).
16. **EuroCurrency**: Represents the Euro (EUR).
17. **BritishPoundCurrency**: Represents the British Pound (GBP).
18. **JapaneseYenCurrency**: Represents the Japanese Yen (JPY).
19. **CanadianDollarCurrency**: Represents the Canadian Dollar (CAD).
20. **AustralianDollarCurrency**: Represents the Australian Dollar (AUD).
21. **SwissFrancCurrency**: Represents the Swiss Franc (CHF).
22. **ChineseYuanCurrency**: Represents the Chinese Yuan (CNY).
23. **IndianRupeeCurrency**: Represents the Indian Rupee (INR).
24. **BrazilianRealCurrency**: Represents the Brazilian Real (BRL).
25. **SouthAfricanRandCurrency**: Represents the South African Rand (ZAR).
26. **SwedishKronaCurrency**: Represents the Swedish Krona (SEK).
27. **NorwegianKroneCurrency**: Represents the Norwegian Krone (NOK).
28. **SingaporeDollarCurrency**: Represents the Singapore Dollar (SGD).
29. **NewZealandDollarCurrency**: Represents the New Zealand Dollar (NZD).
30. **MexicanPesoCurrency**: Represents the Mexican Peso (MXN).

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Code of Conduct

In order to ensure that the php community is welcoming to all, please review and abide by the [Code of Conduct](CODE_OF_CONDUCT.md).

## Security Vulnerabilities

Please review [our security policy](SECURITY.md) on how to report security vulnerabilities.

## License

ComposerParser is open-sourced software licensed under the [MIT license](LICENSE.md).
