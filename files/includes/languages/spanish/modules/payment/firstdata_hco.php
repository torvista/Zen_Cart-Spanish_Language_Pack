<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * First Data Hosted Checkout Payment Pages Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Sun Jan 7 21:30:21 2018 -0500 Modified in v1.5.6 $
 *
 * To create a USD sandbox account for testing, see: https://support.payeezy.com/hc/en-us/articles/203730579-Payeezy-Gateway-Demo-Accounts
 * And find test credit card numbers (for sandbox only) at https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit-card-numbers
 * To test failures, see https://support.payeezy.com/hc/en-us/articles/204504175-How-to-generate-unsuccessful-transactions-during-testing-
 */

  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ADMIN_TITLE', 'First Data Hosted Checkout Payment Pages');
  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_CATALOG_TITLE', 'Tarjeta de Crédito');  // Payment option title as displayed to the customer

  if (IS_ADMIN_FLAG === true) {
    if (defined('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS') && MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS == 'True') {
      define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION', '<a target="_blank" href="https://' . (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE == 'Sandbox' ? 'demo.' : '') . 'globalgatewaye4.firstdata.com">First Data GGe4 Merchant Login</a>' .
        (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE != 'Production' ? '<br /><br />Para tarjetas de PRUEBA consulte <a href="https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit-card-numbers" target="_blank">Using Test Credit Cards</a>' : '') .
        '<br /><br /><strong>CONFIGURACIÓN</strong><br />Su valor de "Receipt Link URL" en la configuración del First Data Payment Page debe apuntar a <u>' . zen_catalog_href_link('checkout_process', '', 'SSL') . '</u><br>' .
        'A continuación obtenga el Payment Page ID, Transaction Key y Response Key desde First Data e introdúzcalos aquí. Se puede conseguir estos parámetros en su cuenta First Data, en Payment Pages, pinche en el Page ID y navegando al apartado de Security.'
      );
    } else {
      define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION', 'Hosted Checkout Payment Pages son disponibles para todos los usuarios First Data, Global Gateway e4 y Linkpoint.<br><br>
             Su comercial First Data puede ayudar con los cambios necesarios para habilitar Hosted Checkout (HCO) en su cuenta.<br><br>
             <a target="_blank" href="https://www.zen-cart.com/partners/firstdatahosted/">Pinche Aquí para Contratar una cuenta First Data Hosted Checkout</a><br><br>
             <a target="_blank" href="https://globalgatewaye4.firstdata.com/">Pinche para Entrar en la First Data GGe4 Merchant Area</a>');
    }
  }
  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DECLINED_MESSAGE', 'No se pudo completar la transacción. Inténtelo otra vez con otra tarjeta o póngase en contacto con su banco para más información.  ');
  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ERROR_MESSAGE', 'Hubo un error en el procesamiento de la transacción. Inténtelo otra vez.  ');
