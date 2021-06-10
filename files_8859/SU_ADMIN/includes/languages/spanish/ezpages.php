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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'EZ-Pages<br />Aviso: Para crear p�ginas en m�s de un idioma, se precisa el m�dulo adicional <a href=" http://www.zen-cart.com/index.php?main_page=product_contrib_info&cPath=40_47&products_id=113" target="_blank"> Multi-Language EZ-Pages</a><br /><br />');
define('TABLE_HEADING_PAGES', 'T�tulo de la P�gina');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_VSORT_ORDER', 'Orden de los cuadros');
define('TABLE_HEADING_HSORT_ORDER', 'Orden de pie de p�gina');
define('TEXT_PAGES_TITLE', 'T�tulo:');
define('TEXT_PAGES_HTML_TEXT', 'Contenido HTML:');
define('TABLE_HEADING_DATE_ADDED', 'Fecha A�adida:');
define('TEXT_PAGES_STATUS_CHANGE', 'Cambio de Estatus: %s');
define('TEXT_INFO_DELETE_INTRO', '�Seguro que quiere borrar esta p�gina?');
define('SUCCESS_PAGE_INSERTED', '�xito. La p�gina ha sido introducida.');
define('SUCCESS_PAGE_UPDATED', '�xito. La p�gina ha sido actualizada.');
define('SUCCESS_PAGE_REMOVED', '�xito. La p�gina ha sido borrada.');
define('SUCCESS_PAGE_STATUS_UPDATED', '�xito. El estatus de la p�gina ha sido actualizado.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Error: T�tulo de la p�gina requerido.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Marcado del estatus desconocido.');
define('ERROR_MULTIPLE_HTML_URL', 'Error: Ha definido opciones m�ltiples del enlace cuando solamente una est� permitida. ...<br />Puede definir: Contenido HTML Content -o- URL de un enlace interno -o- URL de un enlace externa ');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Encabezado:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Cuadro:');
define('TABLE_HEADING_STATUS_FOOTER', 'Pie:');
define('TABLE_HEADING_STATUS_TOC', 'TdContenido:');
define('TABLE_HEADING_CHAPTER', 'Cap�tulo:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Abrir Nueva Ventana:');
define('TABLE_HEADING_PAGE_IS_SSL', 'P�gina es SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> p�ginas)');
define('IMAGE_NEW_PAGE', 'P�gina Nueva');
define('TEXT_INFO_PAGE_IMAGE', 'Imagen');
define('TEXT_INFO_CURRENT_IMAGE', 'Imagen Actual:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Elija una p�gina ...');

define('TEXT_HEADER_SORT_ORDER', 'Orden:');
define('TEXT_SIDEBOX_SORT_ORDER', ' Orden:');
define('TEXT_FOOTER_SORT_ORDER', ' Orden:');
define('TEXT_TOC_SORT_ORDER', ' Orden:');
define('TEXT_CHAPTER', 'Prev/Prox Cap�tulo:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Cap�tulo:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', '<strong>Encabezado-Orden:</strong> se utiliza  cuando se generan p�ginas en una sola fila horizontal en el encabezado.  Para incluir est� p�gina en el listado de la fila horizontal el orden debe ser mayor que cero.');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', '<strong>Cuadro-Orden:</strong> se utiliza cuando las p�ginas est�n en un listado vertical de enlaces. Para incluir est� p�gina en el listado vertical el orden debe ser mayor que cero. Si no, se considera como texto HTML para intenciones especiales.');
define('TEXT_FOOTER_ORDER_EXPLAIN', '<strong>Pie de P�gina-Orden:</strong> se utiliza  cuando se generan p�ginas en una sola fila horizontal en el pie de p�gina.  Para incluir esta p�gina en el listado de la fila horizontal, el orden debe ser mayor que cero.');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', '<strong>TdC (Tabla de Contenidos)-Orden:</strong> se utiliza cuando se generan p�ginas personalizadas como en una fila horizontal (encabezado/pie de p�gina etc.) o fila vertical, dependiendo de los requisitos personales.  Para incluir est� p�gina en el listado el orden debe ser mayor que cero.');
define('TEXT_CHAPTER_EXPLAIN', 'Se usa <strong>Cap�tulo</strong> con un TdC (Tabla de Contenidos) Orden para los enlaces Previo/Pr�ximo. Los enlaces del TdC consisten de las p�ginas que tienen esta n�mero de cap�tulo and se las ve en el TdC Orden.');

define('TEXT_ALT_URL', 'URL Enlace Local:');
define('TEXT_ALT_URL_EXPLAIN', 'Si as� est� definido, se ignorar� el contenido de la p�gina y se utilizar� este enlace local <br />Ejemplo a Rese�as: index.php?main_page=reviews<br />Ejemplo a Mi Cuenta: index.php?main_page=account y marcar� como SSL');

define('TEXT_ALT_URL_EXTERNAL', 'URL Enlace Externa:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', ' Si as� est� definido, se ignorar� el contenido de la p�gina y se usar� este enlace local <br />Ejemplo de un enlace externo: http://www.zen-cart.com');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Orden de Listado: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Cap�tulo/TdC');
define('TEXT_SORT_HEADER_TITLE', 'Encabezado');
define('TEXT_SORT_SIDEBOX_TITLE', 'Cuadro');
define('TEXT_SORT_FOOTER_TITLE', 'Pie de P�gina');
define('TEXT_SORT_PAGE_TITLE', 'Page T�tulo');
define('TEXT_SORT_PAGE_ID_TITLE', 'ID de la P�gina, T�tulo');

define('TEXT_PAGE_TITLE', 'T�tulo:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>AVISO: Enlaces M�ltiples Definidos</strong>');
?>