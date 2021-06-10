<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**torvista added STORE_NAME to admin emails
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Tue Dec 29 15:53:14 2015 -0500 Modified in v1.5.5 $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Módulos de Pago');
define('HEADING_TITLE_MODULES_SHIPPING', 'Módulos de Envío');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Módulos de Total del Pedido');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Módulos de Tipo de Producto');

define('TABLE_HEADING_MODULES', 'Módulos');
define('TABLE_HEADING_SORT_ORDER', 'Orden');
define('TABLE_HEADING_ORDERS_STATUS','Estados de pedidos');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_MODULE_DIRECTORY', 'Carpeta del Módulo:');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERROR: no se instaló el módulo porque falta un archivo de idioma: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'AVISO: Una opción del Admin ha sido cambiada en la tienda ' . STORE_NAME);//torvista added STORE_NAME
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Este es un email automático de su tienda Zen Cart ' . STORE_NAME . ' para avisarle de un cambio en sus opciones administrativas que acaba de ocurrir: ' . "\n\n" . 'NOTA: Las opciones de Admin han sido CAMBIADAS en el módulo [%s] , por el usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al corriente con estos cambios, puede ignorar este email.');//torvista added STORE_NAME
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Este es un email automático de su tienda Zen Cart ' . STORE_NAME . ' para avisarle de un cambio en sus opciones administrativas que acaba de ocurrir: ' . "\n\n" . 'NOTA: Las opciones de Admin han sido CAMBIADAS. El módulo [%s] ha sido instalado por el usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al corriente con estos cambios, puede ignorar este email.');//torvista added STORE_NAME
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Este es un email automático de su tienda Zen Cart ' . STORE_NAME . ' para avisarle de un cambio en sus opciones administrativas que acaba de ocurrir: ' . "\n\n" . 'NOTA: Las opciones de Admin han sido CAMBIADAS. El módulo [%s] ha sido quitado por el usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al corriente con estos cambios, puede ignorar este email.');//torvista added STORE_NAME
define('TEXT_DELETE_INTRO', '¿Está seguro que quiere quitar este módulo?');
define('TEXT_WARNING_SSL_EDIT', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Por razones de seguridad, no se puede hacer cambios en este módulo hasta que el acceso al Admin utilice SSL.</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Por razones de seguridad, no se puede instalar este módulo hasta que el acceso al Admin utilice SSL.</a>.');
define('WARNING_MODULES_MISSING_KEYS', '<span class="alert">Falta campos de configuración - Guardar (apuntar) los valores de configuración, Quitar, Instalar y configurar el módulo otra vez</span>');
