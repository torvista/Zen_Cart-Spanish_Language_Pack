<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM v5.0.0
// -----
// Based on the Find Duplicate Models plugin (https://www.zen-cart.com/downloads.php?do=file&id=1323) by swguy.
//
$define = [
    'HEADING_TITLE' => 'POSM: Buscar Modelos Duplicados',
    'HEADING_PRODUCTS_LINK' => 'Enlace Product',
    'HEADING_POSM_LINK' => 'Enlace POSM',
    'HEADING_PRODUCTS_MODEL' => 'Modelo Producto',
    'HEADING_POSM_MODEL' => 'Modelo POSM Model',
    'HEADING_PRODUCTS_NAME' => 'Nombre',
    'HEADING_PRODUCTS_DISABLED' => '¿Habilitado?',

    'INSTRUCTIONS' => "Utilice esta herramienta para identificar modelos duplicados (o sea en la definición del producto o una opción de stock. Por defecto solamente se incluye productos <em>habilitados</em> en el informe: para incluir <em>todos</em> los productos, marque la casilla inferior y pinche en <b>go</b>.<br><br><strong>Nota:</strong> Si solamente un producto está en el listado, significa que tiene una opción con el mismo modelo como el producto base.",
    'NO_DUPS_FOUND' => 'Enhorabuena &mdash; todos los números de modelos son únicos.',

    'INCLUDE_DISABLED' => '¿Incluir productos deshabilitados?',
    'POSM_MODEL_IS_EMPTY' => '--vacio--',

    'BUTTON_GO' => 'Ir',

    'DUPS_UNMANAGED_UNMANAGED' => 'Products no-POSM con SKU duplicados en otros productos no-POSM',
    'DUPS_UNMANAGED_MANAGED' => 'Products no-POSM con SKU duplicados en productos POSM',
    'DUPS_MANAGED_MANAGED' => 'Products POSM con SKU duplicados en otros productos POSM',
];
return $define;
