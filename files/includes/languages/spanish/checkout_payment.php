<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

define('NAVBAR_TITLE_1', 'Comprar - Paso 1');
define('NAVBAR_TITLE_2', 'Opciones de Pago - Paso 2');

define('HEADING_TITLE', 'Paso 2 de 3 - Opciones de Pago');

define('TABLE_HEADING_BILLING_ADDRESS', 'Dirección de Facturación');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Su dirección de facturación se muestra a la izquierda. La dirección debe coincidir con la de la tarjeta de crédito. Puede cambiarla pulsando el botón <em>Cambiar Dirección</em>.');
define('TITLE_BILLING_ADDRESS', 'Dirección de Facturación:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Método de pago');
define('TEXT_SELECT_PAYMENT_METHOD', 'Por favor, seleccione un método de pago para este pedido.');
define('TITLE_PLEASE_SELECT', 'Por favor, elija');
define('TABLE_HEADING_COMMENTS', 'Instrucciones especiales o comentarios sobre el pedido');

define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Actualmente no aceptamos pagos de su zona.</span><br />Contáctenos para opciones alternativas.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Continuar al paso 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- confirmar su pedido.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Términos y Condiciones</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Por favor, acepte los términos y condiciones ligados a este pedido marcando la casilla. Puede leer los términos y condiciones <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" rel="noopener" target="_blank"><span class="pseudolink">aquí</span></a>.</span>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">He leído y acepto los términos y condiciones ligados a este pedido.</span>');

define('TEXT_YOUR_TOTAL', 'Total del pedido');