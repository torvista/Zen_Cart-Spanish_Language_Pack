<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Apr 30 Modified in v1.5.7 $
 */
define('HEADING_TITLE', 'Gestor de Nombre de Opciones');
define('TEXT_ATTRIBUTES_CONTROLLER', 'Gestor de Atributos');

define('TEXT_WARNING_TEXT_OPTION_NAME_RESTORED', 'Precaución: Faltaba el Valor de Opción de serie TEXT ID#0 de la tabla "' . TABLE_PRODUCTS_OPTIONS_VALUES . '". Es posible que había sido borrado por un Plugin por error.<br>Ha sido restaurado.');
define('TABLE_HEADING_PRODUCT', 'Nombre Producto');
define('TABLE_HEADING_OPTION_NAME', 'Nombre de Opción');
define('TABLE_HEADING_OPTION_VALUE', 'Valor de Opción');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Nota: Editar el Nombre de Opción para parámetros adicionales</strong>');

define('TEXT_WARNING_OF_DELETE', 'Este Nombre de Opción es utilizado por los productos listados a continuación: no se puede eliminarlo hasta que todos los Valores de Opciones (atributos) asociados con este Nombre de Opción se hayan eliminado de estos productos (esto se puede hacer usando las Herramientas Globales a continuación)') ;
define('TEXT_OK_TO_DELETE', 'Este Nombre de Opción no es utilizado por ningún producto; es seguro eliminarlo.<br><strong>Advertencia:</strong> esto eliminará tanto el Nombre de Opción como todos los Valores de Opción asociados con ese nombre.') ;

define('TEXT_OPTION_ID', 'ID Opción');
define('TEXT_OPTION_NAME', 'Nombre Opción');

define('TEXT_WARNING_DUPLICATE_OPTION_NAME','ID Opción #%1$u: Nombre Opción duplicado añadido: "%2$s" (%3$s)');

define('TEXT_ORDER_BY','Ordenar por');
define('TEXT_SORT_ORDER','Órden');

define('TABLE_HEADING_OPTION_TYPE', 'Tipo de Opción');
define('TABLE_HEADING_OPTION_NAME_SIZE','Tamaño');
define('TABLE_HEADING_OPTION_NAME_MAX','Max');

define('TEXT_OPTION_NAME_COMMENTS','Nota (mostrado al lado del Nombre de la Opción');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Imágenes de atributos por cada fila: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Estilo de imágenes de atributos (solamente para Checkbox/Radio Buttons');
define('TEXT_OPTION_ATTRIBUTE_LAYOUTS_EXAMPLE', 'Ver Ejemplos');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0 - Selección + texto, Imágenes debajo de las Opciones');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1 - Select + Imagen + Opción en línea');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2 - Select + Opción + Imagen ajustada');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3 - Select + Imagen + Opción ajustada');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4 - Imagen + Opción + Select en columna');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5 - Select + Imagen + Opción en columna');
//text attributes only
define('TEXT_OPTION_NAME_ROWS', 'Filas');
define('TEXT_OPTION_NAME_SIZE','Tamaño Display');
define('TEXT_OPTION_NAME_MAX','Longitud Máximo');
define('TEXT_OPTION_TYPE_TEXT_ATTRIBUTE_INFO', 'Nota: ' . TEXT_OPTION_NAME_ROWS . ', ' . TEXT_OPTION_NAME_SIZE . ' y ' . TEXT_OPTION_NAME_MAX . ' son solamente para Nombre de Opción tipo "Text".');
define('TEXT_INSERT_NEW_OPTION_NAME', 'Añadir un Nombre de Opción nuevo');

// Global Tools
define('TEXT_GLOBAL_TOOLS', 'Herramientas Globales');
define('TEXT_CLICK_TO_SHOW_HIDE', 'pinche para mostrar/esconder');
define('TEXT_WARNING_BACKUP', '¡Importante: Siempre haga un backup verificado de la base de datos antes de hacer cambios globales!');
define('TEXT_SELECT_OPTION_TYPES_ALLOWED', 'Nota: no se puede usar las Herramientas Globales con los tipos de opción "Text" o "File".');
define('TEXT_SELECT_PRODUCT', ' Seleccione un Producto');
define('TEXT_SELECT_CATEGORY', ' Seleccione una Categoría');
define('TEXT_SELECT_OPTION', 'Seleccione una Nombre de Opción');
define('TEXT_NAME', 'Nombre');

// Add
define('TEXT_INFO_OPTION_VALUES_ADD', '<strong>Nota:</strong> para productos que se actualizan (reciben Valores de Opción adicionales) utilizando las herramientas <b>Añadir</b>, el orden de los Valores de la Opción (atributos) se restablecerá al orden <strong>predeterminado</strong> para ese Nombre de Opción. ');

define('TEXT_OPTION_VALUE_ADD_ALL', 'Actualizar (añadir) todos los Valores de la Opción a TODOS los productos que usar esta Opción');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Para TODOS los productos que usan esta Nombre de Opción (y así tienen por lo menos UN valor asignado), añade TODOS los otros Valores de esta Opción.');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', 'Actualizar (añadir) todos los otros Valores a UN producto que usa está Nombre de Opción');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Para UN producto que usa esta Nombre de Opción (y así tiene por lo menos UN valor asignado), añade TODOS los otros Valores de esta Opción.');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', 'Actualizar (añadir) todos los Valores de una Opción a TODOS los productos en a UNA categoría');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Para TODOS los productos en UNA categoría, que usan esta Nombre de Opción (y así tienen por lo menos UN valor asignado), añade TODOS los otros Valores de esta Opción.');
define('TEXT_SHOW_CATEGORY_PATH', 'Mostrar la ruta de la categoría');
define('TEXT_SHOW_CATEGORY_NAME', 'Mostrar solamente el nombre de la categoría');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUE', 'Nombre de Opción "%1$s": Valor "%2$s" añadido a producto "%3$s".');
define('SUCCESS_PRODUCT_OPTIONS_VALUES_SORT_ORDER', 'Nombre Opción "%1$s": producto "%2$s" Valores actualizados al orden por defecto para Nombre de Opción "%1$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Nombre de Opción "%1$s": %2$u producto(s) actualizado(s) con Valores adicionales.');

define('ERROR_PRODUCTS_OPTIONS_PRODUCTS', 'Precaución: No se encontró un producto que usa el Nombre de Opción "%s" (no se actualizó nada).');
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Aviso: Todos los productos ya tienen todos los Valores para Nombre de Opción "%s" (no sea actualizó nada).');

// Delete
define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTA:</strong> Se eliminará todos los Valores desde los productos. No eliminará los Valores definidos para esa Nombre de Opción.');
define('TEXT_OPTION_VALUE_DELETE_ALL', 'Borrar todos los Valores de TODOS los productos que usan esta Nombre de Opción');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Para TODOS los productos que usan esta Nombre de Opción,, quita todos los Valores/esa Opción.');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', 'Borrar todos los Valores de UN producto que usa esta Opción');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Para UN producto que usa esta Nombre de Opción, quita TODOS los Valores/la Opción.');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', 'Borrar TODOS los Valores de una Opción de TODOS los productos dentro de UNA categoría');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Para TODOS los productos en UNA categoría que usan esta Nombre de Opción, quita todos los Valores/la Opción.');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUES_DELETED', 'Nombre de Opción "%1$s": todos los Valores han sido borrados del producto "%2$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES_DELETED', 'Nombre de Opción "%1$s": todos los Valores han sido borrados del %2$u producto(s).');

// Copy
define('TEXT_OPTION_VALUE_COPY_ALL', 'Copiar todos los Valores a otra Nombre de Opción');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Todos los Valores de la Opción seleccionada serán copiados/duplicados a otra Nombre de Opción.');
define('TEXT_SELECT_OPTION_FROM', 'Copiar desde Nombre de Opción: ');
define('TEXT_SELECT_OPTION_TO', 'Copiar al Nombre de Opción: ');

define('SUCCESS_OPTION_VALUE_COPIED', 'Valor de Opción "%6$s" ID#%5$u copiado del Nombre de Opción "%2$s" ID#%1$u al Nombre de Opción "%4$s" ID#%3$u.');
define('SUCCESS_OPTION_VALUES_COPIED', '%5$u Valor(es) de Opción copiado(s) del Nombre de Opción "%2$s" ID#%1$u al Nombre de Opción "%4$s" ID#%3$u.');
define('ERROR_OPTION_VALUES_COPIED', 'Error: ¡No se puede copiar Valores al mismo Nombre de Opción ("%2$s" ID#%1$u a "%4$s" ID#%3$u)!');
define('ERROR_OPTION_VALUES_NONE', 'Error: Nombre de Opción "%2$s" ID#%1$u no tiene Valores definidos (no se copió nada)');
