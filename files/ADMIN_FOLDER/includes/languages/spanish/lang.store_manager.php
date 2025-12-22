<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Gestión de la Tienda',
    'SUCCESS_PRODUCT_UPDATE_SORT_ALL' => 'Actualización <strong>exitosa</strong> para la ordenación de atributos',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => 'Actualización <strong>exitosa</strong> del campo products_price_sorter',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED' => 'Reseteo <strong>exitoso</strong> de Productos Vistos a 0',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED' => 'Reseteo <strong>exitoso</strong> de productos pedidos a 0',
    'SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID' => 'Reseteo <strong>exitoso</strong> de todas las categorías maestras de productos',
    'SUCCESS_UPDATE_COUNTER' => 'Actualización <strong>exitosa</strong> del contador a: ',
    'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>Error:</strong> No se encontró una CONFIGURATION_KEY coincidente ...',
    'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>Error:</strong> No se introdujo una CONFIGURATION_KEY o texto a buscar ... la búsqueda finalizó',
    'TEXT_INFO_COUNTER_UPDATE' => '<strong>Cambiar el valor del Contador</strong><br>a un valor nuevo: ',
    'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>Actualizar el campo "Products Price Sorter" para TODOS los productos,</strong><br>para que se ordenen por precio correctamente: ',
    'TEXT_INFO_PRODUCTS_VIEWED_UPDATE' => '<strong>Resetear Productos Vistos</strong><br>Borrar el historial: ',
    'TEXT_INFO_PRODUCTS_ORDERED_UPDATE' => '<strong>Resetear Productos Pedidos</strong><br>Resetear la cuenta de productos pedidos a 0: ',
    'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE' => '<strong>Resetear TODOS los ID de Categoría Maestra</strong><br>Usados con productos enlazados y precios <strong>¡Peligro!</strong>: ',
    'TEXT_NEW_ORDERS_ID' => 'ID de pedido nuevo',
    'TEXT_INFO_SET_NEXT_ORDER_NUMBER' => '<strong>Define el próximo número de pedido</strong><br>NOTA: No se puede poner un número menor que un pedido existente en la base de datos.',
    'TEXT_MSG_NEXT_ORDER' => 'El próximo número de pedido será %s',
    'TEXT_MSG_NEXT_ORDER_MAX' => 'A resulta que un pedido ya en marcha => el próximo número de pedido es actualmente: %s',
    'TEXT_MSG_NEXT_ORDER_TOO_LARGE' => 'No se puede poner el próximo número de pedido mayor que 2000000000 (es una limitación de la base de datos). Elija un número menor.',
    'TEXT_INFO_DATABASE_OPTIMIZE' => '<strong>Optimizar base de datos</strong> para quitar el espacio de registros borrados.<br>Se recomienda hacerlo mensualmente o semanalmente en una tienda con mucho movimiento (Es recomendable optimizar la base de datos en horario de poca afluencia de visitantes).',
    'TEXT_INFO_OPTIMIZING_DATABASE_TABLES' => 'Optimización de la base de datos está en marcha. Puede tardar unos minutos. Espera por favor. El menu anterior aparecerá cuando este terminado ... ',
    'SUCCESS_DB_OPTIMIZE' => 'Optimización de la base de datos - Tablas procesadas: ',
    'TEXT_INFO_PURGE_DEBUG_LOG_FILES' => '<strong>Borrar archivos Debug</strong><br><strong>¡Precaución!: </strong>Zen Cart archiva los mensaje de errores PHP para ayudar en la búsqueda de problemas => y muchos de los módulos de pago puede crear archivos log para diagnosticar problemas de comunicación.<br>Esta función borrará *TODOS* los archivos debug asociados con errores PHP y los módulos de pago de la carpeta /logs.',
    'SUCCESS_CLEAN_DEBUG_FILES' => 'Los archivos Debug han sido borrados.',
];

return $define;
