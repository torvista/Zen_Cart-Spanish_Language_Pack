<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Apr 17 Modified in v1.5.6b $
 */

define('TOP_BAR_TITLE', 'Estadísticas');
define('HEADING_TITLE', 'Cupones de Descuento');
define('HEADING_TITLE_STATUS', 'Estado: ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nombre del Cupón');
define('TEXT_COUPON_ALL', 'Todos los Cupones');
define('TEXT_COUPON_ACTIVE', 'Cupones Activos');
define('TEXT_COUPON_INACTIVE', 'Cupones Inactivos');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_UNLIMITED', 'Ilimitado');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Envío gratis');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_RICH_TEXT_MESSAGE','Mensaje RTF:');
define('TEXT_SELECT_CUSTOMER', 'Seleccionar usuario');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A todos los suscritores del boletín');
define('TEXT_CONFIRM_DELETE', '¿Seguro que desea eliminar este cupón?');
define('TEXT_SEE_RESTRICT', 'Restricciones aplicadas');

define('TEXT_COUPON_ANNOUNCE','Nos satisface ofrecerle un cupón de nuestra tienda.');

define('TEXT_TO_REDEEM', 'Puede canjear este cupón durante el pago. Sólo introduzca el código en el casillero asignado, y pulse sobre el botón de canjear.');
define('TEXT_IN_CASE', ' en caso que tenga algún problema. ');
define('TEXT_VOUCHER_IS', 'El código del cupón es ');
define('TEXT_REMEMBER', 'No pierda el código del cupón, asegúrese de guardar bien el código, de esta manera puede beneficiarse de esta oferta especial.');
define('TEXT_VISIT', 'Visítenos en ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' e introduzca el código ');
define('TEXT_COUPON_HELP_DATE', 'El cupón es válido entre %s y %s.');//STEVE didn't validate with <p></p>
define('HTML_COUPON_HELP_DATE', 'El cupón es válido entre %s y %s.');///STEVE didn't validate with <p></p>

define('TABLE_HEADING_ACTION', 'Acción');

define('CUSTOMER_ID', 'ID cliente');
define('CUSTOMER_NAME', 'Nombre del Cliente');
define('REDEEM_DATE', 'Fecha de Canje');
define('IP_ADDRESS', 'Dirección IP');

define('TEXT_REDEMPTIONS', 'Canjes');
define('TEXT_REDEMPTIONS_TOTAL', 'En total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'De este cliente');
define('TEXT_NO_FREE_SHIPPING', 'El envío no es gratis');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: Email enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No seleccionó ningún cliente.');
define('ERROR_NO_SUBJECT', 'Error: No se ha introducido ningún asunto.');

define('COUPON_NAME', 'Nombre del Cupón');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'Valor del Cupón');

define('TEXT_COUPON_PRODUCT_COUNT_PER_ORDER', 'Por Pedido');
define('TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT', 'Por Artículo Válido');
define('COUPON_CODE', 'Código del cupón');
define('COUPON_STARTDATE', 'Fecha de Inicio');
define('COUPON_FINISHDATE', 'Fecha de Caducidad');
define('COUPON_RESTRICTIONS', 'Restricciones');
define('COUPON_FREE_SHIP', 'Envío gratis');
define('COUPON_DESC', 'Descripción del Cupón<br />(A la vista del cliente)');
define('COUPON_MIN_ORDER', 'Mínimo del Pedido para obtener cupón');

define('COUPON_TOTAL', 'Mínimo del Cupón calculado desde: ');//TODO check
define('TEXT_COUPON_TOTAL_PRODUCTS', 'Productos Válidos');
define('TEXT_COUPON_TOTAL_PRODUCTS_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Basado en el Total de Productos Válidos en acuerdo con las reglas de Restricciones del Cupón)');
define('TEXT_COUPON_TOTAL_ORDER', 'Todos los Productos');
define('TEXT_COUPON_TOTAL_ORDER_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Basado en el Total del Pedido Completo de Todos los Productos sin respetar las Restricciones del Cupón');

define('COUPON_USES_COUPON', 'Usos por Cupón');
define('COUPON_USES_USER', 'Usos por Cliente');
define('COUPON_PRODUCTS', 'Listado de Productos Válidos');
define('COUPON_CATEGORIES', 'Listado de Categorías Válidas');
define('VOUCHER_NUMBER_USED', 'Número Usado');
define('DATE_CREATED', 'Fecha de Creación');
define('DATE_MODIFIED', 'Fecha de Modificación');
define('TEXT_HEADING_NEW_COUPON', 'Crear Cupón Nuevo');
define('TEXT_NEW_INTRO', 'Introduzca los datos para el cupón nuevo.<br />');
define('COUPON_ZONE_RESTRICTION', 'Cupón Restringido por Zona: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'La Restricción del Cupón por Zona es opcional.');
define('COUPON_ORDER_LIMIT', 'Pedidos previos del Cliente menos que: ');
define('COUPON_ORDER_LIMIT_HELP', 'Cliente debe tener Pedidos previos menos que, deje en blanco para sin límite');

define('COUPON_IS_VALID_FOR_SALES', 'Cupón válido para rebajas:');
define('TEXT_COUPON_IS_VALID_FOR_SALES', 'Cupón SÍ está permitido para Productos en Rebajas');
define('TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Cupón es válido para Productos en Rebajas');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES', 'Cupón NO es válido para Productos en Rebajas');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Cupón no es válido para Productos en Rebajas');


define('ERROR_NO_COUPON_AMOUNT', 'No ingresó una cantidad para el cupón');
define('ERROR_NO_COUPON_NAME', 'No ingresó un nombre para el cupón ');
define('ERROR_COUPON_EXISTS', 'Ya existe un cupón con ese código');


define('COUPON_NAME_HELP', 'Nombre corta del cupón.');
define('COUPON_AMOUNT_HELP', 'El valor del descuento del cupón, puede ser una cantidad fija o un porcentaje (añada un % al final del número) de descuento.<br  />Se aplique Por Pedido o Por Producto Válido solamente cuando se usa una cantidad fija.');
define('COUPON_CODE_HELP', 'Puede dejarlo en blanco para que genere un código único automáticamente o puede usar su propio texto (único).');
define('COUPON_STARTDATE_HELP', 'Fecha desde la que el cupón será válido.');
define('COUPON_FINISHDATE_HELP', 'Fecha en la que caduca el cupón.');
define('COUPON_FREE_SHIP_HELP', 'El cupón permite el envío gratis en un pedido.');
define('COUPON_DESC_HELP', 'Descripción del cupón para el cliente.');
define('COUPON_MIN_ORDER_HELP', 'Valor Mínimo del Pedido para que el cupón sea válido.');
define('COUPON_TOTAL_HELP', 'En el caso que especifique un Valor Mínimo de Pedido para este Cupón, ¿quiere comprobar el Valor Mínimo basado en los Productos Permitidos en acuerdo con las Restricciones o el Valor Total del Pedido?<br />NOTA: el Valor Total del Pedido precisa que por lo menos hay 1 Producto Permitido en el carro.');
define('COUPON_SALE_HELP', 'Si elige <i>NO permitido</i>, los productos en Rebajas o Especiales no sumarán al total del valor mínimo necesario para el uso del Cupón.');
define('COUPON_USES_COUPON_HELP', 'Número máximo de veces que el cupón puede ser usado. Déjelo en blanco si no hay límite.');
define('COUPON_USES_USER_HELP', 'Número máximo de veces que un usuario puede usar un cupón. Déjelo en blanco si no hay límite.');
define('COUPON_PRODUCTS_HELP', 'Una lista de product_ids (IDs de productos) separados por comas para los que este cupón puede ser usado. Dejar en blanco si no hay restricciones.');
define('COUPON_CATEGORIES_HELP', 'Un lista de cPaths (rutas de categoría) separadas por coma para los que este cupón puede ser usado, dejar en blanco si no hay restricciones.');
define('COUPON_BUTTON_PREVIEW', 'Vista previa');
define('COUPON_BUTTON_CONFIRM', 'Confirmar');
define('COUPON_BUTTON_BACK', 'Volver');

define('COUPON_ACTIVE', 'Estatus');
define('COUPON_START_DATE', 'Inicio');
define('COUPON_EXPIRE_DATE', 'Caducidad');

define('TEXT_INFO_DUPLICATE_MANAGEMENT', '<strong>Gestión de Cupones Múltiples</strong><br /><br />Pinche en el Cupón referente <br />o utilice su código: <strong>%s</strong>');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'NO SE PUEDE deshabilitar el Cupón de Descuento. Este Cupón es el Cupón de Bienvenida<br /><br />Cambie el Cupón de Bienvenida antes de intentar borrarlo. Ver Admin->Configuración->Tarjetas Regalo/Cupones');
define('SUCCESS_COUPON_DISABLED', '¡Éxito! El Cupón de Descuento ha sido deshabilitado ...');
define('TEXT_COUPON_NEW', 'Utilice un Código de Cupón de Descuento NUEVO:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', '¡Aviso! Existe un duplicado de este Cupón ... la copia ha sido cancelado por el Código de Cupón: ');
define('TEXT_CONFIRM_COPY', '¿Está seguro de que quiere copiar este Cupón de Descuento a otro Cupón de Descuento?');
define('SUCCESS_COUPON_DUPLICATE', '¡Éxito! El Cupón de Descuento ha sido duplicado ...<br /><br />Revise el Nombre del Cupón y las Fechas ...');
define('WARNING_COUPON_DUPLICATE', '¡Precaución! ¡No se creó Cupones de Descuento! La cantidad de cupones no era definida ... ');

define('TEXT_COUPON_COPY_INFO', 'Copiar para duplicados múltiples');
define('TEXT_COUPON_COPY_DUPLICATE', 'Crear Cupones múltiples utilizando como referente Cupón: ');
define('TEXT_COUPON_COPY_DUPLICATE_CNT', '¿Cuántos Cupones duplicados quiere crear? ');

define('TEXT_CONFIRM_DELETE_DUPLICATE', 'Borrar todos los Cupones basados en cupón <br />Por Ejemplo: <strong>%s</strong> borraría todos los Cupones que empiezan con: <strong>%s</strong>');
define('TEXT_COUPON_DELETE_DUPLICATE', 'Borrar todos los Cupones que coinciden con el código base: ');

define('TEXT_DISCOUNT_COUPON_EMAIL', 'Email Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_CONFIRM_DELETE', 'Confirmar Borrar Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE', 'Confirmar Restaurar Cupón de Descuento');

define('TEXT_DISCOUNT_COUPON_EDIT', 'Editar Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_DELETE', 'Borrar Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_RESTORE', 'Restaurar Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_RESTRICT', 'Restringir Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_REPORT', 'Informe Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_COPY', 'Copiar Cupón de Descuento');
define('TEXT_DISCOUNT_COUPON_COPY_MULTIPLE', 'Copiar a Múltiples Cupones de Descuento');
define('TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE', 'Borrar Múltiples Cupones de Descuento');
define('TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE', 'Informe Múltiples Cupones de Descuento');
define('TEXT_DISCOUNT_COUPON_DOWNLOAD', 'Descargar Códigos de Múltiples Cupones');
define('REDEEM_ORDER_ID', 'Pedido #');
define('SUCCESS_COUPON_REACTIVATE', 'Reactivado con éxito');
define('TEXT_CONFIRM_REACTIVATE', '¿Está seguro que quiere restaurar este Cupón?<br />NOTA: La restauración no cambia las fechas de Inicio/Caducidad.<br />La restauración no cambia los límites de uso por cupón/por cliente si ya ha sido canjeado.');

define('SUCCESS_COUPON_FOUND', '¡Se encontró un Cupón de Descuento!');
define('ERROR_COUPON_NOT_FOUND', '¡No se encontró un Cupón de Descuento!');
define('ERROR_NO_COUPON_CODE', 'Código del Cupón de Descuento no introducido!');
