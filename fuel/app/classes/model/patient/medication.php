<?php

class Model_Patient_Medication extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'medication',
		'dose',
		'route',
		'how_often',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'patient_medications';

}
