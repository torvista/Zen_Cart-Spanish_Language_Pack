<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 6550 2007-07-05 03:54:54Z drbyte $
 */

define('TEXT_MAIN','Esta es la definici�n del saludo principal para la p�gina en castellano cuando no existe ninguna plantilla definida. Est� ubicada en: <strong>/includes/languages/spanish/motorvista1/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', '�Bienvenido/a! �Quiere <a href="%s">identificarse</a> o <a href="%s">crear una cuenta nueva</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Bienvenido, esperamos que disfrute de nuestro escaparate virtual.');
}

define('TEXT_GREETING_PERSONAL', '�Hola <span class="greetUser">%s</span>! �Quiere ver nuestras <a href="%s">�ltimas novedades</a>?');

define('TEXT_INFORMATION', 'Defina aqu� su p�gina Index principal.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Productos destacados');

//define('TABLE_HEADING_NEW_PRODUCTS', 'Nuevos productos el %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Pr�ximos productos');
//define('TABLE_HEADING_DATE_EXPECTED', 'Fecha esperada');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
   // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Productos disponibles');
  define('TABLE_HEADING_IMAGE', 'Imagen');
  define('TABLE_HEADING_MODEL', 'Modelo');
  define('TABLE_HEADING_PRODUCTS', 'Nombre');
  define('TABLE_HEADING_MANUFACTURER', 'Fabricante');
  define('TABLE_HEADING_QUANTITY', 'Cantidad');
  define('TABLE_HEADING_PRICE', 'Precio');
  define('TABLE_HEADING_WEIGHT', 'Peso');
  define('TABLE_HEADING_BUY_NOW', 'Comprar ahora');
  define('TEXT_NO_PRODUCTS', 'No hay productos disponibles en esta categor�a.');
  define('TEXT_NO_PRODUCTS2', 'No hay productos disponibles en este fabricante.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'N�mero de productos: ');
  define('TEXT_SHOW', 'Filtrar por:');
  define('TEXT_BUY', 'Comprar 1 \'');
  define('TEXT_NOW', '\' ahora');
  define('TEXT_ALL_CATEGORIES', 'Todas las categor�as');
  define('TEXT_ALL_MANUFACTURERS', 'Todos los fabricantes');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '�Enhorabuena! Ha instalado su tienda Zen Cart con �xito.');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '�Enhorabuena! Ha instalado su tienda Zen Cart con �xito.'); 
}
?>