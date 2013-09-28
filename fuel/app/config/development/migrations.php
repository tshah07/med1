<?php
return array(
	'version' => 
	array(
		'app' => 
		array(
			'default' => 
			array(
				0 => '001_create_pages',
				1 => '002_create_patientinfos',
				2 => '003_create_patientemergencycontacts',
				3 => '004_create_patient_spouces',
				4 => '005_create_patient_insurances',
				5 => '006_create_patient_pharmacies',
				6 => '007_create_patient_healths',
				7 => '008_create_patient_allergies',
				8 => '009_create_patient_medications',
				9 => '010_create_patient_surgicalhistories',
				10 => '011_create_patient_heightandweights',
				11 => '012_create_patient_socialhistories',
				12 => '013_create_patient_familymedicalhistories',
				13 => '014_create_patient_personalreviewofsystems',
				14 => '015_create_patient_gynecologicalreviews',
				15 => '016_create_patient_authorizations',
			),
		),
		'module' => 
		array(
		),
		'package' => 
		array(
			'auth' => 
			array(
				0 => '001_auth_create_usertables',
				1 => '002_auth_create_grouptables',
				2 => '003_auth_create_roletables',
				3 => '004_auth_create_permissiontables',
				4 => '005_auth_create_authdefaults',
				5 => '006_auth_add_authactions',
				6 => '007_auth_add_permissionsfilter',
				7 => '008_auth_create_providers',
				8 => '009_auth_create_oauth2tables',
			),
		),
	),
	'folder' => 'migrations/',
	'table' => 'migration',
);
