<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: salemaker_info.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Rebajas');
define('SUBHEADING_TITLE', 'Consejos:');
define('INFO_TEXT', '<ul>
                      <li>
                        Use siempre un \'.\' como decimal en rebajas y rangos de precio.
                      </li>
                      <li>
                        Ingrese las cantidades en la misma moneda que usar�a al crear/editar un producto.
                      </li>
                      <li>
                        En las celdas de Rebajas puede ingresar una cantidad o un porcentaje a deducir,
                        o un precio de remplazo. (ej: rebajar $5.00 de todos los precios, rebajar 10% de
                        todos los precios o cambiar todos los precios a $25.00)
                      </li>
                      <li>
                        Al ingresar un rango de precio se limita el rango de productos que ser� afectado. (ej.
                        prouductos desde $50.00 a $150.00)
                      </li>
                      <li>
                        Debe elegir la acci�n a tomar si un producto es una oferta <i>y</i> est� sujeto a esta liquidaci�n:
						<ul>
                          <li>
                            <strong>Ignorar Precios de Oferta: Aplicar al Precio del Producto y Reemplazar la Oferta</strong><br>
							La rebaja ser� aplicada al precio regular del producto.
                            (ej: el precio regular es $10.00, el precio de oferta es $9.50, la condici�n de rebaja es del 10%.
							El precio final del producto ser� $9.00 en la rebaja. Los pecios de Oferta son ignorados.)
                          </li>
                          <li>
                            <strong>Ignorar Condici�n de Rebaja: No Aplicar Rebaja Cuando Existan Ofertas</strong><br>
                            La rebaja no se aplicar� a las Ofertas. Los precios de Oferta se mostrar�n como
                            si no hubiera una rebaja definida. (ej: el precio regular es $10.00, el precio de ofreta es $9.50,
                            la condici�n de rebaja es del 10%. El precio final del producto ser� $9.50 en la rebaja.
                            La Condici�n de Rebaja es ignorada.)
                          </li>
                          <li>
                            <strong>Aplicar Rebaja a los Precios en Oferta: O si no, Aplicar al Precio</strong><br>
                            La rebaja ser� aplicada al precio en Oferta. Se mostrar� un precio combinado.
                            (ej: el precio regular es $10.00, el precio de oferta es $9.50, la condici�n de oferta es del 10%. El
                            precio final del producto ser� $8.55. Un descuento adicional del 10% sobre el precio de Oferta.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Al dejar la fecha de comienzo vac�a la liquidaci�n comenzar� inmediatamente.
                      </li>
                      <li>
                        Deje la fecha de finalizaci�n vac�a si no quiere que expire la rebaja.</li>
                      <li>
                        Al marcar una categor�a autom�ticamente se incluyen sus sub-categor�as.
                      </li>
                    </ul>');
define('TEXT_CLOSE_WINDOW', '[ cerrar ventana ]');
?>