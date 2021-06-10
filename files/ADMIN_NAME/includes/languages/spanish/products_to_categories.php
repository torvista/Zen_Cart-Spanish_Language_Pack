<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE','Gestión de Enlaces Múltiples de Productos');
define('HEADING_TITLE2','Categorías / Productos');//used by prev_next if HEADING_TITLE not defined...so never used!

//Select Product
define('TEXT_HEADING_PRODUCT_SELECT', 'Elija Producto');
define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'AVISO: El producto previamente seleccionado no esta vinculado a esta categría.');//when category is set, but no product filter set (no product selected)

// Change Master Category
define('TEXT_PRODUCTS_ID_INVALID', 'AVISO: Producto ID#%u is inválido/no existe en la base de datos.');
define('TEXT_INFO_MASTER_CATEGORY_CHANGE','Un producto tiene una ID de Categoría Maestra (para fines de fijación de precios) que se puede considerar como la categoría donde el producto realmente <i>reside</i>. Además, un producto se puede <i>vincular</i> (copiar) a cualquier número de otras categorías, donde el precio puede modificarse debido a las condiciones de esas categorías.<br>El ID de Categoría Maestra se puede cambiar usando este menú desplegable de categoría maestra, que solo ofrece las categorías <strong>actualmente vinculadas</strong> como posibles alternativas.<br>Para establecer la ID de la categoría maestra en <strong>otra</strong>, primero vincúlela a una nueva categoría usando la tabla a continuación y Actualizar. Luego use este menú desplegable para reasignar la categoría maestra a esa nueva categoría. ');

// Product InfoBox
define('TEXT_INFOBOX_HEADING_SELECT_PRODUCT', 'Seleccionar un Producto por su ID#');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Muestra enlaces Producto a Categorías: ');
define('TEXT_PRODUCTS_ID', 'Producto ID#');
define('TEXT_PRODUCTS_NAME', 'Producto: ');
define('TEXT_PRODUCTS_PRICE', 'Precio: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Actualizar Enlaces a Categorías para');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Elija otro Producto por ID#');
define('BUTTON_CATEGORY_LISTING', 'Listado Categoría');

// Link product to multiple categories
define('TEXT_HEADING_LINKED_CATEGORIES', 'Categorías Enlazadas');
define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>PRECAUCIÓN:</strong> un ID CATEGORÍA MAESTRA debe ser asignada');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO', '<p>Este producto está actualmente vinculado a las categorías seleccionadas a continuación (puede cambiar el número de columnas que se muestran en <a target="_blank" href="configuration.php?&amp;gID=3">esta página</a>).<br>Para agregar / eliminar enlaces, seleccione / deseleccione las casillas de verificación según sea necesario y luego haga clic en '. BUTTON_UPDATE_CATEGORY_LINKS. 'botón.</p><p>Tenga en cuenta que hay Herramientas Globales a continuación. </p>');
define('TEXT_LABEL_CATEGORY_DISPLAY_ROOT', 'Muestra las Subcategorías debajo de:');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY', 'Haga el Por Defecto');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE', 'Defina está categoría como la Por Defecto');
define('TEXT_LABEL_SELECT_ALL_OR_NONE', 'Ejia Todas o Ninguna');
define('ERROR_CATEGORY_ID_INVALID', 'Categoría Enlazada ID#%u inválida (no añadida).');
define('SUCCESS_PRODUCT_LINKED_TO_CATEGORIES', 'Enlaces del producto a categorías múltiples actualizados para: %s');
define('WARNING_PRODUCT_UNLINKED_FROM_CATEGORY', 'El producto fue desenlazado de la categoría previamente seleccionada "%1$s" ID#%2$u, por lo que ahora está mostrado en su categoría maestra.');
define('WARNING_MAX_INPUT_VARS_LIMIT', 'ADVERTENCIA: Hay %1$u subcategorías disponibles para vincular en esta página, que es mayor que el límite de PHP "max_input_vars" (actualmente %2$u). Esto significa que no se pueden vincular más de %2$u categorías hasta que este límite de PHP aumente en su hosting. ');

// Global Tools
define('HEADER_CATEGORIES_GLOBAL_TOOLS', 'Herramientas Globales');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '<p>Nota: No es necesario seleccionar un producto para usar estas herramientas. Sin embargo, al seleccionar un producto anterior se mostrarán las categorías disponibles (y sus números de identificación al pasar el ratón). </p>' );

// Copy linked categories from one product to another product
define('TEXT_HEADING_COPY_LINKED_CATEGORIES', 'Copiar Categorías Enlazadas a Otro Producto');
define('TEXT_INFO_COPY_LINKED_CATEGORIES', 'Copie las categorías vinculadas del producto seleccionado actualmente %s a otro producto.<br>Puede <strong>Agregar</strong> las categorías vinculadas de este producto al Producto de destino, o puede <strong>Reemplazar</strong> (eliminar + agregar) las categorías vinculadas del producto de destino.<br>Nota: Esta acción no copia la categoría maestra del producto de origen como una categoría vinculada para la categoría de destino, solo copia las categorías vinculadas.');
define('TEXT_LABEL_ENABLE_COPY_LINKS', 'Habilitar el menú desplegable (muestra <b>todos</b> los productos)');
define('TEXT_OPTION_LINKED_CATEGORIES', 'Elija el Producto Destino');
define('BUTTON_COPY_LINKED_CATEGORIES_ADD', 'Copiar-Añadir Categorías Enlazadas');
define('BUTTON_COPY_LINKED_CATEGORIES_REPLACE', 'Copiar-Reemplazar Categorías Enlazadas');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD', 'Categorías Enlazadas (%1$u) han sido añadidas:<br>DESDE Producto: %2$s<br>AL Producto: %3$s');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE', 'Categorías Enlazadas (%1$u) para Producto Destino: %3$s<br>han sido <em>reemplazadas</em> por las Categorías Enlazadas: %2$s');
define('WARNING_COPY_LINKED_CATEGORIES_NO_TARGET', '¡No se seleccionó un producto destino!');
define('WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL', '¡No hay nada que hacer!<br>Producto: %1$s<br>no tiene <em>nuevas</em> categorías enlazadas para copiar al<br>Producto Destino: %2$s');
define('ERROR_MASTER_CATEGORY_MISSING', 'ERROR: el Master Category ID no se encuentra en la table "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>para Producto: %s');

// Copy as linked, all products from category source to category target
define('TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Enlazar (copiar) Productos desde una Categoría a Otra Categoría');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Ejemplo: una copia de la Categoría de Origen ID#8 a la Categoría de Destino #22 creará copias vinculadas de TODOS los productos que están en la Categoría 8, en la Categoría 22 ');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccione TODOS los productos en la Categoría de Origen ID#: ');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Enlazar (copiar) a la Categoría Destino ID#: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copiar Productos como Enlazados');
define('WARNING_CATEGORY_SOURCE_NOT_EXIST','<strong>Categoría Origen ID#%u</strong> inválida (no existe)');
define('WARNING_CATEGORY_TARGET_NOT_EXIST','Categoría <strong>Destino</strong> ID#%u inválida (no existe)');
define('WARNING_CATEGORY_IDS_DUPLICATED', 'Aviso: los IDs de las categorías son iguales (#%u)');
define('WARNING_CATEGORY_NO_PRODUCTS', 'Category <strong>Origen</strong> ID#%u inválida (no contiene productos)');
define('WARNING_CATEGORY_SUBCATEGORIES', 'Categoría <strong>Destino</strong> ID#%u inválida (contiene subcategorías)');
define('SUCCESS_PRODUCT_COPIED', 'producto: %1$u fue copiado (enlazado) a la Categoría Destino ID#%2$u');
define('SUCCESS_COPY_LINKED', '%1$u producto(s) enlazados desde Categoría ID#%2$u a Categoría ID#%3$u');
define('WARNING_COPY_FROM_IN_TO_LINKED', 'ATENCIÓN: No se realizaron cambios (todos los productos de la Categoría ID#%1$u están ya enlazados a la Categoría ID#%2$u)');

// Remove linked products in reference category from target category
define('TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED', 'Quitar Productos Enlazados de una Categoría');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Por Ejemplo: Utilizando Categoría Ref #8 y Categoría Destino #22 quitará cualquier producto de la categoría #22 que existe en la categoría #8. Ningún producto en Category Destino #22 puede tener una categoría maestra de #22 (en el caso que sí, debe ser asignado a otra categoría).<br><strong>Categoría Actual ID#%u.</strong>');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccionar TODOS los productos en la Categoría Origen: ');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Quitar Cualquier Producto Enlazado de la Categoría Destino: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Quitar Productos Enlazados');
define('SUCCESS_REMOVED_PRODUCT', 'producto: %1$s fue quitado de la categoría ID#%2$u<br>');
define('SUCCESS_REMOVE_LINKED_PRODUCTS', '%u producto(s) enlazado(s) se han sido quitados');
define('WARNING_REMOVE_FROM_IN_TO_LINKED', 'ATENCIÓN: ¡No se realizaron cambios! Ningún producto en la Categoría Destino ID#%1$u están enlazados desde la Categoría Origen ID#%2$u');
define('WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET','Producto: ID#%1$u "%2$s" (%3$s)<br>tiene la misma ID categoría maestra como  la categoría destina ID#%4$u<br>');
define('WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ADVERTENCIA: ¡CONFLICTO DE ID DE CATEGORÍA MAESTRA!</strong><br>ID de Categoría Origen #%1$u para la eliminación de productos vinculados en ID Categoría Destino %2$u.<br>Ha solicitado la desenlace de algunos productos vinculados de una categoría destino. Uno o más de esos productos tienen la misma ID de categoría maestra que la categoría de destino. Esto significa que el producto no está "vinculado" a la categoría de destino, sino que "reside" en esa categoría y, por lo tanto, no puede eliminarse como parte de esta solicitud para desenlazar productos <i>vinculados</i>.<br>Si desea <i>conservar</i> este producto, debe cambiar su ID de categoría maestra a otra categoría (es decir, "moverlo") antes de volver a realizar este proceso. Esto se puede hacer en esta página o mediante la acción "Mover" en una página de listado de Categoría-Producto. El primer producto con un ID de categoría maestra en conflicto ya se ha seleccionado para su edición.<br>Si desea <i>eliminar</i> este producto, debe usar la acción "Eliminar" en la página de listado de Categoría-Producto . ');

// Reset Master Categories ID for all products in a category
define('TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Reasignar el ID Categoría Maestra para TODOS los productos en una Categoría');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Por ejemplo: el reseteo de la Categoría #22 cambiará el ID Categoría Maestra de todos los productos en la categoría a #22.');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Resetear el ID Categoría Maestra para TODOS los productos en la Categoría: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Reasignar el ID Categoría Maestra');
define('SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY', 'Todos los productos en la Categoría ID#%1$d han sido asignados una ID Categoría Maestra de ID#%1$d');
define('TEXT_CATEGORIES_NAME', 'Nombre Categoría');
