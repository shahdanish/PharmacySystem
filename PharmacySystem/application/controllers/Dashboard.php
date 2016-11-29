<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MY_Controller 
 {   
	public function index()
	{
		$this->middle = 'Dashboard';
		$this->layout();
	}
	public function AdvanceSlip()
	{
		$this->middle = 'AdvanceSlip';
		$this->layout();
	}
	public function OrthopaedicSlip()
	{
		$this->middle = 'OrthopaedicSlip';
		$this->layout();
	}
	public function XraySlip()
	{
		$this->middle = 'XraySlip';
		$this->layout();
	}
	public function TestSlip()
	{
		$this->middle = 'TestSlip';
		$this->layout();
	}
	public function InPatient()
	{
		$this->middle = 'InPatient';
		$this->layout();
	}
	
}