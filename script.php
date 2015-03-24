<?php
/**
* @package    JJ_Shoutbox_Component
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All rights reserved.
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class Com_ShoutboxInstallerScript
{

	function postflight($parent) 
	{
		// Import dependencies
		jimport('joomla.filesystem.folder');
		jimport('joomla.filesystem.file');			

		$original 	= JPATH_SITE . '/media/mod_shoutbox/images';		
		$dest 		= JPATH_SITE . '/images/';
		$folder 	= 'com_shoutbox';
		
		if (JFolder::create($dest . $folder, 0755))
		{
			$files = JFolder::files($original, '.gif');

			foreach ($files as $file)
			{
				JFile::move($original . '/' . $file, $dest . $folder . '/' . $file);
			}
		}
	}

}