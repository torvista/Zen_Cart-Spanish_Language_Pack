<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE_OPT', 'Opciones de productos');
define('HEADING_TITLE_VAL', 'Valores de opci�n');
define('HEADING_TITLE_ATRIB', 'Atributos de productos');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nombre de producto');
define('TABLE_HEADING_OPT_NAME', 'Nombre de opci�n');
define('TABLE_HEADING_OPT_VALUE', 'Valor de opci�n');
define('TABLE_HEADING_OPT_PRICE', 'Precio');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefijo');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_DOWNLOAD', 'Productos descargables:');
define('TABLE_TEXT_FILENAME', 'Archivo:');
define('TABLE_TEXT_MAX_DAYS', 'D�as hasta caducidad:');
define('TABLE_TEXT_MAX_COUNT', 'N� m�ximo de descargas:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Esta opci�n tiene productos y valores enlazados - no es seguro borrarla.<br />NOTA: Una descarga asociada con esta Opci�n no ser� borrada del servidor.</span>');
define('TEXT_OK_TO_DELETE', 'Esta opci�n no tiene productos enlazados - es seguro borrarla.');
define('TEXT_OPTION_ID', 'ID de opci�n');
define('TEXT_OPTION_NAME', 'Nombre de opci�n');
define('TABLE_HEADING_OPT_DISCOUNTED','Descontado');

define('ATTRIBUTE_WARNING_DUPLICATE','Atributo duplicado - El atributo no se a�adi�'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Existe un atributo duplicado - El atributo no se modific�'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','La opci�n de atributo y el valor de opci�n NO coinciden - El atributo no fue a�adido'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','La opci�n de atributo y el valor de opci�n NO concuerdan - El atributo no fue modificado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Posiblemente se a�adi� un nombre de opci�n duplicado.'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Posiblemente se a�adi� un valor de opci�n duplicado'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','BORRANDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','A�ADIENDO NUEVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTA: Las descargas est�n desactivadas');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'D�as:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Max:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Ordenaci�n');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Orden por defecto');
  define('TEXT_SORT',' Orden: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefijo');
  define('TABLE_HEADING_OPT_WEIGHT','Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordenaci�n');
  define('TABLE_HEADING_OPT_DEFAULT','Por defecto');

  define('TABLE_HEADING_YES','S�');
  define('TABLE_HEADING_NO','No');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo de opci�n'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Tama�o');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Filas');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Comentarios');

  define('TEXT_OPTION_VALUE_COMMENTS','Comentarios: ');
  define('TEXT_OPTION_VALUE_SIZE','Mostrar tama�o: ');
  define('TEXT_OPTION_VALUE_MAX','Longitud m�xima: ');

  define('TEXT_ATTRIBUTES_IMAGE','Cambio de imagen de atributo:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Directorio de im�genes de atributo:');

  define('TEXT_ATTRIBUTES_FLAGS','Banderas<br />de atributo:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usado con motivos<br />de visualizaci�n s�lamente:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'El atributo es gratis<br />cuando el producto es gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo por defecto<br />para marcar como seleccionado:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar los mismos descuentos<br />usados para el producto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Incluir precio base<br />al tasar por atributos');

  define('TEXT_PRODUCT_OPTIONS_INFO','Editar opciones de producto para ajustes adicionales');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copiar a TODOS los productos donde nombre y valor de opci�n ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Seleccionar un nombre y valor de opci�n que existe actualmente en un producto o productos que desea copiar a otro nombre y valor de opci�n para todos los productos con este nombre y valor de opci�n');
  define('TEXT_SELECT_OPTION_FROM', 'Nombre de opci�n a coincidir:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Valor de opci�n a coincidir:');
  define('TEXT_SELECT_OPTION_TO', 'Nombre de opci�n a a�adir:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Valor de opci�n a a�adir:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Dejar en blanco para TODOS los productos o<br />introducir un ID de categor�a para los productos a actualizar');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Copiar el nombre/valor de opci�n a productos con un nombre de opci�n existente ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Seleccione un nombre y valor de opci�n que exista actualmente en un producto o productos para a�adir a todos los productos o s�lo los productos en la categor�a seleccionada que tienen el nombre de opci�n seleccionado.
                                                   <br /><strong>Ejemplo:</strong> A�adir nombre de opci�n: Valor de opci�n de color: Rojo a todos los productos con nombre de opci�n: Tama�o
                                                   <br /><strong>Ejemplo:</strong> A�adir nombre de opci�n: Valor de opci�n de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con el nombre de opci�n: Tama�o
                                                   <br /><strong>Ejemplo:</strong> A�adir nombre de opci�n: Valor de opci�n de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con nombre de opci�n: Tama�o para ID de categor�as: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Nombre de opci�n al que a�adir:');			 
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Nombre de opci�n a a�adir:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Valor de opci�n a a�adir:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Valores por defecto para el nuevo atributo desde N� de ID de producto, o dejar en blanco para ning�n valor por defecto:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>�C�mo deber�an manejarse los atributos del producto existente?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Borrar</strong> primero, despu�s copiar nuevo atributo');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Actualizar</strong> atributos existentes con nueva configuraci�n/precios');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorar</strong> atributos existentes y s�lo a�adir nuevos atributos');

  define('TEXT_INFO_FROM', ' desde: ');
  define('TEXT_INFO_TO', ' a: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Error: Nombre y valor de opci�n duplicados');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Error: Valor y nombre de opci�n no concordantes');
  define('ERROR_OPTION_VALUES_NONE', 'Error: No se encontr� nada para copiar');
  define('SUCCESS_OPTION_VALUES_COPIED', '�Copia exitosa! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Error: Falta el nombre/valor de opci�n para los ID de producto');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Borrar atributo coincidente de TODOS los productos donde el nombre y valor de opci�n ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Seleccionar un nombre y valor de opci�n que exista actualmente en un porducto o productos que quiera borrar de TODOS los productos o de TODOS los productos de una categor�a');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Nombre de opci�n no concordante:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Valor de opci�n no concordante:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Error: Valores y nombres de opci�n no concordantes seleccionados');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Exitoso: Borrado de: ');
  