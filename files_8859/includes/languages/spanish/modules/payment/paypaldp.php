<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2005 CardinalCommerce
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypaldp.php 16075 2010-04-26 19:39:26Z drbyte $
 */

  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP', 'PayPal Website Payments Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Website Payments Pro Payflow Edition (UK)');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Website Payments Pro</strong>%s<br />' . '<a href="http://www.zen-cart.com/partners/paypal" target="_blank"> Gestionar su cuenta PayPal.</a>' . '<br /><br /><font color="green"> Configuraci�n:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal" target="_blank"> Abra una cuenta PayPal aqu�.</a><br />' . 
(defined('MODULE_PAYMENT_PAYPALDP_STATUS') ? '' : '... y haga clic sobre "install" arriba para activar soporte para PayPal Express Checkout.</br>') . 
(!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '' ? '<span class="alert">2. </span><strong>Par�metros API</strong> de la opci�n API Credentials en la configuraci�n de perfil de su cuenta PayPal. Este m�dulo utiliza la opci�n <strong>API Signature/Firma</strong> opci�n - necesitar� el usuario, contrase�a y firma para rellenar los campos abajo.' : '<span class="alert">2. </span>Aseg�rese de insertar los datos de seguridad que correspondan al usuario/contrase�a etc. abajo.') .
'<font color="green"><hr /><strong>Requisitos:</strong></font><br /><hr />*<strong>Express Checkout</strong> debe ser instalado y activado para usar  Website Payments Pro, en acuerdo con las condiciones de servicio de PayPal. <br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION', 'Tarjeta de Cr�dito');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TITLE', ' Tarjeta de Cr�dito ');
  define('MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE', ' Tarjeta de Cr�dito (WPP)');
  define('MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE', ' Tarjeta de Cr�dito (PF)');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_HEADING', 'Lo sentimos pero no pudimos procesar su tarjeta de cr�dito.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR', 'La informaci�n de la tarjeta que insert� tiene un error. Rev�selo e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME', ' Nombre de pila del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME', 'Apellidos del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER', 'Nombre del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER', 'N�mero de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE', 'Fecha de emisi�n:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Maestro Issue No.:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER', 'N�mero CVV:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(en el reverso de la tarjeta)');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR', 'Transacci�n para');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED', 'Su tarjeta ha sido rechazada. Utilice otra tarjeta o p�ngase en contacto con su banco para m�s informaci�n');
  define('MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED', 'No podemos procesar su pedido. Elija otro m�todo de pago o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE', 'No podemos procesar su pedido. Int�ntelo otra vez, elija un m�todo de pago alternativo o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR', 'Ocurri� un error cuando intentamos contactar con el procesador de pagos. Int�ntelo otra vez, elige un m�todo de pago alternativo o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE', 'Estimado Propietario de la tienda,' . "\n" . 'Un error ocurri� en el intento de iniciar el proceso de validaci�n del pago. Solamente el n�mero del error era mostrado al cliente. Los detalles del error se muestran abajo.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERT: PayPal Direct Payment Error');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR', 'La direcci�n no es v�lida o no coincide con nuestra informaci�n. Corrija o elija otra direcci�n e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal no pudo pagar esta transacci�n. Elija otra m�todo de pago o comprobar las opciones de pago de su cuanta PayPal antes de seguir.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ERROR', 'Ocurri� un error cuando intentamos procesar su tarjeta de cr�dito. Int�ntelo otra vez, elija un m�todo de pago alternativo o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD', 'Perdone la molestia pero no aceptamos su tipo de tarjeta de cr�dito. Utilice otra tarjeta o comprobar que los datos son correctos o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN', 'Hubo un problema en la validaci�n de su cuenta. Int�ntelo otra vez.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER', '* El n�mero de la tarjeta de cr�dito debe tener al menos' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV', '* Tecle el n�mero de 3 � 4 d�gitos de la cara trasera de la tarjeta.\n');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT', 'AVISO: Fallo de la verificaci�n de la direcci�n. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fallo de la verificaci�n del c�digo CVV. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT', 'El pedido est� pendiente de verificaci�n por la tienda.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR', 'El estado asignado a su cuenta no es v�lido. Por favor, entre en su cuenta y c�mbielo.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos seguir con el pago porque la cuenta PayPal de la tienda no es PayPal Website Payments Pro o no ha sido contratado PayPal gateway services. Elija un m�todo de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos iniciar el pago porque la cuenta PayPal de la tienda no es EE.UU. PayPal Website Payments Pro o no ha sido contratado PayPal gateway services. Elija un m�todo de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos iniciar el pago porque la cuenta PayPal de la tienda no es PayPal Website Payments Pro 2.0 (UK) o no ha sido contratado PayPal gateway services. Elija un m�todo de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Disculpe las molestias. Los par�metros de autentificaci�n de la cuenta PayPal no han sido configurados o son incorrectos. No podemos completar la transacci�n. Por favor, notifique a la tienda sobre este problema. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Lo sentimos pero la cuenta PayPal de la tienda tiene base en un pa�s donde actualmente Website Payments Pro no est� disponible. Elija un m�todo de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Lo sentimos. La tarjeta de cr�dito que est� utilizando no es compatible con la moneda que seleccion� en la tienda. Cambie la moneda de la tienda/de su pedido o elija otro m�todo de pago para completar su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: �El m�dulo no est� configurado todav�a)</span>');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Intent� pagar con un tipo de tarjeta de cr�dito no admitido en esta tienda. Disculpe las molestias, por favor int�ntelo otra vez con otra tarjeta o elija otro m�todo de pago para completar su pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR', 'Hubo un problema recuperando los detalles de la transacci�n.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR', 'Hubo un problema para encontrar transacciones que coincidan con los criterios especificados.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR', 'Hubo un problema para cancelar la transacci�n. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR', 'Hubo un problema en la devoluci�n de la cantidad especificada. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR', 'Hubo un problema en la autorizaci�n de la transacci�n. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR', 'Hubo un problema capturando la transacci�n. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR', 'Su petici�n de devoluci�n fue rechazada por PayPal.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT', 'Solicit� una devoluci�n parcial pero no especific� la cantidad.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Solicit� una devoluci�n total pero no marc� la casilla para confirmarlo.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT', 'Solicit� una autorizaci�n pero no especific� una cantidad.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT', 'Solicit� una captura de fondos pero no especific� una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR', 'Solicit� una cancelaci�n pero no marc� la casilla de confirmaci�n.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR', 'Solicit� un autorizaci�n pero no marc� la casilla de confirmaci�n.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Solicit� una captura de fondos pero no marc� la casilla de confirmaci�n.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED', 'Devoluci�n PayPal para %s iniciada. ID Transacci�n: %s. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED', 'Autorizaci�n PayPal para %s iniciada. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED', 'Captura PayPal para %s iniciada. ID Comprobante: %s. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED', 'Petici�n PayPal de Cancelaci�n iniciada. ID Transacci�n: %s. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR', 'Hubo un error en la transacci�n. Dir�jase a la gu�a del API o los archivos de transacciones para informaci�n detallada.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR', 'Disculpe las molestias. Actualmente no podemos procesar pedidos utilizando este m�todo de pago desde la zona geogr�fica que especific� en su direcci�n de cuenta. Elija otro m�todo de pago. ');


  // These are used for displaying raw transaction details in the Admin area:
define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nombre');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Apellidos:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Empresa:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Direcci�n:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Calle:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Localidad:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Provincia:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'C�digo postal:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pa�s:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email del pagador:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID del pagador:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Estado del pagador:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Estado de la direcci�n:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipo de pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Estado del pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Raz�n de pendiente:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Factura:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Fecha de pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Moneda:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Cantidad bruta:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Costo de pago:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Tasa de cambio:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Productos en el carro:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipo de transacci�n:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID de transacci�n:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID de transacci�n padre:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Devoluciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si quiere devolver este pedido en su totalidad, pinche aqu�:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Hacer una Devoluci�n Total');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Hacer una Devoluci�n Parcial');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... o teclee la cantidad parcial. ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Introduzca la ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'cantidad de la devoluci�n aqu� y haga clic en Devoluci�n Parcial');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '* No est� permitido solicitar una devoluci�n total despu�s de tramitar una devoluci�n parcial. <br />*Multiples devoluciones parciales est�n permitidas hasta el valor total del pedido.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Nota para mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Confirmar: ');


  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si desea autorizar parte de este pedido, inserte la cantidad aqu�:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Hacer una Autorizaci�n');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong> Nota para mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Captura de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si quiere capturar todo o un valor parcial de la cantidad autorizada para este pedido, inserte la Cantidad de Captura y elija si es el �ltimo para este pedido. Marque la casilla de Confirmaci�n antes de hacer la solicitud.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Hacer una Captura');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Cantidad para capturar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', '�Es esta la captura final?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Gracias por el pedido.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmar: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Cancelaci�n de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si quiere cancelar una autorizaci�n, teclee el ID de autorizaci�n aqu� y confirme:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');    
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Gracias por su inter�s en nuestros productos. Por favor vuelva cuando lo desee.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Hacer una Cancelaci�n');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Estado Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'C�digo Aut,:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Direcci�n Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS CP Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'D�as hasta vencimiento:');

  define('MODULES_PAYMENT_PAYPALDP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Cargos �nicos relacionados a ');
  define('MODULES_PAYMENT_PAYPALDP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Recargos');
  define('MODULES_PAYMENT_PAYPALDP_LINEITEM_TEXT_SURCHARGES_LONG', 'Cargos de manipulaci�n y otros recargos');
  define('MODULES_PAYMENT_PAYPALDP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Descuentos');
  define('MODULES_PAYMENT_PAYPALDP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Cr�ditos aplicados, incluyendo cupones de descuento, vales de compra etc.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Estado de Pago en Revisi�n de Fraude: ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Esta es una notificaci�n autom�tica para advertirle de que PayPal ha marcado el pago de un pedido nuevo para ser revisado por el Equipo de Fraude. Suele tardar no m�s que 36 horas. Recomendamos que NO ENV�E el pedido hasta que el pago haya sido revisado. Puede ver el estado de este pedido en su cuenta PayPal, Transacciones Recientes');

  define('CENTINEL_AUTHENTICATION_ERROR', 'Fallo de Autorizaci�n - La entidad bancaria indic� que no pudo autenticar esa transacci�n. Para protegerse contra el uso fraudulento, no puede usar esta tarjeta en esta compra. Elija otro m�todo de pago. ');
  define('CENTINEL_PROCESSING_ERROR', 'Hubo un problema en obtener autorizaci�n para la transacci�n. Tecle otra vez su informaci�n de pago, o elija otro m�todo de pago.');
  define("CENTINEL_ERROR_CODE_8000", "8000");
  define("CENTINEL_ERROR_CODE_8000_DESC", "Protocolo No Reconocido, debe ser http:// o https://");
  define("CENTINEL_ERROR_CODE_8010", "8010");
  define("CENTINEL_ERROR_CODE_8010_DESC", "No puedo comunicarse con el servidor MAPS");
  define("CENTINEL_ERROR_CODE_8020", "8020");
  define("CENTINEL_ERROR_CODE_8020_DESC", "Error al procesar la respuesta XML");
  define("CENTINEL_ERROR_CODE_8030", "8030");
  define("CENTINEL_ERROR_CODE_8030_DESC", "Retraso de comunicaci�n fuera de limite ");
  define("CENTINEL_ERROR_CODE_1001", "1001");
  define("CENTINEL_ERROR_CODE_1001_DESC", "Hay un problema de Configuraci�n en la cuenta Cardinal Centinel. P�ngase en contacto con su representante Cardinal inmediatamente en implement@cardinalcommerce.com. Sus transacciones NO ser�n protegidas por el chargeback liability hasta que este problema est� resuelto.\n\n" . 'Hay tres pasos para configurar el servicio Cardinal 3D-Secure: ' . "\nl-Login al URL del Cardinal Merchant Admin del pack de bienvenida (no el URL de prueba), y aceptar la licencia.\2-Fije una contrase�a de transacci�n.\n3-Copiar su Cardinal Merchant ID y contrase�a Cardinal Transacci�n al m�dulo PayPal en Zen Cart.");
  define("CENTINEL_ERROR_CODE_4243", "4243");
  define("CENTINEL_ERROR_CODE_4243_DESC", " Hay un problema de Configuraci�n en la cuenta Cardinal Centinel. P�ngase en contacto con su representante Cardinal inmediatamente en implement@cardinalcommerce.com para informarle de que est� recibiendo el error N�mero 4243 cuando intenta usar 3D Secure con su sitio Zen Cart y su cuenta Paypal. Sus transacciones NO ser�n protegidas por el chargeback liability hasta que este problema est� resuelto.");
