<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 6910 2007-09-02 01:51:33Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br /> Info de Pruebas:<br /><b>N�meros de prueba de tarjetas de cr�dito:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Nota:</b> Estos n�meros ser�n denegados en modo Production y aprobados en modo Test. Puede usar cualquier fecha del futuro y cualquier c�digo de seguidad CVV de tres d�gitos (cuatro para AMEX).<br /><br /><b>N�mero para comprobar denegaci�n:</b><br /><br />Tarjeta #: 4222222222222<br /><br />' : ''));
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345"> Pinche aqu� para abrir una cuenta </a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net zona  Merchant </a><br /><br /><strong>Precisa:</strong><br /><hr />*<strong> Cuenta Authorize.net</strong> (ve el enlace arriba para abrir una)<br />*<strong>soporte CURL es imprescindible</strong> y debe ser compilada en PHP por su servicio de alojamiento. <br />*<strong>username Authorize.net and claves de transacci�n</strong> disponible de la zona Merchant ');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'no se encontraron las funciones CURL - requeridas para el m�dulo de pago Authorize.net AIM');

  // Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Tarjeta de cr�dito');  // Titulo de la opci�n de pago como se le muestra al cliente
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta de cr�dito:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Propietario de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'N�mero de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'N�mero CVV  (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'More Info' . '</a>)');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', '�Qu� es esto?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* El n�mero de la tarjeta debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' d�gitos.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Debe introducir los tres �ltimos d�gitos (n�mero CVV) del reverso de la tarjeta.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Puede que su tarjeta sea rechazada por este motivo. Por favor, corrija la informaci�n err�nea y vuelva a intentarlo o p�ngase en contacto con nosotros para obtener asistencia.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', '�Error en la tarjeta de cr�dito!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', 'AVISO: hay un problema con el d�gito de control (hash) de seguridad. P�ngase en contacto con la tienda inmediatamente. Su pedido *no* ha sido autorizado. ');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Hacer una Devoluci�n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Error: Orden� una devoluci�n pero no marc� la casilla de Confirmaci�n.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Error: Orden� una devoluci�n pero introdujo una cantidad inv�lida.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: Orden� una devoluci�n pero no introdujo los �ltimos cuatro d�gitos del n�mero de la tarjeta.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Devoluci�n Iniciada. ID de Transacci�n: %s - C�digo Auto.: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: Orden� una captura pero no marc� la casilla de Confirmaci�n.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Haga una Captura');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', ' Error: Orden� una captura pero es necesario introducir un valor.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: Hay que especificar un ID de Transacci�n.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Captura de Fondos Iniciada. Cantidad: %s.  ID de Transacci�n: %s - C�digo Auto.: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Hacer una Cancelaci�n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Error: Orden� una cancelaci�n pero no marc� la casilla de Confirmaci�n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Cancelaci�n Iniciada. ID de Transacci�n: %s - C�digo de Auto.: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Transacciones de Devoluci�n</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Puede devolver dinero a la tarjeta del cliente aqu�:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Teclee la cantidad a devolver');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Teclee los �ltimos cuatro d�gitos de la tarjeta.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Tecle el ID de Transacci�n original:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Notas (se mostrar�n en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devoluci�n Emitida');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Puede devolver una cantidad hasta el valor de la captura. Hay que suministrar los �ltimos cuatro d�gitos de la tarjeta de cr�dito utilizada en el pedido original.<br />Puede emitir una devoluci�n en los siguientes 120 d�as despu�s de la fecha de la transacci�n original.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Captura de Transacciones</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Puede capturar fondos previamente autorizados aqu�:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Introduzca la cantidad a capturar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Marque esta casilla para confirmar: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Tecle el ID de Transacci�n original:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notas (se mostrar�n en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Fondos capturados.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Puede ordenar una Captura en los 30 d�as siguientes a la fecha de la autorizaci�n original. Puede ordenar una Captura UNA VEZ solamente. <br />Aseg�rese de que la cantidad es correcta.<br />Si deja la cantidad en blanco, se utilizar� la cantidad original.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Cancelaci�n de  Transacciones </strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Puede cancelar una transacci�n si no ha cobrado:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Marque esta casilla para confirmar:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Notas (se mostrar�n en el Historial del Pedido):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transacci�n Cancelada');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Hay que terminar una Cancelaci�n antes de que la transacci�n original haya sido cobrada como parte de la remesa del d�a.');

?>