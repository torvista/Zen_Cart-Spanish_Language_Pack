<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: store_manager.php 15954 2010-04-15 16:56:44Z drbyte $
 */

  define('HEADING_TITLE', 'Administraci�n de tienda');
  define('TABLE_CONFIGURATION_TABLE', 'Buscar definiciones CONSTANTES');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', 'Actualizaci�n <strong>exitosa</strong> para la ordenaci�n de atributos');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'Actualizaci�n <strong>exitosa</strong> para los valores de ordenaci�n de precios de productos');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', 'Reinicio <strong>exitoso</strong> de productos vistos a 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', 'Reinicio <strong>exitoso</strong> de pedidos a 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', 'Reinicio <strong>exitoso</strong> de todas las caracteristicas principales para productos enlazados');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Actualizaci�n exitosa</strong> del contador a: ');
  define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Actualizaci�n exitosa</strong> del registro de actividades de los administradores.');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Error:</strong> No se encontr� configuraci�n coincidente ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Error:</strong> No se introdujo clave de configuraci�n o texto a buscar ... la b�squeda finaliz�');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Actualizar contador</strong><br />a un nuevo valor: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Actualizar TODOS los ordenadores de precio de productos</strong><br />para que puedan ordenar por los precios mostrados: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Reiniciar TODOS los productos vistos</strong><br />Reiniciar cuenta de productos vistos a 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Reiniciar TODOS los pedidos</strong><br />Reiniciar cuenta de pedidos a 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Reiniciar TODOS los ID de categor�a maestra</strong><br />Para ser usados en productos enlazados y tasaciones: ');
  define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Vaciar el registro de activades del admin<br />ATENCI�N: Haga una copia de seguridad de la base de datos antes de realizar esta acci�n!</strong><br />El registro de la actividad del admin registra toda la actividad de los administradores. Debido a su naturaleza puede hacerse muy grande r�pidamente y es necesario hacer una limpieza cada cierto tiempo.<br />Se mostrar� un aviso al llegar a los 50.000 registros o cuando pasen 60 d�as desde la �ltima limpieza.');

  define('TEXT_ORDERS_ID_UPDATE', '<strong>Reiniciar el ID de pedido actual</strong>');
  define('TEXT_INFO_ORDERS_ID_UPDATE', '<strong>NOTA: Antes de actualizar el ID de pedido actual ...</strong><br /><br />Cree un pedido de prueba primero. Luego, usando este ID del dpedido de prueba, complete la informaci�n de debajo.<br />El nuevo ID de pedido para el siguiente pedido real debe ser introducido como 1 menos que el ID de pedido que quieres usar.<br /><strong>Ejemplo:</strong; Si quieres que el siguiente ID de pedido real sea el 1224<br /><br /><strong>ATENCI�N:</strong> S�lo puede reiniciar el ID de pedido hacia alante, no hacia atr�s.</br>As� que si configura el ID de pedidos a 25, y despu�s lo cambias de nuevo a 20, el siguiente ID de pedido ser� aun 26.');
  define('TEXT_OLD_ORDERS_ID', 'ID de pedido antigo');
  define('TEXT_NEW_ORDERS_ID', 'ID de pedido nuevo');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Buscar CONSTANTES definiciones de archivos de idioma</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Clave o nombre:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTA:</strong> las CONSTANTES est�n escritas en may�scula.<br />Las b�squedas de archivos de idioma pueden ser una b�squeda alternativa cuando no se encuentra nada en las tablas de la base de datos.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Buscar en definiciones de archivos de idiomas</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Buscar texto:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>NOTA:</strong> Los t�rminos de b�squeda en archivos de idioma pueden estar tanto en may�sculas como en min�sculas');

  define('TABLE_TITLE_KEY', '<strong>Clave:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>T�tulo:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Descripci�n:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Grupo:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valor:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'B�squedas en archivos de idioma:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Ninguno');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Todos los archivos de idioma para ' . strtoupper($_SESSION['language']) . ' - Cat�logo/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Todos los archivos principales de idioma - Cat�logo (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Todos los archivos de idioma seleccionados actualmente - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Todos los archivos principales de idioma - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /spanish.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Todos los archivos de idioma seleccionados actualmente - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Todos los archivos de idioma seleccionados actualmente - Cat�logo/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Edici�n no disponible');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' u, OCULTO');
  
  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimizar base de datos</strong> para quitar el espacio de registros borrados.<br />Se recomienda hacerlo mensualmente o semanalmente en una tienda con mucho movimiento (Es recomendable optimizar la base de datos en horario de poca afluencia de visitantes).');
  define('SUCCESS_DB_OPTIMIZE', 'Optimizaci�n de la base de datos - Tablas procesadas: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Borrar archivos LOG de Debug</strong><br /><strong>�Precauci�n!: </strong>Zen Cart graba los mensaje de errores PHP para ayudar en la b�squeda de problemas,  y muchos de los m�dulos de pago puede crear archivos LOG para diagnosticar problemas de comunicaci�n.<br />Esta funci�n borrar� *TODOS* los archivos LOG asociados con errores PHP y los m�dulos de pago PayPal, Authorize.net, y  Linkpoint/FirstData.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Los archivos LOG han sido borrados.');