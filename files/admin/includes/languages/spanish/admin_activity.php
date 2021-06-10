<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php 19537 2011-09-20 17:14:44Z drbyte $
 */

define('HEADING_TITLE', 'Gestión de los Archivos de Actividad de Admin');
define('HEADING_SUB1', 'Examinar o Exportar Archivos');
define('HEADING_SUB2', 'Limpiar el historial de archivos');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Formato de archivo de exportación:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Nombre de archivo de exportación:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','¿Guardar en el servidor?(si no, se descargará directamente desde esta ventana.)');
define('TEXT_ACTIVITY_EXPORT_DEST','Destino: ');
define('TEXT_PROCESSED', ' Procesado.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Exportación terminanda. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'AVISO: La exportación falló. No se pudo escribir el archivo');

define('TEXT_INSTRUCTIONS','<u>INSTRUCCIONES</u><br />En está página se puede exportar el archivo de actividades Admin Zen Cart&reg; a un archivo CSV file para guardar.<br />Debe archivar esta información por si caso es requerida en una investigación de fraude. Es imprescindible para cumplir con la ley PCI.<br />
<ol><li>Elija mostrar o exportar un archivo.<li>Escriba un nombre para el archivo.<li>Pinche en Guardar para seguir.<li>Elija si quiere guardar o abrir el archivo, dependiendo de lo que ofrece el navegador.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Tabla del Archivo de Admin vacío en la base de datos<br />¡AVISO: ASEGÚRESE DE HACER UN BACKUP DE LA BASE DE DATOS ANTES DE INICIAR ESTA ACTUALIZACIÓN!</strong><br />El Archivo de Actividades Admin es un método para grabar las actividades en el Admin. <br />Puede aumentar en tamaño rápidamente; hay que vaciarlo a menudo.<br />Salen avisos cuando la tabla alcanza 50.000 activides o han pasado 60 días.<br /><span class="alert">NOTA: Para cumplir con PCI, debe guardar estos datos de actividad durante 12 meses.<br />Recomendamos que guarde un copia - EXPORTAR A CSV, y GUARDAR - antes de limpiar el archivo.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">¡PRECAUCIÓN!: Se dispone a BORRAR entradas *importantes* de las Actividades de Admin de la base de datos.</span></strong><br />Asegúrese de que tiene un backup de estos entradas ANTES de borrarlos.<br />Si continúa, ud. acepta que está borrando las entradas y que entiende sus responsibilidades legales con respecto a estas entradas.<br /><br />Entiendo mis responsibilidades y quiero borrar los datos cuando pincho en Resetear:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', 'El archivo del Actividades de Admin ha sido <strong>borrado</strong>');

