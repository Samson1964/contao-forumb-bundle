<?php

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
 * @copyright  2011 Andreas Koob 
 * @author     Andreas Koob 
 * @package    forum 
 * @license    LGPL 
 * @filesource
 */


/**
 * Add palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'forum_use_fixed_forum';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'forum_use_fixed_thread';

$GLOBALS['TL_DCA']['tl_content']['palettes']['forum_forum_list'] = '{type_legend},type,headline;{forum_settings},forum_use_fixed_forum,';
$GLOBALS['TL_DCA']['tl_content']['palettes']['forum_thread_reader'] = '{type_legend},type,headline;{forum_settings},forum_use_fixed_thread';
$GLOBALS['TL_DCA']['tl_content']['palettes']['forum_thread_editor'] = '{type_legend},type,headline';
$GLOBALS['TL_DCA']['tl_content']['palettes']['forum_post_editor'] = '{type_legend},type,headline';
$GLOBALS['TL_DCA']['tl_content']['palettes']['forum_user_panel'] = '{type_legend},type,headline';
$GLOBALS['TL_DCA']['tl_content']['palettes']['forum_moderator_panel'] = '{type_legend},type,headline';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['forum_use_fixed_forum'] = 'forum_fixed_forum';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['forum_use_fixed_thread'] = 'forum_fixed_thread';
/**
 * Add fields
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['forum_redirect_threadreader'] = array
(
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_redirect_threadeditor'] = array
(
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_redirect_forumlist'] = array
(
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_redirect_posteditor'] = array
(
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_redirect'] = array
(
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_use_fixed_forum'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['forum_use_fixed_forum'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_use_fixed_thread'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['forum_use_fixed_thread'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_fixed_forum'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['forum_fixed_forum'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_forum', 'getForums'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forum_fixed_thread'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['forum_fixed_thread'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_forum', 'getThreads'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

class tl_content_forum extends Backend
{
	public function getForums()
	{
		$objForums = $this->Database->prepare("SELECT * FROM tl_forum_forums")->execute();

		if ($objForums->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objForums->next())
		{
			$return[$objForums->id] = $objForums->title;
		}

		return $return;
	}
	
	public function getThreads()
	{
		$objThreads = $this->Database->prepare("SELECT * FROM tl_forum_threads")->execute();

		if ($objThreads->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objThreads->next())
		{
			$return[$objThreads->id] = $objThreads->title;
		}

		return $return;
	}
}
