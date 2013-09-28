<?php

class Controller_Admin_Reports extends Controller_Admin
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Admin reports &raquo; Index';
		$this->template->content = View::forge('admin\reports/index', $data);
	}

	public function action_all_reports()
	{
		$data["subnav"] = array('all_reports'=> 'active' );
		$this->template->title = 'Admin reports &raquo; All reports';
		$this->template->content = View::forge('admin\reports/all_reports', $data);
	}

	public function action_custom_reports()
	{
		$data["subnav"] = array('custom_reports'=> 'active' );
		$this->template->title = 'Admin reports &raquo; Custom reports';
		$this->template->content = View::forge('admin\reports/custom_reports', $data);
	}

}
