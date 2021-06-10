<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypalwpp.php 15623 2010-03-06 11:51:43Z drbyte $
 */

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express Checkout (Pro 2.0 Payflow Edition) (UK)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express Checkout via Payflow Pro');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br />' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank"> Gestionar su cuenta PayPal.</a>' : '<a href="http://www.zen-cart.com/partners/paypal-ec" target="_blank"> Gestionar su cuenta PayPal.</a>') . '<br /><br /><font color="green">Configuraci�n:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-ec" target="_blank"> Abra una cuenta PayPal aqu�.</a><br />' .
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... y haga clic en "install" arriba para activar soporte para PayPal Express Checkout.</br>') .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<br /><span class="alert">2. </span><strong>API par�metros</strong> de la opci�n API Credentials en su cuenta PayPal Profile Settings/Configuraci�n del Perf�l en Paypal. (Haga clic <a href="http://www.zen-cart.com/getpaypal" target="_blank">aqu�</a> para instrucciones sobre el API.) <br /> Este m�dulo utiliza la opci�n <strong>API Signature/Firma</strong> opci�n - necesitar� el usuario, contrase�a y firma para rellenar los campos abajo.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>par�metros PAYFLOW</strong> Este m�dulo precisa <strong>PAYFLOW Partner+Vendor+User+Password par�metros</strong> metidos en los cuatro campos abajo. Se los utilizan en la comunicaci�n con el sistema Payflow y para autorizar las transacciones de su cuenta.' : '<span class="alert">2. </span> Aseg�rese meter los datos de seguridad que corresponde al username/contrase�a etc. abajo.') ) .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br /><br /><span class="alert">3. </span>En su cuenta PayPal, active <strong>Instant Payment Notification</strong>:<br />en el "Perfil/Profile", seleccione <em>Instant Payment Notification Preferences</em><ul style="margin-top: 0.5;"><li>marque la casilla para habilitar IPN </li><li>si no hay una URL ya definida, vaya a la URL:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></li></ul>' : '') .
'<font color="green"><hr /><strong>Requisitos:</strong></font><br /><hr />*<strong>cURL</strong> est� utilizado para comunicar con el puerto de enlace, entonces tiene que ser activado en su compilaci�n PHP en su servidor (si necesita usar un proxy CURL, puede configurarlo Admin->Configuraci�n->Mi Tienda.)<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Tarjeta de Cr�dito');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Compre r�pido y seguro con PayPal:');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Payment');
  define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Tarjeta de cr�dito');  //(usado para transacciones payflow)
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Lo sentimos pero no podemos procesar su tarjeta.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Hubo un error en los datos que insert�. Rev�selos e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Tarjeta de cr�dito Nombre de pila:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', ' Tarjeta de cr�dito Apellidos:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Nombre del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta de cr�dito:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'N�mero de la tarjeta de cr�dito:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Fecha de emisi�n:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', ' N�mero CVV:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(en el reverso de la tarjeta)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Su tarjeta ha sido rechazada. Utilice otra tarjeta o p�ngase en contacto con su banco para m�s informaci�n');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'No podemos procesar su pedido. Int�ntelo otra vez, elija un m�todo de pago alternativo o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Ocurri� un error cuando intentamos contactar con el procesador de pagos. Int�ntelo otra vez, elija  un m�todo de pago alternativo o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Estimado Propietario de la tienda,' . "\n" . 'Un error ocurri� en el intento de iniciar el proceso de validaci�n del pago. Solamente el n�mero del error fue mostrado al cliente. Los detalles del error se muestran abajo.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERT: PayPal Express Checkout Error');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'La direcci�n no es v�lida o no coincide con nuestra informaci�n. Corrija o elija otra direcci�n e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'La direcci�n que seleccion� en PayPal no es una direcci�n confirmada. Vuelva a PayPal y elija o a�ada una direcci�n confirmada e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal no pudo pagar esta transacci�n. Elija otra m�todo de pago o compruebe las opciones de pago de su cuenta PayPal antes de seguir.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Ocurri� un error cuando intentamos procesar su tarjeta de cr�dito. Int�ntelo otra vez, elija un m�todo de pago alternativo o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Disculpe las molestias  pero no aceptamos su tipo de tarjeta de cr�dito. Utilice otra tarjeta o compruebe que los datos son correctos o p�ngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Hubo un problema en la validaci�n de su cuenta. Int�ntelo de nuevo.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos'. CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* El n�mero de la tarjeta de cr�dito debe tener al menos' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'AVISO: Fallo de la verificaci�n de la direcci�n. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fallo de la verificaci�n del c�digo CVV. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', 'El pedido est� pendiente de verificaci�n por la tienda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' -  Necesita registrar su PayPal API Credentials para poder hacer procesos avanzados de transacciones.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'El estado asignado a su cuenta no es v�lido. Entre en su cuenta y c�mbielo. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos seguir con el pago porque la cuenta PayPal de la tienda no es PayPal Website Payments Pro ni han contratado PayPal gateway services. Elija un m�todo de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Disculpe las molestias. Los par�metros de autentificaci�n de la cuenta PayPal no han sido configurados o los par�metros API no son correctos. No podemos completar la transacci�n. Por favor, notifique a la tienda sobre este problema. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Lo sentimos - la cuenta PayPal de la tienda tiene base en un pa�s donde actualmente Website Payments Pro no est� disponible. Elija un m�todo de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: �El m�dulo no est� configurado todav�a)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Hubo un problema recuperando los detalles de la transacci�n.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Hubo un problema para encontrar transacciones que coincidan con los criterios especificados.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Hubo un problema en cancelar la transacci�n. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Hubo un problema en la devoluci�n de la cantidad especificado. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Hubo un problema en la autorizaci�n de la transacci�n. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Hubo un problema capturando la transacci�n. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Su petici�n de devoluci�n fue rechazada por PayPal.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Solicit� una devoluci�n parcial pero no especific� la cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Solicit� una devoluci�n total pero no marc� la casilla para confirmarlo.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Solicit� un autorizaci�n pero no especific� una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Solicit� una captura de fondos pero no especific� una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Solicit� una cancelaci�n pero no marc� la casilla de confirmaci�n.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Solicit� un autorizaci�n pero no marc� la casilla de confirmaci�n.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Solicit� una captura de fondos pero no marc� la casilla de confirmaci�n.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'PayPal devoluci�n para %s iniciada. ID Transacci�n: %s. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'PayPal Autorizaci�n para %s iniciada. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPal Captura para %s iniciada. ID Comprobante: %s. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'PayPal petici�n de Cancelaci�n iniciada. ID Transacci�n: %s. Refresque la pantalla para ver los detalles de confirmaci�n actualizados en el apartado Order Status History/Comments.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Hubo un error en la transacci�n. Dir�jase a la gu�a del API o los archivos de transacciones para informaci�n detallada.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Disculpe las molestias pero actualmente no podemos procesar pedidos utilizando este m�todo de pago desde la zona geogr�fica que especific� en su direcci�n de cuenta. Elija otro m�todo de pago. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Parece que el pedido fue enviado dos veces. Revise Mi Cuenta para ver los detalles del pedido. Utilice el formulario Contact Us si el pedido no aparece en la historia pero ha sido pagado desde su cuenta PayPal. ');

  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'Compra con PayPal. La manera de pagar m�s f�cil y m�s segura.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Haga clic aqu� para pagar via PayPal Express Checkout');

// EC botones
///// Deber�a utilizar solamente las im�genes y enlaces oficiales de esta p�gina: http://ppmts-es.custhelp.com/cgi-bin/ppmts_es.cfg/php/enduser/std_adp.php?p_faqid=634
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/es_ES/i/btn/btn_xpressCheckout.gif');//p�gina registrar/login
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/es_ES/i/btn/btn_xpressCheckoutsm.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypal.com/es_ES/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypal.com/es_ES/i/logo/PayPal_mark_50x34.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PP.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.  Otherwise, simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal WPP settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BORDER_COLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BACK_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


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
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', ' Hacer una Devoluci�n Parcial');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... o inserte la cantidad parcial. ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Inserte la ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'cantidad de la devoluci�n aqu� y haga clic en Devoluci�n Parcial');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '* No est� permitido solicitar una devoluci�n total despu�s de tramitar una devoluci�n parcial. <br />*Multiples devoluciones parciales est�n permitidas hasta el valor total del pedido.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Nota para mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Confirmar: ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Comentarios del Sistema: ');
  define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Elegible para Protecci�n:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si quiere autorizar parte de este pedido inserte la cantidad aqu�:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Hacer una Autorizaci�n');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Captura de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si quiere capturar todo o un valor parcial de la cantidad autorizada para este pedido, inserte la Cantidad de Captura y elija si es el �ltimo para este pedido. Marque la casilla de Confirmaci�n antes de hacer la solicitaci�n.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Hacer una Captura');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Cantidad para capturar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', '�Es esta la captura final?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Gracias por el pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmar: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Cancelaci�n de Autorizaciones</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si quiere cancelar una autorizaci�n, inserte el ID de autorizaci�n aqu� y confirme:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');    
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Gracias por su inter�s en nuestros productos.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Hacer una Cancelaci�n');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Estatus Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'C�digo Aut,:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Direcci�n Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS CP Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 Coincide:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'D�as hasta vencimiento:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  define('EMAIL_EC_ACCOUNT_INFORMATION', 'Sus datos para acceder a su cuenta (para revisar la compra) son los siguientes:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Cargos �nicos relacionados con ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Recargos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Cargos de manipulaci�n y otros recargos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Descuentos');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Cr�ditos aplicados, incluyendo cupones de descuento, vales de compra, etc.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Estado de Pago en Revisi�n de Fraude: ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Este es una notificaci�n autom�tica para avisarse de que PayPal ha marcado el pago de un pedido nuevo para ser revisado por el Equipo de Fraude. Suele tardar no m�s que 36 horas. Recomendamos que NO ENV�E el pedido hasta que el pago haya sido revisado. Puede ver el estado de este pedido en su cuenta PayPal, Transacciones Recientes');
