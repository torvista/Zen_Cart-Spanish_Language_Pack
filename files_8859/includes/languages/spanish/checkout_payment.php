<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 4087 2006-08-07 04:46:08Z drbyte $
 */

  define('NAVBAR_TITLE_1', 'Comprar - Paso 1 - Env�o');
  define('NAVBAR_TITLE_2', 'Comprar - Paso 2 - M�todo de pago');

  define('HEADING_TITLE', 'Paso 2 de 3 -  Informaci�n de pago');

  define('TABLE_HEADING_BILLING_ADDRESS', 'Direcci�n de Facturaci�n');
  define('TEXT_SELECTED_BILLING_DESTINATION', 'Su direcci�n de facturaci�n se muestra a la izquierda. La direcci�n debe coincidir con la de la tarjeta de cr�dito. Puede cambiarla presionando el bot�n <em>Cambiar Direcci�n</em>.');
  define('TITLE_BILLING_ADDRESS', 'Direcci�n de Facturaci�n:');

  define('TABLE_HEADING_PAYMENT_METHOD', 'M�todo de pago');
  define('TEXT_SELECT_PAYMENT_METHOD', 'Por favor, seleccione un m�todo de pago para este pedido.');
  define('TITLE_PLEASE_SELECT', 'Por favor, elija');
  define('TEXT_ENTER_PAYMENT_INFORMATION', 'Actualmente, este es el �nico m�todo de pago disponible para este pedido.');
  define('TABLE_HEADING_COMMENTS', 'Instrucciones especiales o comentarios sobre el pedido');

  define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Actualmente no disponible');
  define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Actualmente no aceptamos pagos de su zona.</span><br />Cont�ctenos para opciones alternativas.');

  define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Continuar al paso 3</strong>');
  define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- confirmar su pedido.');

  define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">T�rminos y Condiciones</span>');
  define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Por favor, acepte los t�rminos y condiciones ligados a este pedido marcando el casillero. Puede leer los t�rminos y condiciones <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">aqu�</span></a>.');
  define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">He le�do y acepto los t�rminos y condiciones ligados a este pedido.</span>');
  
  define('TEXT_CHECKOUT_AMOUNT_DUE', 'Cantidad total a pagar: ');
  define('TEXT_YOUR_TOTAL', 'Total del pedido');
?>