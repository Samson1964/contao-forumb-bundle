<?php

$GLOBALS['TL_DCA']['tl_forum_forum_tracker'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
		)
	),
	
	// Fields
	'fields' => array
	(
		'forum' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'user' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
	)
);
