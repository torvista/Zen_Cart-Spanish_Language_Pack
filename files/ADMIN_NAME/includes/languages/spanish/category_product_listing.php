<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack

/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 Jul 16 Modified in v1.5.6c $
 */
define('HEADING_TITLE', 'Categorías / Productos');
define('HEADING_TITLE_GOTO', 'Ir a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorías / Productos');
define('TABLE_HEADING_MODEL', 'Modelo');

define('TABLE_HEADING_PRICE', 'Precio/Oferta/Rebajas');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Orden');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' de ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' activo ');
define('TEXT_CATEGORIES', 'Categorías:');
define('TEXT_PRODUCTS', 'Productos:');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Borrar Categoría');
define('TEXT_DELETE_CATEGORY_INTRO', '¿Está seguro que desea eliminar esta categoría?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Precaución:</strong> No es posible gestionar correctamente los precios de los Productos Vinculados cuya ID Categoría Maestra ha sido borrada. Si quiere borrar una categoría que contiene productos que han sido vinculados, es necesario cambiar su Categoría Maestra a otra categoría ANTES de borrar la categoría');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover Categoría');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Seleccione la categoría en que desea que esté <b>%s</b>');
define('TEXT_MOVE', 'Mover <b>%s</b> a:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Borrar Producto');
define('TEXT_DELETE_PRODUCT_INTRO', '¿Está seguro que desea eliminar permanentemente este producto?<br /><br /><strong>Precaución:</strong> En el case de Productos Vinculados<br />1 Asegúrese de que ha cambiado la Categoría Maestra si va a borrar el producto de su Categoría Maestra<br />2 Marque la casilla de la categoría desde lo que quieres borrar el producto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover Producto');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Seleccione la categoría en que desea que esté <b>%s</b>');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categorías Actuales: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar A');
define('TEXT_INFO_COPY_TO_INTRO', 'Elija la categoría a la que desea copiar este producto');
define('TEXT_INFO_CURRENT_PRODUCT', 'Producto Actual: ');
define('TEXT_HOW_TO_COPY', 'Tipo de Copia:');
define('TEXT_COPY_AS_LINK', 'Vincular este producto a la categoría seleccionada');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar Producto en la categoría seleccionada');
define('TEXT_COPY_METATAGS','¿Copiar Metatags al Duplicado?');
define('TEXT_COPY_LINKED_CATEGORIES','¿Copiar Categorías Vinculadas al Duplicado?');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Se ha copiado los Metatags para Idioma ID#%u desde Producto ID#%u al Producto duplicado ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Se ha copiado la Categoría Vinculada ID#%u desde el Product ID#%u al Producto duplicado ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Se ha copiado los Descuentos del Producto ID#%u al Producto duplicado ID#%u');
define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Cambios de Atributos para Productos ID# ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Características de Atributos para:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Descargas: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Eliminar <strong>TODOS</strong> los Atributos del Producto para:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copiar Atributos a otro <strong>producto</strong> desde:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copiar Atributos a otra <strong>categoría</strong> desde:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>¿Cómo deberían gestionarse los atributos existentes de productos?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', 'Primero <strong>borrar</strong>, luego copiar los nuevos atributos');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Actualizar</strong> con nuevas parámetros/precios, luego añadir nuevos');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorar</strong> y añadir sólo los atributos nuevos');
//define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Agregando Atributo Nuevo desde</strong>');//steve removed for PHP warning as per ZC157
define('ICON_ATTRIBUTES', 'Características del Atributo');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES_ONLY', 'Usado sólo para Productos Duplicados ...');
define('TEXT_COPY_ATTRIBUTES','¿Copiar Atributos del Producto al Duplicado?');
define('TEXT_COPY_ATTRIBUTES_YES', 'Sí');
define('TEXT_COPY_ATTRIBUTES_NO', 'No');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'Usado solo para Duplicados de Productos con Descuentos por Cantidades ...');
define('TEXT_COPY_DISCOUNTS', '¿Copiar Descuentos por Cantidades del Producto al Duplicado?');
define('TEXT_COPY_DISCOUNTS_YES', 'Sí');
define('TEXT_COPY_DISCOUNTS_NO', 'No');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Cambiar el estado de la Categoría:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Cambiar el estado de esta Categoría a: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'Desactivadas');
define('TEXT_CATEGORIES_STATUS_ON', 'Activadas');
define('TEXT_PRODUCTS_STATUS_INFO', 'Cambiar TODOS los estados de los productos incluidos a: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'Desactivados');
define('TEXT_PRODUCTS_STATUS_ON', 'Activados');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Sin Cambiar');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>PRECAUCIÓN ...</strong><br />Nota: Desactivar una categoría desactivará todos los productos de la categoría en cuestión. Los productos enlazados que se encuentren en ella y que están compartidos con otras categorías, también serán desactivados.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Cambiar el estatus de las subcategoías a:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Disactivado');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Activado');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Sinc Cambiar');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'PRECAUCIÓN: Tiene Productos en la Categoría de Primer Nivel. Los precios no funcionarán correctamente en el catálogo. Productos encontrados: ');

define('TEXT_COPY_MEDIA_MANAGER', '¿Copiar media?');
