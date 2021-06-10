<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: configuration.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Título');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_INFO_DATE_ADDED', 'Agregado el:');
define('TEXT_INFO_LAST_MODIFIED', 'Última Modificación:');
define('TEXT_MIN_ADMIN_USER_LENGTH', 'Mínimo de 4 caracteres.');
// Validation defines
define('TEXT_DATA_OUT_OF_RANGE', 'Datos fuera de rango');
define('TEXT_MIN_GENERAL_ADMIN', 'El valor mínimo introducido no era un número entero.');
define('TEXT_MAX_GENERAL_ADMIN', 'El valor máximo introducido no era un número entero.');

// These are the same now but may diverge in the future, so it's useful to have separate constants 
define('TEXT_MIN_ADMIN_FIRST_NAME_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_LAST_NAME_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_DOB_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_EMAIL_ADDRESS_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_STREET_ADDRESS_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_COMPANY_LENGTH', 'El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_POSTCODE_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_CITY_LENGTH', 'El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_STATE_LENGTH', 'El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_TELEPHONE_LENGTH', 'El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_PASSWORD_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_CC_OWNER_LENGTH', 'El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_CC_NUMBER_LENGTH','El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_CC_CVV_LENGTH', 'El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_REVIEW_LENGTH', 'El valor debe ser un integer'); 
define('TEXT_MIN_ADMIN_DISPLAY_BESTSELLERS_LENGTH', 'El valor debe ser un integer');
define('TEXT_MIN_ADMIN_DISPLAY_ALSO_PURCHASED_LENGTH', 'El valor debe ser un integer');
define('TEXT_MIN_ADMIN_ENTRY_NICK_LENGTH', 'El valor debe ser un integer');

// Max values 
define('TEXT_MAX_ADMIN_ADDRESS_BOOK_ENTRIES_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PAGE_LINKS_LENGTH',  'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PAGE_LINKS_MOBILE_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SPECIAL_PRODUCTS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_NEW_PRODUCTS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_UPCOMING_PRODUCTS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_MANUFACTURERS_LIST_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_MUSIC_GENRES_LIST_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_RECORD_COMPANY_LIST_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_RECORD_COMPANY_NAME_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_MUSIC_GENRES_NAME_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_MANUFACTURERS_NAME_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_NEW_REVIEWS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_REVIEWS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_NEW_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_SPECIALS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_CATEGORIES_PER_ROW_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_NEW_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_BESTSELLERS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_ALSO_PURCHASED_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_ORDER_HISTORY_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_CUSTOMER_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_ORDERS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_RESULTS_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_RESULTS_CATEGORIES_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_LISTING_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_ROW_LISTS_OPTIONS_LENGTH','El valor debe ser un integer.');
define('TEXT_MAX_ADMIN_ROW_LISTS_ATTRIBUTES_CONTROLLER_LENGTH','El valor debe ser un integer.');
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_DOWNLOADS_MANAGER_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_FEATURED_ADMIN_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_FEATURED_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_FEATURED_PRODUCTS_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_FEATURED_PRODUCTS_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SPECIAL_PRODUCTS_INDEX_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_SHOW_NEW_PRODUCTS_LIMIT_LENGTH','El valor debe ser un integer.');
define('TEXT_MAX_ADMIN_LANGUAGE_FLAGS_COLUMNS_LENGTH','El valor debe ser un integer.');
define('TEXT_MAX_ADMIN_DISPLAY_RESULTS_ORDERS_DETAILS_LISTING_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_PAYPAL_IPN_LENGTH', 'El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_TO_CATEGORIES_COLUMNS_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_EZPAGE_LENGTH','El valor debe ser un integer.'); 
define('TEXT_MAX_PREVIEW','El valor debe ser un integer.');

