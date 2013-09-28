<?php

class Model_Patient_Socialhistory extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'patient_id',
		'live_alone',
		'education',
		'occupation',
		'children',
		'rate_of_alcohol_consumption',
		'smoking_per_day',
		'smoking_years',
		'exercise',
		'caffeinated_drink_per_day',
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
	protected static $_table_name = 'patient_socialhistories';

}
