<?php

namespace Fuel\Migrations;

class Create_patientinfos
{
	public function up()
	{
		\DBUtil::create_table('patientinfos', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'firstName' => array('constraint' => 255, 'type' => 'varchar'),
			'middleName' => array('constraint' => 255, 'type' => 'varchar'),
			'lastName' => array('constraint' => 255, 'type' => 'varchar'),
			'date_of_birth' => array('constraint' => 255, 'type' => 'varchar'),
			'gender' => array('constraint' => 15, 'type' => 'varchar'),
			'SSN' => array('constraint' => 255, 'type' => 'varchar'),
			'race' => array('constraint' => 255, 'type' => 'varchar'),
			'ethinicity' => array('constraint' => 255, 'type' => 'varchar'),
			'language' => array('constraint' => 255, 'type' => 'varchar'),
			'maritial_status' => array('constraint' => 15, 'type' => 'varchar'),
			'address_line' => array('constraint' => 255, 'type' => 'varchar'),
			'city' => array('constraint' => 255, 'type' => 'varchar'),
			'state' => array('constraint' => 255, 'type' => 'varchar'),
			'postal_code' => array('constraint' => 255, 'type' => 'varchar'),
			'home_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'cell_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'work_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			
			'occupation' => array('constraint' => 255, 'type' => 'varchar'),
			'employer' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_address_line' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_city' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_state' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_postal_code' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patientinfos');
	}
}