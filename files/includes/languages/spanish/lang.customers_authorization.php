<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
$define = [
    'HEADING_TITLE' => 'Autorización de Cuenta Pendiente...',
    'HEADING_TITLE_ACTIVATE' => 'Revisa su correo electrónico  &mdash; Autorización Pendiente',

    'CUSTOMERS_AUTHORIZATION_TEXT_INFORMATION' => 'Su cuenta está siendo revisada para su autorización',
    'CUSTOMERS_AUTHORIZATION_STATUS_TEXT' => 'Para verificar el estado de su autorización... haz clic aquí:',

    'SUCCESS_AUTHORIZED' => 'Su cuenta ya está autorizada para realizar compras. Si tenga abiertas otras ventanas del navegador; se pueden cerrarlas.',

    'TEXT_EXPIRED' => '**caducado**',
    'TEXT_HERE' => 'aquí',          //- Used in the '_RESEND' data's anchor links
    'TEXT_INFORMATION_ACTIVATE' =>  //- %1$s (email address)
       'Hemos enviado un correo electrónico a %1$s con un enlace para activar su cuenta. Haga clic en ese enlace para continuar con la activación de su cuenta.',
    'TEXT_INFORMATION_LINK_ACTIVE' => 'Tiempo de expiración del enlace:',
    'TEXT_INFORMATION_LINK_EXPIRED' => 'El enlace ha expirado.',
    'TEXT_INFORMATION_RESEND' =>    //- %1$s (an anchor link to resend the token), %2$s (a link to the account_edit page)
     '¿No recibió un correo electrónico? Verifique que la dirección de correo electrónico anterior sea correcta. Si es así (o si el enlace ha expirado), haga clic en %1$s para reenviarlo; de lo contrario, haga clic en %2$s para cambiar su dirección de correo electrónico.',
];

global $auth_token_info;
$define['NAVBAR_TITLE'] = (($auth_token_info ?? false) === false) ? $define['HEADING_TITLE'] : $define['HEADING_TITLE_ACTIVATE'];

return $define;
