<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Cupones de descuento');
define('HEADING_TITLE', 'Cupones de descuento');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> no parece ser un cup�n de descuento v�lido. Pruebe a teclearlo de nuevo.');

define('HEADING_COUPON_HELP', 'Ayuda');
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">El c�digo del cup�n de descuento que ha introducido es para  ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Oferta de Descuentos:</span> %s</p><p class="smallText">Es posible que se apliquen otras restricciones. Consulte debajo para m�s detalles.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>El cup�n es v�lido entre %s y %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Restricciones del cup�n de descuento</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Restricciones en categor�as:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Restricciones en productos:</p>');
define('TEXT_ALLOW', 'Permitido');
define('TEXT_DENY', 'No permitido');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Este cup�n es v�lido para cualquier categor�a.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Este cup�n es v�lido para todos los productos.</p>');
define('TEXT_CAT_ALLOWED', ' (V�lido para esta categor�a)');
define('TEXT_CAT_DENIED', ' (No permitido en esta categor�a)');
define('TEXT_PROD_ALLOWED', ' (V�lido para este producto)');
define('TEXT_PROD_DENIED', ' (No permitido para este producto)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Los cupones de descuento no pueden aplicarse para la compra de ' . TEXT_GV_NAMES . '. S�lo puede usarse un cup�n por pedido.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Buscar cup�n de descuento ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Su c�digo: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Se aplican restricciones en las direcciones de facturaci�n.');
?>