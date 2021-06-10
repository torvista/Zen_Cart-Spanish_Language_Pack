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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

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

define('TEXT_WARNING_OF_DELETE', 'Esta opci�n tiene productos y valores enlazados - no es seguro borrarla.');
define('TEXT_OK_TO_DELETE', 'Esta opci�n no tiene productos enlazados - es seguro borrarla.<br />Precauci�n: Todos los valores de opci�n ser�n borrados para este nombre de opci�n.');
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
  define('TEXT_OPTION_VALUE_ROWS', 'Filas: ');
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

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'ATENCI�N: No se encontr� ning�n producto ... No se actualiz� nada');

define('TEXT_SELECT_PRODUCT', ' Seleccione un producto');
define('TEXT_SELECT_CATEGORY', ' Seleccione una categor�a');
define('TEXT_SELECT_OPTION', 'Seleccione un nombre de opci�n');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>A�adir TODOS los valores de opci�n a TODOS los productos para un nombre de opci�n</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Actualizar TODOS los productos existentes que tengan al menos UN valor de opci�n y a�adir TODOS los valores de opci�n en un nombre de opci�n');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Actualizaci�n exitosa de opciones ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>A�adir TODOS los valores de opci�n a UN producto para el nombre de opci�n</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Actualizar UN producto que tenga al menos UN valor de opci�n y a�adir TODOS los valores de opci�n en un nombre de opci�n');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>A�adir TODOS los valores de opci�n a UNA categor�a de productos para el nombre de opci�n</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Actualizar UNA categor�a de productos, cuando el producto tenga al menos UN valor de opci�n y a�adir TODOS los valores de opci�n en un nombre de opci�n');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTA:</strong> El orden ser� definido al valor por defecto de ordenaci�n de valores de opci�n para estos productos.');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Borrar TODOS los valores de opci�n para TODOS los productos para el nombre de opci�n</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Actualizar TODOS los productos existentes que tengan al menos UN valor de opci�n y borrar TODOS los valores de opci�n en un nombre de opci�n');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Borrar TODOS los valores de opci�n en UN producto del nombre de opci�n</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Actualizar UN producto que tenga al menos UN valor de opci�n y borrar TODOS los valores de opci�n en un nombre de opci�n');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Borrar TODOS los valores de opci�n en UNA categor�a de productos para el nombre de opci�n</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Actualizar UNA categor�a de productos, cuando el producto tenga al menos UN valor de opci�n y borrar TODOS los valores de opci�n en un nombre de opci�n');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTA:</strong> Todos los valores de opci�n del nombre de opci�n ser�n borrados para los productos seleccionados. Esto no borrar� la configuraci�n del valor de opci�n.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copiar TODOS los valores de opci�n en otro nombre de opci�n</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Todos los valores de opci�n ser�n copiados de un nombre de opci�n a otro nombre de opci�n');
define('TEXT_SELECT_OPTION_FROM', 'Copiar desde nombre de opci�n: ');
define('TEXT_SELECT_OPTION_TO', 'Copiar todos los valores de opci�n a nombre de opci�n: ');
define('SUCCESS_OPTION_VALUES_COPIED', '�Copia exitosa! ');
define('ERROR_OPTION_VALUES_COPIED', 'Error - �No se pudien copiar los valores de opci�n en el mismo nombre de opci�n! ');
define('ERROR_OPTION_VALUES_NONE', 'Error - La copia del nombre de opci�n tiene 0 valores definidos. �No se copi� nada! ');
define('TEXT_WARNING_BACKUP', 'Atenci�n: Haga siempre buenas copias de seguridad de su base de datos antes de realizar alg�n cambio global');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Im�genes de atributos por fila: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Estilo de atributos para Radio Buttons/Checkbox: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>Longitud m�xima y tama�o de muestra para atributos de s�lo texto:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Estilos de imagen:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Im�genes debajo nombres de opci�n');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Elemento, imagen y valor de opci�n');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Elemento, imagen, y nombre de opci�n debajo');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Nombre de opci�n debajo de elemento e imagen');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Elemento debajo de imagen y nombre de opci�n');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Elemento encima de imagen y nombre de opci�n');
?>