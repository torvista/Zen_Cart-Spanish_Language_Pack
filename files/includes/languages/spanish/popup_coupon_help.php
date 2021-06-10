<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/**
 * @package languageDefines
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 14141 2009-08-10 19:34:47Z wilt $
 */

define('TEXT_COUPON_HELP_HEADER', 'Felicidades, ha canjeado un Cupón de Descuento.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nombre del Cupón : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Este Cupón tiene la cantidad de %s de descuento en su pedido');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Necesita gastar un mínimo de %s para usar este cupón de descuento');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Este Cupón de Descuento le permite el envío gratis de su pedido');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Descripción del Cupón : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Este Cupón es válido desde %s al %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restricción por Productos/Categorías');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categoría');
define('TEXT_COUPON_HELP_PRODUCTS', 'Producto');
define('TEXT_ALLOW', 'Permitir');
define('TEXT_DENY', 'No Permitir');

define('TEXT_ALLOWED', ' (Permitido)');
define('TEXT_DENIED', ' (Denegado)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Este Cupón tiene restricciones por productos específicas.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Este Cupón es válido para todas las categorías.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p> Este Cupón es válido para todos los productos.</p>');
define('TEXT_NO_PROD_SALES', '<p>This coupon is not valid for products on sale.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION', 'Los Cupones de Descuento no se aplican a la compra de ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Existen restricciones en función de la Dirección de Facturación.');
