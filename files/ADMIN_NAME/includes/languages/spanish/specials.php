<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/**TODO lots
 * @package admin
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: specials.php ajeh  Modified in v1.6.0 $
 */

define('HEADING_TITLE', 'Ofertas');

define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio del Producto/Especial/Rebaja');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentaje');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Caduca');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_SPECIALS_PRODUCT', 'Producto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Precio de Oferta:');

define('TEXT_PRE_ADD_SPECIAL_PRICE_RANGE_FROM', 'Rango de Precio del Producto:');
define('TEXT_PRE_ADD_SPECIAL_PRICE_RANGE_TO', 'a:');

define('TEXT_SPECIALS_EXPIRES_DATE', 'Fecha de Caducidad:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Fecha de Disponibilidad:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notas sobre las ofertas:</b><ul><li>Puede ingresar un porcentaje en la celda "Precio de Oferta", por ejemplo: <b>20%</b></li><li>Si ingresa un nuevo precio, el separador decimal debe ser un \'.\' (punto-decimal), por ejemplo: <b>49.99</b></li><li>Deje la fecha de caducidad vacía para que no haya expiración</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Agregado el:');
define('TEXT_INFO_LAST_MODIFIED', 'Última modificación:');
define('TEXT_INFO_NEW_PRICE', 'Nuevo precio:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio original:');
define('TEXT_INFO_DISPLAY_PRICE', 'Mostrar precio:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible el:');
define('TEXT_INFO_EXPIRES_DATE', 'Caduca el:');
define('TEXT_INFO_STATUS_CHANGE', 'Último cambio de estado:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Eliminar oferta');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar el precio de oferta del producto?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Exito: Oferta pre-añadida ... actualice el precio y fecha por favor ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Aviso: ID del Product no especificado ... no se añadió nada ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Aviso: ID del Producto ya está en oferta ... no se añadió nada ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Aviso: ID del Producto es inválido ... no añadió nada ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Añade nueva Especial manualmente utilizando el ID de un Producto');
define('TEXT_INFO_PRE_ADD_INTRO', '<br />Está recomendado utilizar este método para bases de datos grandes, cuando la página tarda mucho tiempo en cargar y la selección de un producto del menú desplegable resulta demasiado difícil por culpa de la cantidad grande de productos disponibles.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Tecle el ID de Producto para ser pre-añadido: ');
define('TEXT_INFO_MANUAL', 'Añade nuevo Oferta manualmente utilizando el ID de un Producto');

define('TEXT_INFO_CATEGORY', 'Global Category Change');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS_CATEGORY', 'GLOBAL CATEGORY CHANGE');
define('TEXT_INFO_PRE_ADD_INTRO_CATEGORY', 'What changes do you want on all Products in this Category?');
define('TEXT_INFO_MANUAL_CATEGORY', 'Set Special on all Products in a Category');
define('TEXT_PRE_ADD_CATEGORY_ID', 'Category ID to set ALL Products on Special:');

define('TEXT_INFO_INCLUDE_SUBCATEGORIES', 'Include Products in ALL subcategories?');
define('TEXT_SKIP_SUBCATEGORIES', 'Yes, include ALL subcategory Products');
define('TEXT_SKIP_SUBCATEGORIES_NO', 'No, skip ALL subcategory Products');

define('TEXT_INFO_INCLUDE_INACTIVE', 'Include inactive Products?');
define('TEXT_SKIP_INACTIVE', 'Yes, include ALL inactive Products');
define('TEXT_SKIP_INACTIVE_NO', 'No, skip ALL inactive Products');

define('TEXT_INFO_SKIP_SPECIALS', 'Skip changes to products already on Special?');
define('TEXT_SKIP_SPECIALS_TRUE', 'Yes, skip changes to existing specials');
define('TEXT_SKIP_SPECIALS_FALSE', 'No, change all products to new special');
define('TEXT_PRE_ADD_SPECIAL_PRICE','Special Price:');
define('TEXT_PRE_ADD_SPECIAL_START_DATE', 'Start Date:');
define('TEXT_PRE_ADD_SPECIAL_END_DATE', 'End Date:');
define('SPECIALS_DATE_ERROR', '&nbsp;<span class="errorText">(eg. 05/21/1970)</span>');
define('ERROR_NOTHING_SELECTED_CATEGORY', 'Category ID or Price not set, nothing was changed');
define('ERROR_NOTHING_SELECTED_CATEGORY_SUB', 'No Products located in Category: %s');

define('TEXT_INFO_MANUAL_CATEGORY_REMOVE', 'Remove specials from all products in Category');
define('TEXT_INFO_HEADING_PRE_REMOVE_SPECIALS_CATEGORY', 'GLOBAL CATEGORY REMOVE SPECIALS');
define('TEXT_INFO_PRE_REMOVE_INTRO_CATEGORY', 'All Specials will be removed from Category');
define('TEXT_PRE_REMOVE_CATEGORY_ID', 'Category ID to delete ALL Products on Special');

define('TEXT_INFO_MANUFACTURER', 'Global Manufacturer Change');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS_MANUFACTURER', 'GLOBAL MANUFACTURER CHANGE');
define('TEXT_INFO_PRE_ADD_INTRO_MANUFACTURER', 'What changes do you want on all Products for this Manufacturer?');
define('TEXT_INFO_MANUAL_MANUFACTURER', 'Set Special on all Products of a Manufacturer');
define('TEXT_PRE_ADD_MANUFACTURER_ID', 'Manufacturer ID to set ALL Products on Special:');
define('ERROR_NOTHING_SELECTED_MANUFACTURER', 'Manufacturer ID or Price not set, nothing was changed');
define('ERROR_NOTHING_SELECTED_MANUFACTURER_SUB', 'No Products located for Manufacturer: %s');

define('TEXT_INFO_MANUAL_MANUFACTURER_REMOVE', 'Remove specials from all products in Manufacturer');
define('TEXT_INFO_HEADING_PRE_REMOVE_SPECIALS_MANUFACTURER', 'GLOBAL MANUFACTURER REMOVE SPECIALS');
define('TEXT_INFO_PRE_REMOVE_INTRO_MANUFACTURER', 'All Specials will be removed from Manufacturer');
define('TEXT_PRE_REMOVE_MANUFACTURER_ID', 'Manufacturer ID to delete ALL Products on Special');

define('SUCCESS_SPECIALS_UPDATED_CATEGORY', 'Specials updated for Category: ');
define('SUCCESS_SPECIALS_REMOVED_CATEGORY', 'Specials removed for Category: ');
define('SUCCESS_SPECIALS_UPDATED_MANUFACTURER', 'Specials updated for Manufacturer: ');
define('SUCCESS_SPECIALS_REMOVED_MANUFACTURER', 'Specials removed for Manufacturer: ');

define('SUCCESS_SPECIALS_UPDATED_MANUFACTURER', 'Specials updated for Manufacturer: ');
define('SUCCESS_SPECIALS_PRICE_SET', 'Specials set to: ');

define('TEXT_SORT_SPECIALS_TITLE_INFO', 'Sort Specials by:');
define('TEXT_SORT_PRODUCTS_ID', 'Products ID#');
define('TEXT_SORT_MODEL_NAME', 'Model #, Product Name');
define('TEXT_SORT_NAME_MODEL', 'Product Name, Model #');
define('TEXT_SORT_AVAILABLE_DESC_NAME', 'Available Desc, Product Name');
define('TEXT_SORT_AVAILABLE_ASC_NAME', 'Available Asc, Product Name');
define('TEXT_SORT_EXPIRE_DESC_NAME', 'Expires Desc, Product Name');
define('TEXT_SORT_EXPIRE_ASC_NAME', 'Expires Asc, Product Name');
define('TEXT_SORT_STATUS_NAME_DESC_NAME', 'Status Desc, Product Name');
define('TEXT_SORT_STATUS_NAME_ASC_NAME', 'Status Asc, Product Name');
