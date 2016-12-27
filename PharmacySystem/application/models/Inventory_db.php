<?php

Class Inventory_db extends CI_Model {


	public function SaveInventoryItem($data) {
		$query="";
		if($data["ItemID"]==0){
			$query = 'Insert into tblInventoryItems (ItemName,ItemPrice,CreatedBy,CreatedAt,IsActive) values("'.$data["ItemName"].'","'.$data["ItemPrice"].'","'.$data["CreatedBy"].'","'.date('Y-m-d H:i:s').'",1)';
		}
		else
			$query = 'Update tblInventoryItems set ItemName = "'.$data["ItemName"].'",ItemPrice="'.$data["ItemPrice"].'" where ItemId = '.$data["ItemID"];		
		return $this->db->query($query);
	}
	public function LoadInventoryItems()
	{
		$query = 'Select * from tblInventoryItems Where IsActive=1';
		return $this->db->query($query)->result();
	}
	public function DeleteInventoryItem($itemId)
	{
		$query = 'Update tblInventoryItems set isactive = 0 Where ItemID = '.$itemId;
		return $this->db->query($query);
	}
}

?>