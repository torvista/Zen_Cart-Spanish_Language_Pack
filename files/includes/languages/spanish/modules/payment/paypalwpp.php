<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express Checkout (Pro 2.0 Payflow Edition) (UK)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express Checkout via Payflow Pro');

  if (IS_ADMIN_FLAG === true) {
    if (!defined('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE')) define('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE', 'undefined');
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br>' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" rel="noreferrer noopener" target="_blank"> Gestionar su cuenta PayPal.</a>' : '<a href="https://www.paypal.com" rel="noopener" target="_blank"> Gestionar su cuenta PayPal.</a>') . '<br><br><font color="green">Configuración:</font><br><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-ec" rel="noopener" target="_blank"> Abra una cuenta PayPal aquí.</a><br>' .
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... y haga clic en "install" arriba para activar soporte para PayPal Express Checkout.<br><a href="http://www.zen-cart.com/getpaypal" rel="noopener" target="_blank">Para más ayuda ver este artículo</a><br>') .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE === '') ? '<br><span class="alert">2. </span><strong>API parámetros</strong> de la opción API Credentials en su cuenta PayPal Configuración del Perfíl. (Haga clic <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank">aquí</a> para instrucciones sobre el API.) <br> Este módulo utiliza la opción <strong>API Signature/Firma</strong> opción - necesitará el usuario, contraseña y firma para rellenar los campos abajo.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>parámetros PAYFLOW</strong> Este módulo precisa <strong>PAYFLOW Partner+Vendor+User+Password parámetros</strong> introducidos en los cuatro campos inferiores. Se utilizan en la comunicación con el sistema Payflow y para autorizar las transacciones de su cuenta.' : '<span class="alert">2. </span> Asegúrese de introducir los datos de seguridad correspondientes al username/contraseña etc. abajo.') ) .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br><br><span class="alert">3. </span>En su cuenta PayPal, active <strong>Instant Payment Notification</strong>:<br>en el "Perfil/Profile", seleccione <em>Instant Payment Notification Preferences</em><ul style="margin-top: 0.5em;"><li>marque la casilla para habilitar IPN </li><li>si no hay una URL ya definida, vaya a la URL:<br><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></li></ul>' : '') .
'<font color="green"><hr /><strong>Requisitos:</strong></font><br><hr>*<strong>CURL</strong> se utiliza para comunicar con el puerto de enlace a través de las puertas 80 y 443 por lo que tienen que estar activadas en su servidor para usar SLL.<br><hr>' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Tarjeta de Crédito');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Compre rápido y seguro con PayPal:');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Payment');
  define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Tarjeta de crédito'); //(used for payflow transactions)
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Lo sentimos pero no podemos procesar su tarjeta.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Hubo un error en los datos que insertó. Revíselos e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Tarjeta de crédito Nombre de pila:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', ' Tarjeta de crédito Apellidos:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Nombre del propietario de la tarjeta:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta de crédito:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Número de la tarjeta de crédito:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Fecha de emisión:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', ' Número CVV:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(en el reverso de la tarjeta)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Su tarjeta ha sido rechazada. Utilice otra tarjeta o póngase en contacto con su banco para más información');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'No podemos procesar su pedido. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Ocurrió un error cuando intentamos contactar con el procesador de pagos. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Estimado Propietario de la tienda,' . "\n" . 'Un error ocurrió en el intento de iniciar el proceso de validación del pago. Solamente se mostró el número del error al cliente. Los detalles del error se muestran abajo.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'AVISO: Error PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'La dirección no es válida o no coincide con nuestra información. Corrija o elija otra dirección e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'La dirección que seleccionó en PayPal no es una dirección confirmada. Vuelva a PayPal y elija o añada una dirección confirmada e intente otra vez.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal no pudo pagar esta transacción. Elija otro método de pago o compruebe las opciones de pago de su cuenta PayPal antes de seguir.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED', 'Disculpe las molestias. PayPal ha rechazado la transacción y nos ha comunicado que debería ponerse en contacto con Atención al Cliente Paypal para más información sobre el problema. Para completar su pedido ahora, debe usar otro método de pago.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Ocurrió un error cuando intentamos procesar su tarjeta de crédito. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
  define('MODULE_PAYMENT_PAYPALWPP_FUNDING_ERROR','Problema con el fuente de fondos; ir a paypal.com para hacer un pago directamente a ' . STORE_OWNER_EMAIL_ADDRESS);
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Disculpe pero no aceptamos el tipo de tarjeta que introduzco. Por favor, utilice otra tarjeta.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Hubo un problema en la validación de su cuenta. Inténtelo de nuevo.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos'. CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* El número de la tarjeta de crédito debe tener al menos' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'AVISO: Fallo de la verificación de la dirección. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fallo de la verificación del código CVV. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', 'El pedido está pendiente de verificación por la tienda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' -  Necesita registrar su PayPal API Credentials para poder hacer procesos avanzados de transacciones.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'El estado asignado a su cuenta no es válido. Entre en su cuenta y cámbielo. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos seguir con el pago porque la cuenta PayPal de la tienda no es PayPal Website Payments Pro ni han contratado PayPal gateway services. Elija un método de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Disculpe las molestias. Los parámetros de autentificación de la cuenta PayPal no han sido configurados o los parámetros API no son correctos. No podemos completar la transacción. Por favor, notifique a la tienda sobre este problema. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Lo sentimos - la cuenta PayPal de la tienda tiene base en un país donde actualmente Website Payments Pro no está disponible. Elija un método de pago alternativo para su pedido.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: ¡El módulo no está configurado todavía)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Hubo un problema recuperando los detalles de la transacción.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Hubo un problema para encontrar transacciones que coincidan con los criterios especificados.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Hubo un problema en cancelar la transacción. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Hubo un problema en la devolución de la cantidad especificado. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Hubo un problema en la autorización de la transacción. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Hubo un problema capturando la transacción. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Su petición de devolución fue rechazada por PayPal.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Solicitó una devolución parcial pero no especificó la cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Solicitó una devolución total pero no marcó la casilla para confirmarlo.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Solicitó un autorización pero no especificó una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Solicitó una captura de fondos pero no especificó una cantidad.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Solicitó una cancelación pero no marcó la casilla de confirmación.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmar');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Solicitó un autorización pero no marcó la casilla de confirmación.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Solicitó una captura de fondos pero no marcó la casilla de confirmación.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'PayPal devolución para %s iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'PayPal Autorización para %s iniciada. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPal Captura para %s iniciada. ID Comprobante: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'PayPal petición de Cancelación iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Hubo un error en la transacción. Diríjase a la guía del API o los archivos de transacciones para información detallada.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Disculpe las molestias pero actualmente no podemos procesar pedidos utilizando este método de pago desde la zona geográfica que especificó en su dirección de cuenta. Elija otro método de pago. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Parece que el pedido fue enviado dos veces. Revise Mi Cuenta para ver los detalles del pedido. Utilice el formulario Contáctenos si el pedido no aparece en la historia, pero ha sido pagado desde su cuenta PayPal. ');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Haga clic aquí para pagar vía PayPal Express Checkout');

// EC buttons -- Do not change these values
///// You should only use choices listed on this page: https://developer.paypal.com/docs/classic/archive/buttons/ES/ o este https://www.paypal-knowledge.com/infocenter/index?page=content&widgetview=true&id=FAQ1718&viewlocale=es_ES
  //define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckout.gif');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/es_ES/i/btn/btn_xpressCheckout.gif');//página registrar/login
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/es_ES/i/btn/btn_xpressCheckoutsm.gif');

  //define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'Checkout with PayPal. The safer, easier way to pay.');
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', '');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypal.com/es_ES/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypal.com/es_ES/i/logo/PayPal_mark_50x34.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PP.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn1_for_hub.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
 ////// Styling of pseudo cart contents display section
  //define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
  //define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


  // These are used for displaying raw transaction details in the Admin area:
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME')) define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nombre');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME')) define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Apellidos:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME')) define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Empresa:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME')) define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Nombre Dirección:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET')) define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Calle:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY')) define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Localidad:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Provincia:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP')) define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Código Postal:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY')) define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'País:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email Pagador:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID')) define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID Pagador:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Estado Pagador:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Estado Dirección:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipo de Pago:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Estado del Pago:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Razón Pendiente:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Pedido:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Fecha del Pago:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Moneda:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT')) define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Cantidad Bruta:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Tarifa del Pago:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Tasa de Cambio:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Productos en el Carro:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipo de Transacción:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID')) define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID Trans.:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID')) define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID Trans. Padre:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Devoluciones</strong>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si quiere hacer una devolución total, piche aquí:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Hacer una Devolución Total');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Hacer una Devolución Parcial');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br>... o introduzca el valor parcial ');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Introduzca la ');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'cantidad de la devolución aquí y pinche en Devolución Parcial');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*No es posible emitar una Devolución Total después de hacer una Devolución Parcial.<br>*Esta permitido hacer Devoluciones Parciales múltiples hasta el valor total.');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Nota par mostrar al cliente:</strong>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');
  if (!defined('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK')) define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Confirmar: ');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Comentarios del Sistema');
  if (!defined('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG')) define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Elegible para Protección:');

  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorizaciones del Pedido</strong>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT')) define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si desea autorizar parte de este pedido, inserte la cantidad aquí:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL')) define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Hacer una Autorización');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX')) define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Captura de Autorizaciones</strong>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si quiere capturar todo o un valor parcial de la cantidad autorizada para este pedido, inserte la Cantidad de Captura y elija si es el último para este pedido. Marque la casilla de Confirmación antes de hacer la solicitud.<br>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Hacer una Captura');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Cantidad para Capturar:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', '¿Es esta la captura final?');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Gracias por el pedido.');
  if (!defined('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK')) define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmar: ');

  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Cancelación de Autorizaciones</strong>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_VOID')) define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si quiere cancelar una autorización, introduzca el ID de autorización aquí y confirmar:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Gracias por su interés en nuestros productos. Por favor vuelva cuando lo desee.');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL')) define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Hacer una Cancelación');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX')) define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Estado Trans.:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Código Auth.:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR')) define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Dirección Coincide:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP')) define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS CP Coincide:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH')) define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 Coincide:');
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE')) define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Días hasta vencimiento:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  if (!defined('EMAIL_EC_ACCOUNT_INFORMATION')) define('EMAIL_EC_ACCOUNT_INFORMATION', 'Sus datos para acceder a su cuenta (para revisar la compra) son los siguientes:');

  if (!defined('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX')) define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Cargos únicos relacionados con ');
  if (!defined('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT')) define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Recargos');
  if (!defined('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG')) define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Cargos de manipulación y otros recargos');
  if (!defined('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT')) define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Descuentos');
  if (!defined('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG')) define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Créditos aplicados, incluyendo Cupones de Descuento, Tarjetas Regalo etc.');
  if (!defined('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT')) define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Estado de Pago en Revisión de Fraude: ');
  if (!defined('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO')) define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Este es una notificación automática para avisarse de que PayPal ha marcado el pago de un pedido nuevo para ser revisado por el Equipo de Fraude. Suele tardar no más que 36 horas. Recomendamos que NO ENVÍE el pedido hasta que el pago haya sido revisado. Puede ver el estado de este pedido en su cuenta PayPal, Transacciones Recientes');

  if (!defined('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS')) define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'PROBLEMA: PayPal ha suministrado una dirección en blanco inesperada. <br>Para poder completar la compra, tiene que registrar en la tienda y añadir su dirección. Pinche en el botón abajo para abrir una cuenta.<br>A continuación puede elegir PayPal otra vez como método de pago. Perdone la molestia. Si todavía tiene un problema en terminar el pedido, contáctenos para ayuda. Gracias.');

  if (!defined('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS')) define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Todos los artículos en el carro (ver los detalles en la tienda y en el comprobante de la tienda).');

