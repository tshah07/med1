<?php

namespace Fuel\Migrations;

class Create_patient_spouces
{
	public function up()
	{
		\DBUtil::create_table('patient_spouces', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'firstName' => array('constraint' => 255, 'type' => 'varchar'),
			'middleName' => array('constraint' => 255, 'type' => 'varchar'),
			'lastName' => array('constraint' => 255, 'type' => 'varchar'),
			'ssn' => array('constraint' => 11, 'type' => 'int'),
			'address_line' => array('constraint' => 255, 'type' => 'varchar'),
			'city' => array('constraint' => 255, 'type' => 'varchar'),
			'state' => array('constraint' => 255, 'type' => 'varchar'),
			'state' => array('constraint' => 255, 'type' => 'varchar'),
			'postal_code' => array('constraint' => 255, 'type' => 'varchar'),
			'date_of_birth' => array('constraint' => 255, 'type' => 'varchar'),
			'home_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'cell_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'employer' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_address_line' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_city' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_state' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_postal_code' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patient_spouces');
	}
}