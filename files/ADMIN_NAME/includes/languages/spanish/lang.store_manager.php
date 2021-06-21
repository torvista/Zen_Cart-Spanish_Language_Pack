<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Gestión de la Tienda',
      'TABLE_CONFIGURATION_TABLE' => 'Buscar definiciones de CONSTANTS',
      'SUCCESS_PRODUCT_UPDATE_SORT_ALL' => 'Actualización <strong>exitosa</strong> para la ordenación de atributos',
      'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => 'Actualización <strong>exitosa</strong> para los valores de ordenación de precios de productos',
      'SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED' => 'Reinicio <strong>exitoso</strong> de productos vistos a 0',
      'SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED' => 'Reinicio <strong>exitoso</strong> de pedidos a 0',
      'SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID' => 'Reinicio <strong>exitoso</strong> de todas las características principales para productos enlazados',
      'SUCCESS_UPDATE_COUNTER' => '<strong>Actualización exitosa</strong> del contador a: ',
      'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>Error:</strong> No se encontró configuración coincidente ...',
      'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>Error:</strong> No se introdujo clave de configuración o texto a buscar ... la búsqueda finalizó',
      'TEXT_INFO_COUNTER_UPDATE' => '<strong>Cambiar el total del Contador</strong><br>a un valor nuevo: ',
      'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>Actualizar el campo "Products Price Sorter" para TODOS los productos,</strong><br>para que se ordenen por precio correctamente: ',
      'TEXT_INFO_PRODUCTS_VIEWED_UPDATE' => '<strong>Reiniciar TODOS los productos vistos</strong><br>Resetear las cuentas de productos vistos a 0: ',
      'TEXT_INFO_PRODUCTS_ORDERED_UPDATE' => '<strong>Reiniciar TODOS los pedidos</strong><br>Reiniciar cuenta de pedidos a 0: ',
      'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE' => '<strong>Reiniciar TODOS los ID de Categoría Maestra</strong><br>Para ser usados en productos enlazados y tasaciones: ',
      'TEXT_NEW_ORDERS_ID' => 'ID de pedido nuevo',
      'TEXT_INFO_SET_NEXT_ORDER_NUMBER' => '<strong>Define el próximo número de pedido</strong><br>NOTA: No se puede poner un número menor que un pedido existente en la base de datos.',
      'TEXT_MSG_NEXT_ORDER' => 'El próximo número de pedido será %s',
      'TEXT_MSG_NEXT_ORDER_MAX' => 'A resulta que un pedido ya en marcha => el próximo número de pedido es actualmente: %s',
      'TEXT_MSG_NEXT_ORDER_TOO_LARGE' => 'No se puede poner el próximo número de pedido mayor que 2000000000 (es una limitación de la base de datos). Elija un número menor.',
      'TEXT_CONFIGURATION_CONSTANT' => '<strong>Buscar CONSTANTES definiciones de archivos de idioma</strong>',
      'TEXT_CONFIGURATION_KEY' => 'Clave o nombre:',
      'TEXT_INFO_CONFIGURATION_UPDATE' => '<strong>NOTA:</strong> las CONSTANTES están escritas en mayúsculas.<br>Las búsquedas de archivos de idioma pueden ser una búsqueda alternativa cuando no se encuentra nada en las tablas de la base de datos.',
      'TABLE_TITLE_KEY' => '<strong>Clave:</strong>',
      'TABLE_TITLE_TITLE' => '<strong>Título:</strong>',
      'TABLE_TITLE_DESCRIPTION' => '<strong>Descripción:</strong>',
      'TABLE_TITLE_GROUP' => '<strong>Grupo:</strong>',
      'TABLE_TITLE_VALUE' => '<strong>Valor:</strong>',
      'TEXT_LANGUAGE_LOOKUPS' => 'Búsquedas en archivos de idioma:',
      'TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE' => 'Todos los archivos de idioma para ' . strtoupper($_SESSION['language']) . ' - Catálogo/Admin',
      'TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG' => 'Todos los archivos principales de idioma - Catálogo (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)',
      'TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE' => 'Todos los archivos de idioma seleccionados actualmente - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php',
      'TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN' => 'Todos los archivos principales de idioma - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)',
      'TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE' => 'Todos los archivos de idioma seleccionados actualmente - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)',
      'TEXT_LANGUAGE_LOOKUP_CURRENT_ALL' => 'Todos los archivos de idioma seleccionados actualmente - Catálogo/Admin',
      'TEXT_INFO_NO_EDIT_AVAILABLE' => 'Edición no disponible',
      'TEXT_INFO_CONFIGURATION_HIDDEN' => ' u => OCULTO',
      'TEXT_INFO_DATABASE_OPTIMIZE' => '<strong>Optimizar base de datos</strong> para quitar el espacio de registros borrados.<br>Se recomienda hacerlo mensualmente o semanalmente en una tienda con mucho movimiento (Es recomendable optimizar la base de datos en horario de poca afluencia de visitantes).',
      'TEXT_INFO_OPTIMIZING_DATABASE_TABLES' => 'Optimización de la base de datos está en marcha. Puede tardar unos minutos. Espera por favor. El menu anterior aparecerá cuando este terminado ... ',
      'SUCCESS_DB_OPTIMIZE' => 'Optimización de la base de datos - Tablas procesadas: ',
      'TEXT_INFO_PURGE_DEBUG_LOG_FILES' => '<strong>Borrar archivos Debug</strong><br><strong>¡Precaución!: </strong>Zen Cart archiva los mensaje de errores PHP para ayudar en la búsqueda de problemas => y muchos de los módulos de pago puede crear archivos log para diagnosticar problemas de comunicación.<br>Esta función borrará *TODOS* los archivos debug asociados con errores PHP y los módulos de pago de la carpeta /logs.',
      'SUCCESS_CLEAN_DEBUG_FILES' => 'Los archivos Debug han sido borrados.',
];

return $define;
