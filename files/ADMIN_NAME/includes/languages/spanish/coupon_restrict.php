<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2019 Aug 10 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Restricciones de los Cupones para Productos/Categorías');
define('HEADING_TITLE_CATEGORY', 'Restricciones de Categorías');
define('HEADING_TITLE_PRODUCT', 'Restricciones de Productos');

define('SUB_HEADING_COUPON_NAME', 'Restricciones para el Cupón &quot;%1$s&quot; [%2$u].');  //-%1$s = coupon-name, %2$u = coupon_id

define('TABLE_HEADING_CATEGORY_ID', 'ID Categoría');
define('TABLE_HEADING_CATEGORY_NAME', 'Nombre Categoría');
define('TABLE_HEADING_PRODUCT_NAME', 'Nombre de Producto');
define('TABLE_HEADING_PRODUCT_ID', 'ID de Producto');
define('TABLE_HEADING_RESTRICT', 'Restricción');
define('TABLE_HEADING_RESTRICT_REMOVE', 'Eliminar');
define('IMAGE_REMOVE', 'Eliminar esta Restricción');
define('TEXT_ALL_CATEGORIES', 'Todas las Categorías');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Añade Todos los Productos de la Categoría');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Quitar Todos los Productos de la Categoría');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Al Añadir Todos los Productos, solamente se añadirán los productos que no tengan actualmente ninguna restricción.<br />
                    Al seleccionar Quitar Todos los Productos, solamente se quitarán los productos para los que se ha especificado Denegado o Permitido.</strong>');

define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Categoría no Completada');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Producto no Completado');

define('HEADER_MANUFACTURER_NAME', '<br> -- OR -- <br>' . 'Fabricante: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Añadir todos los productos del fabricante');
define('TEXT_ALL_MANUFACTURERS_REMOVE', ' Quitar todos los productos del fabricante ');

define('TABLE_HEADING_STATUS', 'Estatus');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Los filtros de Categoría y Fabricante han sido reseteado. Utilice los filtros por separado.');

define('TEXT_PULLDOWN_ALLOW', 'Permitir');
define('TEXT_PULLDOWN_DENY', 'Denegar');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Añadir');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Actualizar');
define('TEXT_STATUS_TOGGLE', 'Alternar');
define('TEXT_STATUS_TOGGLE_TITLE', 'Pinche aquí para alternar el estatus de la restricción);
define('TEXT_ALLOWED', 'Producto o Categoría está permitido');
define('TEXT_DENIED', 'Productto o Categoría no está permitido');

define('TEXT_NO_CATEGORY_RESTRICTIONS', 'Actualmente no hay Restricciones de Categoría');
define('TEXT_NO_PRODUCT_RESTRICTIONS', 'Actualmente no hay Restricciones de Producto');
