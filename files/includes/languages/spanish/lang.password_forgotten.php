<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack

// change this to match your store's theme colour
// You can define this in your /includes/extra_datafiles/site_specific_overrides.php file to avoid editing this file directly.
$password_reset_email_button_colour ??= '#00BCE4'; 

// Simple sanitization
$password_reset_email_button_colour = htmlspecialchars(substr($password_reset_email_button_colour, 0, 32), ENT_QUOTES);

$define = [
    'NAVBAR_TITLE_1' => 'Entrar',
    'NAVBAR_TITLE_2' => 'Contraseña Olvidada',
    'HEADING_TITLE' => 'Contraseña Olvidada',

    'TEXT_MAIN' => 'Introduzca su e-mail y le enviaremos un mensaje como restablecer su contraseña.',

    'EMAIL_PASSWORD_RESET_SUBJECT' => STORE_NAME . ' - Restablecer Contraseña',

    'EMAIL_PASSWORD_RESET_BODY' =>
        "Hola,\n\n" .
        "Existe una solicitud de una nueva contraseña para tu cuenta en \"%2\$s\".\n\n" .
        "Para restablecer una contraseña nueva, visite el enlace siguiente:\n\n" .
        "%3\$s\n\n" .
        "Este enlace es solo para restablecer la contraseña. Si no lo solicitó, puede ignorar este correo electrónico y su contraseña no se cambiará.\n\n" .
        "Para su información, esta solicitud se realizó desde la dirección IP: %1\$s\n\n" .
        "Un Saludo,\n" .
        STORE_NAME . "\n",

    'EMAIL_PASSWORD_RESET_HTML' =>
        '<p>Hola,</p>' .
        '<p>Existe una solicitud de una nueva contraseña para tu cuenta en "%2$s".</p>' .
        '<p>Para restablecer una contraseña nueva, visite el enlace siguiente:</p>' .
        '<p><a href="%3$s" style="display:inline-block;padding:10px 16px;background:' . $password_reset_email_button_colour . ';color:#ffffff;text-decoration:none;border-radius:4px;font-weight:bold;">Restablecer Contraseña</a></p>' .
        '<p>O copiar y pegar este enlace en tu navegador:<br><a href="%3$s">%3$s</a></p>' .
        '<p>Este enlace es solo para restablecer la contraseña. Si no lo solicitó, puede ignorar este correo electrónico y su contraseña no se cambiará.</p>' .
        '<p>Para su información, esta solicitud se realizó desde la dirección IP: %1$s</p>' .
        '<p>Un Saludo,<br>' .
        '%2$s' .
        '</p>',

    'SUCCESS_PASSWORD_RESET_SENT' =>
        'Gracias. Si esa dirección de correo electrónico existe en nuestro sistema, le enviaremos instrucciones como restablecer la contraseña a esa dirección (no olvide revisar la carpeta Spam).',
];

return $define;
