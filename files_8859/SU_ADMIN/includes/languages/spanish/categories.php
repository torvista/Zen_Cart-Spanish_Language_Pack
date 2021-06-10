<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: categories.php 14139 2009-08-10 13:46:02Z wilt $
 */

define('HEADING_TITLE', 'Categor�as / Productos');
define('HEADING_TITLE_GOTO', 'Ir a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categor�as / Productos');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Ordenar');

define('TABLE_HEADING_PRICE', 'Precio/Oferta/Rebajas');
define('TABLE_HEADING_QUANTITY', 'Cantidad');

define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_STATUS', 'Estado');

define('TEXT_CATEGORIES', 'Categor�as:');
define('TEXT_SUBCATEGORIES', 'Subcategor�as:');
define('TEXT_PRODUCTS', 'Productos:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Precio:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Clase de Impuesto:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Calificaci�n promedio:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Cantidad:');
define('TEXT_DATE_ADDED', 'Agregado el:');
define('TEXT_DATE_AVAILABLE', 'Fecha de disponibilidad:');
define('TEXT_LAST_MODIFIED', '�ltima modificaci�n:');
define('TEXT_IMAGE_NONEXISTENT', 'LA IMAGEN NO EXISTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Por favor, introduzca una nueva categor�a o producto en este nivel.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Por favor, para m�s informaci�n visite la <a href="http://%s" target="blank">web oficial</a> de este producto.');
define('TEXT_PRODUCT_DATE_ADDED', 'Este producto fue introducido en nuestro cat�logo el %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este producto permanecer� en stock el %s.');

define('TEXT_EDIT_INTRO', 'Por favor, realice los cambios necesarios');
define('TEXT_EDIT_CATEGORIES_ID', 'ID de categor�a:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nombre de categor�a:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Imagen de categor�a:');
define('TEXT_EDIT_SORT_ORDER', 'Orden:');

define('TEXT_INFO_COPY_TO_INTRO', 'Por favor, elija la categor�a a la que desea copiar este producto');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categor�as actuales: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nueva categor�a');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Editar categor�a');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Eliminar categor�a');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover categor�a');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Eliminar producto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover producto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar a');

define('TEXT_DELETE_CATEGORY_INTRO', '�Est� seguro que desea eliminar esta categor�a?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Precauci�n:</strong> No es posible gestionar correctamente los precios de los Productos Vinculados cuya Categor�a Maestra ha sido borrada. Si quiere borrar una categor�a que contiene productos con v�nculos es necesario cambiar su Categor�a Maestra a otra categor�a ANTES de borrar la categor�a');
define('TEXT_DELETE_PRODUCT_INTRO', '�Est� seguro que desea eliminar permanentemente este producto?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ADVERTENCIA:</b> �Hay %s categor�as(-hijo) que siguen vinculadas a esta categor�a!'); //REVISAR 
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ADVERTENCIA:</b> �Hay %s productos que siguen vinculados a esta categor�a!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor, seleccione la categor�a en que desea que est� <b>%s</b>');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Por favor, seleccione la categor�a en que deasea que est� <b>%s</b>');
define('TEXT_MOVE', 'Mover <b>%s</b> a:');

define('TEXT_NEW_CATEGORY_INTRO', 'Por favor, complete la siguiente informaci�n para la nueva categor�a');
define('TEXT_CATEGORIES_NAME', 'Nombre de categor�a:');
define('TEXT_CATEGORIES_IMAGE', 'Imagen de categor�a:');
define('TEXT_SORT_ORDER', 'Orden:');

define('TEXT_PRODUCTS_STATUS', 'Estado del producto:');
define('TEXT_PRODUCTS_VIRTUAL', 'El producto es virtual:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Env�o gratis siempre:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Cuadro de cantidad del producto:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Fecha de disponibilidad:');
define('TEXT_PRODUCT_AVAILABLE', 'En stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Fuera de stock');
define('TEXT_PRODUCT_IS_VIRTUAL', 'S�, no hace falta la direcci�n de env�o');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'No, hace falta la direcci�n de env�o');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'S�, env�o gratis siempre');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'No, reglas normales de env�o');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'S�, mostrar cuadro de cantidad');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'No, no mostrar cuadro de cantidad');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricante del producto:');
define('TEXT_PRODUCTS_NAME', 'Nombre del producto:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descripci�n del producto:');
define('TEXT_PRODUCTS_QUANTITY', 'Cantidad del producto:');
define('TEXT_PRODUCTS_MODEL', 'Modelo del producto:');
define('TEXT_PRODUCTS_IMAGE', 'Imagen del producto:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Subir al directorio:');
define('TEXT_PRODUCTS_URL', 'URL del producto:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sin http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Precio (Neto) del producto:');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Precio (Bruto) del producto:');
define('TEXT_PRODUCTS_WEIGHT', 'Peso del producto:');

define('EMPTY_CATEGORY', 'Categor�a vac�a');

define('TEXT_HOW_TO_COPY', 'Copiar m�todo:'); //REVISAR
define('TEXT_COPY_AS_LINK', 'Vincular producto');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar producto');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Restringir tipo de producto');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Esta categor�a ha sido restringida a estos tipos de productos');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','El tipo de producto especificado no puede ser a�adido a esta categor�a. Revise sus restricciones de categor�as.');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY', 'Usado s�lo para productos duplicados ...');
  define('TEXT_COPY_ATTRIBUTES','�Copiar atributos de productos por duplicado?');
  define('TEXT_COPY_ATTRIBUTES_YES', 'S�');
  define('TEXT_COPY_ATTRIBUTES_NO', 'No');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Producto actual: ');
  define('TABLE_HEADING_MODEL', 'Modelo');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Cambios de atributos para los productos ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Eliminar <strong>TODOS</strong> los atributos de producto para:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO', 'Copiar atributos a otro producto o a una categor�a entera desde:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copiar atributos a otro <strong>Producto</strong> desde:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copiar atributos a otra <strong>Categor�a</strong> desde:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>�C�mo deber�an manipularse los atributos de productos existentes?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE', 'Primero <strong>borre</strong>, luego copie los nuevos atributos');
  define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Actualice</strong> con nuevas configuraciones/precios, luego agregue otros');
  define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorar</strong> y agregar s�lo los nuevos atributos');

  define('SUCCESS_ATTRIBUTES_DELETED', 'Atributos eliminados correctamente');
  define('SUCCESS_ATTRIBUTES_UPDATE', 'Atributos actualizados correctamente');

  define('ICON_ATTRIBUTES', 'Caracter�sticas del atributo');

  define('TEXT_CATEGORIES_IMAGE_DIR', 'Subir al directorio:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>O seleccione una imagen del servidor. Nombre del fichero:</strong>');

  define('TEXT_VIRTUAL_PREVIEW', 'Advertencia: Este producto fue marcado para Env�o Gratis y sin direcci�n de env�o');
  define('TEXT_VIRTUAL_EDIT', 'Advertencia: Este producto fue marcado para Env�o Gratis y sin direcci�n de env�o');
  define('TEXT_FREE_SHIPPING_PREVIEW', 'Advertencia: Este producto fue marcado para Env�o Gratis, con direcci�n de env�o');
  define('TEXT_FREE_SHIPPING_EDIT', 'Advertencia: S�, marcar este producto como Env�o Gratis, con direcci�n de env�o');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW', 'Advertencia: No mostrar el cuadro de cantidad, cant. por defecto 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT', 'Advertencia: No mostrar el cuadro de cantidad, cant. por defecto 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Por favor, elija:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Caracter�sticas del atributo para:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Descargas: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES', 'El precio de los productos sube por los atributos:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE', 'S�');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE', 'No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW', '*Al mostrarse el precio se incluir� el precio del grupo de atributos m�s bajo, m�s el precio del producto');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT', '*Al mostrarse el precio se incluir� el precio del grupo de atributos m�s bajo, m�s el precio del producto');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL', 'Cant. m�n. del producto:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL', 'Cant. de Unidades del producto:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL', 'Cant. m�x. del producto:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT', '0 = Ilimitada, 1 = Sin recuadro de cantidad ni m�ximo');

  define('TEXT_PRODUCTS_MIXED', 'Cant. M�n/Unidad combinada del producto:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'El producto es gratuito');
  define('TEXT_PRODUCT_IS_FREE', 'El producto es gratuito:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW', '*El producto fue marcado como GRATUITO');
  define('TEXT_PRODUCTS_IS_FREE_EDIT', '*El producto fue marcado como GRATUITO');

  define('TEXT_PRODUCT_IS_CALL', 'El producto est� como Pedir Precio:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW', '*El producto fue marcado como PEDIR PRECIO');
  define('TEXT_PRODUCTS_IS_CALL_EDIT', '*El produco fue marcado como PEDIR PRECIO');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING', '<strong>Saltar nuevos atributos</strong> ');
  define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Agregando nuevos atributos desde</strong> ');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', '<strong>Actualizando atributos</strong> ');

  define('TEXT_SHIPPING_INFO',
  'Los <strong>Productos Virtuales</strong> no tienen costo de env�o y no necesitan una direcci�n f�sica de env�o, al igual que los servicios, los ' . TEXT_GV_NAMES . ', etc.<br />' .
  'El <strong>env�o gratuito</strong> no tiene coste, pero se requiere de una direcci�n de env�o<br />' .
  'Las <strong>descargas</strong> son asumidas como productos virtuales; no hace falta marcar ninguna otra opci�n<br />'
  );
  
   define('TEXT_ANY_TYPE', 'Cualquier tipo');
   define('TABLE_HEADING_PRODUCT_TYPES', 'Tipo(s) de producto');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Cambiar el estado de la categor�a para:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Cambiar el estado de la categor�a a: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'Desactivado');
define('TEXT_CATEGORIES_STATUS_ON', 'Activado');
define('TEXT_PRODUCTS_STATUS_INFO', 'Cambiar TODOS los estados de producto a: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'Desactivado');
define('TEXT_PRODUCTS_STATUS_ON', 'Activado');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Sin cambiar');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>ATENCI�N ...</strong><br />Nota: Desactivar una categor�a desactivar� todos los productos de esa categor�a en cuesti�n. Los productos enlazados que se encuentren en ella y que est�n compartidos con otras categor�as, tambi�n ser�n desactivados.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' de ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' activo ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Descripci�n de categor�as:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'El producto es Pedir Precio');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Definiciones de los Metas Tags de las Categor�as');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Define Meta Tags Personalizados');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'T�tulo:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Palabras Claves:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Descripci�n:');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'AVISO: Tiene Productos en la Categor�a de Primer Nivel. Los precios no funcionar�n correctamente en el cat�logo. Productos encontrados: ');
