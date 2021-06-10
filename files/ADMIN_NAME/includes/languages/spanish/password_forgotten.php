<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jun 07 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Resetear Contraseña');

define('TEXT_ADMIN_EMAIL', 'Email Admin: ');
define('TEXT_ADMIN_USERNAME', 'Nombre Usuario Admin');
define('TEXT_BUTTON_REQUEST_RESET', 'Petición de Reseteo');
define('TEXT_BUTTON_LOGIN', 'Login');
define('TEXT_BUTTON_CANCEL', 'Cancelar');

define('ERROR_WRONG_EMAIL', 'Introdujo una dirección de correo incorrecta.');
define('ERROR_WRONG_EMAIL_NULL', 'Adiós amigo :-P');
define('MESSAGE_PASSWORD_SENT', 'Gracias. Si el email y nombre de usuario que escribió estan asociados con alguna cuenta de administrador, una nueva contraseña se ha enviado a la cuenta.<br>Lea el email y pinche "Login" abajo para entrar con la contraseña nueva temporal.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Cambio Solicitado');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Se ha solicitado una nueva contraseña desde la dirección IP %s' . ".\n\n" . 'Su contraseña temporal es:' . "\n\n   %s\n\nAntes de entrar tendrá que elegir una contraseña nueva.\n\nEsta contraseña temporal caducará en 24 horas.\n\n\n");

define('TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET', '¡Aviso de Acceso Fallado - Admin!');
define('TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET', "Han ocurrido intentos fallados del restablecimiento de contraseña de administrador de %s\n\n con email y/o nombre de usuario inválidos.\n\nSi tiene cuentas de administrador que comparten la misma dirección de email, debería asignarles direcciones de correo electrónico únicas para facilitar los restablecimientos.");

