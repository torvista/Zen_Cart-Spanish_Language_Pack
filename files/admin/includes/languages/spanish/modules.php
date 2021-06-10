<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 19287 2011-07-28 15:51:25Z drbyte $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Módulos de pago');
define('HEADING_TITLE_MODULES_SHIPPING', 'Módulos de envío');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Módulos de total de pedidos');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Módulos de tipo de producto');

define('TABLE_HEADING_MODULES', 'Módulos');
define('TABLE_HEADING_SORT_ORDER', 'Orden');
define('TABLE_HEADING_ORDERS_STATUS','Estados de pedidos');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_MODULE_DIRECTORY', 'Carpeta del módulo:');
define('WARNING_MODULES_SORT_ORDER','AVISO: HAY ORDENES DUPLICADOS QUE CAUSARÁN ERRORES DE CALCULACIÓN.<br />¡CORRÍGELOS AHORA!');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERROR: no se instaló el módulo porque falta un archivo de idioma: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'AVISO: Las opciones del Admin han sido cambiados en la tienda.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Este es un email automático de su tienda Zen Cart para avisarle de un cambio a su opciones administrativos que acaba de ocurrir: ' . "\n\n" . 'NOTA: opciones de Admin han sido CAMBIADOS en el módulo [%s] , por usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al día con estos cambios, puedes ignorar este email.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Este es un email automático de su tienda Zen Cart para avisarle de un cambio a su opciones administrativos que acaba de ocurrir: ' . "\n\n" . 'NOTA: opciones de Admin han sido CAMBIADOS. El módulo [%s] ha sido instalado por usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al día con estos cambios, puedes ignorar este email.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Este es un email automático de su tienda Zen Cart para avisarle de un cambio a su opciones administrativos que acaba de ocurrir: ' . "\n\n" . 'NOTA: opciones de Admin han sido CAMBIADOS. El módulo [%s] ha sido quitado por usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al día con estos cambios, puedes ignorar este email.');
define('TEXT_DELETE_INTRO', '¿Esta segura que quiere quitar este módulo??');
define('TEXT_WARNING_SSL_EDIT', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Por razones de seguridad, no se puede hacer cambios en este módulo hasta que el Admin tiene SSL.</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Por razones de seguridad, no se puede instalar este módulo hasta que el Admin tiene SSL.</a>.');