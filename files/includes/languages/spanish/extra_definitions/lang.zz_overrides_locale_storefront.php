<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// storefront overrides of core values for locale, date format, weight to kg

declare(strict_types=1);

// -----
// Since the languages are now loaded via classes, the $locales definition
// needs to be globalized for use in payment-methods (e.g. paypalwpp) and
// other processing.
//
global $locales;
//'es-ES': windows, 'es_ES': unix
$locales = ['es_ES', 'es-ES', 'es_ES.utf8', 'es-ES', 'es'];
@setlocale(LC_TIME, $locales);

$define = [
// from lang.spanish.php
    'DATE_FORMAT' => 'd/m/Y',
    'DATE_TIME_FORMAT_WITHOUT_SECONDS' => '%d/%m/%Y %H:%M',
    'DOB_FORMAT_STRING' => 'dd/mm/yyyy',
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'La fecha de nacimiento debe tener el formato:DD/MM/YYYY (ej. 21/05/1970)',
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (ej. 21/05/1970)',
    'LANGUAGE_CURRENCY' => 'EUR',
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' kg',
    'TEXT_SHIPPING_WEIGHT' => ' kg',
];
return $define;
