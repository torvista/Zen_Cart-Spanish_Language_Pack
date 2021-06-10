<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Entrar en su cuenta');
define('HEADING_TITLE', 'Bienvenido, acceda a su cuenta');

define('HEADING_NEW_CUSTOMER', '�No est� registrado? Puede hacerlo aqu�');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Clientes Nuevos');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Registrarse en <strong>' . STORE_NAME . '</strong> le permite comprar m�s r�pido, seguir el estado de sus pedidos y revisar sus pedidos anteriores.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', '�Tiene una cuenta PayPal? �Quiere pagar r�pidamente con una tarjeta de cr�dito? Utilice el bot�n PayPal que encontrar� m�s abajo para seleccionar la opci�n de pago Express Checkout.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">O</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Cree un Perfil de Cliente con <strong>' . STORE_NAME . '</strong> que le permitir� comprar m�s r�pido, seguir el estatus de su pedido, ver sus pedidos hist�ricos y aprovecharse de los beneficios para socios.');

define('HEADING_RETURNING_CUSTOMER', 'Clientes registrados: Entrar en su cuenta ');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Clientes Registrados');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Para continuar, acceda a su cuenta <strong>' . STORE_NAME . '</strong>.');

define('TEXT_PASSWORD_FORGOTTEN', '�Olvid� su contrase�a?');

define('TEXT_LOGIN_ERROR', 'Error: Disculpe, el email y/o la contrase�a son err�neos.');
define('TEXT_VISITORS_CART', '<strong>Nota:</strong> Los art�culos que est�n en su &quot;Carro de la compra&quot; pasar�n a su carro de la compra de usuario registrado. <a href="javascript:session_win();">[M�s Info]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Declaraci�n de Privacidad</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Por favor, acepte nuestra declaraci�n de privacidad marcando el siguiente casillero. Puede leer la declaraci�n de privacidad</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aqu�</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">He le�do y acepto la declaraci�n de privacidad.</span>');

define('ERROR_SECURITY_ERROR', 'Se ha producido un error de seguridad en el proceso del login');

define('TEXT_LOGIN_BANNED', 'Error: Acceso denegado.');