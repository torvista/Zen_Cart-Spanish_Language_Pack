<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 23:54:03 2015 -0400 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Clientes');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Nombre');
define('TABLE_HEADING_LASTNAME', 'Apellidos');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Cuenta Creada');
define('TABLE_HEADING_LOGIN', 'Último Acceso');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_PRICING_GROUP', 'Precio por Grupo');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorizado');
define('TABLE_HEADING_GV_AMOUNT', 'Saldo TR');

define('TEXT_DATE_ACCOUNT_CREATED', 'Cuenta creada:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Última modificación:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Último acceso:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Número de accesos:');
define('TEXT_INFO_COUNTRY', 'País:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Número de comentarios:');
define('TEXT_DELETE_INTRO', '¿Seguro que desea eliminar este cliente?');
define('TEXT_DELETE_REVIEWS', 'Eliminar %s comentario(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Eliminar cliente');
define('TYPE_BELOW', 'Escribir aquí debajo');
define('PLEASE_SELECT', 'Elegir uno');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Número de pedidos:');
define('TEXT_INFO_LAST_ORDER','Último pedido:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Referencia del cliente<br />1er Cupón de descuento');
define('TEXT_INFO_GV_AMOUNT', 'Saldo TR');

define('ENTRY_NONE', 'Ninguno');

define('TABLE_HEADING_COMPANY','Empresa');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Resetear Contraseña de Cliente');
define('TEXT_PWDRESET_INTRO', 'Para resetear la contraseña para este cliente, introduzca una contraseña nueva y confirmarlo abajo. La contraseña debería cumplir con las reglas aplicables a las contraseñas de clientes.');
define('TEXT_CUST_NEW_PASSWORD', 'Contraseña Nueva:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Confirmar Contraseña:');
define('ERROR_PWD_TOO_SHORT', 'Error: la contraseña tiene menos caracteres de lo que precisa la configuración de esta tienda.');
define('SUCCESS_PASSWORD_UPDATED', 'Contraseña cambiada.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Su contraseña ha sido cambiada por el administrador de la tienda.' . "\n" . 'Su contraseña nueva es: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Cambio de Contraseña de Su Cuenta');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Ha cambiado la contraseña para un cliente: ' . "\n" . '%s' . "\n\n" . 'ID Administrador: %s');

define('CUSTOMERS_AUTHORIZATION', 'Estado de Autorización de Cliente');
define('CUSTOMERS_AUTHORIZATION_0', 'Aprobado');
define('CUSTOMERS_AUTHORIZATION_1', 'Pendiente de aprobación - Precisa Aprobación para Navegar');
define('CUSTOMERS_AUTHORIZATION_2', 'Pendiende de aprobación - Puede Navegar pero no Ver Precios');
define('CUSTOMERS_AUTHORIZATION_3', 'Pendiende de aprobación - Puede Navegar, Ver Precios pero no comprar');
define('CUSTOMERS_AUTHORIZATION_4', 'Prohibido - Sin permiso para entrar en su cuenta ni comprar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Atención: Su tienda está configurada para "Aprobación sin navegación". Los clientes se han configurado a "Pendiente de aprobación - Sin navegación"');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Atención: Su tienda está configurada para "Aprobación sin precios". Los clientes se han configurado a "Pendiente de aprobación - Navegación sin precios"');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Su estado ha sido aprobado. Gracias por su confianza.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Estado Cliente Actualizado');

define('ADDRESS_BOOK_TITLE', 'Direcciones');
define('PRIMARY_ADDRESS', '(dirección por defecto)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTA:</strong></span> Hay un máximo de %s direcciónes permitidos en la agenda.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de  ');