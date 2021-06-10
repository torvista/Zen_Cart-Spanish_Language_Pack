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
// $Id: password_forgotten.php 4820 2006-10-23 07:19:46Z drbyte $
//

define('HEADING_TITLE', 'Reenviar contrase�a');

define('TEXT_ADMIN_EMAIL', 'Email del administrador: ');

define('ERROR_WRONG_EMAIL', '<p>Introdujo una direcci�n de correo incorrecta.</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>Buen intento, amigo :-P</p>');
define('SUCCESS_PASSWORD_SENT', '<p>Listo: Una nueva contrase�a se ha enviado a su cuenta de email.</p>');

define('TEXT_EMAIL_SUBJECT', 'Cambio Solicitado');
define('TEXT_EMAIL_FROM', EMAIL_FROM);
define('TEXT_EMAIL_MESSAGE', 'Se ha solicitado una nueva contrase�a desde ' . $_SESSION['REMOTE_ADDR'] . '.' . "\n\n" . 'Su nueva contrase�a de \'' . STORE_NAME . '\' es:' . "\n\n" . '   %s' . "\n\nDespu�s de login con la nueva contrase�a, puede cambiarlo en Herramientas->Gesti�n de Administradores");

?>