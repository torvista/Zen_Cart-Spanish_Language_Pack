<?php //Spanish Language Pack UTF-8: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Unsubscribe');
define('HEADING_TITLE', 'Unsubscribe from our Newsletter');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />Nos apena saber que desea cancelar su suscripción a nuestro boletín de noticias. Si está preocupado por su privacidad, por favor, lea nuestra <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">política de privacidad</span></a>.<br /><br />Los suscriptores de nuestro boletín de noticias son avisados de nuestras novedades, ofertas especiales, y noticias de la página.<br /><br />Si pese a todo, no desea seguir recibiendo nuestro boletín de noticias, por favor, haga clic en el botón de la parte inferior');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />Nos apena saber que desea cancelar su suscripción a nuestro boletín de noticias. Si está preocupado por su privacidad, por favor, lea nuestra <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">política de privacidad</span></a>.<br /><br />Los suscriptores de nuestro boletín de noticias son avisados de nuestras novedades, ofertas especiales y noticias de la página.<br /><br />Si pese a todo, no desea seguir recibiendo nuestro boletín de noticias, por favor, haga clic en el botón de la parte inferior. Se le dirigirá a la zona de preferencias de su cuenta, donde podrá editar sus suscripciones. Puede que necesite identificarse previamente.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Su dirección de correo, mostrada más abajo, ha sido eliminada de nuestra base de datos del boletín de noticias, bajo su petición expresa. <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />No se encontró dicha dirección de correo en nuestra base de datos del boletín de noticias, o ya ha sido eliminada de la lista de distribución con anterioridad. <br /><br />');
?>