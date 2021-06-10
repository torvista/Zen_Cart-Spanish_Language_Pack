<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Group Pricing',
    'TABLE_HEADING_GROUP_ID' => 'ID',
    'TABLE_HEADING_GROUP_NAME' => 'Group Name',
    'TABLE_HEADING_GROUP_AMOUNT' => '% Discount',
    'TABLE_HEADING_ACTION' => 'Action',
    'TEXT_HEADING_NEW_PRICING_GROUP' => 'New Pricing Group',
    'TEXT_HEADING_EDIT_PRICING_GROUP' => 'Edit Pricing Group',
    'TEXT_HEADING_DELETE_PRICING_GROUP' => 'Delete Pricing Group',
    'TEXT_NEW_INTRO' => 'Please fill out the following information for the new group',
    'TEXT_EDIT_INTRO' => 'Please make any necessary changes',
    'TEXT_DELETE_INTRO' => 'Are you sure you want to delete this group?',
    'TEXT_DELETE_PRICING_GROUP' => 'Delete Pricing Group',
    'TEXT_DELETE_WARNING_GROUP_MEMBERS' => '<b>WARNING:</b> There are %s customers still linked to this category!',
    'TEXT_GROUP_PRICING_NAME' => 'Group Name: ',
    'TEXT_GROUP_PRICING_AMOUNT' => 'Percentage Discount: ',
    'TEXT_DATE_ADDED' => 'Date Added:',
    'TEXT_LAST_MODIFIED' => 'Date Modified:',
    'TEXT_CUSTOMERS' => 'Customers in Group:',
    'ERROR_GROUP_PRICING_CUSTOMERS_EXIST' => 'ERROR: Customers exist in that group. Please confirm that you wish to remove all members from the group and delete it.',
    'ERROR_MODULE_NOT_CONFIGURED' => 'NOTE: You have group pricing definitions, but you have not enabled the group-pricing Order Total module.<br />Please go to Admin->Modules->Order Total->Membership Discount (ot_group_pricing) and install/configure the module.',
];

return $define;
