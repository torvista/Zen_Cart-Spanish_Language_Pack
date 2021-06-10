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
//  $Id: products_to_categories.php 2909 2006-01-29 21:29:35Z ajeh $
//

define('HEADING_TITLE','Gesti�n de enlazamiento de productos a categor�as m�ltiples...');
define('HEADING_TITLE2','Categor�as / Productos');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Categor�as con productos que est�n disponibles para enlazar ...');

define('TABLE_HEADING_PRODUCTS_ID', 'Prod ID');
define('TABLE_HEADING_PRODUCT', 'Nombre del producto');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'EDITANDO PRODUCTO A INFORMACI�N DE CATEGOR�AS');
define('TEXT_PRODUCTS_ID', 'Producto ID# ');
define('TEXT_PRODUCTS_NAME', 'Producto: ');
define('TEXT_PRODUCTS_MODEL', 'Modelo: ');
define('TEXT_PRODUCTS_PRICE', 'Precios: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Actualizar enlaces de categor�a');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Seleccionar producto a enlazar');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Configurar producto a categor�as de enlaces para: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;N�mero actual de categor�as enlazadas: ');



define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'El enlazador de productos a categor�as est� dise�ado para poder enlazar de manera r�pida el producto actual con una o m�s categor�as.<br />Tambi�n puedes enlazar todos los productos de una categor�a con otra categor�a o eliminar un producto enlazado de una categor�a que est� en otra categor�a (instrucciones, m�s abajo)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Para el funcionamiento correcto de los precios, cada producto precisa <strong>una</strong> Categor�a Maestra, sin importar con cu�ntas categor�as est� enlazado. La Categor�a Maestra es en la que se crea el producto originalmente, pero puede ser modicado a cualquiera de las categor�as ya enlazadas a trav�s de la lista desplegable \"Categor�a Maestra del producto\", en el encabezamiento de la tabla de categor�as<br />
El producto est� enlazado actualmente a la categor�a/las categor�as seleccionadas en la tabla superior. Para a�adir una nueva categor�a o categor�as, simplemente marca el checkbox junto al nombre de la categor�a. Para borrar una categor�a o categor�as enlazadas, simplemente deseleccione el checkbox junto al nombre de la categor�a.<br />
Cuando haya revisado todas las categor�as que quer�a enlazar con este producto, presione el bot�n \"' . BUTTON_UPDATE_CATEGORY_LINKS . '\".<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Cambios globales de categor�as enlazadas a productos. Reasignaci�n del ID de categor�a maestra');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>AVISO:</strong> Es imprescindible fijar el ID de CATEGOR�A MAESTRA antes de cambiar Categor�as Enlazadas');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copiar TODOS los productos en una categor�a como productos ENLAZADOS a otra categor�a ...</strong><br />Ejemplo: Usando 8 y 22 quiero enlazar TODOS los productos de la categor�a 8 a la categor�a 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccionar todos los productos en la categor�a: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Enlace a categor�a: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copiar producto como enlazado ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'AVISO: El producto ha sido reseteado y ahora no pertenece a este categor�a ...');
define('WARNING_COPY_LINKED', 'ATENCI�N: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a no v�lida desde la que enlazar productos: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a no v�lida a la que enlazar productos: ');
define('WARNING_NO_CATEGORIES_ID', 'AVISO: No ha sido seleccionada ninguna categor�a ... no se realiz� ning�n cambio');
define('SUCCESS_COPY_LINKED', 'Actualizaci�n con �xito de productos como enlazados ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a v�lida desde la que enlazar productos: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a v�lida a la que enlazar productos: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>ATENCI�N: No se realizaron cambios, los productos ya estaban enlazados ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Borrar TODOS los productos de una categor�a que est�n ENLAZADOS a otra categor�a ...</strong><br />Ejemplo: Usando 8 y 22, deseo desenlazar TODOS los productos en la categor�a 8 de la categor�a 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccionar todos los productos en la categor�a: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Quitar los enlaces de los productos a categor�a: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Quitar productos como enlazados ');

define('WARNING_REMOVE_LINKED', 'WARNING: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a no v�lida desde la que quitar productos enlazados: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a no v�lida para quitar productos enlazados: ');
define('SUCCESS_REMOVE_LINKED', 'Borrado con �xito de productos como enlazados ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a v�lida desde la que quitar productos enlazados: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a v�lida para quitar productos enlazados: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>ATENCI�N: No se realizaron cambios, no hay productos enlazados ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ATENCI�N: ��CONFLICTO DE ID DE CATEGOR�AS MAESTRAS!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>El ID de Categor�a Maestra es: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'NOTA: La Categor�a Maestra se utiliza para modificar el precio cuando la categor�a influye en los precios de productos enlazados, por ejemplo en la categor�a \"Especiales\"<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Para arreglar este problema, ha sido redirigido al primer producto conflictivo. Reasigne el ID de Categor�a Maestra para que no siga siendo el ID de la Categor�a Maestra de productos para la categor�a desde la que est� intentando borrar, e int�ntelo de nuevo. Cuando todos los conflictos est�n corregidos, podr� completar el borrado deseado.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Conflicto desde categor�a: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Conflicto a categor�a: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Actualizaci�n exitosa de enlaces de categor�as a productos ...');
define('WARNING_MASTER_CATEGORIES_ID', 'ATENCI�N: �No se ha configurado una Categor�a Maestra!');

define('TEXT_PRODUCTS_ID_INVALID', 'ATENCI�N: ID DE PRODUCTO INV�LIDO O NO SE SELECCION� UN PRODUCTO');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Nota: Un ID de producto no necesita ser configurado para usar enlace a todos los productos desde una categor�a a otra categor�a<br />Sin embargo, configurar un ID de productos v�lido mostrar� todas las categor�as disponibles y sus n�meros de ID.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Reasignar la Categor�a Maestra de TODOS los productos en la categor�a seleccionada, a la misma categor�a ...</strong><br />Ejemplo: Reasignar categor�a 22 configurar�a TODOS los productos de la categor�a 22 para que tengan la categor�a 22 como ID de Categor�a Maestra');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Reasignar el ID de Categor�a Maestra para todos los productos en la categor�a: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Reasignar el ID de Categor�a Maestra');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'ATENCI�N: Categor�a seleccionada no v�lida ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Reasignaci�n realizada con �xito de todos los productos a un nuevo ID de Categor�a Maestra para la categor�a: ');

?>