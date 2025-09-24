<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2024 Vinos de Frutas Tropicales
//
// Last updated:  POSM v5.0.0
//
$define = [
    'HEADING_TITLE' => 'Gestor de Stock de Opciones de Productos &mdash; Ver Todos',

    'TEXT_LAST_UPDATED' => 'Última Actualización: ',

    'TEXT_POS_INSTRUCTIONS', "Por defecto, esta herramienta <b>solamente</b> muestra productos con combinaciones de opciones que tienen stock igual o menos que <em>el nivel de Hacer-Pedido-Proveedor </em> (actualmente " . POSM_STOCK_REORDER_LEVEL . "). Para ver <b>todos</b> los productos gestionados por <a href=\"" . zen_href_link (FILENAME_PRODUCTS_OPTIONS_STOCK) . "\">Gestor de Stock de Opciones de Productos</a>, marque la casilla inferior y pulse el botón <samp>Ir</samp>.<br><br>La columna del <b>Nombre del Variante</b> tiene un formato como <span class=\"option-name\">Nombre de la Opción</span>: <span class=\"value-name\">Nombre del Valor de la Opción</span>[,...].  Variantes de stock bajo están destacados <span class=\"out-of-stock\">así</span>.<br><br>Si tiene habilitado la comprobación automático de duplicados, cualquier <b>Modelo/SKU</b> que tiene <span style=\"color: red; \">un marco en rojo</span> ha sido duplicado. Ver <a href=\"" . zen_href_link (FILENAME_POSM_FIND_DUPLICATE_MODELNUMS) . "\"><em>Herramientas-&gt;POSM: Buscar Modelos Duplicados</em></a> para más información.<br><br>",
    'TEXT_POS_INSTRUCTIONS2', "Se puede cambiar las cantidades de productos múltiples y pinchar el &quot;Actualizar&quot; botón para actualizar los cambios o pinchar en el enlace del <b>Nombre del Producto</b> para gestionar el stock de ese producto.",

    'POSM_TEXT_PRODUCT_NAME' => 'Nombre del Producto',
    'POSM_TEXT_VARIANT_MODEL' => 'SKU Variante',
    'POSM_TEXT_OPTIONS_LIST' => 'Nombre Variante',
    'TEXT_POS_STOCK_QUANTITY' => 'Cantidad',

    'BUTTON_GO' => 'Ir',

    'TEXT_UPDATE_ALT' => 'Pinche aquí para actualizar todos las cantidades modificadas.',

    'TEXT_CHECK_TO_VIEW_ALL' => 'Marque esta casilla ver <em>todos</em>:',

    'POSM_VIEW_ALL_UPDATED' => 'Se ha procesado las actualizaciones.',

    'POSM_VIEW_ALL_NO_PRODUCTS_TO_LIST' => 'No hay productos para mostrar.',
    'POSM_TEXT_DISPLAY_NUMBER_OF_PRODUCTS' => 'Mostrando <b>%u</b> a <b>%u</b> (de <b>%u</b> productos)',

    'ERROR_MISSING_INPUTS' => 'No se pudo procesar la petición. Precisa aumentar <code>post_max_size</code> (actualmente %1$s) y/o <code>max_input_size</code> (actualmente %2$s) en la configuración PHP del servidor.',
];
return $define;
