<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * Language definitions for the paypalr (PayPal Restful Api) payment module.
 *
 * Last updated: v1.3.1
 */
$define = [
    'MODULE_PAYMENT_PAYPALR_TEXT_TITLE' => 'PayPal',
        'MODULE_PAYMENT_PAYPALR_SUBTITLE' => '(use su <b>Cuenta PayPal</b> o una <b>tarjeta de crédito</b>)',
    'MODULE_PAYMENT_PAYPALR_TEXT_TITLE_ADMIN' => 'Pago con PayPal (RESTful)',
    'MODULE_PAYMENT_PAYPALR_TEXT_DESCRIPTION' => '<strong>PayPal</strong>',
    'MODULE_PAYMENT_PAYPALR_TEXT_TYPE' => 'Pago con PayPal',

    // -----
    // Configuration-related errors displayed during the payment module's admin configuration.
    //
    'MODULE_PAYMENT_PAYPALR_ERROR_NO_CURL' => 'CURL no está instalado/no disponible.',
    'MODULE_PAYMENT_PAYPALR_ERROR_CREDS_NEEDED' => 'El módulo de pago <var>paypalr</var> no se puede habilitar hasta que proporcione credenciales válidas para su tienda <b>%s</b>.',
    'MODULE_PAYMENT_PAYPALR_ERROR_INVALID_CREDS' => 'Las credenciales <b>%s</b> del módulo de pago <var>paypalr</var> no son válidas.',
    'MODULE_PAYMENT_PAYPALR_AUTO_DISABLED' => ' El módulo de pago se ha deshabilitado automáticamente.',

    // -----
    // Storefront messages.
    //
    'MODULE_PAYMENT_PALPALR_PAYING_WITH_PAYPAL' => 'Pagando con PayPal',   //- Used by the confirmation method, when paying via PayPal Checkout (paypal)
    'MODULE_PAYMENT_PAYPALR_TEXT_NOTIFICATION_MISSING' => 'No podemos procesar su pago %s en este momento. Por favor, contáctenos para obtener ayuda.', //- %s filled in with MODULE_PAYMENT_PAYPALR_TEXT_TITLE
    'MODULE_PAYMENT_PAYPALR_TEXT_GENERAL_ERROR' => 'No podemos procesar su pago %s en este momento. Contáctanos para obtener ayuda.',//- %s filled in with MODULE_PAYMENT_PAYPALR_TEXT_TITLE
    'MODULE_PAYMENT_PAYPALR_TEXT_STATUS_MISMATCH' => 'No pudimos procesar tu solicitud de pago.',
    'MODULE_PAYMENT_PAYPALR_TEXT_PLEASE_NOTE' => 'Aviso:',
    'MODULE_PAYMENT_PAYPALR_UNSUPPORTED_BILLING_COUNTRY' => 'El país de su dirección de facturación no está aceptada por PayPal; no se pueden realizar pagos con tarjeta de crédito.',
    'MODULE_PAYMENT_PAYPALR_UNSUPPORTED_SHIPPING_COUNTRY' => 'El país de su dirección de envío no está aceptada por PayPal. Este método de pago no se puede utilizar.',

    // -----
    // Storefront text used to compose an 'after_process' customer-visible note in the
    // order's status-history.  Added for v1.0.5.
    //
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_ID' => 'ID Transacción: ',  //- Should end with a space
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_TYPE' => 'Tipo de pago: PayPal Checkout (%s)',  //- %s filled in with either 'paypal' or 'card'
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_PAYMENT_STATUS' => 'Estatus del Pago: ',//- Should end with a space
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_AMOUNT' => 'Importe: ', //- Should end with a space
    // Added for v1.2.0:
    'MODULE_PAYMENT_PAYPALR_BUYER_EMAIL' => 'Email Pagador: ',  //- Should end with a space
    'MODULE_PAYMENT_PAYPALR_FUNDING_SOURCE' => 'Fuente de Fondos: ',  //- Should end with a space

    // -----
    // Used by the payment module's javascript_validation method.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_JS_CC_OWNER' => '* El nombre del titular de la tarjeta debe ser al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n',
    'MODULE_PAYMENT_PAYPALR_TEXT_JS_CC_NUMBER' => '* El número de tarjeta de crédito debe ser al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n',
    'MODULE_PAYMENT_PAYPALR_TEXT_JS_CC_CVV' => '* El número CVV de 3 o 4 dígitos suele estar en la cara trasera de la tarjeta de crédito (o en la cara para American Express).\n',

    // -----
    // Constants used when processing credit-cards
    //
    'MODULE_PAYMENT_PAYPALR_CC_OWNER' => 'Titular:',
    'MODULE_PAYMENT_PAYPALR_CC_TYPE' => 'Tipo de Tarjeta:',
    'MODULE_PAYMENT_PAYPALR_CC_NUMBER' => 'Número:',
    'MODULE_PAYMENT_PAYPALR_CC_EXPIRES' => 'Fecha de Caducidad:',
    'MODULE_PAYMENT_PAYPALR_CC_CVV' => 'Número CVV:',

    'MODULE_PAYMENT_PAYPALR_TEXT_CVV_LENGTH' => 'El <em>número CVV</em> de su tarjeta %1$s que termina en <var>%2$s</var> debe tener %3$u dígitos.',    //- %1$s is the card type, , %2$s is the last-r, %3$u is the CVV length
    'MODULE_PAYMENT_PAYPALR_TEXT_BAD_CARD' => 'Disculpe las molestias, pero el tipo de tarjeta de crédito que ingresó no es uno de los que acepta PayPal. Utilice otra tarjeta de crédito.',

    'MODULE_PAYMENT_PAYPALR_TEXT_CC_ERROR' => 'Se produjo un error al intentar procesar su tarjeta de crédito.',
    'MODULE_PAYMENT_PAYPALR_TEXT_CARD_DECLINED' => 'La tarjeta que termina en <var>%s</var> fue rechazada.', //- %s is the last-4 of the card-number..
    'MODULE_PAYMENT_PAYPALR_TEXT_DECLINED_REASON_UNKNOWN' => 'Si continúa recibiendo este mensaje, comuníquese con nosotros y proporcione el código del error \'%s\'.', //- %s is ['processor_response']['response_code']

    'MODULE_PAYMENT_PAYPALR_TEXT_TRY_AGAIN' => 'Inténtelo de nuevo, seleccione un método de pago alternativo o contáctenos para obtener ayuda.',

    'MODULE_PAYMENT_PAYPALR_CARD_PROCESSING' => 'Al pagar con su tarjeta, usted acepta que sus datos serán procesados por PayPal de acuerdo con los %s disponibles en PayPal.com.', //- %s is filled in with a link
    'MODULE_PAYMENT_PAYPALR_PAYPAL_PRIVACY_STMT' => 'Declaración de Privacidad de PayPal',
    'MODULE_PAYMENT_PAYPALR_PAYPAL_PRIVACY_LINK' => 'https://www.paypal.com/us/legalhub/paypal/privacy-full?country.x=ES&locale.x=es',

    // -----
    // Store owner/admin alert-email messages.
    //
    'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT' => 'AVISO: PayPal Checkout (%s)', //- %s is an additional error descriptor, see below
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_CONFIGURATION' => 'Configuración',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_ORDER_ATTN' => 'El Pedido Precisa Atención',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_UNKNOWN_DENIAL' => 'Motivo de Denegación Desconocido',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_LOST_STOLEN_CARD' => 'Tarjeta Perdida/Robada/Fraudulenta',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_TOTAL_MISMATCH' => 'Desajuste de Cálculo',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_CONFIRMATION_ERROR' => 'Confirmar Método de Pago',

    'MODULE_PAYMENT_PAYPALR_ALERT_ORDER_CREATION' => 'El estado del pedido #%1$u se ha cambiado a &quot;Pendiente&quot; debido de la respuesta de estado de PayPal de \'%2$s\'.',
    'MODULE_PAYMENT_PAYPALR_ALERT_MISSING_OBSERVER' => 'El observer del módulo de pago (auto.paypalrestful.php) no se ha cargado; el módulo de pago ha sido deshabilitado.',
    'MODULE_PAYMENT_PAYPALR_ALERT_MISSING_NOTIFICATIONS' => 'La class order_total.php no tiene la actualización necesario ; el módulo de pago no puede realizar pedidos.',
    'MODULE_PAYMENT_PAYPALR_ALERT_MISSING_ROOT_FILES' => 'Faltan archivos requeridos del directorio raíz (%s); verifique los permisos de los archivos.',
    'MODULE_PAYMENT_PAYPALR_ALERT_ORDER_CREATE' => 'PayPal devolvió un error al intentar iniciar un pedido. Como cortesía, solo se mostró el código de error a su cliente. Los detalles del error se muestran a continuación.' . "\n\n",
    'MODULE_PAYMENT_PAYPALR_ALERT_TOTAL_MISMATCH' => 'Se encontró una discrepancia entre el valor total de un pedido y su desglose. El pedido se está enviando a PayPal sin los detalles de los artículos ni desglose de costes:',
    'MODULE_PAYMENT_PAYPALR_ALERT_CONFIRMATION_ERROR' => 'Se recibió una respuesta de no procesable de PayPal al intentar confirmar la opción de pago de un cliente desde su cuenta PayPal.',
    'MODULE_PAYMENT_PAYPALR_ALERT_EXTERNAL_TXNS' => 'Verificar el estado del pedido n.° %u. Se añadieron transacciones de PayPal fuera del procesamiento del módulo de pago.',

    // -----
    // Alert messages for unknown "DECLINED" reasons and lost/stolen/fraudulent cards.
    // -----

    // -----
    // %1$s: ['processor_response']['response_code']
    // %2$s: $_SESSION['customer_first_name']
    // %3$s: $_SESSION['customer_last_name']
    // $4%u: $_SESSION['customer_id']
    //
    'MODULE_PAYMENT_PAYPALR_ALERT_UNKNOWN_DENIAL' =>
        'PayPal devolvió un código de respuesta desconocido (%1$s) para un pago con tarjeta de crédito denegado.' . "\n\n" .
        'El pago fue intentado por %2$s %3$s (ID de cliente %4$u). A continuación, se muestran los detalles formateados de la tarjeta:' . "\n\n",

    // -----
    // %1$s: One of the two language constants that follow.
    // %2$s: $_SESSION['customers_ip_address']
    // %3$s: $_SESSION['customer_first_name']
    // %4$s: $_SESSION['customer_last_name']
    // $5%u: $_SESSION['customer_id']
    //
    'MODULE_PAYMENT_PAYPALR_ALERT_LOST_STOLEN_CARD' =>
        'Se intentó un pago con tarjeta de crédito con una tarjeta %1$s desde la dirección IP %2$s.' . "\n\n" .
        'El pago fue intentado por %3$s %4$s (ID de cliente %5$u). A continuación, se muestran los detalles formateados de la tarjeta:' . "\n\n",
    'MODULE_PAYMENT_PAYPALR_CARD_LOST' => 'perdida o robada',
    'MODULE_PAYMENT_PAYPALR_CARD_FRAUDULENT' => 'fraudulenta',

    // -----
    // For these messages, %1$s is the card-type and %2$s is the last-4 of the card-number.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_CC_EXPIRED' => 'La tarjeta %1$s que termina en <var>%2$s</var> ha caducado.',
    'MODULE_PAYMENT_PAYPALR_TEXT_INSUFFICIENT_FUNDS' => 'La tarjeta %1$s que termina en <var>%2$s</var> no tiene fondos suficientes.',
    'MODULE_PAYMENT_PAYPALR_TEXT_CVV_FAILED' => 'El &quot;Número CVV&quot; que ingresó para la tarjeta %1$s que termina en <var>%2$s</var> no es correcto.',

    // -----
    // $1$s ... MODULE_PAYMENT_PAYPALR_TEXT_TITLE
    // $2%s ... The error-code returned by PayPal.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_CREATE_ORDER_ISSUE' => 'No podemos procesar su pago %1$s en este momento. Por favor, contáctenos para obtener ayuda, proporcionándonos este código: <b>%2$s</b>.',

    // -----
    // Buttons on checkout_payment page; see https://www.paypal.com/bm/webapps/mpp/logo-center for additional information.
    //
    'MODULE_PAYMENT_PAYPALR_BUTTON_ALTTEXT' => 'Haga clic aquí para pagar con su cuenta PayPal',
    'MODULE_PAYMENT_PAYPALR_BUTTON_COLOR' => 'YELLOW',   //- One of WHITE, YELLOW, GREY or BLUE; defaults to YELLOW.
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_YELLOW' => 'https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/44_Yellow_PayPal_Pill_Button.png',
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_GREY' => 'https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/44_Grey_PayPal_Pill_Button.png',
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_BLUE' => 'https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/44_Blue_PayPal_Pill_Button.png',
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_WHITE' => 'https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-150px.png',

    'MODULE_PAYMENT_PAYPALR_CHOOSE_PAYPAL' => 'PayPal:',
    'MODULE_PAYMENT_PALPALR_CHOOSE_CARD' => 'Tarjeta de Crédito:',
    'MODULE_PAYMENT_PAYPALR_LOGO_SVG' => "data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAxcHgiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAxMDEgMzIiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaW5ZTWluIG1lZXQiIHhtbG5zPSJodHRwOiYjeDJGOyYjeDJGO3d3dy53My5vcmcmI3gyRjsyMDAwJiN4MkY7c3ZnIj48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDEyLjIzNyAyLjggTCA0LjQzNyAyLjggQyAzLjkzNyAyLjggMy40MzcgMy4yIDMuMzM3IDMuNyBMIDAuMjM3IDIzLjcgQyAwLjEzNyAyNC4xIDAuNDM3IDI0LjQgMC44MzcgMjQuNCBMIDQuNTM3IDI0LjQgQyA1LjAzNyAyNC40IDUuNTM3IDI0IDUuNjM3IDIzLjUgTCA2LjQzNyAxOC4xIEMgNi41MzcgMTcuNiA2LjkzNyAxNy4yIDcuNTM3IDE3LjIgTCAxMC4wMzcgMTcuMiBDIDE1LjEzNyAxNy4yIDE4LjEzNyAxNC43IDE4LjkzNyA5LjggQyAxOS4yMzcgNy43IDE4LjkzNyA2IDE3LjkzNyA0LjggQyAxNi44MzcgMy41IDE0LjgzNyAyLjggMTIuMjM3IDIuOCBaIE0gMTMuMTM3IDEwLjEgQyAxMi43MzcgMTIuOSAxMC41MzcgMTIuOSA4LjUzNyAxMi45IEwgNy4zMzcgMTIuOSBMIDguMTM3IDcuNyBDIDguMTM3IDcuNCA4LjQzNyA3LjIgOC43MzcgNy4yIEwgOS4yMzcgNy4yIEMgMTAuNjM3IDcuMiAxMS45MzcgNy4yIDEyLjYzNyA4IEMgMTMuMTM3IDguNCAxMy4zMzcgOS4xIDEzLjEzNyAxMC4xIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDM1LjQzNyAxMCBMIDMxLjczNyAxMCBDIDMxLjQzNyAxMCAzMS4xMzcgMTAuMiAzMS4xMzcgMTAuNSBMIDMwLjkzNyAxMS41IEwgMzAuNjM3IDExLjEgQyAyOS44MzcgOS45IDI4LjAzNyA5LjUgMjYuMjM3IDkuNSBDIDIyLjEzNyA5LjUgMTguNjM3IDEyLjYgMTcuOTM3IDE3IEMgMTcuNTM3IDE5LjIgMTguMDM3IDIxLjMgMTkuMzM3IDIyLjcgQyAyMC40MzcgMjQgMjIuMTM3IDI0LjYgMjQuMDM3IDI0LjYgQyAyNy4zMzcgMjQuNiAyOS4yMzcgMjIuNSAyOS4yMzcgMjIuNSBMIDI5LjAzNyAyMy41IEMgMjguOTM3IDIzLjkgMjkuMjM3IDI0LjMgMjkuNjM3IDI0LjMgTCAzMy4wMzcgMjQuMyBDIDMzLjUzNyAyNC4zIDM0LjAzNyAyMy45IDM0LjEzNyAyMy40IEwgMzYuMTM3IDEwLjYgQyAzNi4yMzcgMTAuNCAzNS44MzcgMTAgMzUuNDM3IDEwIFogTSAzMC4zMzcgMTcuMiBDIDI5LjkzNyAxOS4zIDI4LjMzNyAyMC44IDI2LjEzNyAyMC44IEMgMjUuMDM3IDIwLjggMjQuMjM3IDIwLjUgMjMuNjM3IDE5LjggQyAyMy4wMzcgMTkuMSAyMi44MzcgMTguMiAyMy4wMzcgMTcuMiBDIDIzLjMzNyAxNS4xIDI1LjEzNyAxMy42IDI3LjIzNyAxMy42IEMgMjguMzM3IDEzLjYgMjkuMTM3IDE0IDI5LjczNyAxNC42IEMgMzAuMjM3IDE1LjMgMzAuNDM3IDE2LjIgMzAuMzM3IDE3LjIgWiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik0gNTUuMzM3IDEwIEwgNTEuNjM3IDEwIEMgNTEuMjM3IDEwIDUwLjkzNyAxMC4yIDUwLjczNyAxMC41IEwgNDUuNTM3IDE4LjEgTCA0My4zMzcgMTAuOCBDIDQzLjIzNyAxMC4zIDQyLjczNyAxMCA0Mi4zMzcgMTAgTCAzOC42MzcgMTAgQyAzOC4yMzcgMTAgMzcuODM3IDEwLjQgMzguMDM3IDEwLjkgTCA0Mi4xMzcgMjMgTCAzOC4yMzcgMjguNCBDIDM3LjkzNyAyOC44IDM4LjIzNyAyOS40IDM4LjczNyAyOS40IEwgNDIuNDM3IDI5LjQgQyA0Mi44MzcgMjkuNCA0My4xMzcgMjkuMiA0My4zMzcgMjguOSBMIDU1LjgzNyAxMC45IEMgNTYuMTM3IDEwLjYgNTUuODM3IDEwIDU1LjMzNyAxMCBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA2Ny43MzcgMi44IEwgNTkuOTM3IDIuOCBDIDU5LjQzNyAyLjggNTguOTM3IDMuMiA1OC44MzcgMy43IEwgNTUuNzM3IDIzLjYgQyA1NS42MzcgMjQgNTUuOTM3IDI0LjMgNTYuMzM3IDI0LjMgTCA2MC4zMzcgMjQuMyBDIDYwLjczNyAyNC4zIDYxLjAzNyAyNCA2MS4wMzcgMjMuNyBMIDYxLjkzNyAxOCBDIDYyLjAzNyAxNy41IDYyLjQzNyAxNy4xIDYzLjAzNyAxNy4xIEwgNjUuNTM3IDE3LjEgQyA3MC42MzcgMTcuMSA3My42MzcgMTQuNiA3NC40MzcgOS43IEMgNzQuNzM3IDcuNiA3NC40MzcgNS45IDczLjQzNyA0LjcgQyA3Mi4yMzcgMy41IDcwLjMzNyAyLjggNjcuNzM3IDIuOCBaIE0gNjguNjM3IDEwLjEgQyA2OC4yMzcgMTIuOSA2Ni4wMzcgMTIuOSA2NC4wMzcgMTIuOSBMIDYyLjgzNyAxMi45IEwgNjMuNjM3IDcuNyBDIDYzLjYzNyA3LjQgNjMuOTM3IDcuMiA2NC4yMzcgNy4yIEwgNjQuNzM3IDcuMiBDIDY2LjEzNyA3LjIgNjcuNDM3IDcuMiA2OC4xMzcgOCBDIDY4LjYzNyA4LjQgNjguNzM3IDkuMSA2OC42MzcgMTAuMSBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA5MC45MzcgMTAgTCA4Ny4yMzcgMTAgQyA4Ni45MzcgMTAgODYuNjM3IDEwLjIgODYuNjM3IDEwLjUgTCA4Ni40MzcgMTEuNSBMIDg2LjEzNyAxMS4xIEMgODUuMzM3IDkuOSA4My41MzcgOS41IDgxLjczNyA5LjUgQyA3Ny42MzcgOS41IDc0LjEzNyAxMi42IDczLjQzNyAxNyBDIDczLjAzNyAxOS4yIDczLjUzNyAyMS4zIDc0LjgzNyAyMi43IEMgNzUuOTM3IDI0IDc3LjYzNyAyNC42IDc5LjUzNyAyNC42IEMgODIuODM3IDI0LjYgODQuNzM3IDIyLjUgODQuNzM3IDIyLjUgTCA4NC41MzcgMjMuNSBDIDg0LjQzNyAyMy45IDg0LjczNyAyNC4zIDg1LjEzNyAyNC4zIEwgODguNTM3IDI0LjMgQyA4OS4wMzcgMjQuMyA4OS41MzcgMjMuOSA4OS42MzcgMjMuNCBMIDkxLjYzNyAxMC42IEMgOTEuNjM3IDEwLjQgOTEuMzM3IDEwIDkwLjkzNyAxMCBaIE0gODUuNzM3IDE3LjIgQyA4NS4zMzcgMTkuMyA4My43MzcgMjAuOCA4MS41MzcgMjAuOCBDIDgwLjQzNyAyMC44IDc5LjYzNyAyMC41IDc5LjAzNyAxOS44IEMgNzguNDM3IDE5LjEgNzguMjM3IDE4LjIgNzguNDM3IDE3LjIgQyA3OC43MzcgMTUuMSA4MC41MzcgMTMuNiA4Mi42MzcgMTMuNiBDIDgzLjczNyAxMy42IDg0LjUzNyAxNCA4NS4xMzcgMTQuNiBDIDg1LjczNyAxNS4zIDg1LjkzNyAxNi4yIDg1LjczNyAxNy4yIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDA5Y2RlIiBkPSJNIDk1LjMzNyAzLjMgTCA5Mi4xMzcgMjMuNiBDIDkyLjAzNyAyNCA5Mi4zMzcgMjQuMyA5Mi43MzcgMjQuMyBMIDk1LjkzNyAyNC4zIEMgOTYuNDM3IDI0LjMgOTYuOTM3IDIzLjkgOTcuMDM3IDIzLjQgTCAxMDAuMjM3IDMuNSBDIDEwMC4zMzcgMy4xIDEwMC4wMzcgMi44IDk5LjYzNyAyLjggTCA5Ni4wMzcgMi44IEMgOTUuNjM3IDIuOCA5NS40MzcgMyA5NS4zMzcgMy4zIFoiPjwvcGF0aD48L3N2Zz4",

    // -----
    // Admin messages, from an order's display, viewing the PayPal transaction history.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_GETDETAILS_ERROR' => 'Hubo un problema al recuperar los detalles de la transacción de PayPal.',
    'MODULE_PAYMENT_PAYPALR_NO_RECORDS' => 'No se encontraron registros \'%1$s\' en la base de datos para el pedido #%2$u.',
    'MODULE_PAYMENT_PAYPALR_EXTERNAL_ADDITION' => 'Las transacciones de PayPal se añadieron fuera del procesamiento del módulo de pago. ¡Verifique que el estado del pedido sea correcto!',

    // -----
    // Used during the admin's display of the payment transactions on an
    // order's detailed view.
    //
    'MODULE_PAYMENT_PAYPALR_NO_RECORDS_FOUND' => 'No hay transacciones de PayPal registradas en la base de datos para este pedido.',

    'MODULE_PAYMENT_PAYPALR_TXN_TABLE_CAPTION' => 'Transacciones de PayPal',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_TABLE_CAPTION' => 'Pagos Liquidados',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_TABLE_NOTE' => '¡Aviso: PayPal revierte las comisiones por reembolsos!',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_NONE' => 'No hay pagos liquidados actualmente.',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_TOTAL' => 'Totales Liquidados:',
    'MODULE_PAYMENT_PAYPALR_NAME_EMAIL_ID' => 'Nombre del Pagador / Email / ID del Pagador',
    'MODULE_PAYMENT_PAYPALR_PAYER_ID' => 'ID del Pagador:',
    'MODULE_PAYMENT_PAYPALR_PAYER_STATUS' => 'Estado del Pagador:',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_TYPE' => 'Tipo de Pago:',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_STATUS' => 'Estado del Pago:',
    'MODULE_PAYMENT_PAYPALR_PENDING_REASON' => 'Motivo de la Pendiente:',
    'MODULE_PAYMENT_PAYPALR_INVOICE' => 'Factura PayPal:',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_DATE' => 'Fecha de Pago:',
    'MODULE_PAYMENT_PAYPALR_GROSS_AMOUNT' => 'Importe Bruto:',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_FEE' => 'Comisión de Pago:',
    'MODULE_PAYMENT_PAYPALR_SETTLE_AMOUNT' => 'Importe Liquidado:',
    'MODULE_PAYMENT_PAYPALR_EXCHANGE_RATE' => 'Tipo de Cambio:',

    'MODULE_PAYMENT_PAYPALR_TXN_TYPE' => 'Tipo Txn:',
    'MODULE_PAYMENT_PAYPALR_TXN_ID' => 'ID Txn:',
    'MODULE_PAYMENT_PAYPALR_TXN_PARENT_TXN_ID' => 'Txn ID Pariente/ Txn ID:',
    'MODULE_PAYMENT_PAYPALR_ACTION' => 'Acción',
        'MODULE_PAYMENT_PAYPALR_ACTION_DETAILS' => 'Detalles',
        'MODULE_PAYMENT_PAYPALR_ACTION_REAUTH' => 'Reautorizar',
        'MODULE_PAYMENT_PAYPALR_ACTION_VOID' => 'Anular',
        'MODULE_PAYMENT_PAYPALR_ACTION_CAPTURE' => 'Capturar',
        'MODULE_PAYMENT_PAYPALR_ACTION_REFUND' => 'Reembolso',
    'MODULE_PAYMENT_PAYPALR_TXN_STATUS' => 'Txn Estado',

    'MODULE_PAYMENT_PAYPALR_CONFIRM' => 'Confirmar',
    'MODULE_PAYMENT_PAYPALR_DAYSTOSETTLE' => 'Días para liquidar:',
    'MODULE_PAYMENT_PAYPALR_AMOUNT' => 'Importe:',
    'MODULE_PAYMENT_PAYPALR_CUSTOMER_NOTE' => 'Nota del Cliente:',
    'MODULE_PAYMENT_PAYPALR_DATE_CREATED' => 'Fecha de Creación:',
    'MODULE_PAYMENT_PAYPALR_AMOUNT_RANGE' => 'Ingrese un importe entre %1$s 1.00 y %1$s %2$s.',
    'MODULE_PAYMENT_PAYPALR_NOTES' => 'Notas:',

    // -----
    // Constants used in the "Details" modal.
    //
    'MODULE_PAYMENT_PAYPALR_DETAILS_TITLE' => 'Detalles de la Transacción de PayPal (%s)',//- %s is one of the following two strings
        'MODULE_PAYMENT_PAYPALR_DETAILS_TYPE_PAYPAL' => 'PayPal',
        'MODULE_PAYMENT_PAYPALR_DETAILS_TYPE_CARD' => 'Tarjeta de Crédito',
    'MODULE_PAYMENT_PAYPALR_BUYER_INFO' => 'Datos del Comprador',
    'MODULE_PAYMENT_PAYPALR_PAYER_NAME' => 'Nombre del Pagador:',
    'MODULE_PAYMENT_PAYPALR_PAYER_EMAIL' => 'Email del Pagador:',
    'MODULE_PAYMENT_PAYPALR_BUSINESS_NAME' => 'Nombre Empresa:',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_NAME' => 'Nombre del destino:',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_STREET' => 'Calle:',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_CITY' => 'Ciudad:',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_STATE' => 'Provincia:',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_ZIP' => 'Código Postal:',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_COUNTRY' => 'País:',
    'MODULE_PAYMENT_PAYPALR_SELLER_INFO' => 'Datos del Vendedor',
    'MODULE_PAYMENT_PAYPALR_CART_ITEMS' => 'Artículos del Carro:',
    'MODULE_PAYMENT_PAYPALR_MERCHANT_NAME' => 'Nombre del Vendedor:',
    'MODULE_PAYMENT_PAYPALR_MERCHANT_EMAIL' => 'Email del Vendedor:',
    'MODULE_PAYMENT_PAYPALR_MERCHANT_ID' => 'Merchant ID:',
    'MODULE_PAYMENT_PAYPALR_SELLER_PROTECTION' => 'Protección del Vendedor:',
    'MODULE_PAYMENT_PAYPALR_PROCESSOR_RESPONSE' => 'Respuesta del Procesador:',
        'MODULE_PAYMENT_PAYPALR_AVS_CODE' => 'Código AVS (%s)',
        'MODULE_PAYMENT_PAYPALR_RESPONSE_CODE' => 'Código de Respuesta (%s)',
        'MODULE_PAYMENT_PAYPALR_CVV_CODE' => 'Código CVV (%s)',
    'MODULE_PAYMENT_PAYPALR_AUTH_RESULT' => 'Resultado de la Autenticación:',
        'MODULE_PAYMENT_PAYPALR_LIABILITY' => 'Cambio de Responsabilidad (%s)',
        'MODULE_PAYMENT_PAYPALR_AUTH_STATUS' => 'Estado de Autenticación (%s)',
        'MODULE_PAYMENT_PAYPALR_ENROLL_STATUS' => 'Estado de Inscripción (%s)',
    'MODULE_PAYMENT_PAYPALR_AMOUNT_MISMATCH' => 'Desajuste del importe del pedido: %s', //- %s is the base order-calculation amount/currency-code
    'MODULE_PAYMENT_PAYPALR_CALCULATED_AMOUNT' => 'Importe Calculado:',
    'MODULE_PAYMENT_PAYPALR_INVOICE_NUMBER' => 'Factura PayPal#:',

    // -----
    // Constants used in the "Refunds" modal.
    //
    'MODULE_PAYMENT_PAYPALR_REFUND_TITLE' => 'Reembolsar un Pago',
    'MODULE_PAYMENT_PAYPALR_REFUND_INSTRUCTIONS' => 'Puede reembolsar la totalidad o parte de un pago capturado.',
        'MODULE_PAYMENT_PAYPALR_REFUND_NOTE1' => 'Un reembolso <em>completo</em> devuelve el saldo restante no reembolsado del pago capturado.',
        'MODULE_PAYMENT_PAYPALR_REFUND_NOTE2' => 'Un reembolso <em>parcial</em> reembolsa una parte del pago capturado.',
        'MODULE_PAYMENT_PAYPALR_REFUND_NOTE3' => 'Puede emitir varios reembolsos </em>parciales</em>, hasta el saldo restante no reembolsado.',
    'MODULE_PAYMENT_PAYPALR_REFUND_CAPTURE_ID' => 'Capture Txn Id:',
    'MODULE_PAYMENT_PAYPALR_REMAINING_TO_REFUND' => 'Restante por Reembolsar:',
    'MODULE_PAYMENT_PAYPALR_REFUND_AMOUNT' => 'Importe a Reembolsar:',
    'MODULE_PAYMENT_PAYPALR_REFUND_FULL' => '¿Reembolso Completo?',
    'MODULE_PAYMENT_PAYPALR_REFUND_DEFAULT_MESSAGE' => 'Reembolsado por el administrador de la tienda.',

    'MODULE_PAYMENT_PAYPALR_REFUND_PARAM_ERROR' => 'Se proporcionaron parámetros no válidos (CP %u) al intentar reembolsar el pago de este pedido. Inténtalo de nuevo.',
    'MODULE_PAYMENT_PAYPALR_REFUND_ERROR' => 'Hubo un problema al reembolsar la transacción.',

    'MODULE_PAYMENT_PAYPALR_REFUND_COMPLETE' => 'Se ha completado un reembolso por un importe de %s.',

    // -----
    // Constants used in the "Re-Authorize" modal.
    //
    'MODULE_PAYMENT_PAYPALR_REAUTH_TITLE' => 'Reautorizar un Pedido',
    'MODULE_PAYMENT_PAYPALR_REAUTH_INSTRUCTIONS' => 'Para garantizar que los fondos sigan disponibles, puede reautorizar un pago después de que expire su periodo de autorización inicial de tres días.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE1' => 'Dentro del periodo de autorización de 29 días, puede emitir múltiples reautorizaciones después de que expire el periodo de autorización de 3 días para la autorización emitida anteriormente.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE2' => 'Si han transcurrido 30 días desde la fecha de la autorización original, debe crear un pago autorizado en lugar de reautorizar el original.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE3' => 'Un pago reautorizado tiene un nuevo periodo de honor de tres días.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE4' => 'Puede reautorizar un pago autorizado <em>una sola vez</em> por hasta el 115% del importe original autorizado (%s), sin exceder un aumento de $75 USD.',

    'MODULE_PAYMENT_PAYPALR_REAUTH_ORIGINAL' => 'Importe Original:',
    'MODULE_PAYMENT_PAYPALR_REAUTH_NEW_AMOUNT' => 'Importe autorizado:',
    'MODULE_PAYMENT_PAYPALR_REAUTH_DAYS_FROM_LAST' => 'Días desde la última autorización:',
    'MODULE_PAYMENT_PAYPALR_REAUTH_NOT_POSSIBLE' => 'El pedido no se puede reautorizar. Debido a que hay un período de honor activo.',

    'MODULE_PAYMENT_PAYPALR_REAUTH_PARAM_ERROR' => 'Se proporcionaron parámetros no válidos (CP %u) al intentar reautorizar este pedido; inténtelo de nuevo.',
    'MODULE_PAYMENT_PAYPALR_REAUTH_ERROR' => 'Hubo un problema al autorizar la transacción.',
    'MODULE_PAYMENT_PAYPALR_REAUTH_TOO_SOON' => 'Solo se permite una reautorización del día 4 al día 29 desde la fecha de la autorización original.',

    'MODULE_PAYMENT_PAYPALR_REAUTH_COMPLETE' => 'Se completó una reautorización por un importe de %s.',

    // -----
    // Constants used in the "Capture" modal.
    //
    'MODULE_PAYMENT_PAYPALR_CAPTURE_TITLE' => 'Capturar una Autorización',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_INSTRUCTIONS' => 'Para capturar la totalidad o parte de los fondos pendientes de este pedido, ingrese el &quot;Monto&quot; a continuación, indique si esta es la captura <b>final</b> del pedido y haga clic en el botón &quot;Capturar&quot; botón.',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_FINAL_TEXT' => '¿Captura Final?',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_REMAINING' => '¿Capturar los fondos restantes?',
    'MODULE_PAYMENT_PAYPALR_CAPTURED_SO_FAR' => 'Capturado Previamente:',
    'MODULE_PAYMENT_PAYPALR_REMAINING_TO_CAPTURE' => 'Saldo por Capturar:',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_DEFAULT_MESSAGE' => 'Gracias por su pedido.',

    'MODULE_PAYMENT_PAYPALR_CAPTURE_PARAM_ERROR' => 'Se proporcionaron parámetros no válidos (CP %u) al intentar capturar los fondos para este pedido; Inténtalo de nuevo.',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_ERROR' => 'Hubo un problema al capturar la transacción.',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_AMOUNT' => 'El importe capturado debe ser mayor que cero, a menos que esté capturando los fondos restantes.',

    'MODULE_PAYMENT_PAYPALR_CAPTURE_NO_REMAINING' => 'Todos los fondos autorizados para este pedido se han capturado correctamente.',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_COMPLETE' => 'El pago del pedido n.° %u se ha capturado.',
    'MODULE_PAYMENT_PAYPALR_PARTIAL_CAPTURE' => 'Capturada parcialmente.',
    'MODULE_PAYMENT_PAYPALR_FINAL_CAPTURE' => 'Captura final.',

    // -----
    // Constants used in the "Void" modal.
    //
    'MODULE_PAYMENT_PAYPALR_VOID_TITLE' => 'Anular una Autorización',
    'MODULE_PAYMENT_PAYPALR_VOID_INSTRUCTIONS' => 'Para anular esta transacción, ingrese/copie el &quot;ID de autorización&quot; en el campo de entrada a continuación y haga clic en el botón &quot;Anular&quot;.',
    'MODULE_PAYMENT_PAYPALR_VOID_AUTH_ID' => 'ID de Autorización:',
    'MODULE_PAYMENT_PAYPALR_VOID_DEFAULT_MESSAGE' => 'Transacción anulada',

    'MODULE_PAYMENT_PAYPALR_VOID_PARAM_ERROR' => 'Se proporcionaron parámetros no válidos al intentar anular una autorización para este pedido; inténtelo de nuevo',
    'MODULE_PAYMENT_PAYPALR_VOID_BAD_AUTH_ID' => 'Solo se puede anular la autorización <em>principal</em> de un pedido; inténtalo de nuevo.',
    'MODULE_PAYMENT_PAYPALR_VOID_ERROR' => 'Hubo un problema al anular la transacción.',
    'MODULE_PAYMENT_PAYPALR_VOID_MEMO' => 'Transacción anulada por %1$s.',
    'MODULE_PAYMENT_PAYPALR_VOID_INVALID_TXN_ID' => 'No se encontró el ID de transacción que ingresaste (%1$s); inténtalo de nuevo.',
    'MODULE_PAYMENT_PAYPALR_VOID_COMPLETE' => 'La autorización de pago del pedido n.° %u ha sido anulada.',
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPALR_TEXT_ADMIN_DESCRIPTION'] =
        '<b>PayPal Checkout (RESTful)</b>, v%s<br><br>' .   //- %s is filled in with the current module version
        '<a href="https://www.paypal.com/login" rel="noopener noreferrer" target="_blank">Administra tu cuenta de PayPal <b>empresa</b></a><br><br>' .
        '<b>Configuración:</b><br>' .
        '<ol>
            <li><a href="https://github.com/lat9/paypalr/wiki/Creating-PayPal-Credentials" rel="noopener noreferrer" target="_blank">Crea tus credenciales de PayPal.</a></li>
            <li><a href="https://github.com/lat9/paypalr/wiki/Configuring-the-Payment-Module" rel="noopener noreferrer" target="_blank">Configura las opciones adicionales del módulo.</a></li>
         </ol>' .
        '<p>Consulta <a href="https://github.com/lat9/paypalr/wiki" rel="noopener noreferrer" target="_blank">el Wiki de GitHub del módulo de pago</a> para obtener información adicional.</p>';
}

return $define;
