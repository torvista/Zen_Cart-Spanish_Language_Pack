<?php //Spanish Language Pack UTF-8: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
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
//  $Id: featured.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Productos Destacados');

define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio/Especial/Oferta de productos');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentaje');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Caduca');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_FEATURED_PRODUCT', 'Producto:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Fecha de caducidad:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Fecha de disponibilidad:');

define('TEXT_INFO_DATE_ADDED', 'Añadido el:');
define('TEXT_INFO_LAST_MODIFIED', 'Última modificación:');
define('TEXT_INFO_NEW_PRICE', 'Nuevo precio:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio original:');
define('TEXT_INFO_PERCENTAGE', 'Porcentaje:');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible el:');
define('TEXT_INFO_EXPIRES_DATE', 'Caduca en:');
define('TEXT_INFO_STATUS_CHANGE', 'Cambio de estado:');
define('TEXT_IMAGE_NONEXISTENT', 'No existe el imagen');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Borrar destacado');
define('TEXT_INFO_DELETE_INTRO', '¿Está seguro de que desa borrar este producto destacado?');

define('SUCCESS_FEATURED_PRE_ADD', 'Éxito: Pre-Añade de Destacados ... actualice las fechas por favor ...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Aviso: No se especificó el ID del Producto ... no se añadió nada ...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Aviso: Este ID de Producto ya está en Espaciales ... no se añadió nada ...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Aviso: El ID de Producto es inválido ... no se añadió nada ...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Añade un nuevo Producto Destacado manualmente utilizando su ID de Producto');
define('TEXT_INFO_PRE_ADD_INTRO', 'En bases de datos grandes, puede añadir un nuevo Producto Destacado manualmente utilizando su ID de Producto.<br /><br />Está recomendado utilizar este método cuando la página tarda mucho tiempo en cargar y la selección de un producto del menú desplegable resulta demasiado difícil por culpa de la cantidad grande de productos disponibles.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Tecle el ID de Producto para ser Pre-añadido: ');
define('TEXT_INFO_MANUAL', 'ID del Producto para ser añadido manualmente como Destacado');
?>