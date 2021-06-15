<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'PayPal Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA', 'PayPal Website Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
  define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal Payments Standard </strong> (Servicio PayPal antiguo, menos fiable que ExpressCheckout)<br><a href="https://www.paypal.com" target="_blank">Gestionar su cuenta PayPal.</a><br><br><font color="green">Configuración:</font><br>1. <a href="http://www.zen-cart.com/partners/paypal-std" rel="noreferrer noopener" target="_blank">Abra una cuenta PayPal aquí.</a><br>2. En su cuenta PayPal, en "Profile/Perfil",<ul><li>fije su <strong>Instant Payment Notification Preferences</strong> URL a:<br><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr><br>(Si ya hay otro URL válido en el campo, déjelo.)<br><span class="alert">¡Asegúrese de que la casilla para habilitar IPN está marcada!</span><br><br></li><li>en <strong>Website Payments Preferences</strong> fije su <strong>Automatic Return URL</strong> a:<br><nobr><pre>'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</pre></nobr></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... y pinche en "install" arriba para habilitar soporte PayPal Standard... y  "edit" para decir a Zen Cart cuáles son sus parámetros PayPal.</li>') . '</ul><font color="green"><hr /><strong>Requisitos:</strong></font><br><hr />*<strong>Cuenta PayPal </strong> (<a href="http://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">pinche para abrir una cuenta</a>)<br>*<strong>CURL con SSL</strong> es muy recomendada<br>*<strong>Puerta 80 (y puerta 443 si SSL está habilitada)</strong> está utilizada para comunicación <strong>*bidireccional*</strong> con la puerta de enlace, por lo que hay que abrir esta puerta(s) en el router y el cortafuegos del servidor.<br>*<strong>Hay que configurar los parámetros</strong> como se describa arriba.' );
 } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  // You should only use choices listed on this page: https://ppmts.custhelp.com/app/answers/detail/a_id/632
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG', 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT', 'Realice pagos con PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Ahorre tiempo. Pagos Seguros. <br>Pagar sin compartir su información financiera.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" /> &nbsp;' .
                                                    '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

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
  if (!defined('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS')) define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Comentarios del Sistema: ');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', 'Todos los artículos en el carro (ver los detalles en la tienda y en el comprobante de la tienda).');
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', STORE_NAME . ' Compra');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Cargo único relacionado a ');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT', 'Recargos');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG', 'Cargos de manipulación y otros recargos');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Descuentos');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG', 'Créditos aplicados, incluyendo Cupones de Descuento, Tarjetas Regalo etc.');
  define('MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED', 'Tenga en cuenta que este módulo ya no se recomienda. Consulte <a href = "https://docs.zen-cart.com/user/payment/paypal_standard/" target = "_ blank" rel = "noreferrer noopener "> esta página </a> para obtener una explicación. ');
