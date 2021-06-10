<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE_OPT' => 'Product Options',
    'HEADING_TITLE_VAL' => 'Option Values',
    'HEADING_TITLE_ATRIB' => 'Products Attributes',
    'TABLE_HEADING_ID' => 'ID',
    'TABLE_HEADING_PRODUCT' => 'Product Name',
    'TABLE_HEADING_OPT_NAME' => 'Option Name',
    'TABLE_HEADING_OPT_VALUE' => 'Option Value',
    'TABLE_HEADING_OPT_PRICE' => 'Price',
    'TABLE_HEADING_OPT_PRICE_PREFIX' => 'Prefix',
    'TABLE_HEADING_ACTION' => 'Action',
    'TABLE_HEADING_DOWNLOAD' => 'Downloadable products:',
    'TABLE_TEXT_FILENAME' => 'Filename:',
    'TABLE_TEXT_MAX_DAYS' => 'Expiry days:',
    'TABLE_TEXT_MAX_COUNT' => 'Maximum download count:',
    'TEXT_WARNING_OF_DELETE' => '<span class="alert">This option has products and values linked to it - it is not safe to delete it.<br />NOTE: Any associated Download files for this Option Value will not be removed from the server.</span>',
    'TEXT_OK_TO_DELETE' => 'This option has no products and values linked to it - it is safe to delete it.',
    'TEXT_OPTION_ID' => 'Option ID',
    'TEXT_OPTION_NAME' => 'Option Name',
    'ATTRIBUTE_WARNING_DUPLICATE' => 'Duplicate Attribute - Attribute was not added',
    'ATTRIBUTE_WARNING_DUPLICATE_UPDATE' => 'Duplicate Attribute Exists - Attribute was not changed',
    'ATTRIBUTE_WARNING_INVALID_MATCH' => 'Attribute Option and Option Value Do NOT Match - Attribute was not added',
    'ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE' => 'Attribute Option and Option Value Do NOT Match - Attribute was not changed',
    'ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE' => 'Possible Duplicate Options Name Added',
    'ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE' => 'Possible Duplicate Options Value Added',
    'PRODUCTS_ATTRIBUTES_EDITING' => 'EDITING',
    'PRODUCTS_ATTRIBUTES_DELETE' => 'DELETING',
    'PRODUCTS_ATTRIBUTES_ADDING' => 'ADDING NEW ATTRIBUTES',
    'TEXT_DOWNLOADS_DISABLED' => 'NOTE: Downloads are disabled',
    'TABLE_TEXT_MAX_DAYS_SHORT' => 'Days:',
    'TABLE_TEXT_MAX_COUNT_SHORT' => 'Max:',
    'TABLE_HEADING_OPTION_SORT_ORDER' => 'Sort Order',
    'TABLE_HEADING_OPTION_VALUE_SORT_ORDER' => 'Default Order',
    'TEXT_SORT' => ' Order: ',
    'TABLE_HEADING_OPT_WEIGHT_PREFIX' => 'Prefix',
    'TABLE_HEADING_OPT_WEIGHT' => 'Weight',
    'TABLE_HEADING_OPT_SORT_ORDER' => 'Sort Order',
    'TABLE_HEADING_OPT_TYPE' => 'Option Type',
    'TABLE_HEADING_OPTION_VALUE_SIZE' => 'Size',
    'TABLE_HEADING_OPTION_VALUE_MAX' => 'Max',
    'TEXT_OPTION_VALUE_COMMENTS' => 'Comments: ',
    'TEXT_OPTION_VALUE_SIZE' => 'Display Size: ',
    'TEXT_OPTION_VALUE_MAX' => 'Maximum length: ',
    'TEXT_ATTRIBUTES_IMAGE' => 'Attributes Image Swatch:',
    'TEXT_ATTRIBUTES_IMAGE_DIR' => 'Attributes Image Directory:',
    'TEXT_ATTRIBUTES_FLAGS' => 'Attribute<br />Flags:',
    'TEXT_ATTRIBUTES_DISPLAY_ONLY' => 'Used For<br />Display Purposes Only:',
    'TEXT_ATTRIBUTES_IS_FREE' => 'Attribute is Free<br />When Product is Free:',
    'TEXT_ATTRIBUTES_DEFAULT' => 'Default Attribute<br />to be Marked Selected:',
    'TEXT_ATTRIBUTE_IS_DISCOUNTED' => 'Apply Same Discounts<br />Used by Product:',
    'TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED' => 'Include in Base Price<br />When Priced by Attributes',
    'TEXT_PRODUCT_OPTIONS_INFO' => 'Edit Product Options for additional settings',
    'TEXT_OPTION_VALUE_COPY_ALL' => '<strong>Copy to ALL Products where Option Name and Value ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_ALL' => 'Select an Option Name and Value that currently exists on a product or products that you then want to copy another Option Name and Value to for all products with this existing Option Name and Value',
    'TEXT_SELECT_OPTION_FROM' => 'Option Name to match:',
    'TEXT_SELECT_OPTION_VALUES_FROM' => 'Option Value to match:',
    'TEXT_SELECT_OPTION_TO' => 'Option Name to add:',
    'TEXT_SELECT_OPTION_VALUES_TO' => 'Option Value to add:',
    'TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID' => 'Leave blank for ALL Products or<br />enter a Category ID for Products to update',
    'TEXT_OPTION_VALUE_COPY_OPTIONS_TO' => '<strong>Copy Option Name/Value to Products with existing Option Name ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO' => 'Select an Option Name and Value that currently exists on a product or products to add to all products or to only the products in the selected category that have the selected Option Name.
                                                   <br /><strong>Example:</strong> Add Option Name: Color Option Value: Red to all Products with Option Name: Size
                                                   <br /><strong>Example:</strong> Add Option Name: Color Option Value: Green with default values from Products ID: 34 to all Products with Option Name: Size
                                                   <br /><strong>Example:</strong> Add Option Name: Color Option Value: Green with default values from Products ID: 34 to all Products with Option Name: Size for Categories ID: 65
        ',
    'TEXT_SELECT_OPTION_TO_ADD_TO' => 'Option Name to add to:',
    'TEXT_SELECT_OPTION_FROM_ADD' => 'Option Name to add:',
    'TEXT_SELECT_OPTION_VALUES_FROM_ADD' => 'Option Value to add:',
    'TEXT_SELECT_OPTION_FROM_PRODUCTS_ID' => 'Default New Attribute Values from Product ID# or leave blank for no default values:',
    'TEXT_COPY_ATTRIBUTES_CONDITIONS' => '<strong>How should existing product attributes be handled?</strong>',
    'TEXT_COPY_ATTRIBUTES_DELETE' => '<strong>Delete</strong> first, then copy new attributes',
    'TEXT_COPY_ATTRIBUTES_UPDATE' => '<strong>Update</strong> existing attributes with new settings/prices',
    'TEXT_COPY_ATTRIBUTES_IGNORE' => '<strong>Ignore</strong> existing attributes and add only new attributes',
    'TEXT_INFO_FROM' => ' from: ',
    'TEXT_INFO_TO' => ' to: ',
    'ERROR_OPTION_VALUES_COPIED' => 'Error: Duplicate Option Name and Option Value',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH' => 'Error: Mismatched Option Name and Option Value selected',
    'ERROR_OPTION_VALUES_NONE' => 'Error: Nothing found to copy',
    'SUCCESS_OPTION_VALUES_COPIED' => 'Successful copy! ',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID' => 'Error: Missing Option Name/Value for Products ID#',
    'TEXT_OPTION_VALUE_DELETE_ALL' => '<strong>Delete Matching Attribute from ALL Products where Option Name and Value ...</strong>',
    'TEXT_INFO_OPTION_VALUE_DELETE_ALL' => 'Select an Option Name and Value that currently exists on a product or products that you want deleted from ALL Products or from ALL Products within one Category',
    'TEXT_SELECT_DELETE_OPTION_FROM' => 'Option Name to match:',
    'TEXT_SELECT_DELETE_OPTION_VALUES_FROM' => 'Option Value to match:',
    'ERROR_OPTION_VALUES_DELETE_MISMATCH' => 'Error: Mismatched Option Name and Option Value selected',
    'SUCCESS_OPTION_VALUES_DELETE' => 'Successful: Deletion of: ',
    'LABEL_FILTER' => 'Select Option Value to filter',
    'TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Option Values)',
    'TEXT_SHOW_ALL' => 'Show All',
];

return $define;
