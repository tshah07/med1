<?php

namespace Fuel\Migrations;

class Create_patientemergencycontacts
{
	public function up()
	{
		\DBUtil::create_table('patientemergencycontacts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'patient_id' => array('constraint' => 11, 'type' => 'int'),
			'firstName' => array('constraint' => 255, 'type' => 'varchar'),
			'lastName' => array('constraint' => 255, 'type' => 'varchar'),
			'contact_relationship' => array('constraint' => 255, 'type' => 'varchar'),
			'home_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'cell_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'employer_phone' => array('constraint' => 255, 'type' => 'varchar'),
			'authorized_to_discuss' => array('type' => 'boolean'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patientemergencycontacts');
	}
}