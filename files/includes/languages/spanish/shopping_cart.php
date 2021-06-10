<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php Modified in v1.6.0 $
 */

define('TEXT_INFORMATION', 'Puede seguir con el proceso de la compra pinchando en el botón inferior "' . BUTTON_CHECKOUT_ALT . '". Se añade los gastos de Envío, los impuestos y descuentos en las páginas siguientes.');//steve changed button name for constant

define('NAVBAR_TITLE', 'Carro de la Compra');
define('HEADING_TITLE', 'Contenido del Carro de la Compra');
define('HEADING_TITLE_EMPTY', 'Su Carro de la Compra');
define('TABLE_HEADING_REMOVE', 'Quitar');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRICE', 'Precio');
define('TEXT_CART_EMPTY', 'Su Carro de la Compra está vacío.');
define('SUB_TITLE_SUB_TOTAL', 'Subtotal:');
define('SUB_TITLE_TOTAL', 'Total:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' están agotados o no hay en suficiente cantidad para atender su pedido.<br />Por favor, modifique la cantidad de productos marcados con (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Gracias');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' están agotados.<br />Dichos productos serán puestos en un pedido de espera.');

define('TEXT_TOTAL_ITEMS', 'Total de Productos: ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Peso: ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Cantidad: ');

define('TEXT_VISITORS_CART', '<a class="help" href="javascript:popupInfoShoppingCart();"><i class="fa fa-question-circle fa-2x"></i></a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
