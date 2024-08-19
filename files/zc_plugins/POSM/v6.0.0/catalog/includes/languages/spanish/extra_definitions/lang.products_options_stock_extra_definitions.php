<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM 5.0.0
//
$products_options_stock_in_stock = 'en stock';
$define = [
    'PRODUCTS_OPTIONS_STOCK_WRAPPER' => '<div class="stock-wrapper">%s</div>',
    'PRODUCTS_OPTIONS_STOCK_STOCK_HTML' => '<div class="stock-msg %1$s">%2$s</div>',
    'PRODUCTS_OPTIONS_STOCK_STOCK_TEXT' => ' [%s]',
    'PRODUCTS_OPTIONS_STOCK_IN_STOCK' => $products_options_stock_in_stock,
        'PRODUCTS_OPTIONS_STOCK_IN_STOCK_QTY' => '%u ' . $products_options_stock_in_stock,  //-The %u (required) is the place-holder for the in-stock quantity
    'PRODUCTS_OPTIONS_STOCK_NOT_IN_STOCK' => 'bajo-pedido',
        'PRODUCTS_OPTIONS_STOCK_MIXED' => '%u %s, %u %s',

    // -----
    // If your store has products with multiple options and you've enabled the 'Dependent Attributes: Insert "Please Choose"?' setting,
    // the following constants are used.
    //
    // The "First Choose" text is applied to the first option (if it's a drop-down) and the "Next Choose" text is
    // applied to all subsequent options.
    //
    'PRODUCTS_OPTIONS_STOCK_PLEASE_CHOOSE' => 'Primero Elija &hellip;',
    'PRODUCTS_OPTIONS_STOCK_PLEASE_CHOOSE_NEXT' => 'A Continuación Elija &hellip;',

    'PRODUCTS_OPTIONS_STOCK_RADIO_BUTTON_CHOOSE' => ' (elija la opción anterior para poder elegir esta opción)',

    'POS_EMAIL_TEXT_SUBJECT_LOWSTOCK' => "Aviso: Stock Bajo (posm)",
    'POS_SEND_EXTRA_LOW_STOCK_EMAIL_TITLE' => "Aviso -Stock Bajo (posm): ",

    // -- %1$ ... product's ID
    // -- %2$ ... product's model
    // -- %3$ ... product's name
    // -- %4$ ... product's stock attributes list
    // -- %5$ ... remaining quantity
    'POS_LOW_STOCK_EMAIL_CONTENTS' => "Stock bajo (POSM):\n\nID# %1\$u\t\t%2\$s\n%3\$s (%4\$s)\nCant. Restante: %5\$u\n",

    'ERROR_LIMITED_STOCK_CART_REDUCTION' => 'La cantidad de <b>%s</b> ha sido ajustado a %u en el carro debido de limitacions de stock.',

    'ERROR_INVALID_VARIABLES' => 'Valores inválidos recibidos, contacte el administrador de la tienda [msgCode: %u]',

    'JS_ERROR_NO_SELECTION' => 'Elija una ',  //-appended with the name of the option that needs a selection by jscript_posm_dependencies.php

    // -----
    // This message is issued if an add-to-cart action includes a POSM-managed product ... but the requested option-combination isn't configured.
    //
    'POSM_ERROR_INVALID_VARIANT' => 'Las combinaciones de opciones que eligió no están disponibles; actualice sus opciones e inténtelo de nuevo.',

];
return $define;
