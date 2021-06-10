<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tell_a_friend.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Avise a un amigo');

define('HEADING_TITLE', 'Avise a un amigo sobre \'%s\'');

define('FORM_TITLE_CUSTOMER_DETAILS', 'Sus datos');
define('FORM_TITLE_FRIEND_DETAILS', 'Los datos de su amigo');
define('FORM_TITLE_FRIEND_MESSAGE', 'Su mensaje');

define('FORM_FIELD_CUSTOMER_NAME', 'Su nombre:');
define('FORM_FIELD_CUSTOMER_EMAIL', 'Su e-mail:');
define('FORM_FIELD_FRIEND_NAME', 'El nombre de su amigo:');
define('FORM_FIELD_FRIEND_EMAIL', 'El e-mail de su amigo:');

define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Su e-mail acerca de <strong>%s</strong> se envi� correctamente a <strong>%s</strong>.');

define('EMAIL_TEXT_HEADER', '�Aviso importante!');

define('EMAIL_TEXT_SUBJECT', 'Su amigo/a %s le ha recomendado este producto de %s');
define('EMAIL_TEXT_GREET', '�Hola %s!' . "\n\n");
define('EMAIL_TEXT_INTRO', 'Su amigo/a, %s, pens� que le interesar�a %s de %s.');

define('EMAIL_TELL_A_FRIEND_MESSAGE', '%s envi� una nota diciendo');

define('EMAIL_TEXT_LINK', 'Para ver el producto, presione la direcci�n abajo indicada o copie y pegue la direcci�n en su navegador:' . "\n\n" . '%s');
define('EMAIL_TEXT_SIGNATURE', 'Saludos,' . "\n\n" . '%s');

define('ERROR_TO_NAME', 'Error: El campo del nombre de su amigo no debe estar vac�o.');
define('ERROR_TO_ADDRESS', 'Error: El campo de e-mail de su amigo no parece ser v�lido. Por favor, int�ntelo nuevamente.');
define('ERROR_FROM_NAME', 'Error: El campo de su nombre no debe estar vac�o.');
define('ERROR_FROM_ADDRESS', 'Error: Su campo de e-mail indicado no parece ser v�lido. Por favor, int�ntelo nuevamente.');
?>