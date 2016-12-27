<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InventoryController extends MY_Controller 
 {   
	
	public function __construct() {
	parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');
		
		$this->load->helper('url');

		$this->load->database();
		
		// Load database
		
		
		$this->load->model('Inventory_db');
		
	}
	public function Index()
	{
		
		$this->middle = 'InventoryList';
		$this->layout();
	}
	
	public function SaveInventoryItem()
	{	
		$data = array(
				'ItemID'=>$this->input->post("ItemID"),
				'ItemName' => $this->input->post("ItemName"),
				'ItemPrice' => $this->input->post("ItemPrice"),
				'CreatedBy' => $this->session->userdata["logged_in"]["userrole"]
			);
		echo json_encode($this->Inventory_db->SaveInventoryItem($data));
		
	}
	public function LoadInventoryItems()
	{
		$result = $this->Inventory_db->LoadInventoryItems();
		echo json_encode($result);
	}
	public function DeleteInventoryItem()
	{
		$result = $this->Inventory_db->DeleteInventoryItem($this->input->post("itemID"));
		echo json_encode($result);
		
	}
}
?>