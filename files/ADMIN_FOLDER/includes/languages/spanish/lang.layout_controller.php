<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Recuadros de las Columnas',
    'TEXT_CURRENTLY_VIEWING' => 'Actualmente Mostrando: ',
    'TEXT_THIS_IS_PRIMARY_TEMPLATE' => ' (Principal)',
    'TABLE_HEADING_BOXES_PATH' => 'Ruta Recuadros: ',
    'TEXT_WARNING_NEW_BOXES_FOUND' => 'AVISO: Se ha encontrado Recuadros nuevos: ',
    'TEXT_ORIGINAL_DEFAULTS'  => '[Valores por Defecto Zen Cart original]',
    'TEXT_CAUTION_EDITING_NOT_LIVE_TEMPLATE' => 'AVISO: No está editando la plantilla actualment en uso en la tienda.',

    'TEXT_HEADING_MISSING_BOXES' => 'Recuadros que Faltan',
    'BUTTON_REMOVE_SELECTED' => 'Quitar Seleccionados',
    'TEXT_NO_BOXES_TO_REMOVE' => 'No hubo recaudros seleccionados para quitar.',
    'BUTTON_REMOVE_BOXES' => 'Quitar Recuadros',
    'BUTTON_CLOSE' => 'Cerrar',

    'TEXT_INFO_HEADING_DELETE_BOX' => 'Eliminar Recuadro',
    'TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE' => 'NOTA: Esto no elimina ficheros así que puede volver a añadir el cuadro en cualquier momento sólo añadiéndolo al directorio correcto.<br><br><strong>Eliminar nombre de recuadro:</strong>',
    'SUCCESS_BOX_DELETED' => 'Borrado correctamente el recuadro: ',

    'TEXT_RESET_SETTINGS' => 'Resetear Configuración',
    'TEXT_INFO_RESET_TEMPLATE_SORT_ORDER' => 'Resetear los estados de los recuadros: ',
    'TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE' => 'Esto no elimina ninguno de los recuadros. Solo restablecerá los estados y orden de los recuadros iguales a la otra plantilla.',
    'TEXT_SETTINGS_COPY_FROM' => 'Copiar estados y orden DESDE: ',
    'TEXT_SETTINGS_COPY_TO' => ' A: ',
    'SUCCESS_BOX_RESET' => 'La configuración para [%1$s] ha sido cambiado a la configuración de [%1$s].',
    'TEXT_ERROR_INVALID_RESET_SUBMISSION' => 'ERROR: elección inválida',

    'TEXT_INSTRUCTIONS' => 'Si su dispositivo tiene un mouse, puede arrastrar y soltar un recuadro para cambiar su ubicación en su columna o el orden. De lo contrario, use las flechas para cambiar la ubicación o el orden. Use un ícono <i class="fa-solid fa-xmark"></i> para mover un recuadro activo a su grupo inactivo.',
    'BUTTON_SHOW_NOTES' => 'Mostrar Notas',
    'BUTTON_HIDE_NOTES' => 'Ocultar Notas',
    'TEXT_NOTES' => 'Notas:',
    'TEXT_NOTE1_OPT' => 'La visualización de estos (%1$s) recuadros en la tienda <em> depende en gran medida</em> de la plantilla %2$s. ¡Consulte con el autor de la plantilla para obtener más detalles!',
    'TEXT_NOTE1' => 'Una vez que haya cambiado un recuadro, se mostrará un botón para Guardar los cambios.',
    'TEXT_NOTE2' => 'Los órdenes de los recuadros se calculan cuando guarda sus opciones, no es necesario proporcionarlas.',
    'TEXT_NOTE3' => 'Todos los recuadros inactivos se guardan con el mismo orden para que se muestran en orden alfabético.',
    'TEXT_NOTE4' => '¡Mover un recuadro dentro de un grupo inactivo no se considera un cambio!',
    'TEXT_NOTE5' => 'Si ha realizado cambios y sale de esta página, su navegador le informará que tiene cambios sin guardar.',

    'TEXT_COLUMN_DISABLED' => 'Columna Deshabilitada',
    'TEXT_DISABLED_MESSAGE' => 'Los cambios en esta columna se guardado, pero no se mostrará en la tienda. Consulte la configuración asociada en Configuración :: Opciones de Disposición.',
    'TEXT_HEADING_MAIN_PAGE_BOXES' => 'Recuadros Página Principal',
    'TEXT_HEADING_ACTIVE_LEFT' => 'Recuadros Activos Columna Izquierda',
    'TEXT_HEADING_ACTIVE_RIGHT' => 'Recuadros Activos Columna Derecha',
    'TEXT_HEADING_INACTIVE_LEFT_RIGHT' => 'Recuadros Inactivos Página Principal',
    'TEXT_HEADING_HEADER_BOXES' => 'Recuadros Cabecera',
    'TEXT_HEADING_FOOTER_BOXES' => 'Recuadros Pie de Página',
    'TEXT_HEADING_MOBILE_BOXES' => 'Recuadros Menú Móvil',
    'TEXT_HEADING_ACTIVE_BOXES' => 'Recuadros Activos',
    'TEXT_HEADING_INACTIVE_BOXES' => 'Recuadros Inactivas',
    'BUTTON_SHOW' => 'Mostrar',
    'BUTTON_HIDE' => 'Ocultar',

    'TEXT_MOVE_BOX_UP' => 'Mover %1$s hacia arriba en los recuadros %2$s.',
    'TEXT_MOVE_BOX_DOWN' => 'Mover %1$s hacia abajo en los recuadros %2$s.',
    'TEXT_MOVE_BOX_UNUSED' => 'Mover %1$s a los recuadros inactivas %2$s.',
        'TEXT_MOVE_MAIN_PAGE_COLUMN' => 'Página Principal', //- Se utiliza como valor de %2$s en las tres frases anteriores
        'TEXT_MOVE_HEADER_COLUMN' => 'Cabecera', //- Se utiliza como valor de %2$s en las tres frases anteriores
        'TEXT_MOVE_FOOTER_COLUMN' => 'Pie de Página', //- Se utiliza como valor de %2$ en las tres frases anteriores
    'TEXT_MOVE_MOBILE_COLUMN' => 'Menú Móvil', //- Se utiliza como valor de %2$ en las tres frases anteriores
    'BUTTON_SAVE_CHANGES' => 'Guardar Cambios',
    'SUCCESS_BOX_UPDATED' => 'Se han actualizado la configuración.',
];

return $define;
