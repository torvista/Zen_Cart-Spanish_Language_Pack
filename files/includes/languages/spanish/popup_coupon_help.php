<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 10 Modified in v1.5.7 $
 */

define('TEXT_CLOSE_WINDOW', 'Cerrar Ventana [x]');
define('TEXT_COUPON_HELP_HEADER', '<strong>El código del Cupón que introdujiste es para</strong>.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nombre del Cupón : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Este Cupón aplique un descuento de %s en su pedido');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />El valor total del pedido debe ser superior a %s para poder aplicar este Cupón de Descuento');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Este Cupón de Descuento le permite el envío gratis de su pedido');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Descripción del Cupón : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Este Cupón es válido desde %s al %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restricción por Productos/Categorías/Dirección');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categorías');
define('TEXT_COUPON_HELP_PRODUCTS', 'Productos');

define('TEXT_ALLOWED', ' (Permitido)');
define('TEXT_DENIED', ' (Denegado)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Este Cupón tiene restricciones por productos específicas.</p>');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Este Cupón es válido para todas las categorías.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p> Este Cupón es válido para todos los productos.</p>');
define('TEXT_NO_PROD_SALES', '<p>Este cupón no es válido para productos en rebajas/en oferta.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION', '<p>No es posible usar un Cupón de Descuento en la compra de ' . TEXT_GV_NAMES . '.</p>');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Existen restricciones en función de la dirección del cliente.');
