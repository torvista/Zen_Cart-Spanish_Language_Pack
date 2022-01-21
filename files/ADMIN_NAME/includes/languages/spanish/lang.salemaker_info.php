<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Rebajas',
    'SUBHEADING_TITLE' => 'Consejos:',
    'INFO_TEXT' => '<ul>
                      <li>
                        Use siempre un \'.\' como decimal en rebajas y rangos de precio.
                      </li>
                      <li>
                        Ingrese las cantidades en la misma moneda que usaría al crear/editar un producto.
                      </li>
                      <li>
                        En las celdas de Rebajas puede ingresar una cantidad o un porcentaje a deducir,
                        o un precio de remplazo. (ej: rebajar $5.00 de todos los precios => rebajar 10% de
                        todos los precios o cambiar todos los precios a $25.00)
                      </li>
                      <li>
                        Al ingresar un rango de precio se limita el rango de productos que será afectado. (ej.
                        productos desde $50.00 a $150.00)
                      </li>
                      <li>
                        Debe elegir la acción a tomar si un producto es una oferta <i>y</i> está sujeto a esta liquidación:
						<ul>
                          <li>
                            <strong>Ignorar Precios de Oferta: Aplicar al Precio del Producto y Reemplazar la Oferta</strong><br>
							La rebaja será aplicada al precio normal del producto.
                            (ej: el precio regular es $10.00 => el precio de oferta es $9.50 => la condición de rebaja es del 10%.
							El precio final del producto será $9.00 en la rebaja. Los pecios de Oferta son ignorados.)
                          </li>
                          <li>
                            <strong>Ignorar Condición de Rebaja: No Aplicar Rebaja Cuando Existan Ofertas</strong><br>
                            La rebaja no se aplicará a las Ofertas. Los precios de Oferta se mostrarán como
                            si no hubiera una rebaja definida. (ej: el precio normal es $10.00 => el precio de oferta es $9.50,
                            la condición de rebaja es del 10%. El precio final del producto será $9.50 en la rebaja.
                            La Condición de Rebaja es ignorada.)
                          </li>
                          <li>
                            <strong>Aplicar Rebaja a los precios en Oferta: O si no => Aplicar al Precio</strong><br>
                            La rebaja será aplicada al precio en Oferta. Se mostrará un precio combinado.
                            (ej: el precio normal es $10.00 => el precio de oferta es $9.50 => la condición de oferta es del 10%. El
                            precio final del producto será $8.55. Un descuento adicional del 10% sobre el precio de Oferta.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Al dejar la fecha de comienzo vacía la liquidación comenzará inmediatamente.
                      </li>
                      <li>
                        Deje la fecha de finalización vacía si no quiere que expire la rebaja.</li>
                      <li>
                        Al marcar una categoría automáticamente se incluyen sus subcategorías.
                      </li>
                    </ul>',
];

return $define;