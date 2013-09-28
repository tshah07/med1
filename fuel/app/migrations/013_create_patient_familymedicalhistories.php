<?php

namespace Fuel\Migrations;

class Create_patient_familymedicalhistories
{
	public function up()
	{
		\DBUtil::create_table('patient_familymedicalhistories', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'are_you_adopted' => array('type' => 'boolean'),
			'father_living' => array('type' => 'boolean'),
			'father_age' => array('constraint' => 11, 'type' => 'int'),
			'father_death_cause' => array('constraint' => 255, 'type' => 'varchar'),
			'mother_living' => array('type' => 'boolean'),
			'mother_age' => array('constraint' => 11, 'type' => 'int'),
			'mother_death_cause' => array('constraint' => 255, 'type' => 'varchar'),
			'heart_disease' => array('type' => 'boolean'),
			'other_family_desease' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_familymedicalhistories');
	}
}