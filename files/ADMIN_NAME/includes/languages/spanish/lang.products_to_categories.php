<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Gestión de Enlaces Múltiples de Productos',
    'HEADING_TITLE2' => 'Categorías / Productos',
    'TEXT_HEADING_PRODUCT_SELECT' => 'Elija Producto',
    'WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED' => 'AVISO: El producto previamente seleccionado no esta vinculado a esta categría.',
    'TEXT_PRODUCTS_ID_INVALID' => 'AVISO: Producto ID#%u is inválido/no existe en la base de datos.',
    'TEXT_INFO_MASTER_CATEGORY_CHANGE' => 'Un producto tiene una ID de Categoría Maestra (para fines de fijación de precios) que se puede considerar como la categoría donde el producto realmente <i>reside</i>. Además => un producto se puede <i>vincular</i> (copiar) a cualquier número de otras categorías => donde el precio puede modificarse debido a las condiciones de esas categorías.<br>El ID de Categoría Maestra se puede cambiar usando este menú desplegable de categoría maestra => que solo ofrece las categorías <strong>actualmente vinculadas</strong> como posibles alternativas.<br>Para establecer la ID de la categoría maestra en <strong>otra</strong> => primero vincúlela a una nueva categoría usando la tabla a continuación y Actualizar. Luego use este menú desplegable para reasignar la categoría maestra a esa nueva categoría. ',
    'TEXT_INFOBOX_HEADING_SELECT_PRODUCT' => 'Seleccionar un Producto por su ID#',
    'TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS' => 'Muestra enlaces Producto a Categorías: ',
    'TEXT_PRODUCTS_NAME' => 'Producto: ',
    'TEXT_PRODUCTS_PRICE' => 'Precio: ',
    'BUTTON_NEW_PRODUCTS_TO_CATEGORIES' => 'Elija otro Producto por ID#',
    'BUTTON_CATEGORY_LISTING' => 'Listado Categoría',
    'TEXT_HEADING_LINKED_CATEGORIES' => 'Categorías Enlazadas',
    'TEXT_SET_MASTER_CATEGORIES_ID' => '<strong>PRECAUCIÓN:</strong> un ID CATEGORÍA MAESTRA debe ser asignada',
    'BUTTON_UPDATE_CATEGORY_LINKS' => 'Actualizar Enlaces a Categorías para',
    'TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO' => '<p>Este producto está actualmente vinculado a las categorías seleccionadas a continuación (puede cambiar el número de columnas que se muestran en <a target="_blank" href="configuration.php?&amp;gID=3">esta página</a>).<br>Para agregar / eliminar enlaces => seleccione / deseleccione las casillas de verificación según sea necesario y luego haga clic en Actualizar Enlaces.</p><p>Tenga en cuenta que hay Herramientas Globales a continuación.</p>',
    'TEXT_LABEL_CATEGORY_DISPLAY_ROOT' => 'Muestra las Subcategorías debajo de:',
    'BUTTON_SET_DEFAULT_TARGET_CATEGORY' => 'Haga el Por Defecto',
    'BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE' => 'Defina está categoría como la Por Defecto',
    'TEXT_LABEL_SELECT_ALL_OR_NONE' => 'Ejia Todas o Ninguna',
    'ERROR_CATEGORY_ID_INVALID' => 'Categoría Enlazada ID#%u inválida (no añadida).',
    'SUCCESS_PRODUCT_LINKED_TO_CATEGORIES' => 'Enlaces del producto a categorías múltiples actualizados para: %s',
    'WARNING_PRODUCT_UNLINKED_FROM_CATEGORY' => 'El producto fue desenlazado de la categoría previamente seleccionada "%1$s" ID#%2$u => por lo que ahora está mostrado en su categoría maestra.',
    'WARNING_MAX_INPUT_VARS_LIMIT' => 'ADVERTENCIA: Hay %1$u subcategorías disponibles para vincular en esta página => que es mayor que el límite de PHP "max_input_vars" (actualmente %2$u). Esto significa que no se pueden vincular más de %2$u categorías hasta que este límite de PHP aumente en su hosting. ',
    'HEADER_CATEGORIES_GLOBAL_TOOLS' => 'Herramientas Globales',
    'TEXT_PRODUCTS_ID_NOT_REQUIRED' => '<p>Nota: No es necesario seleccionar un producto para usar estas herramientas. Sin embargo => al seleccionar un producto anterior se mostrarán las categorías disponibles (y sus números de identificación al pasar el ratón). </p>' ,
    'TEXT_HEADING_COPY_LINKED_CATEGORIES' => 'Copiar Categorías Enlazadas a Otro Producto',
    'TEXT_INFO_COPY_LINKED_CATEGORIES' => 'Copie las categorías vinculadas del producto seleccionado actualmente %s a otro producto.<br>Puede <strong>Agregar</strong> las categorías vinculadas de este producto al Producto de destino => o puede <strong>Reemplazar</strong> (eliminar + agregar) las categorías vinculadas del producto de destino.<br>Nota: Esta acción no copia la categoría maestra del producto de origen como una categoría vinculada para la categoría de destino => solo copia las categorías vinculadas.',
    'TEXT_LABEL_ENABLE_COPY_LINKS' => 'Habilitar el menú desplegable (muestra <b>todos</b> los productos)',
    'TEXT_OPTION_LINKED_CATEGORIES' => 'Elija el Producto Destino',
    'BUTTON_COPY_LINKED_CATEGORIES_ADD' => 'Copiar-Añadir Categorías Enlazadas',
    'BUTTON_COPY_LINKED_CATEGORIES_REPLACE' => 'Copiar-Reemplazar Categorías Enlazadas',
    'SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD' => 'Categorías Enlazadas (%1$u) han sido añadidas:<br>DESDE Producto: %2$s<br>AL Producto: %3$s',
    'SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE' => 'Categorías Enlazadas (%1$u) para Producto Destino: %3$s<br>han sido <em>reemplazadas</em> por las Categorías Enlazadas: %2$s',
    'WARNING_COPY_LINKED_CATEGORIES_NO_TARGET' => '¡No se seleccionó un producto destino!',
    'WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL' => '¡No hay nada que hacer!<br>Producto: %1$s<br>no tiene <em>nuevas</em> categorías enlazadas para copiar al<br>Producto Destino: %2$s',
    'ERROR_MASTER_CATEGORY_MISSING' => 'ERROR: el Master Category ID no se encuentra en la table "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>para Producto: %s',
    'TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED' => 'Enlazar (copiar) Productos desde una Categoría a Otra Categoría',
    'TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED' => 'Ejemplo: una copia de la Categoría de Origen ID#8 a la Categoría de Destino #22 creará copias vinculadas de TODOS los productos que están en la Categoría 8 => en la Categoría 22 ',
    'TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED' => 'Seleccione TODOS los productos en la Categoría de Origen ID#: ',
    'TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED' => 'Enlazar (copiar) a la Categoría Destino ID#: ',
    'BUTTON_COPY_CATEGORY_LINKED' => 'Copiar Productos como Enlazados',
    'WARNING_CATEGORY_SOURCE_NOT_EXIST' => '<strong>Categoría Origen ID#%u</strong> inválida (no existe)',
    'WARNING_CATEGORY_TARGET_NOT_EXIST' => 'Categoría <strong>Destino</strong> ID#%u inválida (no existe)',
    'WARNING_CATEGORY_IDS_DUPLICATED' => 'Aviso: los IDs de las categorías son iguales (#%u)',
    'WARNING_CATEGORY_NO_PRODUCTS' => 'Category <strong>Origen</strong> ID#%u inválida (no contiene productos)',
    'WARNING_CATEGORY_SUBCATEGORIES' => 'Categoría <strong>Destino</strong> ID#%u inválida (contiene subcategorías)',
    'SUCCESS_PRODUCT_COPIED' => 'producto: %1$u fue copiado (enlazado) a la Categoría Destino ID#%2$u',
    'SUCCESS_COPY_LINKED' => '%1$u producto(s) enlazados desde Categoría ID#%2$u a Categoría ID#%3$u',
    'WARNING_COPY_FROM_IN_TO_LINKED' => 'ATENCIÓN: No se realizaron cambios (todos los productos de la Categoría ID#%1$u están ya enlazados a la Categoría ID#%2$u)',
    'TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED' => 'Quitar Productos Enlazados de una Categoría',
    'TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED' => 'Por Ejemplo: Utilizando Categoría Ref #8 y Categoría Destino #22 quitará cualquier producto de la categoría #22 que existe en la categoría #8. Ningún producto en Category Destino #22 puede tener una categoría maestra de #22 (en el caso que sí => debe ser asignado a otra categoría).<br><strong>Categoría Actual ID#%u.</strong>',
    'TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED' => 'Seleccionar TODOS los productos en la Categoría Origen: ',
    'TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED' => 'Quitar Cualquier Producto Enlazado de la Categoría Destino: ',
    'BUTTON_REMOVE_CATEGORY_LINKED' => 'Quitar Productos Enlazados',
    'SUCCESS_REMOVED_PRODUCT' => 'producto: %1$s fue quitado de la categoría ID#%2$u<br>',
    'SUCCESS_REMOVE_LINKED_PRODUCTS' => '%u producto(s) enlazado(s) se han sido quitados',
    'WARNING_REMOVE_FROM_IN_TO_LINKED' => 'ATENCIÓN: ¡No se realizaron cambios! Ningún producto en la Categoría Destino ID#%1$u están enlazados desde la Categoría Origen ID#%2$u',
    'WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET' => 'Producto: ID#%1$u "%2$s" (%3$s)<br>tiene la misma ID categoría maestra como  la categoría destina ID#%4$u<br>',
    'WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT' => '<strong>ADVERTENCIA: ¡CONFLICTO DE ID DE CATEGORÍA MAESTRA!</strong><br>ID de Categoría Origen #%1$u para la eliminación de productos vinculados en ID Categoría Destino %2$u.<br>Ha solicitado la desenlace de algunos productos vinculados de una categoría destino. Uno o más de esos productos tienen la misma ID de categoría maestra que la categoría de destino. Esto significa que el producto no está "vinculado" a la categoría de destino => sino que "reside" en esa categoría y => por lo tanto => no puede eliminarse como parte de esta solicitud para desenlazar productos <i>vinculados</i>.<br>Si desea <i>conservar</i> este producto => debe cambiar su ID de categoría maestra a otra categoría (es decir => "moverlo") antes de volver a realizar este proceso. Esto se puede hacer en esta página o mediante la acción "Mover" en una página de listado de Categoría-Producto. El primer producto con un ID de categoría maestra en conflicto ya se ha seleccionado para su edición.<br>Si desea <i>eliminar</i> este producto => debe usar la acción "Eliminar" en la página de listado de Categoría-Producto . ',
    'TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER' => 'Reasignar el ID Categoría Maestra para TODOS los productos en una Categoría',
    'TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER' => 'Por ejemplo: el reseteo de la Categoría #22 cambiará el ID Categoría Maestra de todos los productos en la categoría a #22.',
    'TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER' => 'Resetear el ID Categoría Maestra para TODOS los productos en la Categoría: ',
    'BUTTON_RESET_CATEGORY_MASTER' => 'Reasignar el ID Categoría Maestra',
    'SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY' => 'Todos los productos en la Categoría ID#%1$d han sido asignados una ID Categoría Maestra de ID#%1$d',
    'TEXT_CATEGORIES_NAME' => 'Nombre Categoría',
];

return $define;