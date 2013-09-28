<?php

class Model_Patient_Pharmacy extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'name',
		'address',
		'phone',
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
	protected static $_table_name = 'patient_pharmacies';

}
