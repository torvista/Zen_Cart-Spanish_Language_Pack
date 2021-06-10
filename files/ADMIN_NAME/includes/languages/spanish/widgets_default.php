<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/**TODO
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: $
 */

// Note: The widgets_groups and widgets_description values 
// are built in code; you can't search for them.
// See includes/library/zencart/DashboardWidget/src

// Entries in dashboard_widgets_groups
define('GENERAL_STATISTICS_GROUP', 'Estadísticas Generales');
define('ORDER_STATISTICS_GROUP', 'Estadísticas de Pedidos');
define('NEW_CUSTOMERS_GROUP', 'Clientes Nuevos');
define('COUNTER_HISTORY_GROUP', 'Historial Contador');
define('NEW_ORDERS_GROUP', 'Pedidos Nuevos');
define('LOGS_GROUP', 'Historiales Debug');
define('BANNER_STATISTICS_GROUP', 'Estadísticas Banner');
define('WHOSONLINE_GROUP', 'Visitores Activos');
define('COUNTER_HISTORY_GRAPH_GROUP', 'Gráfico Historial Contador');
define('SALES_GRAPH_REPORT_GROUP', 'Ventas');

// Entries in dashboard_widgets_description
define('GENERAL_STATISTICS', 'Estadísticas Generales');
define('GENERAL_STATISTICS_DESCRIPTION', 'Current value of various counters');
define('ORDER_SUMMARY', 'Resumen Pedido');
define('ORDER_SUMMARY', 'Counts of orders in each state');
define('NEW_CUSTOMERS', 'Clientes Nuevos');
define('NEW_CUSTOMERS', 'Customers who have created accounts recently');
define('COUNTER_HISTORY', 'Historial Contador');
define('COUNTER_HISTORY', 'Hit counter over last 14 days');
define('NEW_ORDERS', 'Pedidos Nuevos');
define('NEW_ORDERS', 'Recently received orders with names and amounts');
define('LOGS', 'Historiales Debug');
define('LOGS', 'Shows debug logs if any exist');
define('BANNER_STATISTICS', 'Estadísticas Banner');
define('BANNER_STATISTICS_DESCRIPTION', 'Shows statistics for last 12 months');
define('WHOSONLINE_ACTIVITY', 'Visitores Activos');
define('WHOSONLINE_ACTIVITY_DESCRIPTION', 'Counts of active visitors with and without carts');
define('COUNTER_HISTORY_GRAPH', 'Historial Contador - Últimos 14 días');
define('COUNTER_HISTORY_GRAPH_DESCRIPTION', 'Shows counter history graph for last 14 days');
define('SALES_GRAPH_REPORT', 'Ventas');
define('SALES_GRAPH_REPORT_DESCRIPTION', 'Graph of recent sales activity');

define('TEXT_TOTAL_LOGFILES_FOUND', '<br>Nota: Hay %s archivos historiales en el servidor.');
define('TEXT_DISPLAYING_RECENT_COUNT', ' (Mostrando solamente los %s archivos más recientes.)');
define('TEXT_NO_LOGFILES_FOUND', 'No se ha encontrado historiales Debug.');
define('TEXT_CLEANUP_LOGFILES', 'Borrar historiales en Gestor de Tienda');
define('TEXT_ADMIN_LOG_SUFFIX', '(admin)');


// ====> Who's Online <====
define('WO_FULL_DETAILS', 'Ver actividad detallado...');
define('WO_REGISTERED', 'Cliente:');
define('WO_GUEST', 'Invitado:');
define('WO_SPIDER', 'Spider:');
define('WO_TOTAL', 'Total actualmente online:');
define('WHOS_ONLINE_ACTIVE_TEXT', 'Carro Activo');
define('WHOS_ONLINE_INACTIVE_TEXT', 'Carro Inactivo');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT', 'Activo sin carro');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT', 'Inactivo sin carro');

// ===== Sales Graph Widget
define('SALES_GRAPH_TEXT_MONTHLY', 'Ventas Mensuales (excl. el envío)');
define('SALES_GRAPH_TEXT_CLICK', 'Pinche aquí para los detalles completos...');
define('SALES_GRAPH_COLUMN_MONTH', 'Mes');
define('SALES_GRAPH_COLUMN_SALES', 'Ventas');


define('TEXT_DASHBOARD_ADD_WIDGETS', '+ Add Widget(s)');
define('TITLE_MODAL_DASHBOARD_ADD_WIDGETS', 'Add Widget');
define('TITLE_MODAL_DASHBOARD_WIDGETS_SETTINGS', 'Widget Settings');


/* NOTE: defines for additional contributed "plugin" widgets should be placed into
 * a new file in the extra_definitions folder, not in this file, since
 * altering this file makes upgrades more complicated
 * and also makes plugin installation far more complicated than it needs to be.
 */
