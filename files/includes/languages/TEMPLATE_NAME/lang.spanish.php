<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// overrides for date format, currency, weight

declare(strict_types=1);
// -----
// Since the languages are now loaded via classes, the $locales definition
// needs to be globalized for use in payment-methods (e.g. paypalwpp) and
// other processing.
//

$define_locales = [
    'DATE_FORMAT' => 'd/m/Y',
    'DATE_TIME_FORMAT_WITHOUT_SECONDS' => '%d/%m/%Y %H:%M',
    'DOB_FORMAT_STRING' => 'dd/mm/yyyy',
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'La fecha de nacimiento debe tener el formato:DD/MM/YYYY (ej. 21/05/1970)',
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (ej. 21/05/1970)',
];

$define = [
    'FOOTER_TEXT_BODY' => 'Todos los Derechos Reservados &copy; 2003-' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_OWNER . '</a>',
    'TEXT_PRIVACY_CONDITIONS_CONFIRM' => 'Doy mi consentimiento para que ' . STORE_NAME . ' guarde y utilice mis datos personales y confirmo que he leído y acepto la <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">Política de Privacidad</span></a>.', //steve
    'TEXT_PRIVACY_CONDITIONS_DESCRIPTION' => 'Los datos que aparecen en este formulario se usan solamente para gestionar su pedido. ' . STORE_NAME . ' no traslada datos a terceros. Puede leer nuestra Política de Privacidad <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aquí</span></a>.',
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' kg',
    'TEXT_SHIPPING_WEIGHT' => ' kg',
];

return array_merge($define, $define_locales);
