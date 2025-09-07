<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Cheque/Giro Postal',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Clientes puede enviar su pago por correos. Su email de confirmación del pedido le pedirá que <br><br>Por favor, remita su cheque o giro postal a:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(nombre de la tienda)') . '<br><br>Envie su pago a:<br>' . nl2br(STORE_NAME_ADDRESS). '<br><br>' . 'El pedido no será enviado hasta que el pago sea recibido.',
    'MODULE_PAYMENT_MONEYORDER_REMINDER' => 'Asegúrese de escribir su número de pedido en el frente de su cheque o giro postal.',
];
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Por favor, remita su cheque o giro postal a:' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Envíe su pago por correo a:' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'El pedido no será enviado hasta que el pago sea recibido.';
}

return $define;