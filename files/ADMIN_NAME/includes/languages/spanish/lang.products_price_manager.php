<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Products Price Manager',
    'HEADING_TITLE_PRODUCT_SELECT' => 'Please select a Category with Products to display the Pricing Information of ...',
    'TABLE_HEADING_PRODUCTS' => 'Products',
    'TABLE_HEADING_PRODUCTS_PRICE' => 'Products Price/Special/Sale',
    'TABLE_HEADING_PRODUCTS_PERCENTAGE' => 'Percentage',
    'TABLE_HEADING_AVAILABLE_DATE' => 'Available',
    'TABLE_HEADING_EXPIRES_DATE' => 'Expires',
    'TABLE_HEADING_STATUS' => 'Status',
    'TABLE_HEADING_ACTION' => 'Action',
    'TEXT_PRODUCT_INFO' => 'Product Info:',
    'TEXT_PRODUCTS_PRICE_INFO' => 'Product Price Info:',
    'TEXT_PRICE' => 'Price',
    'TEXT_PRICE_NET' => 'Price (Net)',
    'TEXT_PRICE_GROSS' => 'Price (Gross)',
    'TEXT_PRODUCT_AVAILABLE_DATE' => 'Available Date:',
    'TEXT_PRODUCTS_STATUS' => 'Products Status:',
    'TEXT_PRODUCT_AVAILABLE' => 'Enabled',
    'TEXT_PRODUCT_NOT_AVAILABLE' => 'Disabled',
    'TEXT_PRODUCT_IS_FREE' => 'Product is Free:',
    'TEXT_PRODUCTS_IS_FREE_EDIT' => '<br />*Product marked FREE',
    'TEXT_PRODUCT_IS_CALL' => 'Call for Price:',
    'TEXT_PRODUCTS_IS_CALL_EDIT' => '<br />*Product marked CALL FOR PRICE',
    'TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES' => 'Priced by Attributes:',
    'TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE' => 'Yes',
    'TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE' => 'No',
    'TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT' => '<br />*Display price will include lowest group attributes prices plus price',
    'TEXT_PRODUCTS_MIXED' => 'Qty Min/Unit Mix:',
    'TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY' => 'Discount Qty Applies<br />to Mixed Attributes',
    'TEXT_PRODUCTS_QUANTITY_MIN_RETAIL' => 'Qty Min:',
    'TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL' => 'Qty Units:',
    'TEXT_PRODUCTS_QUANTITY_MAX_RETAIL' => 'Qty Max:',
    'TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT' => '0= Unlimited<br />1= No Qty Box/Max Value',
    'TEXT_FEATURED_PRODUCT_INFO' => 'Featured Product Info:',
    'TEXT_FEATURED_PRODUCT' => 'Product:',
    'TEXT_FEATURED_EXPIRES_DATE' => 'Expiry Date:',
    'TEXT_FEATURED_AVAILABLE_DATE' => 'Available Date:',
    'TEXT_FEATURED_PRODUCTS_STATUS' => 'Featured Status:',
    'TEXT_FEATURED_PRODUCT_AVAILABLE' => 'Active',
    'TEXT_FEATURED_PRODUCT_NOT_AVAILABLE' => 'Inactive',
    'TEXT_FEATURED_DISABLED' => '<strong>NOTE: Featured Product Info is currently disabled, expired or not yet active</strong>',
    'TEXT_FEATURED_CONFIRM_DELETE' => 'Please confirm that you want to delete the Featured status associated with this product',
    'TEXT_SPECIALS_PRODUCT' => 'Product:',
    'TEXT_SPECIALS_SPECIAL_PRICE' => 'Special Price:',
    'TEXT_SPECIALS_SPECIAL_PRICE_NET' => 'Special Price: (Net)',
    'TEXT_SPECIALS_SPECIAL_PRICE_GROSS' => 'Special Price: (Gross)',
    'TEXT_SPECIALS_EXPIRES_DATE' => 'Expiry Date:',
    'TEXT_SPECIALS_AVAILABLE_DATE' => 'Available Date:',
    'TEXT_SPECIALS_PRICE_TIP' => '<b>Specials Notes:</b><ul><li>You can enter a percentage to deduct in the Specials Price field, for example: <b>20%</b></li><li>If you enter a new price, the decimal separator must be a \'.\' (decimal-point), example: <b>49.99</b></li><li>Leave the expiry date empty for no expiration</li></ul>',
    'TEXT_SPECIALS_PRODUCT_INFO' => 'Special Price Info:',
    'TEXT_SPECIALS_PRODUCTS_STATUS' => 'Specials Status:',
    'TEXT_SPECIALS_PRODUCT_AVAILABLE' => 'Active',
    'TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE' => 'Inactive',
    'TEXT_SPECIALS_NO_GIFTS' => 'No Specials on GV',
    'TEXT_SPECIAL_DISABLED' => '<strong>NOTE: Special Product Info is currently disabled, expired or not yet active</strong>',
    'TEXT_SPECIALS_CONFIRM_DELETE' => 'Please confirm that you want to delete the Special associated with this product',
    'TEXT_INFO_DATE_ADDED' => 'Date Added:',
    'TEXT_INFO_LAST_MODIFIED' => 'Last Modified:',
    'TEXT_INFO_NEW_PRICE' => 'New Price:',
    'TEXT_INFO_ORIGINAL_PRICE' => 'Original Price:',
    'TEXT_INFO_STATUS_CHANGE' => 'Status Change:',
    'TEXT_INFO_HEADING_DELETE_FEATURED' => 'Delete Featured',
    'TEXT_INFO_DELETE_INTRO' => 'Are you sure you want to delete the featured product?',
    'TEXT_ATTRIBUTES_INSERT_INFO' => '<strong>Define the Attribute Settings then press Insert to apply</strong>',
    'TEXT_PRODUCTS_PRICE' => 'Products Price: ',
    'TEXT_FREE' => 'FREE',
    'TEXT_CALL_FOR_PRICE' => 'Call for Price',
    'TEXT_ADD_ADDITIONAL_DISCOUNT' => 'Add ' . DISCOUNT_QTY_ADD . ' Blank Qty Discounts:',
    'TEXT_BLANKS_INFO' => 'All 0 Quantity Discounts will be removed when Updated',
    'TEXT_INFO_NO_DISCOUNTS' => 'No Quantity Discounts have been defined',
    'TEXT_PRODUCTS_DISCOUNT_QTY_TITLE' => 'Discount Levels',
    'TEXT_PRODUCTS_DISCOUNT' => 'Discount',
    'TEXT_PRODUCTS_DISCOUNT_QTY' => 'Minimum Qty',
    'TEXT_PRODUCTS_DISCOUNT_PRICE' => 'Discount Value',
    'TEXT_PRODUCTS_DISCOUNT_PRICE_EACH' => 'Calculate Price:',
    'TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED' => 'Extended Price:',
    'TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX' => 'Calculate<br />Price: &nbsp; Taxed:',
    'TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX' => 'Extended<br />Price: &nbsp; Taxed:',
    'TEXT_DISCOUNT_TYPE_INFO' => 'Product Discount Info:',
    'TEXT_DISCOUNT_TYPE' => 'Discount Type:',
    'TEXT_DISCOUNT_TYPE_FROM' => 'Discount Priced from:',
    'DISCOUNT_TYPE_DROPDOWN_0' => 'None',
    'DISCOUNT_TYPE_DROPDOWN_1' => 'Percentage',
    'DISCOUNT_TYPE_DROPDOWN_2' => 'Actual Price',
    'DISCOUNT_TYPE_DROPDOWN_3' => 'Amount off',
    'DISCOUNT_TYPE_FROM_DROPDOWN_0' => 'Price',
    'DISCOUNT_TYPE_FROM_DROPDOWN_1' => 'Special',
    'TEXT_UPDATE_COMMIT' => 'Update and Commit all changes from current screen display',
    'TEXT_PRODUCTS_TAX_CLASS' => 'Tax Class:',
    'TEXT_INFO_MASTER_CATEGORIES_ID_WARNING' => '<strong>Warning:</strong> The Product Master Category ID# %s does not match Current Category ID# %s and Product is Not Linked!',
    'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT' => 'Update Master Categories ID# %s to match Current Category ID# %s',
    'PRODUCT_WARNING_UPDATE' => 'Please make any changes then press Update to save',
    'PRODUCT_UPDATE_SUCCESS' => 'Successful Update of Product Changes!',
    'PRODUCT_WARNING_UPDATE_CANCEL' => 'Changes were Cancelled and not saved ...',
    'TEXT_INFO_EDIT_CAUTION' => '<strong>Click to begin Editing ...</strong>',
    'TEXT_INFO_PREVIEW_ONLY' => 'Preview Only ... Current Price Status ... Preview Only',
    'TEXT_INFO_UPDATE_REMINDER' => '<strong>Edit Product Information then Update to save</strong>',
    'BUTTON_ADDITIONAL_ACTIONS' => 'Additional Actions',
];

return $define;
