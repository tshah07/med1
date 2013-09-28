<?php

class Model_Patient_Spouce extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'firstName',
		'middleName',
		'lastName',
		'ssn',
		'address_line',
		'city',
		'state',
		'state',
		'postal_code',
		'date_of_birth',
		'home_phone',
		'cell_phone',
		'employer',
		'employer_phone',
		'employer_address_line',
		'employer_city',
		'employer_state',
		'employer_postal_code',
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
	protected static $_table_name = 'patient_spouces';

}
