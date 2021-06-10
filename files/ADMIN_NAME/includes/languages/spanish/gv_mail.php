<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jan 19 Modified in v1.5.6b $
 */

require 'gv_name.php';
define('HEADING_TITLE', 'Enviar ' . TEXT_GV_NAME . ' a los Clientes');

define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'De:');
define('TEXT_TO', 'Email a:');
define('TEXT_AMOUNT', 'Cantidad');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_RICH_TEXT_MESSAGE', 'Mensaje de<br />text enriquecido:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Use esto para enviar emails individuales, de otra forma, use el desplegable de arriba</span>');
define('TEXT_SELECT_CUSTOMER', 'Seleccione Cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los Clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A Todos los Suscriptores del Boletín');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: Email enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No seleccionó ningún cliente.');
define('ERROR_NO_AMOUNT_SELECTED', 'Error: No seleccionó ninguna cantidad.');
define('ERROR_NO_SUBJECT', 'Error: sin asunto.');
define('ERROR_GV_AMOUNT', 'Defina la cantidad como un valor sin símbolo. Ejemplo: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Nos complace ofrecerle un ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', 'El ' . TEXT_GV_NAME . ' vale ');
define('TEXT_TO_REDEEM', 'Para canjear este ' . TEXT_GV_NAME . ' pulse el link aquí debajo. Escriba también el ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' que es el');
define('TEXT_IN_CASE', ' en caso que tenga algún problema.');
define('TEXT_OR_VISIT', 'o visite ');
define('TEXT_ENTER_CODE', ' e ingrese el código durante el pago');
define('TEXT_CLICK_TO_REDEEM','Pinche aquí para canjear');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Uste compró recientemente un ' . TEXT_GV_NAME . ' de nuestro sitio, por razones de seguridad, la cantidad del ' . TEXT_GV_NAME . ' no le fue inmediatamente acreditada. El dueño de la tienda ahora ha emitido esta suma.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'El valor del ' . TEXT_GV_NAME . ' era %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Ahora puede visitar nuestro sitio, ingresar y enviar la suma del ' . TEXT_GV_NAME . ' a quien desee.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");
