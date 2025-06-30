<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Resetear Contraseña',
    'TEXT_ADMIN_EMAIL' => 'Email Admin',
    'TEXT_ADMIN_USERNAME' => 'Nombre Usuario Admin',
    'TEXT_BUTTON_REQUEST_RESET' => 'Petición de Reseteo',
    'TEXT_BUTTON_LOGIN' => 'Login',
    'TEXT_BUTTON_CANCEL' => 'Cancelar',
    'ERROR_WRONG_EMAIL' => 'Introdujo una dirección de email incorrecta.',
    'ERROR_WRONG_EMAIL_NULL' => 'Adiós amigo :-P',
    'MESSAGE_PASSWORD_SENT' => 'Gracias. Si el email y el nombre de usuario que ingresó coinciden con una cuenta de administrador, se le enviará una nueva contraseña a esa dirección. Lea el correo electrónico y haga clic en "Iniciar sesión" para usar la nueva contraseña temporal.',
    'TEXT_EMAIL_SUBJECT_PWD_RESET' => 'Cambio Solicitado',
    'TEXT_EMAIL_MESSAGE_PWD_RESET' => 'Se ha solicitado una nueva contraseña desde %1$s' . "\n\n" . 'Su contraseña temporal es:' . "\n\n" . '%2$s' . "\n\nAntes de entrar tendrá que elegir una contraseña nueva.\n\nEsta contraseña temporal caducará en 24 horas.\n\n\n",
    'TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET' => '¡Aviso de Acceso Fallado - Admin!',
    'TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET' => "Se han recibido intentos fallidos de restablecimiento de contraseña de admin desde %s\n\nEmail o nombre de usuario no válidos.\n\nSi tiene cuentas de administrador que comparten el mismo email, considere asignarles emails únicos para facilitar el restablecimiento.",
];

return $define;