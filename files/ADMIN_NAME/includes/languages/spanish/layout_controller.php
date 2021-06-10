<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: layout_controller.php 2014-07-28 drbyte $
 */

define('HEADING_TITLE', 'Cuadros de las Columnas');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Nombre del archivo del cuadro');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'Columna Izq/Dch<br />ESTATUS');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'Columna Única<br />ESTATUS');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'Columna<br />IZQ/DCH');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'Columna Izq/Dch<br />ORDEN');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Columna Única<br />ORDEN');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_INFO_LAYOUT_BOX','Cuadro seleccionado: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Nombre del Cuadro:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Ubicación: (la Columna Singular ignora este dato)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Estado de Columna Izquierda/Derecha: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Estado de Columna Única: ');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Orden de Columna Izquierda/Derecha:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Orden de Columna Única');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca el nuevo cuadro con su información relacionada');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar este cuadro?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Nuevo Cuadro');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Editar Cuadro');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Eliminar Cuadro');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Eliminar cuadro faltante del listado de esta plantilla: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTA: Esto no elimina ficheros así que puede volver a añadir el cuadro en cualquier momento sólo añadiendolo al directorio correcto.<br /><br /><strong>Eliminar nombre de cuadro: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Restablecer la configuración de los cuadros a la por DEFECTO para Plantilla: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Esto no elimina ninguno de los cuadros. Sólo restablecerá el orden por defecto');
define('TEXT_INFO_BOX_DETAILS','Detalles de Recuadro: ');
define('TEXT_INFO_SET_AS_DEFAULT','Guardar la configuración actual como el por defecto.');
define('TEXT_INFO_THE_ABOVE_SETTINGS_ARE_FOR', ' (p.ej.: este copiará la configuración para la plantilla [<strong>%s</strong>] para ser los nuevos valores por defecto)');//TODO

define('TABLE_HEADING_ACTION', 'Acción');

define('TABLE_HEADING_BOXES_PATH', 'Ruta: ');
define('TEXT_WARNING_NEW_BOXES_FOUND', 'AVISO: Se ha encontrado nuevos recuadros: ');
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<span class="alert">NO SE ENCUENTRA</span><br />');

// Success messages
define('SUCCESS_BOX_DELETED', 'Actualizado: Se ha borrado el recuadro de la plantilla ');
define('SUCCESS_BOX_RESET', 'Actualizado: La configuración de todos los cuadros fue restablecida para la plantilla ');
define('SUCCESS_BOX_UPDATED', 'Actualizado: configuración del cuadro actualizada ');
define('SUCCESS_BOX_SET_DEFAULTS','Actualizado: Actualizado los valores por defecto con la configuración de la plantilla ');

define('TEXT_ON', ' ACTIVADO ');
define('TEXT_OFF', ' DESACTIVADO ');
define('TEXT_LEFT', ' IZQ ');
define('TEXT_RIGHT', ' DCH ');