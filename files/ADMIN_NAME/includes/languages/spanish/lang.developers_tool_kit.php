<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Buscadores de Código Fuente ',
    'TABLE_CONFIGURATION_TABLE' => 'Buscar definiciones de CONSTANTS',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => 'Actualización realizada con <strong>éxito</strong> para los valores de ordenación de precios de producto',
    'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>Error:</strong> No se encontraron claves de configuración coincidentes ...',
    'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>Error:</strong> No introdujo clave de configuración o texto de búsqueda ... Se interrumpió la búsqueda',
    'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>Actualice TODOS los ordenadores sobre precios de producto</strong><br>para poder ordenar por los precios mostrados: ',
    'TEXT_CONFIGURATION_CONSTANT' => '<strong>Buscar definiciones CONSTANTES o de archivo de idioma</strong>',
    'TEXT_CONFIGURATION_KEY' => 'Clave o nombre:',
    'TEXT_INFO_CONFIGURATION_UPDATE' => '<strong>NOTA:</strong> Las CONSTANTES se escriben en mayúsculas.<br>Búsquedas de archivo de idioma => Functions => Classes => etc. se realizan cuando no se ha encontrado nada en las tablas de bases de datos => si se selecciona en la lista desplegable',
    'TABLE_TITLE_KEY' => '<strong>Clave:</strong>',
    'TABLE_TITLE_TITLE' => '<strong>Título:</strong>',
    'TABLE_TITLE_DESCRIPTION' => '<strong>Descripción:</strong>',
    'TABLE_TITLE_GROUP' => '<strong>Grupo:</strong>',
    'TABLE_TITLE_VALUE' => '<strong>Valor:</strong>',
    'TEXT_LOOKUP_NONE' => 'Ninguno',
    'TEXT_INFO_SEARCHING' => 'Buscando ',
    'TEXT_INFO_FILES_FOR' => ' archivos ... para: ',
    'TEXT_INFO_MATCHES_FOUND' => 'Líneas coincidentes encontradas: ',
    'TEXT_INFO_FILENAME' => 'ARCHIVO: ',
    'TEXT_LANGUAGE_LOOKUPS' => 'Búsqueda de archivos de idioma:',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE' => 'Todos los archivos de idioma para ' . strtoupper($_SESSION['language']) . ' - Catálogo/Admin',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG' => 'Todos los archivos principales de idioma - Catálogo (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE' => 'Todos los archivos de idioma seleccionados actualmente - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN' => 'Todos los archivos principales de idioma - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE' => 'Todos los archivos de idioma seleccionados - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)',
    'TEXT_LANGUAGE_LOOKUP_CURRENT_ALL' => 'Todos los archivos de idioma seleccionados - Catálogo/Admin',
    'TEXT_FUNCTION_CONSTANT' => '<strong>Búsqueda de Functions o cosas en los archivos de Functions</strong>',
    'TEXT_FUNCTION_LOOKUPS' => 'Búsqueda de Functions:',
    'TEXT_FUNCTION_LOOKUP_CURRENT' => 'Todos los archivos de Functions - Catálogo/Admin',
    'TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG' => 'Todos los archivos de Functions - Catálogo',
    'TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN' => 'Todos los archivos de Functions - Admin',
    'TEXT_CLASS_CONSTANT' => '<strong>Buscar Classes o cosas en los archivos de Classes</strong>',
    'TEXT_CLASS_LOOKUPS' => 'Búsquedas de archivos de Classes:',
    'TEXT_CLASS_LOOKUP_CURRENT' => 'Todos los archivos de Classes - Catálogo/Admin',
    'TEXT_CLASS_LOOKUP_CURRENT_CATALOG' => 'Todos los archivos de Classes - Catálogo',
    'TEXT_CLASS_LOOKUP_CURRENT_ADMIN' => 'Todos los archivos de Classes- Admin',
    'TEXT_TEMPLATE_CONSTANT' => '<strong>Buscar cosas en la plantilla</strong>',
    'TEXT_TEMPLATE_LOOKUPS' => 'Búsqueda de archivos de plantilla:',
    'TEXT_TEMPLATE_LOOKUP_CURRENT' => 'Todos los archivos de plantilla - /templates sideboxes /pages etc.',
    'TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES' => 'Todos los archivos de plantilla - /templates',
    'TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES' => 'Todos los archivos de plantilla - /sideboxes',
    'TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES' => 'Todos los archivos de plantilla - /pages',
    'TEXT_ALL_FILES_CONSTANT' => '<strong>Buscar en todos los archivos (incluyendo zc_plugins)</strong>',
    'TEXT_ALL_FILES_LOOKUPS' => 'Búsqueda de todos los archivos:',
    'TEXT_ALL_FILES_LOOKUP_CURRENT' => 'Todos los archivos - Catálogo/Admin',
    'TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG' => 'Todos los archivos - Catálogo',
    'TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN' => 'Todos los archivos - Admin',
    'TEXT_ALL_FILES_LOOKUP_CURRENT_PLUGINS' => 'Todos los archivos - Plugins',
    'TEXT_INFO_NO_EDIT_AVAILABLE' => 'Edición no disponible',
    'TEXT_INFO_CONFIGURATION_HIDDEN' => ' u => OCULTO',
    'TEXT_SEARCH_ALL_FILES' => 'Buscar en todos los archivos para: ',
    'TEXT_SEARCH_DATABASE_TABLES' => 'Buscar en las tablas de configuración del base de datos para: ',
    'TEXT_ALL_FILESTYPE_LOOKUPS' => 'Tipo de Archivo',
    'TEXT_ALL_FILES_LOOKUP_PHP' => '.php sólo',
    'TEXT_ALL_FILES_LOOKUP_PHPCSS' => '.php y .css',
    'TEXT_ALL_FILES_LOOKUP_CSS' => '.css sólo',
    'TEXT_ALL_FILES_LOOKUP_HTMLTXT' => '.html y .txt',
    'TEXT_ALL_FILES_LOOKUP_JS' => '.js sólo',
    'TEXT_ALL_FILES_LOOKUP_ALL_TYPES' => 'Todo',
    'TEXT_CASE_SENSITIVE' => '¿Distingue mayúsculas de minúsculas?',
    'TEXT_CONTEXT_LINES' => 'Líneas del contexto: ',
    'TEXT_SEARCH_LOOKUP_PLACEHOLDER' => 'Introduzca frase o plantilla de búsqueda',
    'TEXT_SEARCH_KEY_PLACEHOLDER' => 'Introduzca frase o plantilla de búsqueda',
    'TEXT_SEARCH_PHRASE_PLACEHOLDER' => 'Introduzca frase de búsqueda',
    'TEXT_BUTTON_SEARCH' => 'Buscar',
    'TEXT_BUTTON_SEARCH_ALT' => 'Ejecutar Búsqueda',
    'TEXT_BUTTON_REGEX_SEARCH' => 'Grep',
    'TEXT_BUTTON_REGEX_SEARCH_ALT' => 'Buscar con plantilla Regex',
    'TEXT_ERROR_REGEX_FAIL' => 'AVISC: Había un error en la búsqueda. Si estaba utilizando un regex o búsqueda grep => revise la plantilla por errores de syntaxis.',
    'SEARCH_CFG_KEYS_HEADING_TITLE' => '<strong>Buscar en Opciones de Configuración/Keys</strong>',
    'SEARCH_CFG_KEYS_SEARCH_BOX_TEXT' => '<strong>Frase de búsqueda:</strong> (Se busca en las títulos y descripciones => y también en los configuration_keys si coincide exactamente)',
    'SEARCH_CFG_KEYS_TABLE_SECTION' => 'Sección',
    'SEARCH_CFG_KEYS_TABLE_GROUP' => 'Grupo',
    'SEARCH_CFG_KEYS_TABLE_TITLE' => 'Título',
    'SEARCH_CFG_KEYS_TABLE_DESCRIPTION' => 'Descripción',
    'SEARCH_CFG_KEYS_TABLE_VALUE' => 'Valor',
    'SEARCH_CFG_KEYS_TABLE_KEY_NAME' => 'Nombre de Key',
    'SEARCH_CFG_KEYS_TABLE_EDIT' => 'Editar',
    'SEARCH_CFG_KEYS_NOT_FOUND_KEYS' => 'No se encontró opcion(es) de configuración.',
    'SEARCH_CFG_KEYS_FOUND_KEYS' => 'opcion(es) de configuración encontrada(s).',
    'SEARCH_CFG_KEYS_FORM_PLACEHOLDER' => 'Teclear unas palabras claves de búsqueda',
    'SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP' => 'Buscar',
    'SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY' => 'Buscar (ordenado por key)',
    'SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL' => 'Ver Todo (todos los parámetros',
    'SEARCH_CFG_KEYS_FORM_BUTTON_RESET' => 'Resetear',
    'TEXT_RESET_BUTTON_ALT' => 'Limpiar todos los campos de búsqueda para empezar de nuevo.',
];

return $define;
