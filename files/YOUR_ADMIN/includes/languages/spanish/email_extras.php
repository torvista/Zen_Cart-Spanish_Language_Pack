<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 18698 2011-05-04 14:50:06Z wilt $
 */

// office use only
  define('OFFICE_FROM', 'De:');
  define('OFFICE_EMAIL','E-mail:');

  define('OFFICE_SENT_TO', 'Enviado a:');
  define('OFFICE_EMAIL_TO','E-mail:');
  define('OFFICE_USE', 'Sólo para uso interno:');
  define('OFFICE_LOGIN_NAME', 'Nombre de usuario:');
  define('OFFICE_LOGIN_EMAIL', 'E-mail de usuario:');
  define('OFFICE_LOGIN_PHONE','<strong>Teléfono:</strong>');
  define('OFFICE_IP_ADDRESS', 'Dirección IP:');
  define('OFFICE_HOST_ADDRESS', 'Host:');
  define('OFFICE_DATE_TIME', 'Fecha y Hora:');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Este email lo hemos obtenido a través de usted o de alguien que se ha registrado en nuestra tienda. Si no fue usted, o piensa que ha recibido este mensaje por error, por favor, envíe un email a ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");
  define('EMAIL_SPAM_DISCLAIMER','Este email ha sido enviado de acuerdo con la ley US CAN-SPAM de 01/01/2004. Las peticiones de darse de baja pueden ser enviadas a esta dirección, y serán cumplidas y respetadas.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Basado en <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[VALES DE COMPRA]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[CUPONES DE DESCUENTO]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ESTADO DE LOS PEDIDOS]');
  define('TEXT_UNSUBSCRIBE', "\n\nPara dejar de recibir futuros boletines y correos promocionales, simplemente haga clic en el siguient enlace: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Desactivado');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Admin Aviso: Usuario añadido.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Admin Aviso: Un usuario nuevo (%s) ha sido AÑADIDO por %s.' . "\n\n" . 'Si no autorizó esta acción, compruebe la seguridad de la tienda AHORA.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Admin Aviso: Un usuario ha sido borrado.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Admin Aviso: Un usuario de admin (%s) ha sido borrado por %s.' . "\n\n" . 'Si no autorizó esta acción, compruebe la seguridad de la tienda AHORA.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Admin Aviso: Los datos de un usuario han sido cambiados.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Admin Aviso: el email del usuario (%s) ha sido cambiado de (%s) a (%s) por (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Admin Aviso: el nombre de usuario de (%s) ha sido cambiado de (%s) a (%s) por (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Admin Aviso: El perfil de seguridad del usuario (%s) ha sido cambiado de (%s) a (%s) por (%s)');