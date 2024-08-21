<?php //spanish
/*
 * BOOTSTRAP v3.7.2
 */
// -----
// Part of the Bootstrap template, defining commonly-used phrases and phrases unique to the bootstrap template.
//
$define = [
    'BOOTSTRAP_PLEASE_SELECT' => 'Elija ...',
    'BOOTSTRAP_CURRENT_ADDRESS' => ' (Seleccionado)',

// -----
// Additional buttons.
//
    'BUTTON_BACK_TO_TOP_TITLE' => 'Arriba',

// -----
// Used on the products_all and product listing for the alpha-filter dropdown.
// Note: Defined in multiple language files for zc158 and zc200!
//
    'TEXT_SHOW' => 'Filtrar por:',

// -----
// Used during checkout and on various address-rendering pages.
//
    'TEXT_SELECT_OTHER_PAYMENT_DESTINATION' => 'Elija la dirección de facturación si es distinto a la dirección del envío.',
    'TEXT_SELECT_OTHER_SHIPPING_DESTINATION' => 'Elija la dirección de envío si es distinto a la seleccionada.',
    'NEW_ADDRESS_TITLE' => 'Introduzca la dirección nueva',
    'TEXT_PRIMARY_ADDRESS' => ' (Dirección Principal)',
    'PRIMARY_ADDRESS' => ' (Dirección Principal)',
    'TABLE_HEADING_ADDRESS_BOOK_ENTRIES' => 'Elige una Dirección de la Agenda',

// -----
// Used on the product*_info pages.
//
    'TEXT_MULTIPLE_IMAGES' => ' Imágenes Adicionales ',
    'TEXT_SINGLE_IMAGE' => ' Imagen Mayor ',
    'PREV_NEXT_FROM' => ' desde ',
    'IMAGE_BUTTON_PREVIOUS' => 'Anterior',
    'IMAGE_BUTTON_NEXT' => 'Siguiente',
    'IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST' => 'Volver al Listado',
    'MODAL_ADDL_IMAGE_PLACEHOLDER_ALT' => 'Imágenes Adicionales Modales para %s',   //- %s is filled in with the product's name

// -----
// Used on the product_music_info page.
//
    'TEXT_ARTIST_URL' => 'Para más información, visite <a href="%s" target="_blank">la página web del Artista</a>.',
    'TEXT_PRODUCT_RECORD_COMPANY' => 'Discográfico: ',

// -----
// Used on the shopping_cart page.
//
    'TEXT_CART_MODAL_HELP' => '[ayuda (?)]',
    'HEADING_TITLE_CART_MODAL' => 'Carro del Invitad@ / Carro del Registrad@',
    'TEXT_CART_ARIA_HEADING_DELETE_COLUMN' => 'Haga clic en el icono de esta columna para borrarlo.',
    'TEXT_CART_ARIA_HEADING_UPDATE_COLUMN' => 'Haga clic en el icono de esta columna para actualizar la cantidad.',

// -----
// Used on various pages that display the cart's contents.
//
    'SUB_TITLE_TOTAL' => 'Total:',

// -----
// Used by various product listing pages, e.g. SNAF.
//
    // -----
    // The two image-heading constants are used when a site chooses to display listings
    // in table-mode (PRODUCT_LISTING_COLUMNS_PER_ROW is set to '1').  If your site wants
    // the image-heading to *always* be displayed, set the TABLE_HEADING_IMAGE value to
    // the text you desire.  If that value is set to an empty string, then a screen-reader-only
    // heading is used along with the TABLE_HEADING_IMAGE_SCREENREADER value.
    //
    'TABLE_HEADING_IMAGE' => '',
    'TABLE_HEADING_IMAGE_SCREENREADER' => 'Imagen',

    'TABLE_HEADING_PRODUCTS' => 'Nombre',
    'TABLE_HEADING_MANUFACTURER' => 'Fabricante',
    'TABLE_HEADING_PRICE' => 'Precio',
    'TABLE_HEADING_WEIGHT' => 'Peso',
    'TABLE_HEADING_BUY_NOW' => 'Comprar Ahora',
    'TEXT_NO_PRODUCTS' => 'No hay productos en esta categoría.',
    'TEXT_NO_PRODUCTS2' => 'No hay productos disponibles desde este fabricante.',

// -----
// Used by various /modalboxes
//
    'TEXT_MODAL_CLOSE' => 'Cerrar',
    'TEXT_MORE_INFO' => '[Más Info]',
    'ARIA_REVIEW_STAR' => 'estrella',
    'ARIA_REVIEW_STARS' => ' estrellas',

// -----
// Overriding definition for the login page, removing unwanted javascript.
//
    'TEXT_VISITORS_CART' => '<strong>Aviso:</strong> Si dejó productos en el carro en una sesión previa, se combinarán con los productos actuales cuando entra en su cuenta.',

// -----
// Used by the (optional) AJAX search feature.
//
    'TEXT_AJAX_SEARCH_TITLE' => '¿Qué Busca?',
    'TEXT_AJAX_SEARCH_PLACEHOLDER' => 'Buscar aquí...',
    'TEXT_AJAX_SEARCH_RESULTS' => '%u resultados.',
    'TEXT_AJAX_SEARCH_VIEW_ALL' => 'Ver Todos',

// -----
// ARIA label text, used in the common header.
//
    'TEXT_HEADER_ARIA_LABEL_NAVBAR' => 'Barra Navegación',
    'TEXT_HEADER_ARIA_LABEL_LOGO' => 'Logotipo',

// -----
// <h1> text for index pages where the 'normal' heading-text isn't used by a
// store ... for accessibility.
//
// Note: For zc200, this constant will be in /includes/languages/spanish/lang.index.php.
//
    'HEADING_TITLE_SCREENREADER' => 'Ver Texto Adicional abajo',
];
return $define;
