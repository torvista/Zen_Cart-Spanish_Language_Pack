<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 07 Modified in v1.5.7 $
 */

define('HEADING_TITLE_OPT', 'Opciones de Productos');
define('HEADING_TITLE_VAL', 'Valores de Opciones');
define('HEADING_TITLE_ATRIB', 'Atributos de Productos');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nombre de Producto');
define('TABLE_HEADING_OPT_NAME', 'Nombre de Opción');
define('TABLE_HEADING_OPT_VALUE', 'Valor');
define('TABLE_HEADING_OPT_PRICE', 'Precio');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefijo');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_DOWNLOAD', 'Productos descargables:');
define('TABLE_TEXT_FILENAME', 'Archivo:');
define('TABLE_TEXT_MAX_DAYS', 'Días hasta caducidad:');
define('TABLE_TEXT_MAX_COUNT', 'Nº máximo de descargas:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Esta opción tiene productos y valores enlazados - no es seguro borrarla.<br />NOTA: Una descarga asociada con esta Opción no será borrada del servidor.</span>');
define('TEXT_OK_TO_DELETE', 'Esta opción no tiene productos enlazados - es seguro borrarla.');
define('TEXT_OPTION_ID', 'ID de opción');
define('TEXT_OPTION_NAME', 'Nombre de Opción');

define('ATTRIBUTE_WARNING_DUPLICATE','Atributo Duplicado - El atributo no se añadió'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Existe un atributo duplicado - El atributo no se modificó'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','La opción de atributo y el valor de opción NO coinciden - El atributo no fue añadido'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','La opción de atributo y el valor de opción NO coinciden - El atributo no fue modificado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Posiblemente se añadió un nombre de opción duplicado.'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Posiblemente se añadió un valor de opción duplicado'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','BORRANDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','AÑADIENDO NUEVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTA: Las descargas están desactivadas');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Días:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Ordenación');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Orden por defecto');
  define('TEXT_SORT',' Orden: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefijo');
  define('TABLE_HEADING_OPT_WEIGHT','Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordenación');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo de opción'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Tamaño');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');

  define('TEXT_OPTION_VALUE_COMMENTS','Comentarios: ');
  define('TEXT_OPTION_VALUE_SIZE','Mostrar tamaño: ');
  define('TEXT_OPTION_VALUE_MAX','Longitud máxima: ');

  define('TEXT_ATTRIBUTES_IMAGE','Cambio de imagen de atributo:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Directorio de imágenes de atributo:');

  define('TEXT_ATTRIBUTES_FLAGS','Banderas<br />de atributo:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usado con motivos<br />de visualización solamente:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'El atributo es gratis<br />cuando el producto es gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo por defecto<br />para marcar como seleccionado:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar los mismos descuentos<br />usados para el producto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Incluir precio base<br />al tasar por atributos');

  define('TEXT_PRODUCT_OPTIONS_INFO','Editar opciones de producto para ajustes adicionales');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copiar una Opción y uno de sus Valores a TODOS los productos que tienen una Opción y su Valor = ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Seleccione una Opción y Valor de la Opción que existe actualmente en un producto o productos,  a continuación seleccione la Opción y Valor de Opción que quieres copia a todos los productos (o dentro de UNA categoría) que cumplen con la primera elección.');
  define('TEXT_SELECT_OPTION_FROM', 'Nombre de Opción a coincidir:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Valor de Opción a coincidir:');
  define('TEXT_SELECT_OPTION_TO', 'Nombre de Opción a añadir:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Valor de Opción a añadir:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Deje la casilla en blanco para añadir el Valor a TODOS los productos o<br />introducir un ID de UNA CATEGORÍA para limitarlo');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Copiar una Opción y uno de sus Valores a TODOS los productos que tienen una Opción = ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Seleccione una Opción y uno de sus Valores para añadir a todos los productos (o sólo los productos en la categoría seleccionada) que tienen la Opción elegida en la segunda caja.
                                                   <br /><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Rojo a todos los productos con nombre de opción: Tamaño
                                                   <br /><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con el nombre de opción: Tamaño
                                                   <br /><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con nombre de opción: Tamaño para ID de categorías: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Nombre Opción a coincidir:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Nombre de Opción a añadir:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Valor de Opción a añadir:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Copiar los valores por defecto del nuevo atributo del producto de este ID, o dejar la casilla en blanco para no usar un valor por defecto:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>¿Cómo deberían manejarse los atributos existentes de los productos?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Borrar</strong> primero, después copiar nuevo atributo');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Actualizar</strong> atributos existentes con nueva configuración/precios');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorar</strong> atributos existentes y sólo añadir nuevos atributos');

  define('TEXT_INFO_FROM', ' desde: ');
  define('TEXT_INFO_TO', ' a: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Error: Nombre y Valor de Opción duplicados');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Error: Valor y nombre de Opción no concordantes');
  define('ERROR_OPTION_VALUES_NONE', 'Error: No se encontró nada para copiar');
  define('SUCCESS_OPTION_VALUES_COPIED', '¡Copia exitosa! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Error: Falta el nombre/valor de opción para los ID de productos');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Borrar el Atributo coincidente de TODOS los productos (o los de UNA categoría) donde la Opción y Valor de Opción = ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Seleccione una Opción y Valor de Opción que exista actualmente en un producto que quiera borrar de TODOS los productos (o los productos de UNA categoría).');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Nombre de Opción a coincidir:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Valor de Opción a coincidir:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Error: Nombre de Opción y Valor de Opción no concordantes seleccionados');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Exitosa borradura de: ');
  define('LABEL_FILTER', 'Seleccione Valor de Opción para filtrar');
  define('TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> Valores de Opciones)');
  define('TEXT_SHOW_ALL', 'Show All');
