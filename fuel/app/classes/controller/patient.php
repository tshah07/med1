<?php

class Controller_Patient extends Controller_base
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Patient &raquo; Index';
		$this->template->content = View::forge('patient/index', $data);
	}

	public function action_show_all()
	{
		$data["subnav"] = array('show_all'=> 'active' );
		$this->template->title = 'Patient &raquo; Show all';
		$this->template->content = View::forge('patient/show_all', $data);
	}

	public function action_find_a_patient()
	{
		$data["subnav"] = array('find_a_patient'=> 'active' );
		$this->template->title = 'Patient &raquo; Find a patient';
		$this->template->content = View::forge('patient/find_a_patient', $data);
	}

	public function action_inpatients()
	{
		$data["subnav"] = array('inpatients'=> 'active' );
		$this->template->title = 'Patient &raquo; Inpatients';
		$this->template->content = View::forge('patient/inpatients', $data);
	}

	public function action_outpatients()
	{
		$data["subnav"] = array('outpatients'=> 'active' );
		$this->template->title = 'Patient &raquo; Outpatients';
		$this->template->content = View::forge('patient/outpatients', $data);
	}

	public function action_new_patient()
	{
		$data["subnav"] = array('new_patient'=> 'active' );
		$this->template->title = 'Patient &raquo; New patient';
		$this->template->content = View::forge('patient/new_patient', $data);
	}

}
