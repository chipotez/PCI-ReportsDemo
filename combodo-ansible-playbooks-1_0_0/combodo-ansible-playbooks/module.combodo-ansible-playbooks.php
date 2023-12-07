<?php
/**
 * @copyright   Copyright (C) 2010-2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'combodo-ansible-playbooks/1.0.0',
	array(
		// Identification
		//
		'label' => 'Ansible playbooks for iTop',
		'category' => 'toolkit',

		// Setup
		//
		'dependencies' => array(),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(),
		'webservice' => array(),
		'data.struct' => array(
		),
		'data.sample' => array(
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(// Module specific settings go here, if any
		),
	)
);


