<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 28 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Pedidos');
define('HEADING_TITLE_DETAILS', 'Detalles del Pedido (#%u)');     //-%u is filled in with the actual order-number
define('HEADING_TITLE_SEARCH', 'ID del Pedido:');
define('HEADING_TITLE_STATUS', 'Estado:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Busque el Nombre del Producto o ID:XX o Modelo');
define('HEADING_TITLE_SEARCH_ALL','Buscar: ');
define('HEADING_TITLE_SEARCH_PRODUCTS','Buscar Producto: ');
define('TEXT_RESET_FILTER', 'Resetear Filtro de Búsqueda');
define('TABLE_HEADING_PAYMENT_METHOD', 'Pago-Envío');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','La dirección de facturación y del envío no coinciden ');

define('TABLE_HEADING_COMMENTS', 'Comentario');
define('TABLE_HEADING_CUSTOMERS', 'Cliente');
define('TABLE_HEADING_ORDER_TOTAL', 'Valor');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_TYPE', 'Tipo de Pedido');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_QUANTITY', 'Cant');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (sin IVA)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (con IVA)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (sin IVA)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (con IVA)');
define('TABLE_HEADING_PRICE', 'Precio');
define('TABLE_HEADING_UPDATED_BY', 'Actualizado Por');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente Notificado');
define('TABLE_HEADING_DATE_ADDED', 'Fecha Añadido');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_CUSTOMER_ADDRESS', 'Dirección Cliente:<br><i class="fa fa-2x fa-user"></i>');
define('ENTRY_SOLD_TO', 'VENDIDO A:');
define('ENTRY_SHIP_TO', 'ENVIAR A:');
define('ENTRY_SHIPPING_ADDRESS', 'Dirección de Envío:<br><i class="fa fa-2x fa-truck"></i>');
define('ENTRY_BILLING_ADDRESS', 'Dirección de Facturación:<br><i class="fa fa-2x fa-credit-card"></i>');
define('ENTRY_PAYMENT_METHOD', 'Método de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de tarjeta:');
define('ENTRY_CREDIT_CARD_OWNER', 'Nombre de la tarjeta:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Número de la tarjeta:');
define('ENTRY_CREDIT_CARD_CVV', 'Número CVV de la tarjeta:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Fecha de Caducidad de la Tarjeta:');
define('ENTRY_SHIPPING', 'Envío:');
define('ENTRY_DATE_PURCHASED', 'Fecha de Compra:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar Cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Incluir Comentario en el email al Cliente:');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Eliminar Pedido');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar este pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '¿Reponer los productos en el stock?');
define('TEXT_DATE_ORDER_CREATED', 'Fecha:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Última Modificación:');
define('TEXT_INFO_PAYMENT_METHOD', 'Método de Pago:');

define('TEXT_ALL_ORDERS', 'Todos los Pedidos');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualización de su pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'Número de pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Pedido detallado:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del Pedido:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<strong>Comentario:</strong> ');
define('EMAIL_TEXT_STATUS_UPDATED', 'Su pedido ha sido actualizado al siguiente estado:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Nuevo estado:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Conteste a este email si tiene alguna pregunta.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: El pedido no existe.');
define('SUCCESS_ORDER_UPDATED', 'Listo: El pedido ha sido actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: No hay nada para cambiar. El pedido no fue actualizado.');

define('ENTRY_ORDER_ID','Pedido nº. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATIS</span>');

define('TEXT_DOWNLOAD','Descargar'); 
define('TEXT_DOWNLOAD_TITLE', 'Estado de descarga del pedido');
define('TEXT_DOWNLOAD_STATUS', 'Estado');
define('TEXT_DOWNLOAD_FILENAME', 'Archivo');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Días');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Cuenta');

define('TEXT_DOWNLOAD_AVAILABLE', 'Disponible');
define('TEXT_DOWNLOAD_EXPIRED', 'Caducado');
define('TEXT_DOWNLOAD_MISSING', 'No está en el servidor');

define('TEXT_EXTENSION_NOT_UNDERSTOOD', 'La extensión (.%s) del nombre del archivo no está soportada'); 
define('TEXT_FILE_NOT_FOUND', 'File not found'); 
define('IMAGE_ICON_STATUS_CURRENT', 'Estado - Disponible');
define('IMAGE_ICON_STATUS_EXPIRED', 'Estado - Caducado');
define('IMAGE_ICON_STATUS_MISSING', 'Estado - Perdido');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'La descarga se activó con éxito');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'La descarga se desactivó con éxito');
define('TEXT_MORE', '... más');

define('TEXT_INFO_IP_ADDRESS', 'Dirección IP: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Borra CVV de la base de datos');
define('TEXT_DELETE_CVV_REPLACEMENT','Borrado');
define('TEXT_MASK_CC_NUMBER','Esconder este número');

define('TEXT_INFO_EXPIRED_DATE', 'Fecha de Caducidad:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Cuenta de Caducidad:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Nota');
define('TEXT_COMMENTS_YES', 'Comentarios de Cliente - SI');
define('TEXT_COMMENTS_NO', 'Comentarios de Cliente - NO');

define('TEXT_CUSTOMER_LOOKUP', '<i class="fa fa-search"></i> Buscar Cliente');

define('TEXT_INVALID_ORDER_STATUS', '<span class="alert">(Estado del Pedido No Válido)</span>');

define('BUTTON_TO_LIST', 'Listado de Pedidos');
define('SELECT_ORDER_LIST', 'Ir a Pedido:');

define('TEXT_MAP_CUSTOMER_ADDRESS', 'Localizar Dirección Cliente');
define('TEXT_MAP_SHIPPING_ADDRESS', 'Localizar Dirección Envío');
define('TEXT_MAP_BILLING_ADDRESS', 'Localizar Dirección Facturación');

define('TEXT_EMAIL_LANGUAGE', 'Idioma Pedido: %s');
define('SUCCESS_EMAIL_SENT', 'Email %s enviado al cliente');
