<?php


class ZIPCodeValidator {
  
  private static array $EUContriesName = [
    'Austria',
    'Belgium' ,
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
  
  private static array $EUCountyCodeByName = [
      'Austria' => 'AT' ,
      'Belgium' => 'BE' ,
      'Bulgaria' => 'BG' ,
      'Cyprus' => 'CY' ,
      'Czechia' => 'CZ' ,
      'Germany' => 'DE' ,
      'Denmark' => 'DK' ,
      'Estonia' => 'EE' ,
      'Greece' => 'EL' ,
      'Spain' => 'ES' ,
      'Finland' => 'FI' ,
      'France' => 'FR' ,
      'Croatia' => 'HR' ,
      'Hungary' => 'HU' ,
      'Ireland' => 'IE' ,
      'Italy' => 'IT' ,
      'Lithuania' => 'LT' ,
      'Luxembourg' => 'LU' ,
      'Latvia' => 'LV' ,
      'Malta' => 'MT' ,
      'Netherlands' => 'NL' ,
      'Poland' => 'PL' ,
      'Portugal' => 'PT' ,
      'Romania' => 'RO' ,
      'Sweden' => 'SE' ,
      'Slovenia' => 'SI' ,
      'Slovakia' => 'SK' , 
  ];
 
    /**
    * Helper function to get all EU country's code as an array
    * @return string[]
    */
    public static function getEUCountriesCode(): array {
      return self::$EUCountriesCode;
    }
  
  
  
}
