<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// -----
// Part of the "Product Options Stock" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM 5.0.0
//
$define = [
    'BOX_REPORTS_PRODUCTS_OPTIONS_STOCK' => 'Ventas por Opciones de Productos',
    'BOX_CATALOG_PRODUCTS_OPTIONS_STOCK' => 'Gestiona Stock de Opciones de Productos',
    'BOX_CATALOG_PRODUCTS_OPTIONS_STOCK_VIEW_ALL' => 'Stock de Opciones &mdash; Ver Todos',
    'BOX_LOCALIZATION_PRODUCTS_OPTIONS_STOCK' => 'Etiquetas Fuera de Stock',
    'BOX_CONFIGURATION_PRODUCTS_OPTIONS_STOCK' => 'Gestor de Stock de Opciones',
    'BOX_TOOLS_CONVERT_SBA2POSM' => 'Convertir SBA a POSM',
    'BOX_TOOLS_POSM_FIND_DUPMODELS' => 'POSM: Buscar Modelos Duplicados',

    // -----
    // Used by the initialization script, when checking that the EO function file contains the "proper" notifiers,
    // when checking for "expired" back-in-stock dates and messaging installation or updates.
    //
    'POSM_EO_DOWNLEVEL' => 'La versión de <em>Edit Orders</em> (v%s) instalado <em>no soporta Products\' Options\' Stock Manager</em>; debe ser actualizado al v4.2.0 o más adelante.',
    'POSM_BIS_DATES_EXPIRED' => 'Hay una fecha de reposición dentro del periodo de aviso (%1$u días); pinche <a href="%2$s">aquí</a> para más información.',
    'POSM_INSTALLED' => 'Se instaló Products\' Options\' Stock Manager versión %s con éxito.',
    'POSM_UPDATED' => 'Products\' Options\' Stock Manager was successfully updated from version %1$s to %2$s.',

    // -----
    // Used on the categories page as alt-text for the options-stock indicator icons.
    //
    'POS_ALT_PRODUCT_HAS_OPTIONS_STOCK' => 'Producto tiene opciones CON stock',
    'POS_ALT_PRODUCT_HAS_OPTIONS_NO_STOCK' => 'Producto tiene opciones SIN stock',

    // -----
    // Used by the admin-level options' stock observer to report that one or more stock records have been removed.
    //
    'CAUTION_REMOVING_OPTIONS_STOCK' => 'La acción borró %u entrada(s) POSM.',

    // -----
    // Used by the admin-level options' stock observer to report that one or more stock records were copied.
    'SUCCESS_COPYING_OPTIONS_STOCK' => '%u POSM entradas copiadas.',

    // -----
    // Used by Catalog->Manage Options' Stock to notify the admin user when the re-order level has been found to be invalid.
    //
    'CAUTION_POSM_REORDER_LEVEL' => 'El valor del <em>Nivel de Stock para hacer un pedido</em> era inválido (%s); ha sido cambiado a 0.',

    // -----
    // Used by both Catalog->Manage Options' Stock and the "View All" tool to alert the admin to a disallowed duplicate model number and to provide
    // sort-by model number.
    //
    'ERROR_DUPLICATE_MODEL_FOUND' => 'El modelo (<em>%s</em>) está en uso. Es necesario cambiarlo para poder guardar estos datos.',
    'JSCRIPT_ERROR_DUPLICATE_MODEL' => "El modelo ('+modelNum+') está en uso. Es necesario cambiarlo para poder guardar estos datos.'",
    'ERROR_MODEL_TOO_LONG' => 'El modelo (%s) es demasiado largo; hay que reducirlo.',
    'ERROR_INVALID_QUANTITY' => 'La cantidad de una variante debe ser numérico y no negativo, vuelva a introducirlo.',

    'POSM_TEXT_SORT_BY' => 'Ordenar las opciones-combinaciones por: ',
    'POSM_TEXT_SORT_BY_MODEL_ASC' => 'Modelo, A-Z',
    'POSM_TEXT_SORT_BY_MODEL_DESC' => 'Model, Z-A',
    'POSM_TEXT_SORT_BY_DEFINITION' => 'Orden de Atributos',

    // -----
    // Used by  incudes/javascript/attributes_controller_posm.php.
    //
    'POSM_JS_CAUTION_OPTION_REMOVAL' => '¡PRECAUCIÓN!\n\nLos atributos de este producto son administrados por Products Options Stock Manager.\n\nSi confirma la eliminación de esta opción, se eliminarán **todas** las opciones y la cantidad del producto se establecerá en 0.',
    'POSM_JS_CAUTION_ATTRIBUTE_REMOVAL' => '¡PRECAUCIÓN!\n\nLos atributos de este producto son administrados por Products Options Stock Manager.\n\nSi confirma la eliminación de este atributo\\\, %u opciones administradas se eliminarán y la cantidad del producto se actualizará en consecuencia.',
];
return $define;
