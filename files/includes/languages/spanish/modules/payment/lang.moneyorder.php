<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Cheque/Giro Postal',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Clientes puede enviar su pago por correos. Su email de confirmación del pedido le pedirá que:<br><br>Por favor, remita su cheque o giro postal a nombre de:<br><br>' . zen_config('MODULE_PAYMENT_MONEYORDER_PAYTO', '(nombre de la tienda)') . '<br><br>Envie su pago a:<br>' . nl2br(zen_config('STORE_NAME_ADDRESS'), false). '<br><br>' . 'El pedido no será enviado hasta que el pago sea recibido.',
    'MODULE_PAYMENT_MONEYORDER_REMINDER' => 'Asegúrese de escribir su número de pedido en el frente de su cheque o giro postal.',
    'MODULE_PAYMENT_MONEYORDER_TEXT_MISSING_INFO' => '(no configurado - precisa datos de la cuenta del destinatario)',
    'MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER' => 'Por favor, haga su cheque o giro postal a nombre de::' . "\n\n" . zen_config('MODULE_PAYMENT_MONEYORDER_PAYTO', '') . "\n\n" . 'Envie su pago a:' . "\n" . zen_config('STORE_NAME_ADDRESS') . "\n\n" . 'El pedido no será enviado hasta que el pago sea recibido.',
];
return $define;