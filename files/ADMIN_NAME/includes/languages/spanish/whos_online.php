<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 06 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Quién está Conectado');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nombre');
define('TABLE_HEADING_IP_ADDRESS', 'Dirección IP');
define('TABLE_HEADING_SESSION_ID', 'ID Sesión');
define('TABLE_HEADING_ENTRY_TIME', 'Hora de llegada');
define('TABLE_HEADING_LAST_CLICK', 'Último Click');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tiempo desde el último click:</strong>');
define('TABLE_HEADING_LAST_PAGE_URL', 'Última URL visto');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_SHOPPING_CART', 'Carro del usuario');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Actualmente hay %s clientes online');

  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'ACTUALIZAR LISTA');
  define('WHOS_ONLINE_LEGEND_TEXT','Leyenda:');
  define('WHOS_ONLINE_ACTIVE_TEXT','Carro Activa');
  define('WHOS_ONLINE_INACTIVE_TEXT','Carro Inactiva');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Activo sin carro');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inactivo sin carro');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inactivo es desde el último click >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inactivos desde la llegada >');
  define('WHOS_ONLINE_REMOVED_TEXT','serán eliminados');

define('TEXT_SESSION_ID', '<strong>ID Sesión:</strong> ');
define('TEXT_HOST', '<strong>Host:</strong> ');
define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Carro Vacío</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', '¿Excluye Arañas?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', '¿Excluye Direcciónes IP Admin?');

// show Last Clicked time and host name - 1 both(default), 0=time-only
if (!defined('WHOIS_SHOW_HOST')) define('WHOIS_SHOW_HOST', '1');

define('TEXT_DUPLICATE_IPS', 'Direcciones IP Duplicadas: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Total de Usuarios Únicos: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Actualizando ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'cada %s segundos.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Manualmente');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'Manual');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5s');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15s');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30s');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14m');
