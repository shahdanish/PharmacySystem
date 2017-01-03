<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(isset($this->session->userdata["logged_in"])){
			if($this->session->userdata["logged_in"]["userrole"]==1){
				$this->middle = 'Dashboard'; // passing middle to function. change this for different views.
				$this->layout();
			}
			else
			{
				$this->middle = 'VisitorsList'; // passing middle to function. change this for different views.
				$this->layout();
			}
		}
		else{
			$this->middle = 'login_form'; // passing middle to function. change this for different views.
			$this->layout();
		}
	}
	public function VisitorsList()
	{
		$this->middle = 'VisitorsList'; // passing middle to function. change this for different views.
		$this->layout();
	}
}
