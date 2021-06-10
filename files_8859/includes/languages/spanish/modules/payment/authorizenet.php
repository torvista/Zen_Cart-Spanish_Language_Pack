<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * Authorize.net SIM Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet.php 15868 2010-04-11 01:14:50Z drbyte $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Tarjeta de Cr�dito'); // T�tulo del m�todo de pago que ve el cliente
  
  
  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Identificaci�n</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Info de Pruebas:<br /><b>N�meros de prueba de tarjetas de cr�dito:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Nota:</b> Estos n�meros ser�n denegados en modo Producci�n y aprobados en modo Test. Puede usar cualquier fecha futura y cualquier c�digo de seguidad CVV de tres d�gitos (cuatro para AMEX).<br /><br /><b>N�mero para comprobar denegaci�n:</b><br /><br />Tarjeta #: 4222222222222<br /><br />' : '') . '<br /><br /><strong>Par�metros</strong><br />Puede dejar en blanco las URLs de "respuesta" y "recepci�n" en su perfil de Merchant Authorize.net, puede apuntar a http://su_dominio.com/foldername/index.php?main_page=checkout_payment');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Haga clic aqu� para abrir una cuenta</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Haga clic aqu� para indentificarse en la zona de Merchants</a><br /><br /><strong>Requerimientos:</strong><br /><hr />*<strong>Cuenta Authorize.net</strong> (vea el enlace arriba para abrirla)<br />*<strong>nombre de usuario de Authorize.net y clave de transacci�n</strong> disponible en la zona Merchant');
  }
  
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Tipo:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Propietario de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'N�mero de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'N�mero CVV :');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', '�Qu� es esto?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* El n�mero de la tarjeta de cr�dito debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Tecle el n�mero de 3 � 4 d�gitos de la cara trasera de la tarjeta.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Hubo un error al procesar su tarjeta de cr�dito. Por favor, int�ntelo otra vez.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Su tarjeta de cr�dito fue rechazada. Por favor, int�ntelo con otra tarjeta o contacte con su banco para m�s informaci�n.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', '�Error en la tarjeta de cr�dito!');
