<?php
/**
* @package    JJ_Shoutbox_Component
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All rights reserved.
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

defined('_JEXEC') or die;

abstract class ShoutboxHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(
			JText::_('COM_SHOUTBOX_SUBMENU_SHOUTS'),
			'index.php?option=com_shoutbox',
			$submenu == 'shouts'
		);

	}
	/**
	 * Get the actions
	 */
	public static function getActions($messageId = 0)
	{	
		$result	= new JObject;
		if (empty($messageId)) {
			$assetName = 'com_shoutbox';
		}
		else {
			$assetName = 'com_shoutbox.shout.'.(int) $messageId;
		}
		$actions = JAccess::getActions('com_shoutbox', 'component');
		foreach ($actions as $action) {
			$result->set($action->name, JFactory::getUser()->authorise($action->name, $assetName));
		}
		return $result;
	}
}
