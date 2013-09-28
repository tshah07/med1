<?php

namespace Fuel\Migrations;

class Create_patient_surgicalhistories
{
	public function up()
	{
		\DBUtil::create_table('patient_surgicalhistories', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'type' => array('constraint' => 255, 'type' => 'varchar'),
			'year' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_surgicalhistories');
	}
}