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

define('HEADING_TITLE', 'Configuración del administrador');

define('TABLE_HEADING_ADMINS_NAME', 'Nombre de los administradores');
define('TABLE_HEADING_ADMINS_ID', 'ID');
define('TABLE_HEADING_ADMINS_EMAIL', 'Email');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_HEADING_NEW_ADMIN', 'Nuevo');
define('TEXT_HEADING_EDIT_ADMIN', 'Editar');
define('TEXT_HEADING_DELETE_ADMIN', 'Eliminar');
define('TEXT_HEADING_RESET_PASSWORD', 'Restablecer contraseña');

define('TEXT_ADMINS', 'Administradores:');
define('TEXT_ADMINS_EMAIL', 'Email:');

define('TEXT_NEW_INTRO', 'Por favor, complete la siguiente información para el nuevo administrador');
define('TEXT_EDIT_INTRO', 'Por favor, realice los cambios necesarios');

define('TEXT_ADMINS_NAME', 'Nombre de los administradores:');
define('TEXT_ADMINS_PASSWORD', 'Contraseña:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', 'Confirmar contraseña:');

define('TEXT_DELETE_INTRO', '¿Seguro que desea eliminar este administrador?');
define('TEXT_DELETE_IMAGE', '¿Eliminar imagen de los administradores?');


define('ENTRY_PASSWORD_NEW_ERROR', 'Su nueva contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' carácteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Contraseña y Confirmar contraseña deben ser coincidentes.');

define('TEXT_ADMINS_LEVEL','Nivel de privilegios:');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS','Configurando el nivel de privilegios a 1 le permitirá a este nuevo administrador sustituir la demo de administración cuando esté activa. Sólo el nivel 1 será capaz de cambiar el nombre de usuario y contraseña cuando la demo de Administración esté activa.');
define('TEXT_ADMIN_DEMO','La demo de administración cambia el Panel de Administración pasando de ser completamente funcional a semi-funcional, mas seguro para cuando usted quiera configurar una versión de demostración. Sólo los administradores en nivel 1 pueden cambiar esta configuración y deberán sustituir los permisos para permitir un uso completo de la administración, incluso cuando la demo de administración esté funcionamiento.<br />Asegúrese de establecer una cuenta de demostración a nivel 0 antes de activar esta configuración');
define('TEXT_DEMO_STATUS','La demo de administración actual está:');
define('TEXT_DEMO_OFF','Desactivada');
define('TEXT_DEMO_ON','Activada');
?>