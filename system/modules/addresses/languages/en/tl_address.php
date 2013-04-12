<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Liplex Webprogrammierung und -design Christian Kolb 2011 
 * @author     Christian Kolb 
 * @license    LGPL 
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_address']['street_2']         = array('Street 2', 'Insert a second address line if necessary.');
$GLOBALS['TL_LANG']['tl_address']['street_3']         = array('Street 3', 'Insert a third address line if necessary.');
$GLOBALS['TL_LANG']['tl_address']['secondEmail']      = array('Second email address', 'Please insert a second email address.');
$GLOBALS['TL_LANG']['tl_address']['isBillingAddress'] = array('Billing address', 'Click here if this is a billing address.');
$GLOBALS['TL_LANG']['tl_address']['isPrivateAddress'] = array('Private address', 'Click here if this is a private address.');
$GLOBALS['TL_LANG']['tl_address']['isDefaultAddress'] = array('Default address', 'Click here if this is the default address of this member. All address data will be copied to the address of the contao member.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_address']['personal_legend']   = 'Personal data';
$GLOBALS['TL_LANG']['tl_address']['address_legend']    = 'Address data';
$GLOBALS['TL_LANG']['tl_address']['contact_legend']    = 'Contact data';
$GLOBALS['TL_LANG']['tl_address']['additional_legend'] = 'Additional data';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_address']['business_address']   = 'Business address';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_address']['new']    = array('New address', 'Create a new address');
$GLOBALS['TL_LANG']['tl_address']['show']   = array('Show addressdetails', 'Show details of the address ID %s');
$GLOBALS['TL_LANG']['tl_address']['edit']   = array('Edit address', 'Edit address ID %s');
$GLOBALS['TL_LANG']['tl_address']['copy']   = array('Copy address', 'Copy address ID %s');
$GLOBALS['TL_LANG']['tl_address']['delete'] = array('Delete address', 'Delete address ID %s');

?>