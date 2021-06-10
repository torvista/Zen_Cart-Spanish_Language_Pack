<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 May 12 Modified in v1.5.7 $
 */


require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', 'Enviar ' . TEXT_GV_NAME . ' a los Clientes');

define('TEXT_FROM', 'De:');
define('TEXT_TO', 'Email a:');
define('TEXT_TO_CUSTOMERS', 'Al listado de Clientes:');
define('TEXT_TO_EMAIL', 'o a un email individual:');
define('TEXT_TO_EMAIL_NAME', 'Nombre (opcional):');
define('TEXT_TO_EMAIL_INFO', '<span class="smallText">Elija un listado del menu desplegable o utilice los campos siguientes para enviar un email individual.</span>');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_AMOUNT', TEXT_GV_NAME . ' Valor:');
define('ERROR_GV_AMOUNT', '<span class="smallText">Introduzca un número con un punto decimal para fracciones p.ej.: 25.00.</span>');
define('TEXT_AMOUNT_INFO', '<span class="smallText">' . ERROR_GV_AMOUNT . '</span>');
define('TEXT_HTML_MESSAGE', 'Mensaje<br>HTML :');
define('TEXT_MESSAGE', 'Mensaje de<br>Texto');
define('TEXT_MESSAGE_INFO', '<p>Opcionalment, se puede añadir un mensaje personalizado que se incluirá antes del texto estándar ' . TEXT_GV_NAME . '</p>');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: %1s email(s) enviado(s) a: %2s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No se seleccionó ningún Cliente.');
define('ERROR_NO_AMOUNT_ENTERED', 'Error: Valor inválido.');
define('ERROR_NO_SUBJECT', 'Error: email sin Asunto.');

define('TEXT_GV_ANNOUNCE','Nos complace ofrecerle un ' . TEXT_GV_NAME . ' para %s');
define('TEXT_GV_TO_REDEEM_TEXT', 'Para canjear este ' . TEXT_GV_NAME . ' pulse el link aquí debajo.' . "\n\n ". '%1$s%2$s' . "\n\n" . 'o visite ' . STORE_NAME . " en " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'y introduzca el código %2$s en la página de Pago.');
define('TEXT_GV_TO_REDEEM_HTML', 'Para canjear este ' . TEXT_GV_NAME . ' pulse el link aquí debajo.' . "\n\n ". '%1$s%2$s' . "\n\n" . 'o visite ' . STORE_NAME . " en " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'y introduzca el código <strong>%2$s</strong> en la página de Pago.');

