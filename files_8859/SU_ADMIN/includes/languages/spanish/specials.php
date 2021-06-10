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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Ofertas');

define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio del Producto/Especial/Rebaja');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentaje');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Caduca');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_SPECIALS_PRODUCT', 'Producto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Precio de Oferta:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Fecha de Caducidad:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Fecha de Disponibilidad:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notas sobre las ofertas:</b><ul><li>Puede ingresar un porcentaje en la celda "Precio de Oferta", por ejemplo: <b>20%</b></li><li>Si ingresa un nuevo precio, el separador decimal debe ser un \'.\' (punto-decimal), por ejemplo: <b>49.99</b></li><li>Deje la fecha de caducidad vac�a para que no haya expiraci�n</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Agregado el:');
define('TEXT_INFO_LAST_MODIFIED', '�ltima modificaci�n:');
define('TEXT_INFO_NEW_PRICE', 'Nuevo Precio:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio original:');
define('TEXT_INFO_DISPLAY_PRICE', 'Mostrar precio:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible el:');
define('TEXT_INFO_EXPIRES_DATE', 'Caduca el:');
define('TEXT_INFO_STATUS_CHANGE', '�ltimo cambio de estado:');
define('TEXT_IMAGE_NONEXISTENT', 'La imagen no existe');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Eliminar oferta');
define('TEXT_INFO_DELETE_INTRO', '�Seguro que desea eliminar el precio de oferta del producto?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Exito: Pre-A�ade de Especial ... actualice el precio y fecha por favor ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Aviso: ID del Product no especificado ... no se a�adi� nada ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Aviso: ID del Product ya est� en oferta ... no se a�adi� nada ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Aviso: ID del Producto es inv�lido ... no a�adi� nada ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'A�ade nueva Especial manualmente utilizando el ID de un Producto');
define('TEXT_INFO_PRE_ADD_INTRO', '<br />Est� recomendado utilizar este m�todo para bases de datos grandes, cuando la p�gina tarda mucho tiempo en cargar y la selecci�n de un producto del men� desplegable resulta demasiado dif�cil por culpa de la cantidad grande de productos disponibles.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Tecle el ID de Producto para ser Pre-a�adido: ');
define('TEXT_INFO_MANUAL', 'A�ade nuevo Oferta manualmente utilizando el ID de un Producto');
?>