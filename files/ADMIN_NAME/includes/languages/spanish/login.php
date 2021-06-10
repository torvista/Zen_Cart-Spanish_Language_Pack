<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 May 25 Modified in v1.5.6b $
 */

define('HEADING_TITLE', 'Admin Login');
define('HEADING_TITLE_EXPIRED', 'Admin Login - Contraseña Caducada');

define('TEXT_LOGIN','Login');
define('TEXT_SUBMIT','Continuar');
define('TEXT_ADMIN_NAME', 'Usuario Admin');
define('TEXT_ADMIN_PASS', 'Contraseña Admin');
define('TEXT_ADMIN_OLD_PASSWORD', 'Contraseña Actual');
define('TEXT_ADMIN_NEW_PASSWORD', 'Contraseña Nueva');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Confirmar Contraseña');

define('ERROR_WRONG_LOGIN', 'Contraseña o nombre de usuario incorrecto.');
define('ERROR_SECURITY_ERROR', 'Había un error de seguridad en el intento de Login.');

define('TEXT_PASSWORD_FORGOTTEN', '¿Contraseña Olvidada?');

define('LOGIN_EXPIRY_NOTICE', '');
define('ERROR_PASSWORD_EXPIRED', 'NOTA: Su contraseña ha caducado. Elija una contraseña nueva. La contraseña <strong>debe estar compuesta de LETRAS y NÚMEROS y tener un mínimo de 7 caracteres.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Por razones de seguridad, tiene que cambiar su contraseña temporal. Elija una contraseña nueva.<br />La contraseña <strong>debe estar compuesta de LETRAS y NÚMEROS y tener un mínimo de 7 caracteres.</strong>');
define('SUCCESS_PASSWORD_UPDATED', 'Contraseña actualizada');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Fallo en el login del administrador');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Importante: Han habido varios intentos de entrada sin éxito a su cuenta administrativa. Por razones de seguridad, después de 6 intentos la cuenta se quedará bloqueada durante 30 minutos (incluso con la contraseña correcta). Cualquier intento de Login durante este periodo resultará en una repetición del tiempo de exclusión (30 min.). No se pueden resetear contraseñas durante este periodo. Disculpe las molestias.' . "\n\nEl último intento de entrada se realizó desde esta dirección IP: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Nota: Su contraseña ha caducado porque ha pasado desde una zona non-SSL (menos segura) a una zona SSL (más segura). El cambio de su contraseña dentro la zona SSL es un paso importante para tener un sitio más seguro. Disculpe las molestias. Se aplican las reglas estándares de contraseñas.');
