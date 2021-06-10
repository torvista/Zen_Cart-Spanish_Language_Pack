<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'Expir� el tiempo de sesi�n');
define('HEADING_TITLE', 'Expir� el tiempo de sesi�n');
define('HEADING_TITLE_LOGGED_IN', 'Lo sentimos, no se puede realizar la operaci�n solicitada.');
define('TEXT_INFORMATION', '<p>Si estaba realizando un pedido, por favor identif�quese de nuevo y su carro de la compra ser� recuperada. Deber� volver a realizar el pago y completar su �ltima compra. </p><p>Si complet� su pedido y desea revisarlo' . (DOWNLOAD_ENABLED == 'true' ? ', o tiene una descarga y desea completarla' : '') . ', por favor, vaya a <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mi Cuenta</a> para visualizar su pedido.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'A�n est� conectado a su cuenta y puede seguir comprando.');

define('HEADING_RETURNING_CUSTOMER', 'Entrar');
define('TEXT_PASSWORD_FORGOTTEN', '�Ha olvidado su contrase�a?');
?>