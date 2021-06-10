<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Mar 08 Modified in v1.5.7 $
 */


define('HEADING_TITLE', 'Ofertas');

define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_STOCK', 'Stock');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio/Oferta/Rebaja');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible Desde');
define('TABLE_HEADING_EXPIRES_DATE','Caduca En');
define('TABLE_HEADING_STATUS', 'Estado Oferta');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_ADD_SPECIAL_SELECT', 'Añadir Oferta por Selección');
define('TEXT_ADD_SPECIAL_PID', 'Añadir Oferta por ID Producto');
define('TEXT_SEARCH_SPECIALS', 'Buscar en las Ofertas Actuales');
define('TEXT_SPECIAL_ACTIVE', 'Oferta Activada:');
define('TEXT_SPECIAL_INACTIVE', 'Oferta Desactivada');
define('TEXT_SPECIAL_STATUS_BY_DATE', 'Estatus definido por las fechas');

define('TEXT_SPECIALS_PRODUCT', 'Producto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Precio Oferta:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Fecha Oferta Activada:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Fecha Oferta Desactivada:');

define('TEXT_INFO_DATE_ADDED', 'Fecha Añadida:');
define('TEXT_INFO_LAST_MODIFIED', 'Fecha Modificada:');
define('TEXT_INFO_NEW_PRICE', 'Precio Oferta:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio Original:');
define('TEXT_INFO_DISPLAY_PRICE', 'Precio Publicado Actualmente:');
define('TEXT_INFO_STATUS_CHANGED', 'Estado Cambiado:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Eliminar oferta');
define('TEXT_INFO_DELETE_INTRO', '¿Esta seguro que desea eliminar la Oferta del producto?');

define('WARNING_SPECIALS_PRE_ADD_PID_EMPTY', 'Aviso: No especifica el ID del Producto.');
define('WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE', 'Aviso: ID#%u Producto ya está en Oferta.');
define('WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST', 'Aviso: ID#%u Producto no existe.');
if (!defined('TEXT_GV_NAME')) {
    require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
}
define('WARNING_SPECIALS_PRE_ADD_PID_GIFT', 'Aviso: ID#%u Producto es un ' . TEXT_GV_NAME . '.');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Añade nueva Oferta por el ID de un Producto');
define('TEXT_INFO_PRE_ADD_INTRO', 'Se puede añadir una Oferta por ID del Producto. Puede ser apropiado usar este método para bases de datos grandes, cuando la página tarda mucho tiempo en cargar el menú desplegable.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Tecle el ID de Producto para ser pre-añadido: ');

define('TEXT_SPECIALS_PRICE_NOTES', '<b>Notas:</b><ul><li>La Oferta puede ser un precio (sin impuestos). El separador decimal debe ser un "." (punto decimal), por ejemplo: <b>49.99</b>. El porcentaje de descuento calculado se muestra junto al nuevo precio del producto en el catálogo.</li><li>La Oferta puede ser un porcentaje de descuento, por ejemplo: <b>20%</b>.</li><li>Las fechas de inicio / finalización no son obligatorias. Puede dejar la fecha de vencimiento vacía sin vencimiento.</li><li>Cuando se establecen fechas, el estado de la Oferta se habilita / deshabilita automáticamente en consecuencia.</li><li>'. TEXT_INFO_PRE_ADD_INTRO. '</li> </ul>');
