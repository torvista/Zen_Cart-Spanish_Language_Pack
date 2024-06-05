<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: neekfenwick 2024 Feb 29 Modified in v2.0.0-rc1 $
*/

$define = [
    'HEADING_TITLE' => 'Cupones de Descuento',
    'HEADING_TITLE_STATUS' => 'Estado: ',
    'TEXT_COUPON' => 'Nombre del Cupón',
    'TEXT_COUPON_ALL' => 'Todos los Cupones',
    'TEXT_COUPON_ACTIVE' => 'Cupones Activos',
    'TEXT_COUPON_INACTIVE' => 'Cupones Inactivos',
    'TEXT_SUBJECT' => 'Asunto:',
    'TEXT_UNLIMITED' => 'Ilimitado',
    'TEXT_FROM' => 'De:',
    'TEXT_FREE_SHIPPING' => 'Envío gratis',
    'TEXT_MESSAGE' => 'Mensaje:',
    'TEXT_RICH_TEXT_MESSAGE' => 'Mensaje RTF:',
    'TEXT_CONFIRM_DELETE' => '¿Seguro que desea desactivar este cupón?',
    'TEXT_SEE_RESTRICT' => 'Restricciones aplicadas',
    'TEXT_COUPON_ANNOUNCE' => 'Nos satisface ofrecerle un cupón de nuestra tienda.',
    'TEXT_TO_REDEEM' => 'Puede canjear este cupón durante el pago. Sólo introduzca el código en el casillero asignado y pulse sobre el botón de canjear.',
    'TEXT_VOUCHER_IS' => 'El código del cupón es ',
    'TEXT_REMEMBER' => 'No pierda el código del cupón, segúrese de guardar bien el código para beneficiarse de esta oferta especial.',
    'TEXT_VISIT' => 'Visite nosotros en %s',
    'TEXT_COUPON_HELP_DATE' => '<p>El cupón es válido entre %1$s y %1$s.</p>',
    'HTML_COUPON_HELP_DATE' => '<p>El cupón es válido entre %1$s y %2$s.</p>',
    'CUSTOMER_ID' => 'ID cliente',
    'CUSTOMER_NAME' => 'Nombre del Cliente',
    'REDEEM_DATE' => 'Fecha de Canje',
    'IP_ADDRESS' => 'Dirección IP',
    'TEXT_REDEMPTIONS' => 'Canjes',
    'TEXT_REDEMPTIONS_TOTAL' => 'En total',
    'TEXT_REDEMPTIONS_CUSTOMER' => 'De este cliente',
    'TEXT_NO_FREE_SHIPPING' => 'El envío no es gratis',
    'NOTICE_EMAIL_SENT_TO' => 'Aviso: Email enviado a: %s',
    'ERROR_NO_CUSTOMER_SELECTED' => 'Error: No seleccionó ningún cliente.',
    'ERROR_NO_SUBJECT' => 'Error: No se ha introducido ningún asunto.',
    'COUPON_NAME' => 'Nombre del Cupón',
    'COUPON_AMOUNT' => 'Valor del Cupón',
    'TEXT_COUPON_PRODUCT_COUNT_PER_ORDER' => 'Por Pedido',
    'TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT' => 'Por Artículo Válido',
    'COUPON_CODE' => 'Código del cupón',
    'COUPON_STARTDATE' => 'Fecha de Inicio',
    'COUPON_FINISHDATE' => 'Fecha de Caducidad',
    'COUPON_RESTRICTIONS' => 'Restricciones',
    'COUPON_FREE_SHIP' => 'Envío gratis',
    'COUPON_DESC' => 'Descripción del Cupón<br>(A la vista del cliente)',
    'COUPON_MIN_ORDER' => 'Mínimo del Pedido para obtener cupón',
    'COUPON_TOTAL' => 'Mínimo del Cupón calculado desde: ',//TODO check what is this?
    'TEXT_COUPON_TOTAL_PRODUCTS' => 'Productos Válidos',
    'TEXT_COUPON_TOTAL_PRODUCTS_BASED' => '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Basado en el Total de Productos Válidos en acuerdo con las reglas de Restricciones del Cupón)',
    'TEXT_COUPON_TOTAL_ORDER' => 'Todos los Productos',
    'TEXT_COUPON_TOTAL_ORDER_BASED' => '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Basado en el Total del Pedido Completo de Todos los Productos sin respetar las Restricciones del Cupón',
    'COUPON_USES_COUPON' => 'Usos por Cupón',
    'COUPON_USES_USER' => 'Usos por Cliente',
    'COUPON_REFERRER' => 'Referentes Válidos',
    'COUPON_REFERRER_EXISTS' => 'Cupón \'%s\' (id %d) ya existe desde Referente \'%s\'',
    'COUPON_PRODUCTS' => 'Listado de Productos Válidos',
    'COUPON_CATEGORIES' => 'Listado de Categorías Válidas',
    'DATE_CREATED' => 'Fecha de Creación',
    'DATE_MODIFIED' => 'Fecha de Modificación',
    'TEXT_HEADING_NEW_COUPON' => 'Crear Cupón Nuevo',
    'TEXT_NEW_INTRO' => 'Introduzca los datos para el cupón nuevo.<br>',
    'COUPON_ZONE_RESTRICTION' => 'Cupón Restringido por Zona: ',
    'TEXT_COUPON_ZONE_RESTRICTION' => 'La Restricción del Cupón por Zona es opcional.',
    'COUPON_ORDER_LIMIT' => 'Pedidos previos del Cliente menos que: ',
    'COUPON_ORDER_LIMIT_HELP' => 'Cliente debe tener Pedidos previos menos que => deje en blanco para sin límite',
    'COUPON_IS_VALID_FOR_SALES' => 'Cupón válido para rebajas:',
    'TEXT_COUPON_IS_VALID_FOR_SALES' => 'Cupón SÍ está permitido para Productos en Rebajas',
    'TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL' => 'Cupón es válido para Productos en Rebajas',
    'TEXT_NO_COUPON_IS_VALID_FOR_SALES' => 'Cupón NO es válido para Productos en Rebajas',
    'TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL' => 'Cupón no es válido para Productos en Rebajas',
    'ERROR_NO_COUPON_AMOUNT' => 'No ingresó una cantidad para el cupón',
    'ERROR_NO_COUPON_NAME' => 'No ingresó un nombre para el cupón ',
    'ERROR_COUPON_EXISTS' => 'Ya existe un cupón con ese código',
    'COUPON_NAME_HELP' => 'Nombre corta del cupón.',
    'COUPON_AMOUNT_HELP' => 'El valor del descuento del cupón => puede ser una cantidad fija o un porcentaje (añada un % al final del número) de descuento.<br  />Se aplique Por Pedido o Por Producto Válido solamente cuando se usa una cantidad fija.',
    'COUPON_CODE_HELP' => 'Puede dejarlo en blanco para que genere un código único automáticamente o puede usar su propio texto (único).',
    'COUPON_STARTDATE_HELP' => 'Fecha desde la que el cupón será válido.',
    'COUPON_FINISHDATE_HELP' => 'Fecha en la que caduca el cupón.',
    'COUPON_FREE_SHIP_HELP' => 'El cupón permite el envío gratis en un pedido.',
    'COUPON_DESC_HELP' => 'Descripción del cupón para el cliente.',
    'COUPON_MIN_ORDER_HELP' => 'Valor Mínimo del Pedido para que el cupón sea válido.',
    'COUPON_TOTAL_HELP' => 'En el caso que especifique un Valor Mínimo de Pedido para este Cupón => ¿quiere comprobar el Valor Mínimo basado en los Productos Permitidos en acuerdo con las Restricciones o el Valor Total del Pedido?<br>NOTA: el Valor Total del Pedido precisa que por lo menos hay 1 Producto Permitido en el carro.',
    'COUPON_SALE_HELP' => 'Si elige <i>NO permitido</i> => los productos en Rebajas o Especiales no sumarán al total del valor mínimo necesario para el uso del Cupón.',
    'COUPON_USES_COUPON_HELP' => 'Número máximo de veces que el cupón puede ser usado. Déjelo en blanco si no hay límite.',
    'COUPON_USES_USER_HELP' => 'Número máximo de veces que un usuario puede usar un cupón. Déjelo en blanco si no hay límite.',
    'COUPON_REFERRER_HELP' => 'Los dominios desde donde se aplica los cupones automáticamente, uno por fila p.ej. &quot;jills-blog.com&quot; o &quot;bobsbits.com&quot;.  Haga clic en el icono verde <i class=&quot;fa-solid fa-plus&quot;></i> para agregar una nueva fila, o en el icono rojo <i class=&quot;fa-solid fa-times&quot;></i> para eliminar una fila.',
    'COUPON_BUTTON_PREVIEW' => 'Vista previa',
    'COUPON_BUTTON_CONFIRM' => 'Confirmar',
    'COUPON_ACTIVE' => 'Estatus',
    'COUPON_START_DATE' => 'Inicio',
    'COUPON_EXPIRE_DATE' => 'Caducidad',
    'TEXT_INFO_DUPLICATE_MANAGEMENT' => '<strong>Gestión de Cupones Múltiples</strong><br><br>Pinche en el Cupón referente <br>o utilice su código: <strong>%s</strong>',
    'ERROR_DISCOUNT_COUPON_WELCOME' => 'NO SE PUEDE deshabilitar el Cupón de Descuento. Este Cupón es el Cupón de Bienvenida<br><br>Cambie el Cupón de Bienvenida antes de intentar borrarlo. Ver Admin->Configuración->Tarjetas Regalo/Cupones',
    'SUCCESS_COUPON_DISABLED' => '¡Éxito! El Cupón de Descuento ha sido deshabilitado ...',
    'TEXT_COUPON_NEW' => 'Utilice un Código de Cupón de Descuento NUEVO:',
    'ERROR_DISCOUNT_COUPON_DUPLICATE' => '¡Aviso! Existe un duplicado de este Cupón ... la copia ha sido cancelado por el Código de Cupón: ',
    'TEXT_CONFIRM_COPY' => '¿Está seguro de que quiere copiar este Cupón de Descuento a otro Cupón de Descuento?',
    'SUCCESS_COUPON_DUPLICATE' => '¡Éxito! El Cupón de Descuento ha sido duplicado ...<br><br>Revise el Nombre del Cupón y las Fechas ...',
    'WARNING_COUPON_DUPLICATE' => '¡Precaución! ¡No se creó Cupones de Descuento! La cantidad de cupones no era definida ... ',
    'WARNING_COUPON_DUPLICATE_FAILED' => '!Precuación! Falló de la duplicación del Cupón',
    'TEXT_COUPON_COPY_INFO' => 'Copiar para duplicados múltiples',
    'TEXT_COUPON_COPY_DUPLICATE' => 'Crear Cupones múltiples utilizando como referente Cupón: ',
    'TEXT_COUPON_COPY_DUPLICATE_CNT' => '¿Cuántos Cupones duplicados quiere crear? ',
    'TEXT_CONFIRM_DELETE_DUPLICATE' => 'Borrar todos los Cupones basados en cupón <br>Por Ejemplo: <strong>%s</strong> borraría todos los Cupones que empiezan con: <strong>%s</strong>',
    'TEXT_COUPON_DELETE_DUPLICATE' => 'Borrar todos los Cupones que coinciden con el código base: ',
    'TEXT_DISCOUNT_COUPON_EMAIL' => 'Email Cupón de Descuento',
    'TEXT_DISCOUNT_COUPON_CONFIRM_DELETE' => 'Confirmar Desactivar',
    'TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE' => 'Confirmar Restaurar Cupón de Descuento',
    'TEXT_DISCOUNT_COUPON_EDIT' => 'Editar Cupón de Descuento',
    'TEXT_DISCOUNT_COUPON_DELETE' => 'Desactivar',
    'TEXT_DISCOUNT_COUPON_DEACTIVATED' => 'Desactivado',
    'TEXT_DISCOUNT_COUPON_RESTORE' => 'Restaurar Cupón de Descuento',
    'TEXT_DISCOUNT_COUPON_RESTRICT' => 'Restringir Cupón de Descuento',
    'TEXT_DISCOUNT_COUPON_REPORT' => 'Informe Cupón de Descuento',
    'TEXT_DISCOUNT_COUPON_COPY' => 'Copiar Cupón de Descuento',
    'TEXT_DISCOUNT_COUPON_COPY_MULTIPLE' => 'Copiar a múltiples Cupones de Descuento',
    'TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE' => 'Desactivar múltiples Cupones de Descuento',
    'TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE' => 'Informe múltiples Cupones de Descuento',
    'TEXT_DISCOUNT_COUPON_DOWNLOAD' => 'Descargar Códigos de múltiples cupones',
    'REDEEM_ORDER_ID' => 'Pedido #',
    'SUCCESS_COUPON_REACTIVATE' => 'Reactivado con éxito',
    'TEXT_CONFIRM_REACTIVATE' => '¿Está seguro que quiere restaurar este Cupón?<br>NOTA: La restauración no cambia las fechas de Inicio/Caducidad.<br>La restauración no cambia los límites de uso por cupón/por cliente si ya ha sido canjeado.',
    'SUCCESS_COUPON_FOUND' => '¡Se encontró un Cupón de Descuento!',
    'ERROR_COUPON_NOT_FOUND' => '¡No se encontró un Cupón de Descuento!',
    'ERROR_NO_COUPON_CODE' => 'Código del Cupón de Descuento no introducido!',
    'ERROR_NO_COUPONS' => 'No hay cupones',
];

return $define;