<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2019 Aug 22 Modified in v1.5.7 $
 */

define('NAVBAR_TITLE', 'Crear Cuenta');

define('HEADING_TITLE', 'Crear Cuenta');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">NOTA:</strong> Si ya tiene una cuenta con nosotros, por favor, entre en <a href="%s">su cuenta</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Gracias, su petición ha sido enviada para ser revisada por el administrador.');


// greeting salutation
define('EMAIL_SUBJECT', 'Bienvenido a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Estimado Sr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Estimada Sra. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Estimado %s,' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Bienvenido a <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', '¡Felicidades! Para hacer de su próxima visita a nuestra tienda online una experiencia más gratificante, ¡Aquí tiene un cupón de descuento creado para usted!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Para usar el cupón de descuento, ingrese el ' . TEXT_GV_REDEEM . 'código en el proceso del pago:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>El cupón es válido entre %s y %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Sólo por hacer las compras de hoy, ¡le enviamos un ' . TEXT_GV_NAME . ' por %s!' . "\n\n");
define('EMAIL_GV_REDEEM', 'El ' . TEXT_GV_REDEEM . ' del ' . TEXT_GV_NAME . ' es: %s ' . "\n\n" . 'Puede ingresar el ' . TEXT_GV_REDEEM . ' durante el pago, después de haber elegido productos en la tienda.');
define('EMAIL_GV_LINK', 'o puede canjearlo ahora siguiendo este link: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER', 'Una vez que haya añadido el ' . TEXT_GV_NAME . ' a su cuenta, puede usar el ' . TEXT_GV_NAME . ' para usted, ¡o enviárselo a un amigo!' . "\n\n");

define('EMAIL_TEXT', 'Su nueva cuenta le da acceso a los siguientes servicios:' . "\n\n" . '<ul><li><strong>Carro Permanente</strong> - Cualquier de los productos añadidos a su carro online permanecerán allí hasta que usted los elimine o los compre.</li>' . "\n\n" . '<li><strong>Agenda de Direcciones</strong> : ¡Ahora podemos enviarle sus productos a otra dirección distinta a la suya! La opción perfecta para poder enviar regalos directamente a la persona deseada.</li>' . "\n\n" . '<li><strong>Histórico de Pedidos</strong> : Vea el historial de las compras que ha realizado con nosotros.</li>' . "\n\n" . '<li><strong>Comentarios de Productos</strong> : Comparta sus opiniones sobre los productos con nuestros otros clientes.</li>' . "\n\n". '</ul>');
define('EMAIL_CONTACT', 'Para cualquier duda o problema en el uso de la tienda, envíenos un email a: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS ."</a>.\n\n");
define('EMAIL_GV_CLOSURE', "\n" . 'Atentamente,' . "\n\n" . STORE_OWNER . "\nPropietario\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Este email nos ha sido facilitado por usted o por alguien que se ha registrado en nuestra tienda. Si no ha sido usted, o piensa que ha recibido este mensaje por error, por favor, envíe un email a %s ');
