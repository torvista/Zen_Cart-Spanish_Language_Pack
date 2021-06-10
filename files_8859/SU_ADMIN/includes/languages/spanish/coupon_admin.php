<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: coupon_admin.php 5758 2007-02-08 01:39:34Z ajeh $
//

define('TOP_BAR_TITLE', 'Estad�sticas');
define('HEADING_TITLE', 'Cupones descuento');
define('HEADING_TITLE_STATUS', 'Estado: ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nombre de Cup�n');
define('TEXT_COUPON_ALL', 'Todos los Cupones');
define('TEXT_COUPON_ACTIVE', 'Cupones activos');
define('TEXT_COUPON_INACTIVE', 'Cupones inactivos');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_UNLIMITED', 'Ilimitado');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Env�o gratis');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_RICH_TEXT_MESSAGE','Mensaje de texto enriquecido:');
define('TEXT_SELECT_CUSTOMER', 'Seleccionar usuario');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A todos los suscritores del bolet�n');
define('TEXT_CONFIRM_DELETE', '�Seguro que desea eliminar este cup�n?');
define('TEXT_SEE_RESTRICT', 'Restricciones aplicadas');

define('TEXT_COUPON_ANNOUNCE','Nos satisface ofrecerle un cup�n de nuestra tienda');

define('TEXT_TO_REDEEM', 'Puede canjear este cup�n durante el pago. S�lo introduzca el c�digo en el casillero asignado, y pulse sobre el bot�n de canjear.');
define('TEXT_IN_CASE', ' en caso que tenga alg�n problema. ');
define('TEXT_VOUCHER_IS', 'El c�digo del cup�n es ');
define('TEXT_REMEMBER', 'No pierda el c�digo del cup�n, aseg�rese de guardar bien el c�digo, de esta manera puede beneficiarse de esta oferta especial.');
define('TEXT_VISIT', 'Vis�tenos en ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' e introduzca el c�digo ');
define('TEXT_COUPON_HELP_DATE', 'El cup�n es v�lido entre %s y %s.');//STEVE didn't validate with <p><p>
define('HTML_COUPON_HELP_DATE', 'El cup�n es v�lido entre %s y %s.');///STEVE didn't validate with <p><p>

define('TABLE_HEADING_ACTION', 'Acci�n');

define('CUSTOMER_ID', 'ID de cliente');
define('CUSTOMER_NAME', 'Nombre del cliente');
define('REDEEM_DATE', 'Fecha de canje');
define('IP_ADDRESS', 'Direcci�n IP');

define('TEXT_REDEMPTIONS', 'Canjes');
define('TEXT_REDEMPTIONS_TOTAL', 'En total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'De este cliente');
define('TEXT_NO_FREE_SHIPPING', 'El env�o no es gratis');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: Email enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No seleccion� ning�n cliente.');
define('ERROR_NO_SUBJECT', 'Error: No se ha introducido ning�n asunto.');

define('COUPON_NAME', 'Nombre del cup�n');
//define('COUPON_VALUE', 'Valor del Cup�n);
define('COUPON_AMOUNT', 'Cantidad del cup�n');
define('COUPON_CODE', 'C�digo del cup�n');
define('COUPON_STARTDATE', 'Fecha de inicio');
define('COUPON_FINISHDATE', 'Fecha final');
define('COUPON_FREE_SHIP', 'Env�o gratis');
define('COUPON_DESC', 'Descripci�n del cup�n');
define('COUPON_MIN_ORDER', 'M�nimo del pedido para obtener cup�n');
define('COUPON_USES_COUPON', 'Usos por cup�n');
define('COUPON_USES_USER', 'Usos por cliente');
define('COUPON_PRODUCTS', 'Lista de productos v�lidos');
define('COUPON_CATEGORIES', 'Lista de categor�as v�lidas');
define('VOUCHER_NUMBER_USED', 'N�mero usado');
define('DATE_CREATED', 'Fecha de creaci�n');
define('DATE_MODIFIED', 'Fecha de modificaci�n');
define('TEXT_HEADING_NEW_COUPON', 'Crear nuevo cup�n');
define('TEXT_NEW_INTRO', 'Por favor, introduzca la siguiente informaci�n para el nuevo cup�n.<br>');
define('COUPON_ZONE_RESTRICTION', 'Cup�n restringido a Zona: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'La restricci�n es opcional.');

define('ERROR_NO_COUPON_AMOUNT', 'No ingres� una cantidad para el cup�n');
define('ERROR_NO_COUPON_NAME', 'No ingres� un nombre para el cup�n ');
define('ERROR_COUPON_EXISTS', 'Ya existe un cup�n con ese c�digo');


define('COUPON_NAME_HELP', 'Nombre demasiado corto para el cup�n');
define('COUPON_AMOUNT_HELP', 'El valor del descuento para el cup�n, puede ser un valor fijo o agregue un % al final para un porcentaje de descuento.');
define('COUPON_CODE_HELP', 'Puede ingresar aqu� su propio c�digo, o dejarlo en blanco para que se genere automaticamente.');
define('COUPON_STARTDATE_HELP', 'La fecha desde la que el cup�n ser� v�lido');
define('COUPON_FINISHDATE_HELP', 'La fecha en la que caduca el cup�n');
define('COUPON_FREE_SHIP_HELP', 'El cup�n permite el env�o gratis en un pedido Nota: esto est� por encima de la figura la cantidad_del_cup�n, pero respeta el valor m�nimo del pedido');
define('COUPON_DESC_HELP', 'Una descripci�n del cup�n para el cliente');
define('COUPON_MIN_ORDER_HELP', 'El m�nimo valor del pedido para que el cup�n sea v�lido');
define('COUPON_USES_COUPON_HELP', 'La m�ximas veces que el cup�n puede ser usado, dejar en blanco si no hay l�mite.');
define('COUPON_USES_USER_HELP', 'La m�xima cantidad de veces que un usuario puede usar un cup�n, dejar en blanco si no hay l�mite.');
define('COUPON_PRODUCTS_HELP', 'Un lista de product_ids (IDs de productos) separados por coma para los que este cup�n puede ser usado. Dejar en blanco si no hay restricciones.');
define('COUPON_CATEGORIES_HELP', 'Un lista de cpaths (rutas de categor�a) separadas por coma para los que este cup�n puede ser usado, dejar en blanco si no hay restricciones.');
define('COUPON_BUTTON_PREVIEW', 'Vista previa');
define('COUPON_BUTTON_CONFIRM', 'Confirmar');
define('COUPON_BUTTON_BACK', 'Volver');

define('COUPON_ACTIVE', 'Estatus');
define('COUPON_START_DATE', 'Inicio');
define('COUPON_EXPIRE_DATE', 'Caducidad');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'NO SE PUEDE deshabilitar el Cup�n de Descuento. Este Cup�n es el Cup�n de Bienvenida<br /><br />Cambie el Cup�n de Bienvenida antes de intentar borrarlo. Ver Admin->Configuraci�n->GV Cupones');
define('SUCCESS_COUPON_DISABLED', '��xito! El Cup�n de Descuento ha sido deshabilitado ...');
define('TEXT_COUPON_NEW', 'Utilice un C�digo de Cup�n de Descuento NUEVO:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', '�Aviso! Existe un duplicado de este Cup�n ... la copia ha sido cancelado por el C�digo de Cup�n: ');
define('TEXT_CONFIRM_COPY', '�Est� seguro de que quiere copiar este Cup�n de Descuento a otro Cup�n de Descuento?');
define('SUCCESS_COUPON_DUPLICATE', '��xito! El Cup�n de Descuento ha sido duplicado ...<br /><br />Revise el nombre del Cup�n y las fechas ...');
?>