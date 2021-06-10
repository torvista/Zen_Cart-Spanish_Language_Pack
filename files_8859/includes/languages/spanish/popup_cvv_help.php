<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', '�Qu� es el CVV?');
define('TEXT_CVV_HELP1', 'N�mero de verificaci�n de 3 d�gitos de las tarjetas Visa, Mastercard y Discover tajetas de tres d�gitos.<br /><br />
                    Por su seguridad, le pedimos que introduzca el n�mero de verificaci�n de su tarjeta.<br /><br />
                    El n�mero de verificaci�n son los �ltimos 3 d�gitos impresos al dorso de su tarjeta.
                    Aparece a la derecha, a continuaci�n del n�mero de su tarjeta.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'N�mero de verificaci�n de 4 d�gitos de las tarjetas American Express<br /><br />
                    Por su seguridad, le pedimos que introduzca el n�mero de verificaci�n de su tarjeta.<br /><br />
                    El n�mero de verificaci�n de 4 d�gitos impreso al dorso de su tarjeta American Express.
                    Aparece a la derecha, a continuaci�n el n�mero de su tarjeta.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Cerrar ventana');
?>