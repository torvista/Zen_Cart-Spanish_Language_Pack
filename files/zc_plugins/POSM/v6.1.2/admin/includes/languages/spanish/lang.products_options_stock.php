<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM v5.0.0
//

// -----
// Since languages are loaded via a class method, need to globalize $db.
//
global $db;
$lowstock_option = $db->Execute(
    "SELECT configuration_group_id, configuration_id
       FROM " . TABLE_CONFIGURATION . " 
      WHERE configuration_key = 'POSM_STOCK_REORDER_LEVEL'
      LIMIT 1"
);
$lowstock_value_link = zen_href_link(FILENAME_CONFIGURATION, 'gID=' . $lowstock_option->fields['configuration_group_id'] . '&cID=' . $lowstock_option->fields['configuration_id'] . '&action=edit');

$text_pos_identifier = '(*)';
$text_oos_label = 'Etiqueta Sin Stock';
$define = [
    'HEADING_TITLE' => 'Admin Products\' Options\' Stock Manager',
    'TEXT_POS_IDENTIFIER' => $text_pos_identifier,
    'TEXT_PRODUCT_DISABLED_IDENTIFIER' => ' [deshabilitado]',
    'TEXT_LAST_UPDATED' => 'Última Actualización: ',
    'TEXT_POS_INSTRUCTIONS' => "Primero, elija una categoría para mostrar (por defecto <em>Todos Los Productos</em>); su hay un asterisco detrás del nombre de la categoría, la categoría contiene uno o más productos (pero no necesariamente con atributos). Se puede filtrar los resultados del menú desplegable para incluir/omitir los productos deshabilitados e incluir/omitir el modelo con el nombre.  El siguiente menú desplegable define el orden de los resultados. Las elecciones de los cuatro opciones están mantenidas durante la sesión actual de administración.<br><br>A continuación elija un producto del listado desplegable para gestionar sus opciones. Los productos marcados con <b>" . $text_pos_identifier . "</b> ya tienen modelo/stock definido para algún atributo. Si un producto tiene una opción con stock menos o igual a " . POSM_STOCK_REORDER_LEVEL . " o una fecha de reposición que está casi pasada, <span class=\"out-of-stock\">se destaca</span> el nombre del producto en el listado.<br><br><strong>Nota:</strong> Las opciones de los productos están mostradas (izquierda-derecha) utilizando el orden de las Opciones (definidas en <a href=\"" . zen_href_link (FILENAME_OPTIONS_NAME_MANAGER) . "\">Admin-&gt;Gestor de Nombres de Opciones</a>); cuando están ordenado por <em>el orden de los Atributos</em>, las combinaciones de valores de las opciones-producto se muestran (arriba hacia abajo) utilizando el orden de los valores (definidos en <a href=\"" . zen_href_link (FILENAME_ATTRIBUTES_CONTROLLER) . "\">Admin-&gt;Controlador de Attributos</a>). Si múltiples nombre-opciones o valores-opciones tienen el mismo orden, se muestran las opciones en orden de nombre ascendente." . "<br><br>Se puede ordenar el listado por nombre o modelo si haya marcado la casilla &quot;Incluir Modelo&quot;.<br><br>",

    'TEXT_POS_INSERT' => 'Utilice los botones &quot;Añadir&quot; o &quot;Sustituir&quot;para añadir o actualizar una combinación de opciones y stock para el producto elegido El botón &quot;Añadir&quot; <em>añade</em> la cantidad al stock actual, mientras el botón &quot;Sustituir&quot; <em>reemplace</em> el stock previo. Hay un aviso de confirmación antes de insertarlo en la base de datos.<br><br>',

     'TEXT_POS_INSTRUCTIONS2' => "Cuando un producto tiene una o más combinaciones de opciones, se muestran como una lista:<ol> <li>Si el nivel de stock de una combinación de opciones está en o por debajo del nivel de stock bajo configurado (actualmente <a href=\"$lowstock_value_link\">" . POSM_STOCK_REORDER_LEVEL . "</a>) el campo &quot;Cantidad&quot; de la combinación tiene un <span class=\"out-of-stock\">borde rojo</span>.< /li> <li>Si la fecha de reposición de una combinación de opciones coincide con el &quot;período de recordatorio&quot; o lo ha superado (actualmente " . POSM_BIS_DATE_REMINDER . " o más días), la línea completa de la entrada muestra un <span class= \"bg-warning\">fondo de advertencia</span>.</li> <li>Si una combinación de opción o valor muestra <span class=\"removed\"> tachado</span> , entonces esa combinación de opciones o valor (atributo) se ha eliminado del producto. No puede actualizar la cantidad de una combinación de opciones o valor desconocido, pero puede eliminarlo.</li> <li>Cuando hace clic en cualquiera de los botones &quot;Actualizar&quot;, se actualizarán todas las cantidades y modelos de combinación de opciones.</li> <li>Al hacer clic en cualquiera de los botones &quot;Eliminar&quot; botones, cualquier combinación de opciones que tenga la casilla \"¿Eliminar?\" marcada será eliminada.  Si uno o más casillas están marcadas, recibirá un mensaje emergente para confirmar las eliminaciones.</li> <li>Si ha configurado <em>POSM</em> para informar de los duplicados, cualquier entrada de <b>Modelo /SKU</b> que tenga un <span class=\"dup-model\">borde rojo</span> está duplicada, ya sea en la definición de un producto o en otro <em>POSM< /em> combinación. Consulte en <a href=\"" . zen_href_link(FILENAME_POSM_FIND_DUPLICATE_MODELNUMS) . "\"><em>Herramientas :: POSM: Buscar modelos duplicados</em></a> para resolverlo.</li></ol>",

    'TEXT_POS_OPTIONS_ADDED' => 'Nuevos atributos han sido añadidos a este producto desde que se crearon sus entradas de stock.  Debería Añadir las nuevas combinaciones. Las cantidades de las entradas existentes no se cambiarán.<br><br>',

    'TEXT_POS_STOCK_QUANTITY' => 'Cant.',
    'TEXT_CURRENT_TOTAL' => 'Total: %u',
    'TEXT_POS_REMOVE' => '¿Quitar?',
    'TABLE_HEADING_CHECK_UNCHECK' => '¿Todo/Ninguno?',
    'TEXT_ADD_TO_QUANTITY' => 'Añadir',
    'TEXT_REPLACE_QUANTITY' => 'Sustituir',
    'TEXT_ALL' => '* (Todos)',
    'TEXT_OPTION_MODEL' => 'SKU',
    'TEXT_OOS_LABEL' => 'Etiqueta Sin Stock',
    'TEXT_OOS_DATE' => 'Fecha Sin Stock<br><span class="smaller">AAAA-MM-DD</span>',
    'TEXT_NONE_DEFINED' => '-- Ningúno Definido --',
    'TEXT_PLEASE_SELECT' => 'Selecciona ...',
    'TEXT_ALL_CATEGORIES' => 'Todas las categorías',
    'TEXT_CHOOSE_CATEGORY' => 'Elija la categoría para mostrar: ',
    'TEXT_CHOOSE_PRODUCT' => 'Elija el producto para gestionar: ',
    'TEXT_NO_PRODUCTS_IN_CATEGORY' => 'No hay productos con attributos adecuados en esta categoría',

    'TEXT_MODEL_DEFAULT' => '¿Ponga por defecto?',
    'TEXT_MODEL_DEFAULT_TITLE' => '¿Utilice este modelo para los campos vacios?',

    'BUTTON_DEFINE_LABELS' => 'Definir Etiquetas Sin Stock',
    'BUTTON_DEFINE_LABELS_ALT' => 'Pinche aquí para definir las etiquetas para productos sin stock',
    'BUTTON_VIEW_ALL' => 'Ver Todos',
    'BUTTON_VIEW_ALL_ALT' => 'Pinche aquí para ver todos los productos POSM en una página sola',
    'BUTTON_GO' => 'Ir',

    'TEXT_INCLUDE_DISABLED' => '¿Incluir los productos deshabilitados? ',
    'TEXT_INCLUDE_MODEL' => '¿Incluir Modelo? ',

    'BUTTON_UPDATE' => 'Actualizar',
    'TEXT_UPDATE_ALT' => 'Pinche para actualizar todas las cantidades y SKUs.',
    'BUTTON_REMOVE' => 'Quitar',
    'TEXT_REMOVE_ALT' => 'Pinche aquí para quitar la combinación de attributos elegido(s).',

    'TEXT_SINGLE_LABEL_NAME' => '<b>Nota:</b> Solamente uno (<em><b>%1$s</b></em>) &quot;' .  $text_oos_label . '&quot; está definido. Se utilizará esta etiqueta para todos los productos <em>POSM</em> que no tiene stock.',

    'ERROR_INVALID_DATE' => 'Una <strong>Fecha Sin Stock</strong> debe ser en el formato AAAA-MM-DD y válido.',
    'ERROR_INVALID_FORM_VALUES' => 'Se encontró valores no válidos en el formulario (código %s).',
    'SUCCESS_QUANTITY_UPDATED' => 'Se actualizó las cantidades y SKUs.',
    'SUCCESS_NEW_OPTION_CREATED' => 'Se creó/actualizó unas entradas de stock.',
    'WARNING_DUPLICATE_COMBINATION' => 'Una entrada con esa combinación de attributos ya existe.',
    'SUCCESS_OPTION_RECORDS_REMOVED' => 'Se borraron %u entradas.',
    'SUCCESS_OPTIONS_ADDED' => 'Se añadireron opciones nuevas a las entradas existentes.',
    'ERROR_MISSING_INPUTS' => 'No se pudo procesar la petición. Precisa aumentar <code>post_max_size</code> (actualmente %1$s) y/o <code>max_input_size</code> (actualmente %2$s) en la configuración PHP del servidor.',

    'JS_MESSAGE_DELETE_ALL_CONFIRM' => '¿Está seguro de que quiere borrar estos \'+n+\' entradas?',
    'JS_MESSAGE_INSERT_NEW_CONFIRM' => 'Esta acción creará \'+items+\' entradas. ¿Continuar?',
    'JS_MESSAGE_INSERT_MULTIPLE_CONFIRM' => 'Esta acción puede crear \'+items+\' entradas. Cualquier entradas que ya existen tendrán sus cantidades de stock \'+add_replace+\'. ¿Continuar?',
    'JS_MESSAGE_UPDATED' => 'actualizado por \'+quantity+\'',
    'JS_MESSAGE_REPLACED' => 'sustituido',
    'JS_MESSAGE_DELETE_SELECTED_CONFIRM' => '¿Esta seguro de que quiere borrar \'+selected+\' las entradas seleccionadas?',
    'WARNING_NO_FILES_SELECTED' => '¡Ninguna entrada era seleccionada!',
    'JS_MESSAGE_CONFIRM_MODEL_DEFAULT' => 'Aplique el modelo del producto base (%s) a las opciones \'+emptyModels+\'.  ¿Continuar?', //- %s is the product's base model
];
return $define;
