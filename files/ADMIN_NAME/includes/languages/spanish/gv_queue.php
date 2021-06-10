<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:  Modified in v1.6.0 $
 */

define('HEADING_TITLE', 'Listado de los ' .  TEXT_GV_NAMES . ' para aprobar');

define('TABLE_HEADING_CUSTOMERS', 'Cliente');
define('TABLE_HEADING_ORDERS_ID', 'Nº Pedido');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valor ' . TEXT_GV_NAME);
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de Compra');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Usted compró recientemente un ' . TEXT_GV_NAME . ' de nuestra tienda online.');                
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Por razones de seguridad, no estuvo disponible inmediatamente para usted. ' .
                                          'De todas formas, esta cantidad ahora fue emitida. Ahora puede visitar nuestra tienda y enviar el valor del ' . TEXT_GV_NAME . ' por email alguien más, o usarlo usted.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'El ' . TEXT_GV_NAME . '(s) que usted compró vale %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', '!Gracias por comprar con nosotros!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', 'Compra de ' . TEXT_GV_NAME);
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Pedido #');

define('TEXT_EDIT_ORDER','Editar Pedido ID# ');
define('TEXT_GV_NONE','Ningún ' . TEXT_GV_NAME . ' para aprobar');

define('TEXT_LINK_RELEASE','Aprobar ' . TEXT_GV_NAME);

define('TEXT_TITLE_CONFIRM_RELEASE','Confirmar Emisión GV');
define('TEXT_INFO_CONFIRM_RELEASE','¿Está seguro que quiere aprobar este ' . TEXT_GV_NAME . '?');
