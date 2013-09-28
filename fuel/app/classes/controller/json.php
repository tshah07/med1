<?php

class Controller_Json extends Controller_Rest
{

	public function action_checkUserName()
	{

		$username = Input::post('username');

		//Check In Orm User Model if Username exist
		if(\Model\Auth_User::find_by_username($username)){
			return $this->response(array('available' => 'false'));
		}
		else{
			return $this->response(array('available' => 'true'));
		}

		
	}

	public function action_getPatientName()
	{
		return $this->response(array(
            'foo' => Input::get('foo'),
            'baz' => array(
                1, 50, 219
            ),
            'empty' => null
        ));
	}

	public function action_getPatientDetails()
	{
		$data["subnav"] = array('getPatientDetails'=> 'active' );
		$this->template->title = 'Json &raquo; GetPatientDetails';
		$this->template->content = View::forge('json/getPatientDetails', $data);
	}

	public function action_getSchedule()
	{
		$data["subnav"] = array('getSchedule'=> 'active' );
		$this->template->title = 'Json &raquo; GetSchedule';
		$this->template->content = View::forge('json/getSchedule', $data);
	}

}
