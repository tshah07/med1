<?php

namespace Fuel\Migrations;

class Create_patient_socialhistories
{
	public function up()
	{
		\DBUtil::create_table('patient_socialhistories', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'live_alone' => array('type' => 'boolean'),
			'education' => array('constraint' => 255, 'type' => 'varchar'),
			'occupation' => array('constraint' => 255, 'type' => 'varchar'),
			'children' => array('constraint' => 11, 'type' => 'int'),
			'rate_of_alcohol_consumption' => array('constraint' => 255, 'type' => 'varchar'),
			'smoking_per_day' => array('constraint' => 11, 'type' => 'int'),
			'smoking_years' => array('type' => 'float'),
			'exercise' => array('constraint' => 255, 'type' => 'varchar'),
			'caffeinated_drink_per_day' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_socialhistories');
	}
}