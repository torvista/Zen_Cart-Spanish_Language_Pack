<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
// -----
// Part of the "Display Logs" plugin for Zen Cart v1.5.0 or later
//
// Copyright (c) 2012-2017, Vinos de Frutas Tropicales (lat9)
//
define('HEADING_TITLE', 'Mostrar los Historiales');

define('TABLE_HEADING_FILENAME', 'Nombre Archivo');
define('TABLE_HEADING_MODIFIED', 'Fecha Modificado');
define('TABLE_HEADING_FILESIZE', 'Tamaño (bytes)');
define('TABLE_HEADING_DELETE', '¿Borrar?');
define('TABLE_HEADING_ACTION', 'Acción');

define('BUTTON_DELETE_SELECTED', 'Borrar Seleccionado(s)');
define('DELETE_SELECTED_ALT', 'Borrar Todos los archivos seleccionados');
define('BUTTON_DELETE_ALL', 'Borrar Todos');
define('DELETE_ALL_ALT', 'Borrar todos los archivos mostrados');

define('ICON_INFO_VIEW', 'Ver el contenido del archivo');

define('DISPLAY_DEBUG_LOGS_ONLY', '¿Mostrar solamente los debugs?');
define('LOG_SORT_ASC', 'Asc');
define('LOG_SORT_DESC', 'Desc');

define('TEXT_HEADING_INFO', 'Contenido');

// -----
// Sort-order descriptions, used in the instructions' display.
//
define('TEXT_MOST_RECENT', 'más reciente');
define('TEXT_OLDEST', 'más antiguo');
define('TEXT_SMALLEST', 'más pequeño');
define('TEXT_LARGEST', 'más grande');

// -----
// The TEXT_INSTRUCTIONS string is passed into sprintf to produce the instructions given on the plugin's main display,
// using the following variables:
//
// %1$u ... The maximum size of a fully-displayed file.
// %2$s ... Contains a descriptive string identifying the current sort order
// %3$u ... The number of log files currently being displayed.
// %4$u ... The number of log files currently present in the log-related directories.
// %5$s ... The "included" prefixes for the log-files displayed.
// %6$s ... The "excluded" prefixes for the log-files displayed.
//
$imageName = zen_image (DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br><br>Se puede ordenar los archivos pinchando en el título de una columna. Pinche en el icono ' . $imageName . ' para ver el contenido del archivo. Solamente muestra los primeros %1$u bytes; si el tamaño del archivo es &quot;excesivo&quot;, destaca <em>Tamaño Archivo</em> como <span class="bigfile">este</span>.<br><br>Pinche el botón <strong>Borrar Todo</strong> para borrar todos los archivos actualmente a la vista; pinche <strong>Borrar Seleccionado(s)</strong> para borrar ciertos archivos.<br><br>Actualmente mostrando el %2$s %3$u de %4$u archivos con el prefijo <code>%5$s</code> y <b>no</b> coincide <code>%6$s</code>.<br>');

define('JS_MESSAGE_DELETE_ALL_CONFIRM', '¿Está seguro que quiere borrar estos \'+n+\' archivos?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', '¿Está seguro que quiere borrar los \'+selected+\' archivo(s) seleccionados?');

define('WARNING_NOT_SECURE','<span class="errorText">NOTA: SSL no habilitado. El contenido del archivo que visualiza en esta página no será encriptado y puede ser un riesgo de seguridad.</span>');
define('WARNING_NO_FILES_SELECTED', '¡No había archivos seleccionados para borrar!');
define('WARNING_SOME_FILES_DELETED', 'Aviso: Solamente se borraron %u de %u archivos; revise los permisos de los archivos/directorio.');
define('SUCCESS_FILES_DELETED', 'Se borró %u archivos.');
