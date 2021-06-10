<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 14141 2009-08-10 19:34:47Z wilt $
 */

define('HEADING_COUPON_HELP', 'Ayuda de los cupones de descuento');
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');
define('TEXT_COUPON_HELP_HEADER', 'Felicidades, ha canjeado un cup�n de descuento.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nombre del cup�n : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Este cup�n tiene la cantidad de %s de descuento en su pedido');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Necesita gastar un m�nimo de %s para usar este cup�n de descuento');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Este cup�n de descuento le permite el env�o gratis de su pedido');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Descripci�n del cup�n : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Este vale es v�lido desde %s al %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restricci�n de Productos/Categor�as');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categor�a');
define('TEXT_COUPON_HELP_PRODUCTS', 'Producto');
define('TEXT_ALLOW', 'Permitir');
define('TEXT_DENY', 'Negar');

define('TEXT_ALLOWED', ' (Permitido)');
define('TEXT_DENIED', ' (Denegado)');

define('TEXT_NO_CAT_RESTRICTIONS', '<p>Este cup�n es v�lido para todas las categor�as.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p> Este cup�n es v�lido para todos los productos.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION', 'Los cupones de descuento no se aplican a la compra de ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Existen restricciones en funci�n la direcci�n de facturaci�n.');
?>