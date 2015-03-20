<?php
/**
* @package    JJ_Shoutbox_Component
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All rights reserved.
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access to this file
defined('_JEXEC') or die;

// Get an instance of the controller prefixed by Shoutbox
$controller = JControllerLegacy::getInstance('Shoutbox');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();
