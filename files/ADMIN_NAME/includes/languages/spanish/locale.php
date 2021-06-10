<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/** "ñ": to maintain this file as utf-8, as there are no other multibyte chars in the file.
 * @package admin
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id$
 */


// look in your $PATH_LOCALE/locale directory for available locales..
// recommended to list all values for your language in this array. And include at least the 3 versions: 'es_ES.UTF8', 'Spanish_Spain.1252', 'es'. These help support multiple server configurations (since IIS and Windows are less reliably configured)
$locales = array('es_ES.UTF8', 'es', 'Spanish_Spain.1252');

// For the most part, LC_TIME is fine here. On rare occasions you might need to change this to LC_ALL.
setlocale(LC_TIME, $locales);

define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

define('DATE_FORMAT_DATEPICKER_ADMIN', zen_date_datepicker(DATE_FORMAT)); // Alternatively skip the function and specify a string of 'dd', 'mm' and 'yy' in any order

/**
 * Return date in raw format - DEPRECATED
 * $date should be in format mm/dd/yyyy
 * raw date is in format YYYYMMDD, or DDMMYYYY
 */
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}
// Converts dsmnyY chars to accepted values because the datepicker widget accepts only 'dd', 'mm' and 'yy' (in any order)
function zen_date_datepicker($format)
{
  $date = preg_replace('/[ds]/', 'dd', $format);
  $date = preg_replace('/[mn]/', 'mm', $date);
  $date = preg_replace('/[yY]/', 'yy', $date);
  return $date;
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="es"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

define('_JANUARY', 'Enero');
define('_FEBRUARY', 'Febrero');
define('_MARCH', 'Marzo');
define('_APRIL', 'Abril');
define('_MAY', 'Mayo');
define('_JUNE', 'Junio');
define('_JULY', 'Julio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Septiembre');
define('_OCTOBER', 'Octubre');
define('_NOVEMBER', 'Noviembre');
define('_DECEMBER', 'Diciembre');

// weight units
define('TEXT_PRODUCT_WEIGHT_UNIT', 'lbs');
