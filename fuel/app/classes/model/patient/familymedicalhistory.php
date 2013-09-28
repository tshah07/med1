<?php

class Model_Patient_Familymedicalhistory extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'are_you_adopted',
		'father_living',
		'father_age',
		'father_death_cause',
		'mother_living',
		'mother_age',
		'mother_death_cause',
		'heart_disease',
		'other_family_desease',
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
	protected static $_table_name = 'patient_familymedicalhistories';

}
