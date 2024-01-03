<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2022 Jun 04 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Pedidos',
    'HEADING_TITLE_DETAILS' => 'Detalles del Pedido (#%u)',
    'HEADING_TITLE_SEARCH' => 'ID del Pedido:',
    'HEADING_TITLE_STATUS' => 'Estado:',
    'HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS' => 'Busque el Nombre del Producto o ID:XX o Modelo o Comentario',
    'HEADING_TITLE_SEARCH_ALL' => 'Buscar: ',
    'HEADING_TITLE_SEARCH_PRODUCTS' => 'Buscar Producto: ',
    'TEXT_RESET_FILTER' => 'Resetear Filtro de Búsqueda',
    'TABLE_HEADING_PAYMENT_METHOD' => 'Pago-Envío',
    'TABLE_HEADING_ORDERS_ID' => 'ID',
    'TEXT_BILLING_SHIPPING_MISMATCH' => 'La dirección de facturación y del envío no coinciden ',
    'TABLE_HEADING_ZONE_INFO' => 'Zona',
    'TABLE_HEADING_ORDER_TOTAL' => 'Valor',
    'TABLE_HEADING_DATE_PURCHASED' => 'Fecha',
    'TABLE_HEADING_TYPE' => 'Tipo de Pedido',
    'TABLE_HEADING_QUANTITY' => 'Cant',
    'TABLE_HEADING_UPDATED_BY' => 'Actualizado Por',
    'ENTRY_CUSTOMER' => 'Cliente:',
    'ENTRY_CUSTOMER_ADDRESS' => 'Dirección Cliente:<br><i class="fa-solid fa-2x fa-user"></i>',
    'ENTRY_SHIPPING_ADDRESS' => 'Dirección de Envío:<br><i class="fa-solid fa-2x fa-truck"></i>',
    'ENTRY_BILLING_ADDRESS' => 'Dirección de Facturación:<br><i class="fa-regular fa-2x fa-credit-card"></i>',
    'ENTRY_PAYMENT_METHOD' => 'Método de pago:',
    'ENTRY_CURRENCY_VALUE' => 'Valor Moneda:',
    'ENTRY_CREDIT_CARD_TYPE' => 'Tipo de tarjeta:',
    'ENTRY_CREDIT_CARD_OWNER' => 'Nombre de la tarjeta:',
    'ENTRY_CREDIT_CARD_NUMBER' => 'Número de la tarjeta:',
    'ENTRY_CREDIT_CARD_CVV' => 'Número CVV de la tarjeta:',
    'ENTRY_CREDIT_CARD_EXPIRES' => 'Fecha de Caducidad de la Tarjeta:',
    'TEXT_ADDITIONAL_PAYMENT_OPTIONS' => 'Pinche para Opciones de Pago Adicionales',
    'ENTRY_SHIPPING' => 'Envío:',
    'ENTRY_STATUS' => 'Estado:',
    'ENTRY_NOTIFY_CUSTOMER' => 'Notificar Cliente:',
    'ENTRY_NOTIFY_COMMENTS' => 'Incluir Comentario en el email al Cliente:',
    'TEXT_INFO_HEADING_DELETE_ORDER' => 'Eliminar Pedido',
    'TEXT_INFO_DELETE_INTRO' => '¿Seguro que desea eliminar este pedido?',
    'TEXT_INFO_RESTOCK_PRODUCT_QUANTITY' => '¿Reponer los productos en el stock?',
    'TEXT_DATE_ORDER_CREATED' => 'Fecha:',
    'TEXT_DATE_ORDER_LAST_MODIFIED' => 'Última Modificación:',
    'TEXT_INFO_PAYMENT_METHOD' => 'Método de Pago:',
    'TEXT_ALL_ORDERS' => 'Todos los Pedidos',
    'EMAIL_SEPARATOR' => '------------------------------------------------------',
    'EMAIL_TEXT_SUBJECT' => 'Actualización de su pedido',
    'EMAIL_TEXT_ORDER_NUMBER' => 'Número de pedido:',
    'EMAIL_TEXT_INVOICE_URL' => 'Pedido detallado:',
    'EMAIL_TEXT_DATE_ORDERED' => 'Fecha del Pedido:',
    'EMAIL_TEXT_COMMENTS_UPDATE' => '<strong>Comentario:</strong> ',
    'EMAIL_TEXT_STATUS_UPDATED' => 'Su pedido ha sido actualizado al siguiente estado:' . "\n",
    'EMAIL_TEXT_STATUS_LABEL' => '<strong>Nuevo estado:</strong> %s' . "\n\n",
    'EMAIL_TEXT_STATUS_PLEASE_REPLY' => 'Conteste a este email si tiene alguna pregunta.' . "\n",
    'ERROR_ORDER_DOES_NOT_EXIST' => 'Error: El pedido no existe.',
    'SUCCESS_ORDER_UPDATED' => 'Éxito: pedido ha sido actualizado correctamente.',
    'WARNING_ORDER_NOT_UPDATED' => 'Advertencia: No hay nada para cambiar. El pedido no fue actualizado.',
    'TEXT_INFO_ATTRIBUTE_FREE' => '&nbsp;-&nbsp;<span class="alert">GRATIS</span>',
    'TEXT_DOWNLOAD' => 'Descargar',
    'TEXT_DOWNLOAD_TITLE' => 'Estado de descarga del pedido',
    'TEXT_DOWNLOAD_STATUS' => 'Estado',
    'TEXT_DOWNLOAD_FILENAME' => 'Archivo',
    'TEXT_DOWNLOAD_MAX_DAYS' => 'Días',
    'TEXT_DOWNLOAD_MAX_COUNT' => 'Cuenta',
    'TEXT_DOWNLOAD_AVAILABLE' => 'Disponible',
    'TEXT_DOWNLOAD_EXPIRED' => 'Caducado',
    'TEXT_DOWNLOAD_MISSING' => 'No está en el servidor',
    'TEXT_EXTENSION_NOT_UNDERSTOOD' => 'La extensión (.%s) del nombre del archivo no está soportada',
    'TEXT_FILE_NOT_FOUND' => 'Archivo no encontrado',
    'IMAGE_ICON_STATUS_CURRENT' => 'Estado - Disponible',
    'IMAGE_ICON_STATUS_EXPIRED' => 'Estado - Caducado',
    'IMAGE_ICON_STATUS_MISSING' => 'Estado - Perdido',
    'SUCCESS_ORDER_UPDATED_DOWNLOAD_ON' => 'La descarga se activó con éxito',
    'SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF' => 'La descarga se desactivó con éxito',
    'TEXT_MORE' => '... más',
    'TEXT_INFO_IP_ADDRESS' => 'Dirección IP: ',
    'TEXT_DELETE_CVV_FROM_DATABASE' => 'Borra CVV de la base de datos',
    'TEXT_DELETE_CVV_REPLACEMENT' => 'Borrado',
    'TEXT_MASK_CC_NUMBER' => 'Esconder este número',
    'TEXT_INFO_EXPIRED_DATE' => 'Fecha de Caducidad:<br>',
    'TEXT_INFO_EXPIRED_COUNT' => 'Cuenta de Caducidad:<br>',
    'TABLE_HEADING_CUSTOMER_COMMENTS' => 'Nota',
    'TEXT_COMMENTS_YES' => 'Comentarios de Cliente - SI',
    'TEXT_COMMENTS_NO' => 'Comentarios de Cliente - NO',
    'TEXT_CUSTOMER_LOOKUP' => '<i class="fa-solid fa-magnifying-glass"></i> Buscar Cliente',
    'TEXT_INVALID_ORDER_STATUS' => '<span class="alert">(Estado del Pedido No Válido)</span>',
    'BUTTON_TO_LIST' => 'Listado de Pedidos',
    'SELECT_ORDER_LIST' => 'Ir a Pedido:',
    'TEXT_MAP_CUSTOMER_ADDRESS' => 'Localizar Dirección Cliente',
    'TEXT_MAP_SHIPPING_ADDRESS' => 'Localizar Dirección Envío',
    'TEXT_MAP_BILLING_ADDRESS' => 'Localizar Dirección Facturación',
    'TEXT_EMAIL_LANGUAGE' => 'Idioma Pedido: %s',
    'SUCCESS_EMAIL_SENT' => 'Email %1$s enviado al cliente.',
    'WARNING_PAYMENT_MODULE_DOESNT_EXIST' => "El módulo de pago (%s) de este pedido ya no existe.",
    'WARNING_PAYMENT_MODULE_NOTIFICATIONS_DISABLED' => 'La configuración del módulo de pago (%s) del pedido  ha cambiado. No se pueden realizar devoluciones, autorizaciones, capturas o anulaciones para este pedido.',
];

return $define;