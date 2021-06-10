<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Gesti�n de Bolet�nes de noticias y Notificaciones de Producto');

define('TABLE_HEADING_NEWSLETTERS', 'Boletines');
define('TABLE_HEADING_SIZE', 'Tama�o');
define('TABLE_HEADING_MODULE', 'M�dulo');
define('TABLE_HEADING_SENT', 'Enviado');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_NEWSLETTER_MODULE', 'M�dulo:');
define('TEXT_NEWSLETTER_TITLE', 'T�tulo del Bolet�n:');
define('TEXT_NEWSLETTER_CONTENT', 'Contenido <br />de s�lo texto:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Contenido <br />de texto enriquecido:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Agregado el:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Fecha de Env�o:');

define('TEXT_INFO_DELETE_INTRO', '�Seguro que desea eliminar este bolet�n?');

define('TEXT_PLEASE_WAIT', 'Por favor, espere .. enviando emails ..<br><br>�No interrumpa este proceso!');
define('TEXT_FINISHED_SENDING_EMAILS', '�Env�o de e-mails finalizado!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s correos procesados. <br /><br />Revise su bandjea de entrada de correo ('.EMAIL_FROM.') para:<UL><LI>a) mensajes rebotados</LI><LI>b) direcciones de correo que ya no son v�lidas</LI><LI>c) peticiones de borrado.</LI></UL>Las peticiones de borrado pueden ser procesadas editando la informaci�n del cliente en el men� Admin | Clientes.');

define('ERROR_NEWSLETTER_TITLE', 'Error: Hace falta el t�tulo del bolet�n');
define('ERROR_NEWSLETTER_MODULE', 'Error: Hafe falta el m�dulo del bolet�n');
define('ERROR_PLEASE_SELECT_AUDIENCE','Error: Por favor, seleccione la audiencia a la que va destinada el bolet�n');
?>