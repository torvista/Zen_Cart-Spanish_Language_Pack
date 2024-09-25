<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
//overrides of core values for locale, date format, weight to kg, "factura"->"pedido"

declare(strict_types=1);
//'es-ES': windows, 'es_ES': unix
@setlocale(LC_TIME, ['es_ES', 'es-ES', 'es_ES.utf8', 'es-ES', 'es']);

$define = [
//lang.spanish.php
    'ADMIN_NAV_DATE_TIME_FORMAT' => '%A %d %b %Y %H:%M', //changed time to hours:mins
    'BOX_CUSTOMERS_INVOICE' => 'Pedido',
    'DATE_FORMAT' => 'd/m/Y',
    'DATE_FORMAT_DATE_PICKER' => 'yy-mm-dd',
    'DATE_FORMAT_LONG' => '%A %d %B, %Y',
    'DATE_FORMAT_SHORT' => '%d/%m/%Y',
    'DATE_FORMAT_SPIFFYCAL' => 'dd/MM/yyyy',
    'IMAGE_ORDERS_INVOICE' => 'Pedido',
    'PHP_DATE_TIME_FORMAT' => 'd/m/Y H:i:s',
    'TEXT_PRODUCT_WEIGHT_UNIT' => 'kg',

//lang.stats_customers_referrals
    'TEXT_INFO_START_DATE' => 'Fecha Inicio (d-m-y)',
    'TEXT_INFO_END_DATE' => 'Fecha Final (d-m-y)',
];
return $define;
