<?php

class Model_Patient_Insurance extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'primary_insurance',
		'policy_number',
		'phone',
		'policy_holder_name',
		'mailing_address_line',
		'city',
		'state',
		'postal_code',
		'date_of_birth',
		'home_phone',
		'group_number',
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
	protected static $_table_name = 'patient_insurances';

}
