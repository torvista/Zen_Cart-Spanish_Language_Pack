<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Gestión de Atributos');

define('HEADING_TITLE_OPT', 'Opciones de Producto');
define('HEADING_TITLE_VAL', 'Valores de Opciones');
define('HEADING_TITLE_ATRIB', 'Gestionar Atributos');
define('HEADING_TITLE_ATRIB_SELECT', 'Elija un producto del cual mostrar sus atributos...');

define('TEXT_PRICES_AND_WEIGHTS', 'Precios y pesos');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Factor de Precio: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Desviación: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Una Vez:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Factor Una Vez: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Desviación: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Atributos de Descuento por Cantidad:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Descuentos por Cantidad Atributos UnaVez:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Precio Por Palabra:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Palabras Gratis:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Precio Por Letra:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Letras Gratis:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nombre de Producto');
define('TABLE_HEADING_OPT_NAME', 'Nombre de Opción');
define('TABLE_HEADING_OPT_VALUE', 'Valor de Opción');
define('TABLE_HEADING_OPT_PRICE', 'Precio');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefijo');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_DOWNLOAD', 'Productos descargables:');
define('TABLE_TEXT_FILENAME', 'Nombre Fichero:');
define('TABLE_TEXT_MAX_DAYS', 'Caducidad de la descarga (0 = sin limitación):');//steve colon moved
define('TABLE_TEXT_MAX_COUNT', 'Cantidad máxima de descargas:');
define('TABLE_HEADING_PRICE_TOTAL','Total|Desc: Unavez:');
define('TEXT_WARNING_OF_DELETE', 'Esta opción tiene productos y valores vinculados a ella; no es seguro eliminarla.');
define('TEXT_OK_TO_DELETE', 'Esta opción no tiene productos y valores vinculados a ella; es seguro eliminarla.');
define('TEXT_OPTION_ID', 'ID de Opción');
define('TEXT_OPTION_NAME', 'Nombre de Opción');

define('ATTRIBUTE_WARNING_DUPLICATE', 'Atributo duplicado - El atributo no fue añadido'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE', 'Atributo duplicado - El atributo no fue modificado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH', 'Opción de atributo y valor de atributo NO coinciden - El atributo no fue añadido'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE', 'Opción de atributo y valor de atributo NO coinciden - El atributo no fue modificado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE', 'Se añadió una posible duplicación de nombre de opción'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE', 'Se Agregó una posible duplicación de valor de opción'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING', 'EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE', 'ELIMINANDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING', 'AGREGANDO NUEVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED', 'NOTA: las descargas están deshabilitadas');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Días:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Máx:');

  define('TABLE_HEADING_OPTION_SORT_ORDER', 'Orden');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER', 'Orden por defecto');
  define('TEXT_SORT', ' Orden: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX', 'Prefijo');
  define('TABLE_HEADING_OPT_WEIGHT', 'Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER', 'Orden');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo de opción'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE', 'Tamaño');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');

  define('TEXT_OPTION_VALUE_COMMENTS', 'Comentarios: ');
  define('TEXT_OPTION_VALUE_SIZE', 'Mostrar tamaño: ');
  define('TEXT_OPTION_VALUE_MAX', 'Tamaño máximo: ');

  define('TEXT_ATTRIBUTES_IMAGE', 'Imagen de muestra de los atributos:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR', 'Directorio de las imágenes de los atributos:');

  define('TEXT_ATTRIBUTES_FLAGS', 'Atributos:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Mostrar texto sólo<br />no es una elección:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Atributo gratis<br />cuando el producto es gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo por defecto<br />marcado como seleccionado:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar los mismos descuentos<br />usados por el producto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED', 'Incluir en el precio base<br />En precios c/atributos');
  define('TEXT_ATTRIBUTES_REQUIRED','Atributo Requerido<br />para Texto:');

  define('LEGEND_BOX','Leyenda:');
  define('LEGEND_KEYS','Desactivado/Activado');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Solamente mostrar texto/no elección');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Gratis');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'Por defecto');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Descontado');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Precio base');
  define('LEGEND_ATTRIBUTES_REQUIRED','Requerido');
  define('LEGEND_ATTRIBUTES_IMAGES','Imágenes');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Nombre de archivo<br />válido/erróneo');

  define('TEXT_NO_PRODUCTS_SELECTED', 'Falta elegir producto');
  define('TEXT_NO_ATTRIBUTES_DEFINED', 'Atributos sin definir para el producto ID#');

  define('TEXT_PRODUCTS_ID', 'Productos ID#');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Cambios de atributos para los productos ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Eliminar <strong>TODOS</strong> los atributos de producto para:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO', 'Copiar atributos a otro producto o a una categoría entera desde:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copiar atributos a otro <strong>Producto</strong> desde ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO', 'Seleccione el producto al que copiar todos los atributos:');

  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO', 'Seleccione la categoría a la que copiar los atributos:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copiar atributos a todos los productos en la <strong>Categoría</strong> desde el Producto ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>¿Cómo deberían manipularse los atributos de productos existentes?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE', 'Primero <strong>borre</strong>, luego copie los nuevos atributos');
  define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Actualice</strong> con nuevas configuraciones/precios, luego añada otros');
  define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorar</strong> y añadir sólo los nuevos atributos');

  define('SUCCESS_PRODUCT_UPDATE_SORT', 'Orden de atributos actualizado correctamente para ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE', 'Sin atributos a los que actualizar el orden para ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED', 'Atributos eliminados correctamente');
  define('SUCCESS_ATTRIBUTES_UPDATE', 'Atributos actualizados correctamente');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE', 'No seleccionó una categoría para la copia');

  define('TEXT_DELETE_ALL_ATTRIBUTES', '¿Seguro que desea eliminar todos los atributos para ID# ');

// preview
  define('TEXT_PRODUCT_OPTIONS', '<strong>Elija:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Defina la configuración de los atributos y luego presione el botón Insertar</strong>');
  define('TEXT_PRODUCTS_PRICE', 'Precio de productos: ');
  define('TEXT_FREE', 'GRATIS');
  define('TEXT_CALL_FOR_PRICE', 'Pedir Precio');
  define('TEXT_SAVE_CHANGES','ACTUALIZAR Y GUARDAR CAMBIOS:');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Confirmar borrado de TODOS los Valores de Opciones del Producto para la Nombre de Opción ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Nombre Producto: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Nombre Opción: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Los Valores de Opciones han sido borrados por Opción Nombre: ');

  define('BUTTON_ADDITIONAL_ACTIONS', 'Acciones Adicionales');
  define('TEXT_EDIT_OPTION_VALUE', 'Editar Valor Opción');
  define('TEXT_DELETE_OPTION_VALUE', 'Borrar Valor Opción');
  define('TEXT_UPDATE_DEFAULT_SORT_ORDER', 'Resetear orden a los valores por defecto');
  define('TEXT_DELETE_ALL_OPTIONS_FROM_PRODUCT', 'Borrar todas las opciones del producto');
  define('TEXT_COPY_ALL_OPTIONS_TO_PRODUCT', 'Copiar las opciones a otro producto');
  define('TEXT_COPY_ALL_OPTIONS_TO_CATEGORY', 'Copiar las opciones a una categoría ENTERA');
 define('TEXT_DISPLAY_NUMBER_OF_ATTRIBUTES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> Atributos)');
