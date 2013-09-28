<?php

namespace Fuel\Migrations;

class Create_patient_allergies
{
	public function up()
	{
		\DBUtil::create_table('patient_allergies', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'allergy_to' => array('constraint' => 255, 'type' => 'varchar'),
			'reaction_type' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_allergies');
	}
}