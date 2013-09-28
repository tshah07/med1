<?php

namespace Fuel\Migrations;

class Create_patient_personalreviewofsystems
{
	public function up()
	{
		\DBUtil::create_table('patient_personalreviewofsystems', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'general' => array('constraint' => 255, 'type' => 'varchar'),
			'eyes' => array('constraint' => 255, 'type' => 'varchar'),
			'ear_nose_throat_mouth' => array('constraint' => 255, 'type' => 'varchar'),
			'chest_heart_lungs' => array('constraint' => 255, 'type' => 'varchar'),
			'muscles_bones_joints' => array('constraint' => 255, 'type' => 'varchar'),
			'giTract_stomach_bowels' => array('constraint' => 255, 'type' => 'varchar'),
			'reproductive_urinary_system' => array('constraint' => 255, 'type' => 'varchar'),
			'skin_breast' => array('constraint' => 255, 'type' => 'varchar'),
			'brain_nerves_emotions' => array('constraint' => 255, 'type' => 'varchar'),
			'allergy' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_personalreviewofsystems');
	}
}