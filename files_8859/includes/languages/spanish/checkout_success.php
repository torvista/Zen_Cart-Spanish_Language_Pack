<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 14198 2009-08-18 22:32:11Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Pago');
define('NAVBAR_TITLE_2', 'Listo - Gracias');

define('HEADING_TITLE', '�Muchas gracias por su confianza!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Av�senme cuando haya cambios en los siguientes art�culos:');
define('TEXT_SEE_ORDERS', 'Puede ver su historial de pedidos y descargar las facturas yendo a <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mi Cuenta</a> y pulsando en "Ver todos los pedidos".');
define('TEXT_CONTACT_STORE_OWNER', 'Por favor, dirija cualquier pregunta que tenga a <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">atenci�n al cliente</a>.');
define('TEXT_THANKS_FOR_SHOPPING', '�Muchas gracias por su confianza!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'Tambi�n puede descargar sus productos m�s tarde en \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Su n�mero de pedido es:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'NOTA: Para procesar su pedido, se ha creado una cuenta temporal. Se puede cerrar esa cuenta haciendo click en "Log Off". Adicionalmente "Salir" asegura de que la informaci�n sobre su factura y pedido no ser� visible para la pr�xima persona que utilice este ordenador. Si quiere seguir comprando �adelante! Puede salir en cualquier momento a trav�s del enlace al principio de la p�gina.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', '<p>�Muchas gracias por su confianza!<br /> Haga un click en "Salir" para asegurarse de que la informaci�n sobre su factura y pedido no ser� visible para la pr�xima persona que utilice este ordenador.</p>');