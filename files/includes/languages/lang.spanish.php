<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
declare(strict_types=1); 
$locales = ['es_ES.UTF8', 'es-ES', 'Spanish_Spain.1252', 'es'];
@setlocale(LC_TIME, $locales);
$define = [
    'ARIA_DELETE_ITEM_FROM_CART' => 'Borrar este artículo del carro',
    'ARIA_EDIT_QTY_IN_CART' => 'Editar cantidad en el carro',
    'ARIA_PAGINATION_' => '',
    'ARIA_PAGINATION_CURRENTLY_ON' => 'ahora en la página %s',
    'ARIA_PAGINATION_CURRENT_PAGE' => 'Pagina Actual',
    'ARIA_PAGINATION_ELLIPSIS_NEXT' => 'Siguiente grupo de páginas',
    'ARIA_PAGINATION_ELLIPSIS_PREVIOUS' => 'Anterior grupo de páginas',
    'ARIA_PAGINATION_GOTO' => 'Ir a ',
    'ARIA_PAGINATION_NEXT_PAGE' => 'Ir a la Página Siguiente',
    'ARIA_PAGINATION_PAGE_NUM' => 'Página %s',
    'ARIA_PAGINATION_PREVIOUS_PAGE' => 'Ir a la Página Anterior',
    'ARIA_PAGINATION_ROLE_LABEL_FOR' => '%s Paginación',
    'ARIA_PAGINATION_ROLE_LABEL_GENERAL' => 'Paginación',
    'ARIA_QTY_ADD_TO_CART' => 'Introduzca cantidad para añadir al carro',
    'ASK_A_QUESTION' => 'Realice una Pregunta sobre este producto',
    'ATTRIBUTES_PRICE_DELIMITER_PREFIX' => ' ( ',
    'ATTRIBUTES_PRICE_DELIMITER_SUFFIX' => ' )',
    'ATTRIBUTES_WEIGHT_DELIMITER_PREFIX' => ' (',
    'ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX' => ') ',
    'BOX_HEADING_BANNER_BOX' => 'Patrocinadores',
    'BOX_HEADING_BANNER_BOX2' => '¿Ha visto...?',
    'BOX_HEADING_BANNER_BOX_ALL' => 'Patrocinadores',
    'BOX_HEADING_BESTSELLERS' => 'Los más vendidos',
    'BOX_HEADING_BRANDS' => 'Comprar por Marca',
    'BOX_HEADING_CATEGORIES' => 'Categorías',
    'BOX_HEADING_CURRENCIES' => 'Divisas',
    'BOX_HEADING_CUSTOMER_ORDERS' => 'Compra Otra Vez',
    'BOX_HEADING_FEATURED_PRODUCTS' => 'Destacados',
    'BOX_HEADING_INFORMATION' => 'Información',
    'BOX_HEADING_LANGUAGES' => 'Idiomas',
    'BOX_HEADING_LINKS' => '&nbsp;&nbsp;[todos]',
    'BOX_HEADING_MANUFACTURERS' => 'Fabricantes',
    'BOX_HEADING_MANUFACTURER_INFO' => 'Info del Fabricante',
    'BOX_HEADING_MORE_INFORMATION' => 'Más información',
    'BOX_HEADING_NOTIFICATIONS' => 'Avisos',
    'BOX_HEADING_REVIEWS' => 'Comentarios',
    'BOX_HEADING_SEARCH' => 'Buscar',
    'BOX_HEADING_SHOPPING_CART' => 'Carro de la Compra',
    'BOX_HEADING_SPECIALS' => 'Ofertas',
    'BOX_HEADING_WHATS_NEW' => 'Novedades',
    'BOX_INFORMATION_ABOUT_US' => 'Sobre Nosotros',
    'BOX_INFORMATION_CONDITIONS' => 'Condiciones de Uso',
    'BOX_INFORMATION_CONTACT' => 'Contáctenos',
    'BOX_INFORMATION_DISCOUNT_COUPONS' => 'Cupones de Descuento',
    'BOX_INFORMATION_ORDER_STATUS' => 'Estado del Pedido',
    'BOX_INFORMATION_PAGE_2' => 'Página 2',
    'BOX_INFORMATION_PAGE_3' => 'Página 3',
    'BOX_INFORMATION_PAGE_4' => 'Página 4',
    'BOX_INFORMATION_PRIVACY' => 'Aviso de Privacidad',
    'BOX_INFORMATION_SHIPPING' => 'Envíos y Devoluciones',
    'BOX_INFORMATION_SITE_MAP' => 'Mapa del Sitio',
    'BOX_INFORMATION_UNSUBSCRIBE' => 'Baja del Boletín',
    'BOX_MANUFACTURER_INFO_HOMEPAGE' => 'web %s',
    'BOX_MANUFACTURER_INFO_OTHER_PRODUCTS' => 'Otros productos',
    'BOX_NOTIFICATIONS_NOTIFY' => 'Notifíquenme cuando haya actualizaciones de <strong>%s</strong>',
    'BOX_NOTIFICATIONS_NOTIFY_REMOVE' => 'No me notifiquen las actualizaciones de <strong>%s</strong>',
    'BOX_REVIEWS_NO_REVIEWS' => 'Actualmente no hay comentarios sobre el producto.',
    'BOX_REVIEWS_TEXT_OF_5_STARS' => '¡%s de 5 estrellas!',
    'BOX_REVIEWS_WRITE_REVIEW' => 'Escriba un comentario sobre este producto.',
    'BOX_SEARCH_ADVANCED_SEARCH' => 'Búsqueda Avanzada',
    'BOX_SHOPPING_CART_EMPTY' => 'No hay artículos en el carro',
    'CAPTION_UPCOMING_PRODUCTS' => 'Pronto tendremos estos productos disponibles',
    'CART_ITEMS' => 'Producto(s) en el Carro: ',
    'CART_QUANTITY_SUFFIX' => '&nbsp;x ',
    'CART_SHIPPING_METHOD_ADDRESS' => 'Dirección:',
    'CART_SHIPPING_METHOD_ALL_DOWNLOADS' => '- Descargas',
    'CART_SHIPPING_METHOD_FREE_TEXT' => 'Envío Gratis',
    'CART_SHIPPING_METHOD_RATES' => 'Tarifas:',
    'CART_SHIPPING_METHOD_TEXT' => 'Métodos de Envío disponibles:',
    'CART_SHIPPING_METHOD_TO' => 'Enviar a: ',
    'CART_SHIPPING_METHOD_ZIP_REQUIRED' => 'true',
    'CART_SHIPPING_OPTIONS' => 'Estimación de los Gastos del Envío:',
    'CART_SHIPPING_QUOTE_CRITERIA' => 'El precio de los portes depende del código postal elegido:',
    'CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS' => 'Productos Destacados...',
    'CATEGORIES_BOX_HEADING_PRODUCTS_ALL' => 'Todos los Productos...',
    'CATEGORIES_BOX_HEADING_SPECIALS' => 'Ofertas...',
    'CATEGORIES_BOX_HEADING_WHATS_NEW' => 'Nuevos Productos...',
    'CATEGORY_COMPANY' => 'Datos de la Empresa',
    'CATEGORY_PERSONAL' => 'Datos Personales',
    'CHARSET' => 'utf-8',
    'DATE_FORMAT' => 'm/d/Y',
    'DATE_FORMAT_LONG' => '%A %d %B, %Y',
    'DB_ERROR_NOT_CONNECTED' => 'Error - No se ha podido conectar con la base de datos',
    'DOB_FORMAT_STRING' => 'mm/dd/yyyy',
    'DOWNLOADS_CONTROLLER_ON_HOLD_MSG' => 'NOTA: Las descargas no están disponibles hasta que el pago haya sido verificado',
    'EMAIL_SEND_FAILED' => 'ERROR: No se ha podido enviar el email a : "%s" <%s> con sujeto: "%s"',
    'EMPTY_CART_TEXT_NO_QUOTE' => '¡Lo siento! Ha excedido el tiempo de su sesión ... Por favor, actualice su carro para obtener el presupuesto de envío ...',
    'EMP_SHOPPING_FOR_MESSAGE' => 'Actualmente utilizando la cuenta de %1$s (%2$s).',
    'EMP_SHOPPING_FOR_MESSAGE_SEVERITY' => 'caution',
    'ENTRY_CITY' => 'Localidad:',
    'ENTRY_CITY_ERROR' => 'La localidad debe tener un mínimo de ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.',
    'ENTRY_CITY_TEXT' => '*',
    'ENTRY_COMPANY' => 'Nombre Empresa:',
    'ENTRY_COMPANY_ERROR' => 'Introduzca el nombre de la empresa.',
    'ENTRY_COMPANY_TEXT' => '',
    'ENTRY_COUNTRY' => 'País:',
    'ENTRY_COUNTRY_ERROR' => 'Debe seleccionar un país del menú desplegable.',
    'ENTRY_COUNTRY_TEXT' => '*',
    'ENTRY_CUSTOMERS_REFERRAL' => 'Código de Referencia:',
    'ENTRY_DATE_FROM' => 'Desde Fecha:',
    'ENTRY_DATE_OF_BIRTH' => 'Fecha de nacimiento:',
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'La fecha de nacimiento debe tener el formato: MM/DD/YYYY (ej. 05/21/1970) o YYYY-MM-DD (ej 1970-05-21)',
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (ej. 05/21/1970 o 1970-05-21)',
    'ENTRY_DATE_TO' => 'Hasta Fecha:',
    'ENTRY_EMAIL' => 'Email:',
    'ENTRY_EMAIL_ADDRESS' => 'Email:',
    'ENTRY_EMAIL_ADDRESS_CHECK_ERROR' => 'Este e-mail parece no ser válido - por favor, realice las correcciones necesarias.',
    'ENTRY_EMAIL_ADDRESS_ERROR' => 'El e-mail debe tener un mínimo de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.',
    'ENTRY_EMAIL_ADDRESS_ERROR_EXISTS' => 'Este e-mail ya existe en nuestra base de datos - por favor, entre con otro e-mail o cree otra cuenta con una dirección de e-mail diferente.',
    'ENTRY_EMAIL_ADDRESS_TEXT' => '*',
    'ENTRY_EMAIL_CONTENT_CHECK_ERROR' => 'Su mensaje es demasiado corto.',
    'ENTRY_EMAIL_HTML_DISPLAY' => 'HTML',
    'ENTRY_EMAIL_NAME_CHECK_ERROR' => 'El nombre es demasiado corto (precisa un mínimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres',
    'ENTRY_EMAIL_TEXT_DISPLAY' => 'Solo-TEXTO',
    'ENTRY_ENQUIRY' => 'Mensaje:',
    'ENTRY_FAX_NUMBER' => 'Fax:',
    'ENTRY_FAX_NUMBER_TEXT' => '',
    'ENTRY_FIRST_NAME' => 'Nombre:',
    'ENTRY_FIRST_NAME_ERROR' => 'El nombre debe tener un mínimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.',
    'ENTRY_FIRST_NAME_TEXT' => '*',
    'ENTRY_GENDER' => 'Salutación:',
    'ENTRY_GENDER_ERROR' => 'Por favor escoja una opción (Sr./Sra.)',
    'ENTRY_GENDER_TEXT' => '*',
    'ENTRY_INCLUDE_SUBCATEGORIES' => 'Incluye Subcategorías',
    'ENTRY_LAST_NAME' => 'Apellido(s):',
    'ENTRY_LAST_NAME_ERROR' => 'Los apellidos debe tener un mínimo de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.',
    'ENTRY_LAST_NAME_TEXT' => '*',
    'ENTRY_NAME' => 'Nombre completo:',
    'ENTRY_NEWSLETTER' => 'Quiero recibir el boletín sobre productos nuevos.',
    'ENTRY_NEWSLETTER_TEXT' => '',
    'ENTRY_NICK' => 'Apodo del Foro:',
    'ENTRY_NICK_DUPLICATE_ERROR' => 'Ese apodo ya existe.',
    'ENTRY_NICK_TEXT' => '',
    'ENTRY_PASSWORD' => 'Contraseña:',
    'ENTRY_PASSWORD_CONFIRMATION' => 'Confirmar Contraseña:',
    'ENTRY_PASSWORD_CONFIRMATION_TEXT' => '*',
    'ENTRY_PASSWORD_CURRENT' => 'Contraseña Actual:',
    'ENTRY_PASSWORD_CURRENT_TEXT' => '*',
    'ENTRY_PASSWORD_ERROR' => 'La contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.',
    'ENTRY_PASSWORD_ERROR_NOT_MATCHING' => 'La confirmación de la contraseña y la contraseña deben ser iguales.',
    'ENTRY_PASSWORD_NEW' => 'Nueva Contraseña:',
    'ENTRY_PASSWORD_NEW_ERROR' => 'La nueva contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.',
    'ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING' => 'La confirmación de la contraseña debe ser igual a la nueva contraseña.',
    'ENTRY_PASSWORD_NEW_TEXT' => '*',
    'ENTRY_PASSWORD_TEXT' => '* (al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres)',
    'ENTRY_POST_CODE' => 'Código Postal:',
    'ENTRY_POST_CODE_ERROR' => 'El código postal debe tener un mínimo de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.',
    'ENTRY_POST_CODE_TEXT' => '*',
    'ENTRY_PRICE_FROM' => 'Precio Desde:',
    'ENTRY_PRICE_TO' => 'Precio Hasta:',
    'ENTRY_RECIPIENT_NAME' => 'Nombre Destinatario:',
    'ENTRY_REQUIRED_SYMBOL' => '*',
    'ENTRY_STATE' => 'Provincia:',
    'ENTRY_STATE_ERROR' => 'La provincia debe tener un mínimo de ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.',
    'ENTRY_STATE_ERROR_SELECT' => 'Por favor, seleccione una provincia del menú desplegable.',
    'ENTRY_STATE_TEXT' => '*',
    'ENTRY_STREET_ADDRESS' => 'Dirección:',
    'ENTRY_STREET_ADDRESS_ERROR' => 'La dirección debe tener un mínimo de ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.',
    'ENTRY_STREET_ADDRESS_TEXT' => '*',
    'ENTRY_SUBURB' => 'Dirección (cont.):',
    'ENTRY_SUBURB_TEXT' => '',
    'ENTRY_TELEPHONE_NUMBER' => 'Teléfono:',
    'ENTRY_TELEPHONE_NUMBER_ERROR' => 'El teléfono debe tener un mínimo de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' números.',
    'ENTRY_TELEPHONE_NUMBER_TEXT' => '*',
    'ERROR_AT_LEAST_ONE_INPUT' => 'Hay que rellenar por lo menos un campo del formulario de búsqueda.',
    'ERROR_CART_UPDATE' => '<strong>Por favor, actualice su pedido.</strong> ',
    'ERROR_CONDITIONS_NOT_ACCEPTED' => 'Por favor, confirme los Términos y Condiciones acerca de este pedido haciendo click en la casilla inferior.',
    'ERROR_CORRECTIONS_HEADING' => 'Por favor corrija lo siguiente: <br>',
    'ERROR_CUSTOMERS_ID_INVALID' => '¡Los datos del cliente no puede ser validada!<br>Por favor, conéctese o abra una nueva cuenta. ...',
    'ERROR_DATABASE_MAINTENANCE_NEEDED' => '<a href="https:docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071: Parece que hay un problema con la base de datos.</a>',
    'ERROR_DESTINATION_DOES_NOT_EXIST' => 'Error: el destino no existe.',
    'ERROR_DESTINATION_NOT_WRITEABLE' => 'Error: destino no escribible.',
    'ERROR_FILETYPE_NOT_ALLOWED' => 'Error: Tipo de fichero no permitido.',
    'ERROR_FILE_NOT_SAVED' => 'Error: fichero no guardado.',
    'ERROR_FILE_TOO_BIG' => 'Aviso: ¡El archivo es demasiado grande para subirse!<br>Se puede hacer el pedido pero, por favor, contáctenos para ayudar con la subida.',
    'ERROR_INVALID_FROM_DATE' => 'Fecha Desde inválida.',
    'ERROR_INVALID_KEYWORDS' => 'Palabras Claves inválidas.',
    'ERROR_INVALID_TO_DATE' => 'Fecha Hasta inválida',
    'ERROR_MAXIMUM_QTY' => 'La cantidad añadida al carro ha sido modificada - hay una restricción del máximo permitido. Ver este producto:<br>',
    'ERROR_NO_PAYMENT_MODULE_SELECTED' => 'Por favor, seleccione un método de pago para su pedido.',
    'ERROR_PRICE_FROM_MUST_BE_NUM' => 'Precio Desde debe ser un número.',
    'ERROR_PRICE_TO_LESS_THAN_PRICE_FROM' => 'Precio Hasta debe ser igual o mayor que el Precio Desde.',
    'ERROR_PRICE_TO_MUST_BE_NUM' => 'Precio Hasta debe ser un número.',
    'ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED' => 'Por favor, acepte la Política de Privacidad haciendo click en la casilla inferior.',
    'ERROR_PRODUCT' => '<br>El articulo: ',
    'ERROR_PRODUCT_ATTRIBUTES' => '<br>El artículo: ',
    'ERROR_PRODUCT_OPTION_SELECTION' => '<br> ... Valores de Opciones no válidos seleccionados ',
    'ERROR_PRODUCT_QUANTITY_MAX' => ' ... Errores de Cantidad Máxima - ',
    'ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART' => ' ... Errores de Cantidad Máxima - ',
    'ERROR_PRODUCT_QUANTITY_MIN' => ' ... Errores de Cantidad Mínima - ',
    'ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART' => ' tiene una restricción de cantidad mínima. ',
    'ERROR_PRODUCT_QUANTITY_ORDERED' => '<br>Usted pidió un total de: ',
    'ERROR_PRODUCT_QUANTITY_UNITS' => ' ... Errores de las Cantidades de Unidades - ',
    'ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART' => ' ... Errores de las Cantidades de Unidades - ',
    'ERROR_PRODUCT_STATUS_SHOPPING_CART' => '<br>Lo sentimos pero este producto ha sido retirado de nuestro inventario.<br>Este producto ha sido eliminado de su carro.',
    'ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES' => '<br>Lo sentimos pero las opciones elegidas para este producto han sido modificadas y no están disponibles actualmente.<br>Este producto ha sido eliminado de su carro.',
    'ERROR_QUANTITY_ADJUSTED' => 'La cantidad añadida al carro ha sido ajustada. El producto requerido no está disponible en cantidades fraccionadas. La cantidad de este producto es:<br>',
    'ERROR_QUANTITY_CHANGED_FROM' => ' => ha sido cambiado desde: ',
    'ERROR_QUANTITY_CHANGED_TO' => ' a ',
    'ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE' => 'Lo sentimos, pero no tratamos con direcciones de envío/facturación en "%s". Por favor, contáctenos.',
    'ERROR_TO_DATE_LESS_THAN_FROM_DATE' => 'Fecha Hasta debe ser igual o más tarde que Fecha Desde.',
    'FAILED_TO_ADD_UNAVAILABLE_PRODUCTS' => 'Los productos seleccionados no están disponible actualmente...',
    'FEMALE' => 'Sra.',
    'FOOTER_TEXT_BODY' => 'Derechos &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. <a href="https://www.zen-cart.com" rel="noopener noreferrer" target="_blank">E-comercio Zen Cart</a>',
    'FORM_REQUIRED_INFORMATION' => '* Información obligatoria',
    'FREE_SHIPPING_DESCRIPTION' => 'Envío Gratis para pedidos de más de %s',
    'HEADING_ADDRESS_INFORMATION' => 'Dirección',
    'HEADING_BILLING_ADDRESS' => 'Dirección Facturación',
    'HEADING_DELIVERY_ADDRESS' => 'Dirección Envío',
    'HEADING_DOWNLOAD' => 'Para bajar los archivos, haga click en el botón de Descarga y elija "Guardar en el disco" del menú.',
    'HEADING_ORDER_DATE' => 'Fecha Pedido:',
    'HEADING_ORDER_HISTORY' => 'Comentarios y Historial Estatus',
    'HEADING_ORDER_NUMBER' => 'Pedido #%s',
    'HEADING_PAYMENT_METHOD' => 'Método de Pago',
    'HEADING_PRODUCTS' => 'Productos',
    'HEADING_QUANTITY' => 'Cant.',
    'HEADING_SEARCH_HELP' => 'Ayuda Búsqueda',
    'HEADING_SHIPPING_METHOD' => 'Método Envío',
    'HEADING_TAX' => 'Impuestos',
    'HEADING_TOTAL' => 'Total',
    'HTML_PARAMS' => 'dir="ltr" lang="es"',
    'ICON_ERROR_ALT' => 'Error',
    'ICON_IMAGE_ERROR' => 'error.png',
    'ICON_IMAGE_SUCCESS' => 'success.png',
    'ICON_IMAGE_TINYCART' => 'cart.gif',
    'ICON_IMAGE_TRASH' => 'small_delete.png',
    'ICON_IMAGE_UPDATE' => 'button_update_cart.png',
    'ICON_IMAGE_WARNING' => 'warning.png',
    'ICON_SUCCESS_ALT' => 'Éxito',
    'ICON_TINYCART_ALT' => 'Pinche aquí para añadir el producto al carro.',
    'ICON_TRASH_ALT' => 'Pinche aquí para eliminar el artículo del carro.',
    'ICON_UPDATE_ALT' => 'Para cambiar la cantidad, corrija la cantidad en la casilla y pinche en este icono.',
    'ICON_WARNING_ALT' => 'Precaución',
    'JS_ERROR' => 'Ha ocurrido un error durante el procesamiento del formulario.\n\nPor favor, realice las siguientes correcciones:\n\n',
    'JS_ERROR_NO_PAYMENT_MODULE_SELECTED' => '* Por favor seleccione un método de pago para su pedido.',
    'JS_ERROR_SUBMITTED' => 'Este formulario ya ha sido enviado. Por favor, presione OK y espere a que se procese el proceso.',
    'JS_REVIEW_RATING' => '* Debe valorar el producto.',
    'JS_REVIEW_TEXT' => '* El \'texto del comentario\' debe tener al menos ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.',
    'LANGUAGE_CURRENCY' => 'USD',
    'MALE' => 'Sr.',
    'META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT' => '¡Es gratis!',
    'MORE_INFO_TEXT' => '... más info',
    'NOT_LOGGED_IN_TEXT' => 'Sin entrar en cuenta',
    'ORDER_HEADING_DIVIDER' => '&nbsp;-&nbsp;',
    'OTHER_BOX_NOTIFY_REMOVE_ALT' => 'Eliminar las notificaciones sobre este producto.',
    'OTHER_BOX_NOTIFY_YES_ALT' => 'Avísame de actualizaciones de este producto.',
    'OTHER_BOX_WRITE_REVIEW_ALT' => 'Escribir un comentario sobre este producto.',
    'OTHER_DOWN_FOR_MAINTENANCE_ALT' => 'Estamos mejorando la web y no estará disponible por el momento. Por favor, vuelva más tarde.',
    'OTHER_IMAGE_BLACK_SEPARATOR' => 'pixel_black.gif',
    'OTHER_IMAGE_BOX_NOTIFY_REMOVE' => 'box_products_notifications_remove.gif',
    'OTHER_IMAGE_BOX_NOTIFY_YES' => 'box_products_notifications.gif',
    'OTHER_IMAGE_BOX_WRITE_REVIEW' => 'box_write_review.gif',
    'OTHER_IMAGE_CALL_FOR_PRICE' => 'call_for_prices.png',
    'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION' => 'customer_authorization.gif',
    'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION_ALT' => 'LA APROBACIÓN DE CLIENTE AÚN ESTÁ PENDIENTE ...',
    'OTHER_IMAGE_DOWN_FOR_MAINTENANCE' => 'down_for_maintenance.png',
    'OTHER_IMAGE_PRICE_IS_FREE' => 'free.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_FIVE' => 'stars_5_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_FOUR' => 'stars_4_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_ONE' => 'stars_1_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_THREE' => 'stars_3_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_TWO' => 'stars_2_small.png',
    'OTHER_REVIEWS_RATING_STARS_FIVE_ALT' => 'Cinco estrellas',
    'OTHER_REVIEWS_RATING_STARS_FOUR_ALT' => 'Cuatro estrellas',
    'OTHER_REVIEWS_RATING_STARS_ONE_ALT' => 'Una estrella',
    'OTHER_REVIEWS_RATING_STARS_THREE_ALT' => 'Tres estrellas',
    'OTHER_REVIEWS_RATING_STARS_TWO_ALT' => 'Dos estrellas',
    'OUT_OF_STOCK_CANT_CHECKOUT' => 'Los productos marcados ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no tienen stock o no hay suficientes para completar su pedido.<br>Cambie la cantidad de los productos marcados "' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '". Gracias',
    'OUT_OF_STOCK_CAN_CHECKOUT' => 'Los productos marcados ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no tienen stock.<br>Completaremos el pedido lo antes posible. ',
    'PAGE_ACCOUNT' => 'Mi Cuenta',
    'PAGE_ACCOUNT_EDIT' => 'Datos de la Cuenta',
    'PAGE_ACCOUNT_HISTORY' => 'Historial de Pedidos',
    'PAGE_ACCOUNT_NOTIFICATIONS' => 'Suscripciones a los Boletines',
    'PAGE_ADDRESS_BOOK' => 'Direcciones de Envío',
    'PAGE_ADVANCED_SEARCH' => 'Buscar',
    'PAGE_CHECKOUT_SHIPPING' => 'Pasar por Caja',
    'PAGE_FEATURED' => 'Destacados',
    'PAGE_PRODUCTS_ALL' => 'Todos los Productos',
    'PAGE_PRODUCTS_NEW' => 'Productos Nuevos',
    'PAGE_REVIEWS' => 'Comentarios',
    'PAGE_SHOPPING_CART' => 'Carro de la Compra',
    'PAGE_SPECIALS' => 'Ofertas',
    'PAYMENT_JAVASCRIPT_DISABLED' => 'No puede continuar con el proceso de compra porque Javascript está desactivado en su navegador. Es imprescindible activarlo para completar la compra.',
    'PAYMENT_METHOD_GV' => 'Tarjeta Regalo/Cupón',
    'PAYMENT_MODULE_GV' => 'GV/DC',
    'PLEASE_SELECT' => 'Seleccione ...',
    'PREVNEXT_BUTTON_NEXT' => '[Siguiente&nbsp;&raquo;]',
    'PREVNEXT_BUTTON_PREV' => '[&laquo;&nbsp;Anterior]',
    'PREVNEXT_TITLE_NEXT_PAGE' => 'Página Siguiente',
    'PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE' => 'Siguiente Listado de %d Páginas',
    'PREVNEXT_TITLE_PAGE_NO' => 'Página %d',
    'PREVNEXT_TITLE_PREVIOUS_PAGE' => 'Página anterior',
    'PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE' => 'Anterior Listado de %d Páginas',
    'PREV_NEXT_PRODUCT' => 'Producto ',
    'PRIMARY_ADDRESS_TITLE' => 'Dirección Principal',
    'PRODUCTS_ORDER_QTY_TEXT' => 'Añadir al Carro: ',
    'PRODUCTS_ORDER_QTY_TEXT_IN_CART' => 'Cantidad en el carro: ',
    'PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT' => 'Contáctenos para saber el precio',
    'PRODUCTS_PRICE_IS_FREE_TEXT' => '¡Es gratis!',
    'PRODUCTS_QUANTITY_MAX_TEXT_LISTING' => 'Max:',
    'PRODUCTS_QUANTITY_MIN_TEXT_LISTING' => 'Min: ',
    'PRODUCTS_QUANTITY_UNIT_TEXT_LISTING' => 'Unidades:',
    'PRODUCT_PRICE_DISCOUNT_AMOUNT' => '&nbsp;de descuento',
    'PRODUCT_PRICE_DISCOUNT_PERCENTAGE' => '% de descuento',
    'PRODUCT_PRICE_DISCOUNT_PREFIX' => 'Ahorre:&nbsp;',
    'PRODUCT_PRICE_SALE' => 'Oferta:&nbsp;',
    'PULL_DOWN_ALL' => 'Seleccione',
    'PULL_DOWN_ALL_RESET' => '- RESETEAR - ',
    'PULL_DOWN_DEFAULT' => 'Seleccione País',
    'PULL_DOWN_MANUFACTURERS' => '- Resetear -',
    'PULL_DOWN_SHIPPING_ESTIMATOR_SELECT' => 'Seleccione',
    'SEND_TO_TEXT' => 'Enviar Email A:',
    'SET_AS_PRIMARY' => 'Marcar como Dirección Principal',
    'SUCCESS_ADDED_TO_CART_PRODUCT' => 'El producto ha sido añadido al carro ...',
    'SUCCESS_ADDED_TO_CART_PRODUCTS' => 'El producto(s) seleccionado ha sido añadido al carro ...',
    'SUCCESS_FILE_SAVED_SUCCESSFULLY' => 'Éxito: fichero guardado correctamente.',
    'TABLE_ATTRIBUTES_QTY_PRICE_PRICE' => 'PRECIO',
    'TABLE_ATTRIBUTES_QTY_PRICE_QTY' => 'CANTIDAD',
    'TABLE_HEADING_ADDRESS_DETAILS' => 'Dirección',
    'TABLE_HEADING_BUY_NOW' => 'Comprar Ahora',
    'TABLE_HEADING_BYTE_SIZE' => 'Tamaño del archivo',
    'TABLE_HEADING_COMMENTS' => 'Instrucciones Especiales/Comentario del Pedido',
    'TABLE_HEADING_CREDIT_PAYMENT' => 'Créditos Disponibles',
    'TABLE_HEADING_DATE_EXPECTED' => 'Fecha de Espera',
    'TABLE_HEADING_DATE_OF_BIRTH' => 'Confirma su edad',
    'TABLE_HEADING_DOWNLOAD_COUNT' => 'Quedan',
    'TABLE_HEADING_DOWNLOAD_DATE' => 'Enlace Caduca',
    'TABLE_HEADING_DOWNLOAD_FILENAME' => 'Nombre del archivo',
    'TABLE_HEADING_FEATURED_PRODUCTS' => 'Productos Destacados ',
    'TABLE_HEADING_IMAGE' => 'Imagen del Producto',
    'TABLE_HEADING_LOGIN_DETAILS' => 'Datos de Login',
    'TABLE_HEADING_MANUFACTURER' => 'Fabricante',
    'TABLE_HEADING_MODEL' => 'Modelo',
    'TABLE_HEADING_NEW_PRODUCTS' => 'Productos Nuevos para %s',
    'TABLE_HEADING_PHONE_FAX_DETAILS' => 'Datos de contacto adicionales',
    'TABLE_HEADING_PRICE' => 'Precio',
    'TABLE_HEADING_PRIVACY_CONDITIONS' => 'Privacidad',
    'TABLE_HEADING_PRODUCTS' => 'Nombre Producto',
    'TABLE_HEADING_PRODUCT_NAME' => 'Nombre del Articulo',
    'TABLE_HEADING_QUANTITY' => 'Cantidad',
    'TABLE_HEADING_REFERRAL_DETAILS' => '¿Cómo supo de nosotros?',
    'TABLE_HEADING_SHIPPING_ADDRESS' => 'Dirección Envío',
    'TABLE_HEADING_SPECIALS_INDEX' => 'Ofertas del mes en %s',
    'TABLE_HEADING_STATUS_COMMENTS' => 'Comentarios',
    'TABLE_HEADING_STATUS_DATE' => 'Fecha',
    'TABLE_HEADING_STATUS_ORDER_STATUS' => 'Estado Pedido',
    'TABLE_HEADING_TOTAL' => 'Total',
    'TABLE_HEADING_UPCOMING_PRODUCTS' => 'Próximos Productos',
    'TABLE_HEADING_WEIGHT' => 'Peso',
    'TEXT_ADMIN_DOWN_FOR_MAINTENANCE' => 'AVISO: Esta página web no está operativa por razones de mantenimiento',
    'TEXT_ALL_CATEGORIES' => 'Todas la Categorías',
    'TEXT_ALL_MANUFACTURERS' => 'Todos los Fabricantes',
    'TEXT_ALSO_PURCHASED_PRODUCTS' => 'Los clientes que compraron este producto, también compraron...',
    'TEXT_ASCENDINGLY' => 'en sentido ascendente',
    'TEXT_ATTRIBUTES_PRICE_WAS' => ' [era: ',
    'TEXT_ATTRIBUTES_QTY_PRICES_HELP' => 'Opción Descuentos al por Mayor',
    'TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP' => 'En la opción Descuentos al por Mayor se aplica un solo cargo',
    'TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK' => 'Descuentos por Cantidad disponibles',
    'TEXT_ATTRIBUTE_IS_FREE' => ' ahora es: Gratis]',
    'TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE' => 'PENDIENTE DE APROBACION',
    'TEXT_AUTHORIZATION_PENDING_CHECKOUT' => 'Comprar No Habilitada - Pendiente de Aprobación',
    'TEXT_AUTHORIZATION_PENDING_PRICE' => 'Precio no disponible',
    'TEXT_BANNER_BOX' => 'Visite Nuestros Patrocinadores ...',
    'TEXT_BANNER_BOX2' => '¡Vea hoy!',
    'TEXT_BANNER_BOX_ALL' => 'Visite a Nuestros Patrocinadores ...',
    'TEXT_BASE_PRICE' => 'Desde: ',
    'TEXT_BEFORE_DOWN_FOR_MAINTENANCE' => 'AVISO: Esta página web no estará operativa por razones de mantenimiento desde las: ',
    'TEXT_BY' => ' por ',
    'TEXT_CALL_FOR_PRICE' => 'Contáctenos para saber el precio',
    'TEXT_CCVAL_ERROR_INVALID_DATE' => 'La fecha de vencimiento de la tarjeta de crédito no es válido. Por favor revise la fecha e inténtelo de nuevo.',
    'TEXT_CCVAL_ERROR_INVALID_NUMBER' => 'El número de la tarjeta de crédito introducido no es válido. Por favor revise el número e inténtelo de nuevo.',
    'TEXT_CCVAL_ERROR_UNKNOWN_CARD' => 'El número de la tarjeta de crédito con los primeros cuatro dígitos %s no es correcto. Si el número sí es correcto, nosotros no aceptamos este tipo de tarjeta de crédito. Si está equivocado, por favor inténtelo de nuevo.',
    'TEXT_CHARGES_LETTERS' => 'Cargo Calculado:',
    'TEXT_CHARGES_WORD' => 'Cargo Calculado:',
    'TEXT_CLICK_TO_ENLARGE' => 'imagen mayor',
    'TEXT_CLOSE_WINDOW' => 'Cerrar Ventana [x]',
    'TEXT_CLOSE_WINDOW_IMAGE' => ' - Pinche Imagen para Cerrar',
    'TEXT_COUPON_GV_RESTRICTION_ZONES' => 'Se aplican restricciones por la Dirección de Envío.',
    'TEXT_COUPON_HELP_DATE' => 'Este cupón es válido entre %s y %s',
    'TEXT_COUPON_HELP_HEADER' => 'El Código del Cupón que ha introducido es para  ',
    'TEXT_COUPON_HELP_MINORDER' => 'Para usar este cupón, es necesario gastar más que %s en productos que cumplen con los requisitos.',
    'TEXT_COUPON_LINK_TITLE' => 'ver las condiciones del Cupón',
    'TEXT_CURRENT_CLOSE_WINDOW' => '[ Cerrar Ventana ]',
    'TEXT_CURRENT_REVIEWS' => 'Reseñas Actuales:',
    'TEXT_DATE_ADDED' => 'Este producto fue introducido en nuestro catálogo el %s.',
    'TEXT_DATE_ADDED_LISTING' => 'Fecha Añadida:',
    'TEXT_DATE_AVAILABLE' => 'Este producto estará disponible el %s.',
    'TEXT_DESCENDINGLY' => 'en sentido descendente',
    'TEXT_DISPLAY_NUMBER_OF_ORDERS' => 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Pedidos)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS' => 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Productos)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL' => 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> products)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS' => 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Productos Destacados)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW' => 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Productos Nuevos)',
    'TEXT_DISPLAY_NUMBER_OF_REVIEWS' => 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Comentarios)',
    'TEXT_DISPLAY_NUMBER_OF_SPECIALS' => 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Ofertas)',
    'TEXT_DOWNLOADS_UNLIMITED' => 'Ilimitado',
    'TEXT_DOWNLOADS_UNLIMITED_COUNT' => '--- *** ---',
    'TEXT_ERROR' => 'Ha ocurrido un error',
    'TEXT_ERROR_OPTION_FOR' => ' En la Opción para: ',
    'TEXT_EZPAGES_STATUS_FOOTER_ADMIN' => 'AVISO: EZ-PAGES PIE - Activado sólo para la IP del Administrador.',
    'TEXT_EZPAGES_STATUS_HEADER_ADMIN' => 'AVISO: EZ-PAGES ENCABEZAMIENTO - Activado sólo para la IP del Administrador.',
    'TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN' => 'AVISO: EZ-PAGES CAJA LATERAL - Activado sólo para la IP del Administrador.',
    'TEXT_FIELD_REQUIRED' => '&nbsp;<span class="alert">*</span>',
    'TEXT_FILESIZE_BYTES' => ' bytes',
    'TEXT_FILESIZE_KBS' => ' KB',
    'TEXT_FILESIZE_MEGS' => ' MB',
    'TEXT_FILESIZE_UNKNOWN' => 'Desconocido',
    'TEXT_FOOTER_DISCOUNT_QUANTITIES' => '* Los descuentos pueden variar en función de las opciones elegidas',
    'TEXT_GV_NAME' => 'Tarjeta Regalo',
    'TEXT_GV_NAMES' => 'Tarjetas Regalo',
    'TEXT_GV_REDEEM' => 'Código de Canje',
    'TEXT_HEADER_DISCOUNTS_OFF' => 'Descuentos por Cantidades no disponibles ...',
    'TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE' => 'Descuento por Cantidad Precio Nuevo',
    'TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF' => 'Descuento por Cantidad',
    'TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE' => 'Descuento por Cantidades',
    'TEXT_INFO_SORT_BY' => 'Ordenar por: ',
    'TEXT_INFO_SORT_BY_PRODUCTS_DATE' => 'Fecha Añadida - Antigua a nueva',
    'TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC' => 'Fecha Añadida - Nueva a antigua',
    'TEXT_INFO_SORT_BY_PRODUCTS_MODEL' => 'Modelo',
    'TEXT_INFO_SORT_BY_PRODUCTS_NAME' => 'Nombre del Producto',
    'TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC' => 'Nombre Producto - desc',
    'TEXT_INFO_SORT_BY_PRODUCTS_PRICE' => 'Precio - bajo a alto',
    'TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC' => 'Precio - alto a bajo',
    'TEXT_INVALID_COUPON_ORDER_LIMIT' => 'Usted ha superado el máximo número de pedidos (%2$u) con lo que se puede utilizar el Cupón "%1$s".',
    'TEXT_INVALID_COUPON_PRODUCT' => 'El Cupón "%1$s" no es válido para ningún producto en el carro.',
    'TEXT_INVALID_FINISHDATE_COUPON' => 'El Cupón "%1$s" no está válido (se caducó %2$s).',
    'TEXT_INVALID_REDEEM_COUPON' => 'Código de Cupón "%s" no es válido',
    'TEXT_INVALID_REDEEM_COUPON_MINIMUM' => 'Tiene que gastar un mínimo de %2$s para canjear Cupón "%1$s".',
    'TEXT_INVALID_SELECTION' => ' Elijó una Opción Inválida: ',
    'TEXT_INVALID_STARTDATE_COUPON' => 'El Cupón "%1$s" no está válido hasta %2$s.',
    'TEXT_INVALID_USER_INPUT' => 'Entrada del Usuario requerida<br>',
    'TEXT_INVALID_USES_COUPON' => 'El Cupón "%1$s" ya ha sido utilizado el máximo número de veces (%2$u).',
    'TEXT_INVALID_USES_USER_COUPON' => 'Usted ha utilizado el Cupón "%1$s" el número máximo de veces permitido por cliente (%2$u).',
    'TEXT_LETTERS_FREE' => ' Letra(s) gratis ',
    'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE' => 'Entrar para ver el precio',
    'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM' => 'Sólo Exposición',
    'TEXT_LOGIN_FOR_PRICE_PRICE' => 'Precio no disponible',
    'TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM' => '',
    'TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE' => 'Entrar a la tienda',
    'TEXT_MANUFACTURER' => 'Fabricante:',
    'TEXT_MAXIMUM_CHARACTERS_ALLOWED' => ' caracteres máximos permitidos',
    'TEXT_MORE_INFORMATION' => 'Para más información, por favor, visite la <a href="%s" rel="noreferrer noopener" target="_blank">web oficial de este producto</a>.',
    'TEXT_NO_ALL_PRODUCTS' => 'En breve añadiremos más productos. Visítenos regularmente para conocer las novedades.',
    'TEXT_NO_CAT_RESTRICTIONS' => 'Este Cupón es válido para todas la Categorías.',
    'TEXT_NO_CAT_TOP_ONLY_DENY' => 'Este cupón tiene restricciones para productos específicos.',
    'TEXT_NO_FEATURED_PRODUCTS' => 'En breve añadiremos más productos.',
    'TEXT_NO_NEW_PRODUCTS' => 'Pronto añadiremos nuevos productos.',
    'TEXT_NO_PROD_RESTRICTIONS' => 'Este Cupón es válido para todos los productos.',
    'TEXT_NO_PROD_SALES' => 'Este cupón no es válido para productos en rebajas.',
    'TEXT_NO_REVIEWS' => 'No hay comentarios actualmente.',
    'TEXT_NUMBER_SYMBOL' => '# ',
    'TEXT_OF_5_STARS' => '',
    'TEXT_ONETIME_CHARGES' => '*cobro único = ',
    'TEXT_ONETIME_CHARGES_EMAIL' => "\t" . '*cobro único = ',
    'TEXT_ONETIME_CHARGE_DESCRIPTION' => ' Es posible que se aplique un cargo adicional a este producto',
    'TEXT_ONETIME_CHARGE_SYMBOL' => ' *',
    'TEXT_OPTION_DIVIDER' => '&nbsp;-&nbsp;',
    'TEXT_OUT_OF_STOCK' => 'Sin Stock',
    'TEXT_PASSWORD_FORGOTTEN' => '¿Olvidó su contraseña?',
    'TEXT_PER_LETTER' => '<br>Precio por letra: ',
    'TEXT_PER_WORD' => '<br>Precio por palabra: ',
    'TEXT_PRICE' => 'Precio:',
    'TEXT_PRIVACY_CONDITIONS_CONFIRM' => 'He leído y acepto la declaración de privacidad.',
    'TEXT_PRIVACY_CONDITIONS_DESCRIPTION' => 'Por favor, acepte nuestra declaración de privacidad marcando la siguiente casilla. Puede leer la declaración de privacidad <a href="' . zen_href_link(FILENAME_PRIVACY) . '"><span class="pseudolink">aquí</span></a>.',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER' => '',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES' => 'Artículos que empiezan por ...',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET' => '-- Resetear --',
    'TEXT_PRODUCTS_MIX_OFF' => '*Mezclado DESHABILITADO',
    'TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART' => '<br>*No puede mezclar las opciones de este producto para cumplir con la cantidad mínima necesaria.*<br>',
    'TEXT_PRODUCTS_MIX_ON' => '*Mezclado HABILITADO',
    'TEXT_PRODUCTS_MIX_ON_SHOPPING_CART' => '*Valores Mezclados de Opciones está HABILITADA<br>',
    'TEXT_PRODUCTS_QUANTITY' => 'En Stock: ',
    'TEXT_PRODUCTS_WEIGHT' => 'Peso: ',
    'TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART' => 'Añadir: ',
    'TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART' => 'Añadir: ',
    'TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART' => 'Añadir: ',
    'TEXT_PRODUCT_MANUFACTURER' => 'Fabricado por: ',
    'TEXT_PRODUCT_MODEL' => 'Modelo: ',
    'TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART' => 'Añadir: ',
    'TEXT_PRODUCT_NOT_FOUND' => 'Lo siento, no se encontró el producto.',
    'TEXT_PRODUCT_OPTIONS' => 'Elija: ',
    'TEXT_PRODUCT_QUANTITY' => ' Unidades en Stock',
    'TEXT_PRODUCT_WEIGHT' => 'Peso del Envío: ',
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' lbs',
    'TEXT_REMOVE_REDEEM_COUPON_ZONE' => 'El Cupón "%s" no es válido para la dirección elegida.',
    'TEXT_RESULT_PAGE' => '',
    'TEXT_REVIEW_BY' => 'por %s',
    'TEXT_REVIEW_DATE_ADDED' => 'Fecha añadida: %s',
    'TEXT_SEARCH_HELP' => 'Las palabras pueden estar separadas por los operadores AND (Y) y/o OR (O) para un mejor control de los resultados de la búsqueda.<br><br>Por ejemplo, Microsoft AND ratón generaría un listado de resultados que contengan ambas palabras. Así, para ratón OR teclado, el listado de resultados contendría ambas o algunas de las palabras.<br><br>Las coincidencias exactas pueden buscarse encerrando las palabras entre comillas dobles.<br><br>Por ejemplo, "ordenadores portátiles" generaría un listado de resultados que coincidan con la frase exacta.<br><br>Los paréntesis pueden usarse para un control más avanzado de los resultados.<br><br>Por ejemplo, Microsoft and (teclado or ratón or "visual basic")</span>.',
    'TEXT_SEARCH_HELP_LINK' => 'Ayuda Búsqueda [?]',
    'TEXT_SEARCH_IN_DESCRIPTION' => 'Buscar en las Descripciones de los Productos',
    'TEXT_SHIPPING_BOXES' => 'Cajas',
    'TEXT_SHIPPING_WEIGHT' => ' lbs',
    'TEXT_SHOWCASE_ONLY' => 'Contáctenos',
    'TEXT_SORT_PRODUCTS' => 'Ordenar productos ',
    'TEXT_TOTAL_AMOUNT' => '&nbsp;&nbsp;Cantidad: ',
    'TEXT_TOTAL_ITEMS' => 'Total de Artículos: ',
    'TEXT_TOTAL_WEIGHT' => '&nbsp;&nbsp;Peso: ',
    'TEXT_UNKNOWN_TAX_RATE' => 'Impuesto de Ventas',
    'TEXT_VALID_COUPON' => '¡Ha añadido un Cupón de Descuento a su pedido!',
    'TEXT_WORDS_FREE' => ' Palabra(s) gratis ',
    'TEXT_YOUR_IP_ADDRESS' => 'Su dirección IP es: ',
    'TYPE_BELOW' => 'Teclee una selección abajo ...',
    'WARNING_COULD_NOT_LOCATE_LANG_FILE' => 'AVISO: No se pudo localizar el archivo del idioma: ',
    'WARNING_NO_FILE_UPLOADED' => 'Advertencia: no se subió el fichero.',
    'WARNING_PRODUCT_QUANTITY_ADJUSTED' => 'La cantidad ha sido ajustada al nivel de stock disponible. ',
    'WARNING_SHOPPING_CART_COMBINED' => 'AVISO: Para su comodidad, en el carro permanecen los productos añadidos en su última visita. Por favor, revise su carro antes de finalizar la sesión.',
];

// Definitions that require references to other definitions
    $define['ATTRIBUTES_QTY_PRICE_SYMBOL'] = zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', $define['TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK'], 10, 10) . '&nbsp;';
    $define['BOX_HEADING_GIFT_VOUCHER'] = $define['TEXT_GV_NAME'] . ' Cuenta';
    $define['BOX_INFORMATION_GV'] = $define['TEXT_GV_NAME'] . ' FAQ';
    $define['ENTRY_EMAIL_PREFERENCE'] = 'Preferencias Boletín y Email';
    if (ACCOUNT_NEWSLETTER_STATUS === '0') {
       $define['ENTRY_EMAIL_PREFERENCE'] = 'Preferencias Email';
    }
    $define['ERROR_NO_INVALID_REDEEM_GV'] = $define['TEXT_GV_NAME'] . ' Invalido' . ' ' . $define['TEXT_GV_REDEEM'];
    $define['ERROR_NO_REDEEM_CODE'] = 'No introdujiste un ' . $define['TEXT_GV_REDEEM'] . '.';
    $define['ERROR_REDEEMED_AMOUNT'] = '!Enhorabuena, ha canjeado ';
    $define['GV_FAQ'] = $define['TEXT_GV_NAME'] . ' FAQ';
    $define['TABLE_HEADING_CREDIT'] = 'Créditos Disponibles';
    $define['TEXT_AVAILABLE_BALANCE'] = 'Su cuenta ' . $define['TEXT_GV_NAME'];
    $define['TEXT_BALANCE_IS'] = 'Su saldo ' . $define['TEXT_GV_NAME'] . ' es: ';
    $define['TEXT_COUPON_GV_RESTRICTION'] = '<p class="smallText">Los Cupones de Descuento no pueden aplicarse para la compra de ' . $define['TEXT_GV_NAMES'] . '. Sólo puede usarse 1 cupón por pedido.</p>';
    $define['TEXT_SEND_OR_SPEND'] = 'Tiene un saldo positivo en su cuenta ' . $define['TEXT_GV_NAME'] . ' cuenta. Puede gastarlo o enviárselo a otro usuario. Para enviarlo, haga un click en el botón abajo.';
    $define['VOUCHER_BALANCE'] = ' Saldo ' . $define['TEXT_GV_NAME'];

return $define;