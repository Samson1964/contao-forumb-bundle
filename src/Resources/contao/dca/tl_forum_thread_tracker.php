<?php

$GLOBALS['TL_DCA']['tl_forum_thread_tracker'] = array
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
		'thread' => array
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
