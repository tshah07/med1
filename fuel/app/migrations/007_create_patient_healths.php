<?php

namespace Fuel\Migrations;

class Create_patient_healths
{
	public function up()
	{
		\DBUtil::create_table('patient_healths', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'reason_for_visit' => array('constraint' => 255, 'type' => 'varchar'),
			'primary_care_doctor' => array('constraint' => 255, 'type' => 'varchar'),
			'date_of_first_aware_of_problem' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_healths');
	}
}