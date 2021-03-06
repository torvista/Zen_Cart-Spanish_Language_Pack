<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mc12345678 2021 Nov 20 Modified in v1.5.7d $
 */
  define('HEADING_TITLE', 'Buscadores de Código Fuente ');
  define('TABLE_CONFIGURATION_TABLE', 'Buscar definiciones de CONSTANTS');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'Actualización realizada con <strong>éxito</strong> para los valores de ordenación de precios de producto');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Error:</strong> No se encontraron claves de configuración coincidentes ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Error:</strong> No introdujo clave de configuración o texto de búsqueda ... Se interrumpió la búsqueda');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Actualice TODOS los ordenadores sobre precios de producto</strong><br />para poder ordenar por los precios mostrados: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Buscar definiciones CONSTANTES o de archivo de idioma</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Clave o nombre:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTA:</strong> Las CONSTANTES se escriben en mayúsculas.<br />Búsquedas de archivo de idioma, Functions, Classes, etc. se realizan cuando no se ha encontrado nada en las tablas de bases de datos, si se selecciona en la lista desplegable');

  define('TABLE_TITLE_KEY', '<strong>Clave:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Título:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Descripción:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Grupo:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valor:</strong>');

  define('TEXT_LOOKUP_NONE', 'Ninguno');
  define('TEXT_INFO_SEARCHING', 'Buscando ');
  define('TEXT_INFO_FILES_FOR', ' archivos ... para: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Líneas coincidentes encontradas: ');
  define('TEXT_INFO_FILENAME', 'ARCHIVO: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Búsqueda de archivos de idioma:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Todos los archivos de idioma para ' . strtoupper($_SESSION['language']) . ' - Catálogo/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Todos los archivos principales de idioma - Catálogo (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Todos los archivos de idioma seleccionados actualmente - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Todos los archivos principales de idioma - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Todos los archivos de idioma seleccionados - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Todos los archivos de idioma seleccionados - Catálogo/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Búsqueda de Functions o cosas en los archivos de Functions</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Búsqueda de Functions:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Todos los archivos de Functions - Catálogo/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Todos los archivos de Functions - Catálogo');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Todos los archivos de Functions - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Buscar Classes o cosas en los archivos de Classes</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Búsquedas de archivos de Classes:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Todos los archivos de Classes - Catálogo/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Todos los archivos de Classes - Catálogo');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Todos los archivos de Classes- Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Buscar cosas en la plantilla</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Búsqueda de archivos de plantilla:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Todos los archivos de plantilla - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Todos los archivos de plantilla - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Todos los archivos de plantilla - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Todos los archivos de plantilla - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Buscar en todos los archivos (incluyendo zc_plugins)</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Búsqueda de todos los archivos:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Todos los archivos - Catálogo/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Todos los archivos - Catálogo');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Todos los archivos - Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_PLUGINS', 'Todos los archivos - Plugins');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Edición no disponible');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' u, OCULTO');

  define('TEXT_SEARCH_ALL_FILES', 'Buscar en todos los archivos para: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Buscar en las tablas de configuración del base de datos para: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Tipo de Archivo');
  define('TEXT_ALL_FILES_LOOKUP_PHP', '.php sólo');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php y .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', '.css sólo');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html y .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', '.js sólo');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Todo');

  define('TEXT_CASE_SENSITIVE', '¿Distingue mayúsculas de minúsculas?');
  define('TEXT_INCLUDE_PLUGINS', '¿Incluir Plugins?');
  define('TEXT_CONTEXT_LINES', 'Líneas del contexto: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Introduzca frase o plantilla de búsqueda');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Introduzca frase o plantilla de búsqueda');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Introduzca frase de búsqueda');
  define('TEXT_BUTTON_SEARCH', 'Buscar');
  define('TEXT_BUTTON_SEARCH_ALT', 'Ejecutar Búsqueda');
  define('TEXT_BUTTON_REGEX_SEARCH', 'Grep');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Buscar con plantilla Regex');
  define('TEXT_ERROR_REGEX_FAIL', 'AVISC: Había un error en la búsqueda. Si estaba utilizando un regex o búsqueda grep, revise la plantilla por errores de syntaxis.');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Buscar en Opciones de Configuración/Keys</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Frase de búsqueda:</strong> (Se busca en las títulos y descripciones, y también en los configuration_keys si coincide exactamente)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Sección');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Grupo');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Título');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Descripción');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Valor');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Nombre de Key');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Editar');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'No se encontró opcion(es) de configuración.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'opcion(es) de configuración encontrada(s).');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Teclear unas palabras claves de búsqueda');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Buscar');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Buscar (ordenado por key)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Ver Todo (todos los parámetros');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Resetear');
  define('TEXT_RESET_BUTTON_ALT', 'Limpiar todos los campos de búsqueda para empezar de nuevo.');
