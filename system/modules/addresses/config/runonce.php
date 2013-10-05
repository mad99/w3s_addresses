<?php

/**
 * PHP version 5
 * @copyright  w3scouts.com
 * @author     Darko Selesi <hallo@w3scouts.com>
 * @license    LGPL
 */

class AddressesRunonce extends \Controller
{

    /**
     * Initialize the object
     */
    public function __construct()
    {
        parent::__construct();

        // Fix potential Exception on line 0 because of __destruct method (see http://dev.contao.org/issues/2236)
        $this->import((TL_MODE == 'BE' ? 'BackendUser' : 'FrontendUser'), 'User');
        $this->import('Database');
    }

    /**
     * Run the controller
     */
    public function run()
    {
        $currentVersion = sprintf('%s.%s', ADDRESSES_VERSION, ADDRESSES_BUILD);

        if (!empty($GLOBALS['TL_CONFIG']['li_crm_version']))
        {
            $this->Config->update("\$GLOBALS['TL_CONFIG']['li_crm_version']", $currentVersion);
        }
        else
        {
            $this->Config->add("\$GLOBALS['TL_CONFIG']['li_crm_version']", $currentVersion);
        }

    }

}

/**
 * Instantiate controller
 */
$aRunner = new AddressesRunonce();
$aRunner->run();