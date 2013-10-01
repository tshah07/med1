<?php

namespace Fuel\Migrations;

class Add_imgurl_to_patientinfos
{
	public function up()
	{
		\DBUtil::add_fields('patientinfos', array(
			'imgUrl' => array('type' => 'text'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('patientinfos', array(
			'imgUrl'

		));
	}
}