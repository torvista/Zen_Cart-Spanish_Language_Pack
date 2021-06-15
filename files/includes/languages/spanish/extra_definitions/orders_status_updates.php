<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 May 27 Modified in v1.5.7 $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Actualización del Pedido');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Nº Pedido:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Detalles del Pedido:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Fecha Pedido:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Comentarios del pedido: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'El estado del pedido ha cambiado:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', ' El estado del pedido no ha cambiado:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Estado Actual: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Estado Previo:</strong> %1$s' . "\n" . '<strong>Estado Actual:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Si tiene una pregunta, puede contestar a este email.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[ORDERS STATUS]');