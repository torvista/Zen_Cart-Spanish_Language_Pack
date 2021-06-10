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
//  $Id: whos_online.php 2663 2005-12-24 02:28:51Z ajeh $
//

define('HEADING_TITLE', 'Quién está online');

define('TABLE_HEADING_ONLINE', 'Tiempo Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nombre completo');
define('TABLE_HEADING_IP_ADDRESS', 'Dirección IP');
define('TABLE_HEADING_SESSION_ID', 'Sessión');
define('TABLE_HEADING_ENTRY_TIME', 'Hora de llegada');
define('TABLE_HEADING_LAST_CLICK', 'Último Click');
define('TIME_PASSED_LAST_CLICKED', '<strong>Tiempo desde el último click:</strong>');
define('TABLE_HEADING_LAST_PAGE_URL', 'Última URL');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_SHOPPING_CART', 'Carro de Compras de los Usuarios');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Actualmente hay %s clientes online');

// Additional Definitions for whos_online.php
  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'ACTUALIZAR LISTA');
  define('WHOS_ONLINE_LEGEND_TEXT','Leyenda:');
  define('WHOS_ONLINE_ACTIVE_TEXT','Carro activa');
  define('WHOS_ONLINE_INACTIVE_TEXT','Carro inactiva');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Activo sin carro');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inactivo sin carro');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inactivos desde el último click >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inactivos desde la llegada >');
  define('WHOS_ONLINE_REMOVED_TEXT','serán eliminados');

// whos_online.php
  define('WHOIS_TIMER_REMOVE',1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
  define('WHOIS_TIMER_INACTIVE',180); // seconds when considered inactive - 180 default = 3 minutes
  define('WHOIS_TIMER_DEAD',540); // seconds when considered dead - 540 default = 9 minutes
  define('WHOIS_SHOW_HOST','1'); // show Last Clicked time and host name - 1 default
  define('WHOIS_REPEAT_LEGEND_BOTTOM','12'); // show legend on bottom when more than how many entries - 12 default
  define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

  define('TEXT_SESSION_ID', '<strong>Sessión ID:</strong> ');
  define('TEXT_HOST', '<strong>Host:</strong> ');
  define('TEXT_USER_AGENT', '<strong>Agente de Usuario:</strong> ');
  define('TEXT_EMPTY_CART', '<strong>Carro Vacío</strong>');
?>