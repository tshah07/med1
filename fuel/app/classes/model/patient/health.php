<?php

class Model_Patient_Health extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'reason_for_visit',
		'primary_care_doctor',
		'date_of_first_aware_of_problem',
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
	protected static $_table_name = 'patient_healths';

}
