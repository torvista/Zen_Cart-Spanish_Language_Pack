<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2024 Sep 20 Modified in v2.1.0-beta1 $
*/

$define = [
    'HEADING_TITLE' => 'Clientes',
    'TABLE_HEADING_FIRSTNAME' => 'Nombre',
    'TABLE_HEADING_LASTNAME' => 'Apellidos',
    'TABLE_HEADING_ACCOUNT_CREATED' => 'Fecha',
    'TABLE_HEADING_LOGIN' => 'Último Acceso',
    'TABLE_HEADING_REGISTRATION_IP' => 'IP',
    'TABLE_HEADING_PRICING_GROUP' => 'Precio por Grupo',
    'TABLE_HEADING_AUTHORIZATION_APPROVAL' => 'Autorizado',
    'TABLE_HEADING_GV_AMOUNT' => 'Saldo TR',
    'TEXT_DATE_ACCOUNT_CREATED' => 'Cuenta creada:',
    'TEXT_DATE_ACCOUNT_LAST_MODIFIED' => 'Última modificación:',
    'TEXT_INFO_DATE_LAST_LOGON' => 'Último acceso:',
    'TEXT_INFO_NUMBER_OF_LOGONS' => 'Número de accesos:',
    'TEXT_LAST_LOGIN_IP' => 'IP último acceso:',
    'TEXT_REGISTRATION_IP' => 'IP registración:',
    'TEXT_INFO_COUNTRY' => 'País:',
    'TEXT_INFO_NUMBER_OF_REVIEWS' => 'Número de comentarios:',
    'TEXT_DELETE_INTRO' => '¿Seguro que desea borrar este cliente?<br>"Solamente Olvidar": Borrar los datos personales identificables del cliente.<br>"Borrar": Borrar el registro del cliente de la base de datos.',
    'TEXT_DELETE_REVIEWS' => 'Eliminar %s comentario(s)',
    'TEXT_INFO_HEADING_DELETE_CUSTOMER' => 'Borrar Cliente',
    'TEXT_INFO_NUMBER_OF_ORDERS' => 'Cantidad de Pedidos:',
    'TEXT_INFO_LIFETIME_VALUE' => 'Valor Total de Pedidos:',
    'TEXT_INFO_LAST_ORDER' => 'Último Pedido:',
    'TEXT_INFO_ORDERS_TOTAL' => 'Total:',
    'CUSTOMERS_REFERRAL' => 'Cliente Referido<br>1er Cupón de Descuento',
    'TEXT_INFO_GV_AMOUNT' => 'Saldo Tarjeta Regalo',
    'ENTRY_NONE' => 'Ninguno',
    'TABLE_HEADING_COMPANY' => 'Empresa',
    'TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD' => 'Resetear Contraseña de Cliente',
    'TEXT_PWDRESET_INTRO' => 'Para resetear la contraseña para este cliente => introduzca una contraseña nueva y confirmarlo abajo. La contraseña debería cumplir con las reglas aplicables a las contraseñas de clientes.',
    'TEXT_CUST_NEW_PASSWORD' => 'Contraseña Nueva:',
    'TEXT_CUST_CONFIRM_PASSWORD' => 'Confirmar Contraseña:',
    'ERROR_PWD_TOO_SHORT' => 'Error: la contraseña tiene menos caracteres de lo que precisa la configuración de esta tienda.',
    'SUCCESS_PASSWORD_UPDATED' => 'Contraseña cambiada.',
    'EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE' => 'Su contraseña ha sido cambiada por el administrador de la tienda.' . "\n" . 'Su contraseña nueva es: ',
    'EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT' => 'Cambio de Contraseña de Su Cuenta',
    'EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN' => 'Ha cambiado la contraseña para un cliente: ' . "\n" . '%1$s' . "\n\n" . 'ID Administrador: %2$s',
    'CUSTOMERS_AUTHORIZATION' => 'Estado de Autorización de Cliente',
    'CUSTOMERS_AUTHORIZATION_0' => 'Aprobado',
    'CUSTOMERS_AUTHORIZATION_1' => 'Pendiente de aprobación - Precisa Aprobación para Navegar',
    'CUSTOMERS_AUTHORIZATION_2' => 'Pendiente de aprobación - Puede Navegar pero no Ver Precios',
    'CUSTOMERS_AUTHORIZATION_3' => 'Pendiente de aprobación - Puede Navegar => Ver Precios pero no comprar',
    'CUSTOMERS_AUTHORIZATION_4' => 'Prohibido - Sin permiso para entrar en su cuenta ni comprar',
    'ERROR_CUSTOMER_APPROVAL_CORRECTION1' => 'Atención: Su tienda está configurada para "Aprobación sin navegación". Los clientes se han configurado a "Pendiente de aprobación - Sin navegación"',
    'ERROR_CUSTOMER_APPROVAL_CORRECTION2' => 'Atención: Su tienda está configurada para "Aprobación sin precios". Los clientes se han configurado a "Pendiente de aprobación - Navegación sin precios"',
    'EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE' => 'Su estado ha sido aprobado. Gracias por su confianza.',
    'EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT' => 'Estado Cliente Actualizado',
    'ADDRESS_BOOK_TITLE' => 'Direcciones',
    'PRIMARY_ADDRESS' => '(dirección por defecto)',
    'TEXT_MAXIMUM_ENTRIES' => '<span class="coming"><strong>NOTA:</strong></span> Hay un máximo de %s direcciones permitidos en la agenda.',
    'TEXT_INFO_ADDRESS_BOOK_COUNT' => ' | <a href="%s">%s Entradas</a>',
    'TEXT_INFO_ADDRESS_BOOK_COUNT_SINGLE' => 'Dirección',
    'EMP_BUTTON_PLACEORDER_ALT' => 'Hacer un pedido de parte de este cliente',
    'EMP_BUTTON_PLACEORDER' => 'Hacer Pedido',
    'TEXT_CUSTOMER_GROUPS' => 'Grupos de Clientes',
    'TABLE_HEADING_WHOLESALE_LEVEL' => 'Nivel Profesional',
    'TEXT_WHOLESALE_LEVEL' => 'Nivel Profesional:',
    'HELPTEXT_WHOLESALE_LEVEL' => 'Introduzca 0 para "Particular" o un nivel "Profesional". Un cliente puede tener un nivel de precios Profesional o pertenece un grupo de precios de descuentos pero no ambos.',

    // -----
    // Added, since used by zen_prepare_country_zones_pull_down
    //
    'PLEASE_SELECT' => 'Seleccionar',
    'TYPE_BELOW' => 'Escribir aquí debajo',
];

return $define;