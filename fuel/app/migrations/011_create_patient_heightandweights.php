<?php

namespace Fuel\Migrations;

class Create_patient_heightandweights
{
	public function up()
	{
		\DBUtil::create_table('patient_heightandweights', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'current_weight' => array('type' => 'float'),
			'current_height' => array('type' => 'float'),
			'recent_gain_or_loss' => array('type' => 'float'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_heightandweights');
	}
}