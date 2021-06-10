<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Entrar');
define('NAVBAR_TITLE_2', 'Olvid� su contrase�a');

define('HEADING_TITLE', 'Olvid� su contrase�a');

define('TEXT_MAIN', 'Introduzca su email y le enviaremos un mensaje por correo electr�nico con su nueva contrase�a.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Error: No hay ninguna cuenta con ese email, por favor, pruebe con otro.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nueva contrase�a');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Existe una solicitud de una nueva contrase�a desde ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Su contrase�a nueva para \'' . STORE_NAME . '\' es:' . "\n\n" . '   %s' . "\n\n Despu�s de entrar en su cuenta con esta nueva contrase�a, puede cambiarla en la p�gina 'Mi Cuenta'.");

define('SUCCESS_PASSWORD_SENT', 'Acabamos de enviar a su email una nueva contrase�a.');
?>