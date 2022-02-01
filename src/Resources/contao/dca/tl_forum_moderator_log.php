<?php

$GLOBALS['TL_DCA']['tl_forum_moderator_log'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
	),
	
	// Fields
	'fields' => array
	(
		'forum' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'thread' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'post' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'user' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'committer' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'change_ip' => array
		(
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'change_type' => array
		(
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'field' => array
		(
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'old_value' => array
		(
			'sql'                     => "blob NULL"
		),
		'new_value' => array
		(
			'sql'                     => "blob NULL"
		),
	)
);
