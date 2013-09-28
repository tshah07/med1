<?php

namespace Fuel\Migrations;

class Create_patient_insurances
{
	public function up()
	{
		\DBUtil::create_table('patient_insurances', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'primary_insurance' => array('constraint' => 255, 'type' => 'varchar'),
			'policy_number' => array('constraint' => 255, 'type' => 'varchar'),
			'phone' => array('constraint' => 255, 'type' => 'varchar'),
			'policy_holder_name' => array('constraint' => 255, 'type' => 'varchar'),
			'mailing_address_line' => array('constraint' => 255, 'type' => 'varchar'),
			'city' => array('constraint' => 255, 'type' => 'varchar'),
			'state' => array('constraint' => 255, 'type' => 'varchar'),
			'postal_code' => array('constraint' => 255, 'type' => 'varchar'),
			'date_of_birth' => array('constraint' => 255, 'type' => 'varchar'),
			'home_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'group_number' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_insurances');
	}
}