<?php

class Model_Patientemergencycontact extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'firstName',
		'lastName',
		'contact_relationship',
		'home_phone',
		'cell_phone',
		'employer_phone',
		'authorized_to_discuss',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => true,
		),
	);
	protected static $_table_name = 'patientemergencycontacts';

}
