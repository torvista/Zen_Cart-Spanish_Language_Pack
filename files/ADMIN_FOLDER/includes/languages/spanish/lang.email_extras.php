<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Oct 20 Modified in v1.5.8a $
*/

$define = [
    'EMAIL_LOGO_ALT_TITLE_TEXT' => '¡Zen Cart! El Arte de E-commerce',
    'EMAIL_LOGO_FILENAME' => 'header.jpg',
    'EMAIL_LOGO_WIDTH' => '550',
    'EMAIL_LOGO_HEIGHT' => '110',
    'EMAIL_EXTRA_HEADER_INFO' => '',
    'EMAIL_ORDER_UPDATE_MESSAGE' => '',
    'OFFICE_FROM' => 'Desde:',
    'OFFICE_EMAIL' => 'E-mail:',
    'OFFICE_USE' => 'Sólo para uso interno:',
    'OFFICE_LOGIN_NAME' => 'Usuario:',
    'OFFICE_LOGIN_EMAIL' => 'E-mail:',
    'OFFICE_LOGIN_PHONE' => 'Teléfono:',
    'OFFICE_IP_ADDRESS' => 'Dirección IP:',
    'OFFICE_HOST_ADDRESS' => 'Host:',
    'OFFICE_DATE_TIME' => 'Fecha y Hora:',
    'EMAIL_DISCLAIMER' => "\n" . 'Este email lo hemos obtenido a través de usted o de alguien que se ha registrado en nuestra tienda. En caso de no ser el destinatario de esta información por favor rogamos nos lo comunique a %s para la eliminación de su dirección electrónica no copiando ni entregando este mensaje a nadie más y procediendo a su destrucción.',
    'EMAIL_SPAM_DISCLAIMER' => 'De conformidad a la Ley Orgánica de Protección de Datos de Carácter Personal 15/1999 de España le informamos que los datos de contacto utilizados para la presente comunicación están incluidos en un fichero debidamente inscrito ante el RGPD con la finalidad de posibilitar las comunicaciones a través de correo electrónico de ' . STORE_NAME . ' con los distintos contactos que ésta mantiene dentro del ejercicio de su actividad (como clientes asociados, proveedores o personal). Sin perjuicio de ello se le informa de que usted podrá ejercitar los derechos de acceso rectificación cancelación y oposición para lo cual debe dirigirse a:<br>' . STORE_NAME . ', ' . STORE_NAME_ADDRESS . ' adjuntando acreditación de la identidad.',
    'EMAIL_FOOTER_COPYRIGHT' => 'Copyright (c) ' . date('Y') . ' <a href="https://www.zen-cart.com">Zen Cart</a>. <a href="https://www.zen-cart.com">Zen Cart</a>',
    'SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT' => '[TARJETA REGALO ADMIN ENVIADA]',
    'SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT' => '[CUPONES DESCUENTO]',
    'SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT' => '[ESTADO PEDIDO]',
    'TEXT_UNSUBSCRIBE' => "\n\nPara dejar de recibir futuros boletines y correos promocionales => simplemente haga clic en el siguiente enlace: \n",
    'OFFICE_IP_TO_HOST_ADDRESS' => 'Desactivado',
    'TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED' => 'Alerta Admin: Usuario nuevo añadido.',
    'TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED' => 'Alerta Administrativa: Un usuario nuevo (%1$1$s) ha sido AÑADIDO por %2$s.' . "\n\n" . 'Si no autorizó esta acción compruebe la seguridad de la tienda AHORA.',
    'TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED' => 'Alerta Admin: Un usuario ha sido borrado.',
    'TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED' => 'Alerta Administrativa: Un usuario de admin (%1$s) ha sido BORRADO por %2$s.' . "\n\n" . 'Si no autorizó esta acción compruebe la seguridad de la tienda AHORA.',
    'TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED' => 'Alerta Admin: Los datos de un usuario han sido cambiados.',
    'TEXT_EMAIL_SUBJECT_ADMIN_MFA_DELETED' => 'Alerta Admin: MFA para un Administrador ha sido deshabilitado.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MFA_DELETED' => 'Alerta Administrativa: %1$s ha DESHABILITADO la configuración de MFA para un administrador (%2$s).' . "\n\n". 'Si usted o un administrador autorizado no iniciaron este cambio, se recomienda que verifiquen la seguridad de su sitio inmediatamente.',
    'TEXT_EMAIL_SUBJECT_ADMIN_MFA_EXEMPTED' => 'Alerta Admin: MFA para un administrador se ha marcado como EXENTO.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MFA_EXEMPTED' => 'Alerta Administrativa: la configuración de MFA para un administrador (%1$s) ha sido EXENTADA por %2$s.' . "\n\n". 'Si usted o un administrador autorizado no iniciaron este cambio, se recomienda que verifiquen la seguridad de su sitio inmediatamente.',
    'TEXT_EMAIL_SUBJECT_ADMIN_MFA_UNEXEMPTED' => 'Alerta Admin: MFA para un administrador ha sido marcado como YA NO EXENTO.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MFA_UNEXEMPTED' => 'Alerta Administrativa: la configuración de MFA para un administrador (%1$s) ha sido marcada como NO EXENTA por %2$s.' . "\n\n". 'Si usted o un administrador autorizado no iniciaron este cambio, se recomienda que verifiquen la seguridad de su sitio inmediatamente.',
    'TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED' => 'Alerta Admin: el email del administrador (%1$s) ha sido cambiado de (%2$s) a (%3$s) por (%4$s)',
    'TEXT_EMAIL_ALERT_ADM_NAME_CHANGED' => 'Alerta Admin: el nombre del administrador de (%1$s) ha sido cambiado de (%2$s) a (%3$s) por (%4$s)',
    'TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED' => 'Alerta Admin: El perfil de seguridad del administrador (%1$s) ha sido cambiado de (%2$s) a (%3$s) por (%4$s)',
];

return $define;
