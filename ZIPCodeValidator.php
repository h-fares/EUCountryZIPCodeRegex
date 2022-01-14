<?php

class ZIPCodeValidator
{

    private static array $EUCountriesName = [
        'Austria',
        'Belgium',
        'Bulgaria',
        'Cyprus',
        'Czechia',
        'Germany',
        'Denmark',
        'Estonia',
        'Greece',
        'Spain',
        'Finland',
        'France',
        'Croatia',
        'Hungary',
        'Ireland',
        'Italy',
        'Lithuania',
        'Luxembourg',
        'Latvia',
        'Malta',
        'Netherlands',
        'Poland',
        'Portugal',
        'Romania',
        'Sweden',
        'Slovenia',
        'Slovakia',
    ];

    private static array $EUCountriesCode = [
        'AT', // ? Austria
        'BE', // ? Belgium
        'BG', // ? Bulgaria
        'CY', // ? Cyprus
        'CZ', // ? Czechia
        'DE', // ? Germany
        'DK', // ? Denmark
        'EE', // ? Estonia
        'EL', // ? Greece
        'ES', // ? Spain
        'FI', // ? Finland
        'FR', // ? France
        'HR', // ? Croatia
        'HU', // ? Hungary
        'IE', // ? Ireland
        'IT', // ? Italy
        'LT', // ? Lithuania
        'LU', // ? Luxembourg
        'LV', // ? Latvia
        'MT', // ? Malta
        'NL', // ? Netherlands
        'PL', // ? Poland
        'PT', // ? Portugal
        'RO', // ? Romania
        'SE', // ? Sweden
        'SI', // ? Slovenia
        'SK'  // ? Slovakia
    ];

    private static array $EUCountyNameByCode = [
        'AT' => 'Austria',
        'BE' => 'Belgium',
        'BG' => 'Bulgaria',
        'CY' => 'Cyprus',
        'CZ' => 'Czechia',
        'DE' => 'Germany',
        'DK' => 'Denmark',
        'EE' => 'Estonia',
        'EL' => 'Greece',
        'ES' => 'Spain',
        'FI' => 'Finland',
        'FR' => 'France',
        'HR' => 'Croatia',
        'HU' => 'Hungary',
        'IE' => 'Ireland',
        'IT' => 'Italy',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'LV' => 'Latvia',
        'MT' => 'Malta',
        'NL' => 'Netherlands',
        'PL' => 'Poland',
        'PT' => 'Portugal',
        'RO' => 'Romania',
        'SE' => 'Sweden',
        'SI' => 'Slovenia',
        'SK' => 'Slovakia'
    ];

    private static array $EUCountyCodeByName = [
        'Austria' => 'AT',
        'Belgium' => 'BE',
        'Bulgaria' => 'BG',
        'Cyprus' => 'CY',
        'Czechia' => 'CZ',
        'Germany' => 'DE',
        'Denmark' => 'DK',
        'Estonia' => 'EE',
        'Greece' => 'EL',
        'Spain' => 'ES',
        'Finland' => 'FI',
        'France' => 'FR',
        'Croatia' => 'HR',
        'Hungary' => 'HU',
        'Ireland' => 'IE',
        'Italy' => 'IT',
        'Lithuania' => 'LT',
        'Luxembourg' => 'LU',
        'Latvia' => 'LV',
        'Malta' => 'MT',
        'Netherlands' => 'NL',
        'Poland' => 'PL',
        'Portugal' => 'PT',
        'Romania' => 'RO',
        'Sweden' => 'SE',
        'Slovenia' => 'SI',
        'Slovakia' => 'SK',
    ];

    public static array $ZipCodeRegex = [
        "AT" => "/^\d{4}$/i",
        "BE" => "/^\d{4}$/i",
        "BG" => "/^\d{4}$/i",
        "CY" => "/^\d{4}$/i",
        "CZ" => "/^\d{3}\s\d{2}$/i",
        "DE" => "/^\d{5}$/i",
        "DK" => "/^\d{4}$/i",
        "EE" => "/^\d{5}$/i",
        "EL" => "/^\d{5}$/i",
        "ES" => "/^\d{5}$/i",
        "FI" => "/^\d{5}$/i}",
        "FR" => "/^\d{2}\s\d{3}$/i",
        "HR" => "/^\d{5}$/i",
        "HU" => "/^\d{4}$/i",
        "IT" => "/^\d{5}$/i",
        "LT" => "/^\d{5}$/i",
        "LU" => "/^\d{4}$/i",
        "LV" => "/^\d{4}$/i",
        "MT" => "/^[A-Z]{3}[ ]?\d{2,4}$/i",
        "NL" => "/^\d{4}[ ]?[A-Z]{2}$/i",
        "PL" => "/^\d{2}-\d{3}$/i",
        "PT" => "/^\d{4}([\-]\d{3})?$/i",
        "RO" => "/^\d{6}$/i",
        "SE" => "/^\d{3}[ ]?\d{2}$/i",
        "SK" => "/^\d{3}[ ]?\d{2}$/i",
        "SI" => "/^\d{4}$/i",
        // ? Not EU Countries
        "CH" => "/^\d{4}$/i",
    ];

    /**
     * Helper function to get all EU country's codes as an array
     * @return string[]
     */
    public static function getEUCountriesCode(): array {
        return self::$EUCountriesCode;
    }

    /**
     * Helper function to get all EU country's names as an array
     * @return string[]
     */
    public static function getEUCountriesName(): array {
        return self::$EUCountriesName;
    }

    /**
     * Helper function to check if country's code from EU
     * @param  string  $countryCode
     * @return bool
     */
    public static function isCountryCodeFromEU(string $countryCode): bool {
        $countriesCode = self::getEUCountriesCode();
        return in_array($countryCode, $countriesCode);
    }

    /**
     * Helper function to check if country's code from EU
     * @param  string  $countryName
     * @return bool
     */
    public static function isCountryNameFromEU(string $countryName): bool {
        $countriesName = self::getEUCountriesName();
        return in_array($countryName, $countriesName);
    }

    /**
     * Helper function to get country name by country's code
     * @param  string  $countryCode
     * @return string|null
     */
    public static function getCountryNameByCode(string $countryCode): ?string {
        return self::$EUCountyNameByCode[$countryCode] ?? null;
    }

    /**
     * Helper function to get country code by country's name
     * @param  string  $countryName
     * @return string|null
     */
    public static function getCountryCodeByName(string $countryName): ?string {
        return self::$EUCountyCodeByName[$countryName] ?? null;
    }

    /**
     * Helper function to get country code regex by country's code
     * @param  string  $countryCode
     * @return string|null
     */
    public static function getCountryCodeRegexByCode(string $countryCode): ?string {
        return self::$ZipCodeRegex[$countryCode] ?? null;
    }

    /**
     * Helper function to validate country zip code
     * In EU und Switzerland
     * @param  string  $countryCode
     * @param  string  $zipCode
     * @return bool
     */
    public static function validateZIPCode(string $countryCode, string $zipCode): bool{
        $regexCode = self::getCountryCodeRegexByCode($countryCode);
        if($regexCode) return preg_match($regexCode, $zipCode);
        else return false;
    }
}
