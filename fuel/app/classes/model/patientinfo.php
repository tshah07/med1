<?php

class Model_Patientinfo extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'firstName',
		'middleName',
		'lastName',
		'date_of_birth',
		'gender',
		'SSN',
		'race',
		'ethinicity',
		'language',
		'maritial_status',
		'address_line',
		'city',
		'state',
		'postal_code',
		'home_phone',
		'cell_phone',
		'work_phone',
		'email',
		'occupation',
		'employer',
		'employer_address_line',
		'employer_city',
		'employer_state',
		'employer_postal_code',
		'employer_phone',
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
	protected static $_table_name = 'patientinfos';
	protected static $_has_many = array('patientemergencycontacts' => array('key_to' => 'patient_id'));

}
