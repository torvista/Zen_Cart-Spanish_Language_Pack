<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// spanish: added overrides for page titles from group name constants
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2025 Sep 24 Modified in v2.2.0 $
*/
$define = [
    'TEXT_DATA_OUT_OF_RANGE' => 'Datos fuera de rango',
    'TEXT_MIN_GENERAL_ADMIN' => 'El valor mínimo introducido para &quot;%1$s&quot; debe ser un número entero mayor o igual que %2$s. El valor introducido (%3$s) no se guardó.',
    'TEXT_MAX_GENERAL_ADMIN' => 'El valor máximo introducido para &quot;%1$s&quot; debe ser un número entero mayor o igual que %2$s. El valor introducido (%3$s) no se guardó.',

    'TEXT_HINT_CUSTOMERS_ACTIVATION_TOKEN_LENGTH' => 'El valor debe ser un integer entre 12-100.',
    'TEXT_HINT_CUSTOMERS_ACTIVATION_TOKEN_VALID_MINUTES' => 'El valor debe ser un integer entre 1-1440.',
    'TEXT_HINT_PASSWORD_RESET_TOKEN_LENGTH' => 'El valor debe ser un integer entre 12-100.',
    'TEXT_HINT_PASSWORD_RESET_TOKEN_VALID_MINUTES' => 'El valor debe ser un integer entre 1-1440.',

    'TEXT_VALUE_SAVED' => 'El valor para &quot;%1$s&quot; fue cambiado de &quot;%2$s&quot; a &quot;%3$s&quot;.',
//bof custom page titles
    'CFG_GRP_TITLE_MY_STORE' => '%%BOX_CONFIGURATION_MY_STORE%%',
    'CFG_GRP_TITLE_MINIMUM_VALUES' => '%%BOX_CONFIGURATION_MINIMUM_VALUES%%',
    'CFG_GRP_TITLE_MAXIMUM_VALUES' => '%%BOX_CONFIGURATION_MAXIMUM_VALUES%%',
    'CFG_GRP_TITLE_IMAGES' => '%%BOX_CONFIGURATION_IMAGES%%',
    'CFG_GRP_TITLE_CUSTOMER_DETAILS' => '%%BOX_CONFIGURATION_CUSTOMER_DETAILS%%',
    'CFG_GRP_TITLE_SHIPPING_PACKAGING' => '%%BOX_CONFIGURATION_SHIPPING_PACKAGING%%',
    'CFG_GRP_TITLE_PRODUCT_LISTING' => '%%BOX_CONFIGURATION_PRODUCT_LISTING%%',
    'CFG_GRP_TITLE_STOCK' => '%%BOX_CONFIGURATION_STOCK%%',
    'CFG_GRP_TITLE_LOGGING' => '%%BOX_CONFIGURATION_LOGGING%%',
    'CFG_GRP_TITLE_EMAIL_OPTIONS' => '%%BOX_CONFIGURATION_EMAIL_OPTIONS%%',
    'CFG_GRP_TITLE_ATTRIBUTE_OPTIONS' => '%%BOX_CONFIGURATION_ATTRIBUTE_OPTIONS%%',
    'CFG_GRP_TITLE_GZIP_COMPRESSION' => '%%BOX_CONFIGURATION_GZIP_COMPRESSION%%',
    'CFG_GRP_TITLE_SESSIONS' => '%%BOX_CONFIGURATION_SESSIONS%%',
    'CFG_GRP_TITLE_REGULATIONS' => '%%BOX_CONFIGURATION_REGULATIONS%%',
    'CFG_GRP_TITLE_GV_COUPONS' => '%%BOX_CONFIGURATION_GV_COUPONS%%',
    'CFG_GRP_TITLE_CREDIT_CARDS' => '%%BOX_CONFIGURATION_CREDIT_CARDS%%',
    'CFG_GRP_TITLE_PRODUCT_INFO' => '%%BOX_CONFIGURATION_PRODUCT_INFO%%',
    'CFG_GRP_TITLE_LAYOUT_SETTINGS' => '%%BOX_CONFIGURATION_LAYOUT_SETTINGS%%',
    'CFG_GRP_TITLE_WEBSITE_MAINTENANCE' => '%%BOX_CONFIGURATION_WEBSITE_MAINTENANCE%%',
    'CFG_GRP_TITLE_NEW_LISTING' => '%%BOX_CONFIGURATION_NEW_LISTING%%',
    'CFG_GRP_TITLE_FEATURED_LISTING' => '%%BOX_CONFIGURATION_FEATURED_LISTING%%',
    'CFG_GRP_TITLE_ALL_LISTING' => '%%BOX_CONFIGURATION_ALL_LISTING%%',
    'CFG_GRP_TITLE_INDEX_LISTING' => '%%BOX_CONFIGURATION_INDEX_LISTING%%',
    'CFG_GRP_TITLE_DEFINE_PAGE_STATUS' => '%%BOX_CONFIGURATION_DEFINE_PAGE_STATUS%%',
    'CFG_GRP_TITLE_EZPAGES_SETTINGS' => '%%BOX_CONFIGURATION_EZPAGES_SETTINGS%%',
//eof page titles

//example override for configuration constant title
    'CFGTITLE_STORE_NAME' => 'Nombre de la Tienda',
//example override for configuration constant description
    'CFGDESC_STORE_NAME' =>'El nombre de mi tienda',
];

return $define;
