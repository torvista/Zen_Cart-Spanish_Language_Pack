<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 7161 2007-10-02 10:58:34Z drbyte $
 */

// office use only
  define('OFFICE_FROM','<strong>De:</strong>');
  define('OFFICE_EMAIL','<strong>Email:</strong>');

  define('OFFICE_SENT_TO','<strong>Enviado a:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Email a:</strong>');

  define('OFFICE_USE','<strong>S�lo para uso de la tienda:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Nombre de usuario:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Email de usuario:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Tel�fono:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>Direcci�n IP:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Host:</strong>');
  define('OFFICE_DATE_TIME','<strong>Fecha y hora:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');
  
// email disclaimer
  define('EMAIL_DISCLAIMER', 'Esta direcci�n de correo electr�nico nos fue facilitada por usted o por alguno de nuestros clientes. Si piensa que ha recibido este mensaje por error, por favor, env�e un email a %s.<br /> ');
  define('EMAIL_SPAM_DISCLAIMER', 'Este email ha sido enviado de acuerdo a la ley US CAN-SPAM de 01/01/2004. Las peticiones para darse de baja deber�n ser enviadas a esta direcci�n, y ser�n cumplidas y respetadas.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Basado en <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('TEXT_UNSUBSCRIBE', "\n\nPara darse de baja de los boletines pulse aqu�: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANTE:</strong> Para su protecci�n y para prevenir usos maliciosos, todos los emails enviados a trav�s de este sitio son registrados y sus contenidos son grabados y est�n disponibles para los administradores de la tienda. Si piensa que ha recibido este mensaje por error, por favor, env�e un email a ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Este mensaje se incluye en todos los e-mails enviados desde esta p�gina:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[CREAR CUENTA]');
  define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT', '[COMPARTALO CON UN AMIGO]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[VALES DE COMPRA]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NUEVO PEDIDO]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[INFO EXTRA DE PEDIDO CON TARJETA] #');
  
// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK', 'Atenci�n: stock bajo');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Aviso de stock bajo: ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Disabled');
?>