<?php

class Controller_Base extends Controller_Template {

	public $template = 'layouts/template';

	
	public function before()
	{
		parent::before();
		
		// Assign current_user to the instance so controllers can use it
		$this->current_user = Auth::check() ? \Model\Auth_User::find_by_username(Auth::get_screen_name()) : null;
		//$this->current_user = \Model\Auth_User::find_by_username(Auth::get_screen_name());

		// Set a global variable so views can use it
		View::set_global('current_user', $this->current_user);
	}

}