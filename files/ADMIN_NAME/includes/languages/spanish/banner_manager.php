<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte Sat Jul 5 15:44:37 2014 -0400 Modified in v1.5.6 $
 */

define('HEADING_TITLE', 'Gestor de Banners');

define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Grupos');
define('TABLE_HEADING_STATISTICS', 'Muestras / Clicks');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Nueva ventana');
define('TABLE_HEADING_BANNER_ON_SSL', 'Mostrar SSL');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Ordenación');

define('TEXT_BANNERS_TITLE', 'Título del banner:');
define('TEXT_BANNERS_URL', 'URL del banner:');
define('TEXT_BANNERS_GROUP', 'Grupo del banner:');
define('TEXT_BANNERS_NEW_GROUP', ', o ingrese un nuevo grupo de banners aquí debajo');
define('TEXT_BANNERS_IMAGE', 'Imagen:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', o ingrese un fichero local aquí debajo');
define('TEXT_BANNERS_IMAGE_TARGET', 'Imagen destino (Guardar en):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Carpeta de destino:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>NOTA: Los banners HTML no graban los clicks en el banner</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'Texto HTML:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Ordenación - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>NOTA: recuadro banners_box_all mostrará los banners en su orden predeterminado</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Caduca el:');
define('TEXT_BANNERS_OR_AT', ', o en');
define('TEXT_BANNERS_IMPRESSIONS', 'impresiones/vistas.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Programado para:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Notas del banner:</b><ul><li>Use una imagen o texto HTML para el banner; no ambos.</li><li>El texto HTML tiene prioridad sobre una imagen.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Notas de la imagen:</b><ul><li>¡Los directorios de subida deben tener configurados los permisos de usuario (escritura) correctos!</li><li>No llene la celda \'Guardar en\' si no está subiendo una imagen al servidor (ej: si está usando una imagen local (del lado del servidor)).</li><li>La Casilla \'Guardar en\' debe ser un directorio existente con una barra al final (ej: banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Notas de caducidad:</b><ul><li>Sólo una de las dos celdas debe ser enviada.</li><li>Si el banner no tiene caducidad entonces deje estas celdas en blanco.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Notas de la programación:</b><ul><li>Si se establece una programación, el banner será activado en esa fecha.</li><li>Todos los banners programados son marcados como desactivados hasta que llegue su fecha de activación, a partir de esto serán marcados como activos.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Estatus del Banner:');
define('TEXT_BANNERS_ACTIVE', 'Activo');
define('TEXT_BANNERS_NOT_ACTIVE', 'No activo');
define('TEXT_INFO_BANNER_STATUS', '<strong>NOTA:</strong> El estado del banner será  cambiado a base de la fecha  programada  y las veces que se mostrará');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Abrir banner en nueva ventana');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>NOTA:</strong> El banner se abrirá en una nueva ventana');
define('TEXT_BANNERS_ON_SSL', 'Banner en SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>NOTA:</strong> El banner se puede mostrar en páginas seguras sin errores');

define('TEXT_BANNERS_DATE_ADDED', 'Agregado el:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Programado para: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Caduca el: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Caduca después de  ser mostrado: <b>%s</b> veces');
define('TEXT_BANNERS_STATUS_CHANGE', 'Cambio de Estatus: %s');

define('TEXT_BANNERS_LAST_3_DAYS', 'Últimos 3 Días');
define('TEXT_BANNERS_BANNER_VIEWS', 'Vistas del banner');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clicks del banner');

define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desear eliminar este banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Eliminar imagen del banner');

define('SUCCESS_BANNER_INSERTED', 'Listo: El banner fue añadido.');
define('SUCCESS_BANNER_UPDATED', 'Listo: El banner fue actualizado.');
define('SUCCESS_BANNER_REMOVED', 'Listo: El banner fue eliminado.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Listo: El estado del banner fue actualizado.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Hace falta el título del banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Hace falta el grupo del banner.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: No existe el directorio de destino: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de destino: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: La imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: La imagen no puede eliminarse.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Estado desconocido.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Error: Precisa el imagen del banner.');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Mostrar SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Nueva ventana');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Abrir nueva ventana - Activado');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Abrir nueva ventana - Desactivado');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Mostrar en páginas seguras - Activado');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Mostrar en páginas seguras - Desactivado');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Éxito: el estatus del banner para abrir en una nueva ventana ha sido actualizado.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Éxito: el estatus del banner para mostrar con SSL ha sido actualizado.');

