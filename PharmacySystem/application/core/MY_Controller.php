<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
 { 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() {
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		// session_start();
		// $this->load->view('ControllerViews/login_form');
		// return false;
		
		if (isset($this->session->userdata['logged_in'])) {
			$this->template['Header']   = $this->load->view('Layout/Header', $this->data, true);
			$this->template['Top']   = $this->load->view('Layout/Top', $this->data, true);
			$this->template['LeftMenu']   = $this->load->view('Layout/LeftMenu', $this->data, true);
			$this->template['Body'] = $this->load->view('ControllerViews/' . $this->middle, $this->data, true);
			$this->template['Footer'] = $this->load->view('Layout/Footer', $this->data, true);
			$this->load->view('Layout/Index', $this->template);
		 } else {
			$this->load->view('ControllerViews/login_form');
		 }
   }
}