<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
$define = [
    'HEADING_TITLE' => 'Productos\' Opciones\' Stock: Convertir Stock by Attribute',

    'TEXT_INSTRUCTIONS' => 'Utilice esta herramienta para convertir sus tablas <em>Stock by Attributes (SBA)</em> en tablas <em>Productos\' Opciones\' Stock (POSM)</em>. Tenga en cuenta que <em>POSM</em> precisa que se definen todas las combinaciones de opciones, por lo que algunas de sus combinaciones <em>SBA</em> podrían no ser "convertibles". Consulte la pantalla a continuación; Si la columna de estado muestra opciones que faltan o un producto desconocido, ¡ese registro <em>SBA</em> no se convertirá!<br /><br /><strong>Nota:</strong> Al hacer clic en el botón &quot;Enviar&quot; ¡El botón eliminará todas las entradas existentes en su configuración POSM!',

    'ERROR_NO_SBA_TABLE' => 'No es posible realizar ninguna conversión &mdash; falta la tabla <em>products_with_attributes_stock</em>.',

    'TEXT_FORM_INSTRUCTIONS' => 'Revise la información a continuación, luego haga clic en el botón <em>Enviar</em> para convertir las entradas <em>SBA</em> a sus equivalentes <em>POSM</em>.',
    'BUTTON_ALT_TEXT' => 'Haga clic aquí para convertir las tablas',

    'TEXT_MISSING_OPTIONS' => '<span class="missing">&cross; Opciones faltantes (%s)</span>',
    'TEXT_UNSUPPORTED_OPTION_TYPE' => '<span class="missing">&cross; El ID de opción (%1$u) utiliza un tipo de opción no permitido (%2$u)</span>',
    'TEXT_MISSING_PRODUCT' => '<span class="missing">&cross; El producto no existe</span>',
    'TEXT_OK' => '<span class="ok">&check;</span>',

    'TABLE_HEADING_STOCK_ID' => 'ID Stock',
    'TABLE_HEADING_QUANTITY' => 'Cantidad',
    'TABLE_HEADING_MODEL' => 'Modelo',
    'TABLE_HEADING_STATUS' => 'Estado',

    'MESSAGE_CONVERTED_OK' => 'Sus entradas de <em>Stock por Atributos</em> se han convertido con éxito a sus equivalentes de <em>Productos\' Opciones\' Stock</em>.',
    'MESSAGE_CONVERTED_MISSING' => 'Revise la información a continuación, algunas de sus entradas de <em>Stock por atributos</em> no se pudieron convertir.',

    'JS_MESSAGE_ARE_YOU_SURE' => 'Esta acción resetear sus tablas POSM para que contengan solo la información convertida por SBA. ¿Estás seguro de que quiere continuar?',
];
return $define;
