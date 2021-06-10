<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: developers_tool_kit.php 14139 2009-08-10 13:46:02Z wilt $
 */
  define('HEADING_TITLE', 'Herramientas de desarrollo');
  define('TABLE_CONFIGURATION_TABLE', 'Buscar definiciones CONSTANTES');
  
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'Actualizaci�n realizada con <strong>�xito</strong> para los valores de ordenaci�n de precios de producto');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Error:</strong> No se encontraron claves de configuraci�n coincidentes ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Error:</strong> No introdujo clave de configuraci�n o texto de b�squeda ... Se interrumpi� la b�squeda');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Actualice TODOS los ordenadores sobre precios de producto</strong><br />para poder ordenar por los precios mostrados: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Buscar definiciones CONSTANTES o de archivo de idioma</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Clave o nombre:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTA:</strong> Las CONSTANTES se escriben en may�scula.<br />B�squedas de archivo de idioma, funciones, clases, etc. se realizan cuando no se ha encontrado nada en las tablas de bases de datos, si se selecciona en la lista desplegable');

  define('TABLE_TITLE_KEY', '<strong>Clave:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>T�tulo:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Descripci�n:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Grupo:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valor:</strong>');

  define('TEXT_LOOKUP_NONE', 'Ninguno');
  define('TEXT_INFO_SEARCHING', 'Buscando ');
  define('TEXT_INFO_FILES_FOR', ' archivos ... para: ');
  define('TEXT_INFO_MATCHES_FOUND', 'L�neas coincidentes encontradas: ');
  define('TEXT_INFO_FILENAME', 'ARCHIVO: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'B�squeda de archivos de idioma:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Todos los archivos de idioma para ' . strtoupper($_SESSION['language']) . ' - Cat�logo/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Todos los archivos principales de idioma - Cat�logo (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Todos los archivos de idioma seleccionados actualmente - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Todos los archivos principales de idioma - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Todos los archivos de idioma seleccionados - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Todos los archivos de idioma seleccionados - Cat�logo/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>B�squeda de funciones o cosas en los archivos de funciones</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'B�squeda de archivos de funciones:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Todos los archivos de funciones - Cat�logo/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Todos los archivos de funciones - Cat�logo');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Todos los archivos de funciones - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Buscar clases o cosas en las clases</strong>');
  define('TEXT_CLASS_LOOKUPS', 'B�squedas de archivos de clase:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Todos los archivos de clase - Cat�logo/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Todos los archivos de clase - Cat�logo');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Todos los archivos de clase - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Buscar cosas en la plantilla</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'B�squeda de archivos de plantilla:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Todos los archivos de plantilla - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Todos los archivos de plantilla - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Todos los archivos de plantilla - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Todos los archivos de plantilla - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Buscar en todos los archivos</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'B�squeda de todos los archivos:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Todos los archivos - Cat�logo/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Todos los archivos - Cat�logo');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Todos los archivos - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Edici�n no disponible');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' u, OCULTO');
  
  define('TEXT_SEARCH_ALL_FILES', 'Buscar en todos los archivos para: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Buscar en las tablas de configuraci�n del base de datos para: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Tipo de Archivo');
  define('TEXT_ALL_FILES_LOOKUP_PHP', '.php s�la');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php y .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', '.css s�lo');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html y .txt');

  define('TEXT_CASE_SENSITIVE', '�Distingue may�sculas de min�sculas ?');

?>