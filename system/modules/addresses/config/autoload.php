<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Addresses
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

ClassLoader::addNamespaces(array
(
    'W3S',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'W3S\Addresses\Address' => 'system/modules/addresses/classes/Address.php',
));
