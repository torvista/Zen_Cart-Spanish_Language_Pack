<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 19286 2011-07-28 15:42:33Z drbyte $
 */

define('HEADING_TITLE', 'Indentificación del administrador');
define('HEADING_TITLE_EXPIRED', 'Admin Login - Contraseña Caducada');

define('TEXT_ADMIN_NAME', 'Usuario: ');
define('TEXT_ADMIN_PASS', 'Contraseña: ');
define('TEXT_ADMIN_OLD_PASSWORD', 'Contraseña Actual:');
define('TEXT_ADMIN_NEW_PASSWORD', 'Contraseña Nueva:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Confirmar Contraseña:');

define('ERROR_WRONG_LOGIN', 'Contraseña o nombre de usuario incorrecto.');
define('ERROR_SECURITY_ERROR', 'Había un error de seguridad en el intento de Login.');

define('TEXT_PASSWORD_FORGOTTEN', 'He olvidado mi contraseña');

define('LOGIN_EXPIRY_NOTICE', 'Después de 15 mins de inactividad tendrá que login otra vez.<br /><br />Nota: Todas las contraseñas caducan después de 90 días.');
define('ERROR_PASSWORD_EXPIRED', 'NOTA: Su contraseña ha caducado. Elija una contraseña nueva. La contraseña <strong>debe estar compuesta de LETRAS y NÚMEROS y tener un mínimo de 7 caracteres.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Por razones de seguridad, hay que cambiar su contraseña temporal. Elija una contraseña nueva.<br />La contraseña <strong>debe estar compuesta de LETRAS y NÚMEROS y tener un mínimo de 7 caracteres.</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Admin login fallo');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Han habido varios intentos de un Admin Login sin éxito. Por razones de seguridad, después de 6 intentos la cuenta se quedará bloqueada durante 30 minutos (incluso con la contraseña correcta). Cualquier intento de Login durante este periodo resultará en una repetición del tiempo de exclusión (30 min.). No se puede resetear contraseñas durante este periodo. Perdone la molestia.' . "\n\nEl último intento de Login se realizó desde esta dirección IP: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Nota: Su contraseña ha caducado porque ha pasado desde una zona non-SSL (menos segura) a una zona SSL (más segura). El cambio de su contraseña dentro la zona SSL es un paso importante para tener un sitio más seguro. Perdone la molestia. Se aplican las reglas estándares de contraseñas.');
