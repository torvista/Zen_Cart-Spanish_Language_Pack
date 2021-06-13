<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE','Ejecutor de Consultas SQL',
    'HEADING_WARNING','ASEGÚRESE DE HACER UNA COPIA DE SEGURIDAD VERIFICADA DE SU BASE DE DATOS ANTES DE EJECUTAR SCRIPTS AQUÍ',
    'HEADING_WARNING2','Si está instalando una contribución de terceros => tenga en cuenta que lo hace bajo su propia responsabilidad.<br>Zen Cart&reg; no ofrece ninguna garantía sobre la seguridad de los scripts suministrados por terceros.<br>¡SIEMPRE compruebe cualquier modificación de código php o a la base de datos en una COPIA de su tienda => NUNCA en la tienda real!',
    'HEADING_WARNING_INSTALLSCRIPTS' => 'AVISO: No debe ejecutar scripts para actualizar la base de datos Zen Cart a una nueva versión desde esta página.<br>Suba la carpeta <strong>zc_install</strong> actual al servidor y ejecute la actualización desde esa ubicación.',
    'TEXT_QUERY_RESULTS','Resultados de la consulta:',
    'TEXT_ENTER_QUERY_STRING','Escriba la consulta <br>a ser ejecutada:&nbsp;&nbsp;<br><br>Asegúrese de<br>terminar cada línea con ";".',
    'TEXT_QUERY_FILENAME','Cargar archivo de texto SQL:',
    'ERROR_NOTHING_TO_DO','Error: Nada que hacer - no se especificó una consulta o archivo de consulta.',
    'TEXT_CLOSE_WINDOW' => '[ cerrar ventana ]',
    'SQLPATCH_HELP_TEXT','La herramienta SQLPATCH le permite instalar parches del sistema pegando código SQL directamente en la zona de texto '.
      'REASON_TABLE_ALREADY_EXISTS','No se puede crear la tabla %s porque ya existe',
      'REASON_TABLE_DOESNT_EXIST','No se puede borrar la tabla %s porque no existe.',
      'REASON_TABLE_NOT_FOUND','No se puede ejecutar porque la tabla %s no existe.',
      'REASON_CONFIG_KEY_ALREADY_EXISTS','No se puede introducir configuration_key "%s" porque ya existe',
      'REASON_COLUMN_ALREADY_EXISTS','No se pudo AÑADIR columna %s porque ya existe.',
      'REASON_COLUMN_DOESNT_EXIST_TO_DROP','No se pudo BORRAR la columna %s porque no existe.',
      'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','No se pudo CAMBIAR la columna %s porque no existe.',
      'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','No se pudo insertar prod-type-layout configuration_key "%s" porque ya existe',
      'REASON_INDEX_DOESNT_EXIST_TO_DROP','No se pudo borrar %s en la tabla %s porque no existe.',
      'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','No se pudo borrar la clave primaria en la tabla %s porque no existe.',
      'REASON_INDEX_ALREADY_EXISTS','No se pudo añadir el índice %s a la tabla %s porque ya existe.',
      'REASON_PRIMARY_KEY_ALREADY_EXISTS','No se pudo añadir la clave primaria a la tabla %s porque ya existe la clave primaria.',
      'REASON_NO_PRIVILEGES','Usuario '.DB_SERVER_USERNAME.'@'.DB_SERVER.' no tiene privilegios de %s para la base de datos '.DB_DATABASE.'.',
    'ERROR_RENAME_TABLE' => 'RENAME TABLE no está soportado por la herramienta SQLpatch. Debe usar phpMyAdmin.',
    'ERROR_LINE_INCOMPLETE' => 'Consulta incompleta: falta la ";" final.',
    'TEXT_EXECUTE_SUCCESS' => 'Éxito: %u consulta(s) procesadas.',
    'ERROR_EXECUTE_FAILED' => 'Consulta fallada: %u consultas procesadas.',
    'ERROR_EXECUTE_IGNORED' => 'Nota: %u consulta(s) ignorada(s). Mire la tabla "upgrade_exceptions" para más detalles.',
    'TEXT_UPLOADQUERY_SUCCESS' => 'Éxito: %u consulta(s) procesada(s) por la subida del archivo',
    'ERROR_UPLOADQUERY_FAILED' => 'Consulta fallada: %u consulta(s) procesada(s) por la subida del archivo',
    'ERROR_UPLOADQUERY_IGNORED' => 'Nota: %u consulta(s) ignoradas por la subida del archivo. Mire la tabla "upgrade_exceptions" para más detalles.',
];

return $define;