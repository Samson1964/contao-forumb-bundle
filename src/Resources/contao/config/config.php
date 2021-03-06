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

if(TL_MODE == 'BE') 
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaoforumb/backend.css';
}


/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
$GLOBALS['BE_MOD']['forum'] = array
(
	'tl_forum_forums' => array
	(
		'tables'                  => array('tl_forum_forums')
	),
	'tl_forum_threads' => array
	(
		'tables'                  => array('tl_forum_threads','tl_forum_posts')
	),
	'tl_forum_user_settings' => array
	(
		'tables'                  => array('tl_forum_user_settings')
	),
	'tl_forum_settings' => array
	(
		'tables'                  => array('tl_forum_settings')
	),
	'tl_forum_forum_tracker' => array
	(
		'tables'                  => array('tl_forum_forum_tracker'),
		'hideInNavigation'        => true,
		'disablePermissionChecks' => true
	),
	'tl_forum_thread_tracker' => array
	(
		'tables'                  => array('tl_forum_thread_tracker'),
		'hideInNavigation'        => true,
		'disablePermissionChecks' => true
	),
	'tl_forum_moderator_log' => array
	(
		'tables'                  => array('tl_forum_moderator_log'),
		'hideInNavigation'        => true,
		'disablePermissionChecks' => true
	),
);

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
 * List all front end modules and their class names.
 * 
 *   $GLOBALS['FE_MOD'] = array
 *   (
 *       'group_1' => array
 *       (
 *           'module_1' => 'Contentlass',
 *           'module_2' => 'Contentlass'
 *       )
 *   );
 * 
 * Use function array_insert() to modify an existing CTE array.
 */
 

/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_CTE']['tl_forum']['forum_forum_list'] = 'Schachbulle\ContaoForumbBundle\ContentElements\forum_forum_list';  
$GLOBALS['TL_CTE']['tl_forum']['forum_thread_reader'] = 'Schachbulle\ContaoForumbBundle\ContentElements\forum_thread_reader'; 
$GLOBALS['TL_CTE']['tl_forum']['forum_thread_editor'] = 'Schachbulle\ContaoForumbBundle\ContentElements\forum_thread_editor'; 
$GLOBALS['TL_CTE']['tl_forum']['forum_post_editor'] = 'Schachbulle\ContaoForumbBundle\ContentElements\forum_post_editor'; 
$GLOBALS['TL_CTE']['tl_forum']['forum_user_panel'] = 'Schachbulle\ContaoForumbBundle\ContentElements\forum_user_panel'; 
$GLOBALS['TL_CTE']['tl_forum']['forum_moderator_panel'] = 'Schachbulle\ContaoForumbBundle\ContentElements\forum_moderator_panel'; 

/**
 * -------------------------------------------------------------------------
 * BACK END FORM FIELDS
 * -------------------------------------------------------------------------
 *
 * List all back end form fields and their class names.
 * 
 *   $GLOBALS['BE_FFL'] = array
 *   (
 *       'input'  => 'Class',
 *       'select' => 'Class'
 *   );
 * 
 * Use function array_insert() to modify an existing FFL array.
 */


/**
 * -------------------------------------------------------------------------
 * FRONT END FORM FIELDS
 * -------------------------------------------------------------------------
 *
 * List all form fields and their class names.
 * 
 *   $GLOBALS['TL_FFL'] = array
 *   (
 *       'input'  => Class,
 *       'select' => Class
 *   );
 * 
 * Use function array_insert() to modify an existing FFL array.
 */


/**
 * -------------------------------------------------------------------------
 * CACHE TABLES
 * -------------------------------------------------------------------------
 *
 * These tables are used to cache data and can be truncated using back end 
 * module "clear cache".
 * 
 *   $GLOBALS['TL_CACHE'] = array
 *   (
 *       'table_1',
 *       'table_2'
 *   );
 * 
 * Use function array_insert() to modify an existing cache array.
 */


/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['forum_quotePostText'][] = array('Schachbulle\ContaoForumbBundle\Hooks\forum_BBCODE', 'quotePost');
$GLOBALS['TL_HOOKS']['forum_parsePostText'][] = array('Schachbulle\ContaoForumbBundle\Hooks\forum_BBCODE', 'parseBBCode');
/**
 * -------------------------------------------------------------------------
 * PAGE TYPES
 * -------------------------------------------------------------------------
 *
 * Page types and their corresponding front end controller class.
 * 
 *   $GLOBALS['TL_PTY'] = array
 *   (
 *       'type_1' => 'PageType1',
 *       'type_2' => 'PageType2'
 *   );
 * 
 * Use function array_insert() to modify an existing page types array.
 */
