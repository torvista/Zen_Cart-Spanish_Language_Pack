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
//  $Id: admin.php 1105 2005-04-04 22:05:35Z birdbrain $
// edited by SS

define('HEADING_TITLE', 'Configuraci�n del administrador');

define('TABLE_HEADING_ADMINS_NAME', 'Nombre de los administradores');
define('TABLE_HEADING_ADMINS_ID', 'ID');
define('TABLE_HEADING_ADMINS_EMAIL', 'Email');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_HEADING_NEW_ADMIN', 'Nuevo');
define('TEXT_HEADING_EDIT_ADMIN', 'Editar');
define('TEXT_HEADING_DELETE_ADMIN', 'Eliminar');
define('TEXT_HEADING_RESET_PASSWORD', 'Restablecer contrase�a');

define('TEXT_ADMINS', 'Administradores:');
define('TEXT_ADMINS_EMAIL', 'Email:');

define('TEXT_NEW_INTRO', 'Por favor, complete la siguiente informaci�n para el nuevo administrador');
define('TEXT_EDIT_INTRO', 'Por favor, realice los cambios necesarios');

define('TEXT_ADMINS_NAME', 'Nombre de los administradores:');
define('TEXT_ADMINS_PASSWORD', 'Contrase�a:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', 'Confirmar contrase�a:');

define('TEXT_DELETE_INTRO', '�Seguro que desea eliminar este administrador?');
define('TEXT_DELETE_IMAGE', '�Eliminar imagen de los administradores?');


define('ENTRY_PASSWORD_NEW_ERROR', 'Su nueva contrase�a debe tener un m�nimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' car�cteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Contrase�a y Confirmar contrase�a deben ser coincidentes.');

define('TEXT_ADMINS_LEVEL','Nivel de privilegios:');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS','Configurando el nivel de privilegios a 1 le permitir� a este nuevo administrador sustituir la demo de administraci�n cuando est� activa. S�lo el nivel 1 ser� capaz de cambiar el nombre de usuario y contrase�a cuando la demo de Administraci�n est� activa.');
define('TEXT_ADMIN_DEMO','La demo de administraci�n cambia el Panel de Administraci�n pasando de ser completamente funcional a semi-funcional, mas seguro para cuando usted quiera configurar una versi�n de demostraci�n. S�lo los administradores en nivel 1 pueden cambiar esta configuraci�n y deber�n sustituir los permisos para permitir un uso completo de la administraci�n, incluso cuando la demo de administraci�n est� funcionamiento.<br />Aseg�rese de establecer una cuenta de demostraci�n a nivel 0 antes de activar esta configuraci�n');
define('TEXT_DEMO_STATUS','La demo de administraci�n actual est�:');
define('TEXT_DEMO_OFF','Desactivada');
define('TEXT_DEMO_ON','Activada');
?>