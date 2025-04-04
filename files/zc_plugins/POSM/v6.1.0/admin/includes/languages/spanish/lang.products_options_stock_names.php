<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM v5.0.0
//
$define = [
    'HEADING_TITLE' => 'Gestión de Etiquetas Sin Stock',
    'TEXT_INSTRUCTIONS' => 'Gestiona las notas asociadas con opciones de productos fuera de stock. Puede usar el símbolo <b>[date]</b> para meter una fecha.',

    'TABLE_HEADING_NAME_ID' => 'ID',
    'TABLE_HEADING_LABEL_NAME' => 'Nota Texto',
    'TABLE_HEADING_ACTION' => 'Acción',

    'BUTTON_MANAGE' => 'Gestionar Stock',
    'BUTTON_MANAGE_ALT' => 'Pinche aquí para gestionar el stock de las opciones de productos',

    'TEXT_INFO_EDIT_INTRO' => 'Haga los cambios necesarios',
    'TEXT_INFO_LABEL_NAME' => 'Texto de la Nota:',
    'TEXT_INFO_INSERT_INTRO' => 'Teclee la nota.',
    'TEXT_INFO_DELETE_INTRO' => '¿Está seguro de que quiere borrar la nota?',
    'TEXT_INFO_HEADING_NEW' => 'Nota Nueva',
    'TEXT_INFO_HEADING_EDIT' => 'Editar Nota',
    'TEXT_INFO_HEADING_DELETE' => 'Borrar Nota',

    'CAUTION_NO_LABEL_NAMES_FOUND' => 'Precaución: No se encontró Notas Fuera de Stock.',
    'MESSAGE_ERROR_NO_ID' => 'Error: Falta el ID para el proceso.',
    'ERROR_USED_IN_OPTIONS_STOCK' => 'Error: la nota &mdash; <b>%s</b> &mdash; está en uso en uno o más opciones de productos, no se puede borrarlo.',
    'ERROR_DATE_MULTI_LANG' => 'Si se usar el símbolo <b>[date]</b> en una nota, debe existir en todas las idiomas de la nota.',
    'ERROR_COMMA_IN_NAME' => 'Error: no se puede tener una comilla (,) en la <b>Nota</b>.',
    'ERROR_NAME_TOO_LONG' => 'La etiqueta de stock &mdash; <b>%s</b> &mdash; es demasiado largo, hay que reducirlo.',
];
return $define;
