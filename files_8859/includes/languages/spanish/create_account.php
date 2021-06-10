<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 15405 2010-02-03 06:29:33Z drbyte $
 */

define('NAVBAR_TITLE', 'Crear cuenta');

define('HEADING_TITLE', 'Informaci�n de mi cuenta');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">NOTA:</strong> Si ya tiene una cuenta con nosotros, por favor, entre en <a href="%s">su cuenta</a>.');




// greeting salutation
define('EMAIL_SUBJECT', 'Bienvenido a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Estimado Sr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Estimada Sra. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Estimado %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Bienvenido a <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', '�Felicidades! Para hacer de su pr�xima visita a nuestra tienda online una experiencia m�s gratificante, �Aqu� tiene un cup�n de descuento creado para usted!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Para usar el cup�n de descuento, ingrese el ' . TEXT_GV_REDEEM . 'c�digo en el proceso del pago:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>El cup�n es v�lido entre %s y %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'S�lo por hacer las compras de hoy, �le enviamos un ' . TEXT_GV_NAME . ' por %s!' . "\n\n");
define('EMAIL_GV_REDEEM', 'El ' . TEXT_GV_REDEEM . ' del ' . TEXT_GV_NAME . ' es: %s ' . "\n\n" . 'Puede ingresar el ' . TEXT_GV_REDEEM . ' durante el pago, despu�s de haber elegido productos en la tienda.');
define('EMAIL_GV_LINK', 'o puede canjearlo ahora siguiendo este link: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER', 'Una vez que haya agregado el ' . TEXT_GV_NAME . ' a su cuenta, puede usar el ' . TEXT_GV_NAME . ' para usted, �o envi�rselo a un amigo!' . "\n\n");

define('EMAIL_TEXT', 'Su nueva cuenta le da acceso a los siguientes servicios:' . "\n\n" . '<ul><li><strong>Carro Permanente</strong> - Cualquier de los productos agregados a su carro online permanecer�n all� hasta que usted los elimine o los compre.</li>' . "\n\n" . '<li><strong>Agenda de Direcciones</strong> : �Ahora podemos enviarle sus productos a otra direcci�n distinta a la suya! La opci�n perfecta para poder enviar regalos directamente a la persona deseada.</li>' . "\n\n" . '<li><strong>Hist�rico de Pedidos</strong> : Vea el historial de las compras que ha realizado con nosotros.</li>' . "\n\n" . '<li><strong>Comentarios de Productos</strong> : Comparta sus opiniones sobre los productos con nuestros otros clientes.</li>' . "\n\n". '</ul>');
define('EMAIL_CONTACT', 'Si necesita ayuda con cualquiera de nuestros servicios online, por favor, env�enos un email a: ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");
define('EMAIL_GV_CLOSURE', "\n" . 'Atentamente,' . "\n\n" . STORE_OWNER . "\nStore Owner\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Este email nos ha sido facilitado por usted o por alguien que se ha registrado en nuestra tienda. Si no ha sido usted, o piensa que ha recibido este mensaje por error, por favor, env�e un email a %s ');
