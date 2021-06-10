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
//  $Id: newsletter.php,v 1.1 2005/12/22 22:31:32 gorkau Exp $
//

define('TEXT_COUNT_CUSTOMERS', 'Clientes recibiendo el bolet�n de noticias: %s');
define('HEADING_TITLE', 'Administrador de bolet�n de noticias');

define('TABLE_HEADING_NEWSLETTERS', 'Boletines');
define('TABLE_HEADING_SIZE', 'Tama�o');
define('TABLE_HEADING_MODULE', 'M�dulo');
define('TABLE_HEADING_SENT', 'Enviado');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_NEWSLETTER_MODULE', 'M�dulo:');
define('TEXT_NEWSLETTER_TITLE', 'Asunto:');
define('TEXT_NEWSLETTER_CONTENT', 'Contenido <br />s�lo texto:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Contenido <br />texto enriquecido:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'A�adido el:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Enviado el:');

define('TEXT_INFO_DELETE_INTRO', '�Est� seguro de que desea borrar este bolet�n?');

define('TEXT_PLEASE_SELECT_AUDIENCE','Por favor, seleccione la audiencia para este env�o de bolet�n: ');
define('TEXT_PLEASE_WAIT', 'Espere, por favor .. enviando correos ..<br /><br />Por favor, �no interrumpa este proceso!');
define('TEXT_FINISHED_SENDING_EMAILS', '�Finaliz� el env�o de emails!');

define('ERROR_NEWSLETTER_TITLE', 'Error: T�tulo de bolet�n requerido');
define('ERROR_NEWSLETTER_MODULE', 'Error: M�dulo de bolet�n requerido');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER', 'Error: Por favor, bloquee el bolet�n antes de borrarlo.');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER', 'Error: Por favor, bloquee el bolet�n antes de editarlo.');
define('ERROR_SEND_UNLOCKED_NEWSLETTER', 'Error: Por favor, bloquee el bolet�n antes de enviarlo.');
?>
