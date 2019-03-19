<?php

/**
	*Campaign Display Module entry point
	 * @package    Campign.Display
	 * @subpackage mod_campaigndisplay
	 * @copyright  Copyright (C) 2019 Money4You Inc. All rights reserved.
 	 * @license    GNU/GPL, see LICENSE.php
 */

	// Only accesible through Joomla
defined('_JEXEC') or die;

// Include the syndicate functions only once =>Gets the database handler
require_once dirname(__FILE__) . '/helper.php';

$hello = modCampaignDisplayHelper::getCampaign($params);
require JModuleHelper::getLayoutPath('mod_campaigndisplay');
