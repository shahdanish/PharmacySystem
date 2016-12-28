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
		$query = 'Select * from tblInventoryItems Where IsActive=1 And ItemID!=1';
		return $this->db->query($query)->result();
	}
	public function DeleteInventoryItem($itemId)
	{
		$query = 'Update tblInventoryItems set isactive = 0 Where ItemID = '.$itemId;
		return $this->db->query($query);
	}
	public function AddInventory($ItemID,$UserId,$ItemQuantity,$itemName)
	{
		$productBatch = $itemName.'_'.date("m").date("d");
		//$queryAddBatch = "select count(*) As BatchNo from tblproductbatch where BatchNo = '".$productBatch."'";
		//$data = $this->db->query($queryAddBatch)->result();
		//$productBatch = $data[0]->BatchNo + 1;
		//$productBatch = 'X_'.$productBatch.'_'.date("m").date("d");
		$queryAddBatch = " Insert into tblproductbatch (BatchNo,BatchQuantity,ItemId,CreatedBy,CreatedAt) VALUES ('".$productBatch."',".$ItemQuantity.",'".$UserId."','".$UserId."',Now());";
		
		$this->db->query($queryAddBatch);
		
		$queryItemExists = 'SELECT ItemId from tblinventory where itemID = '.$ItemID;
		$result = $this->db->query($queryItemExists)->result();				  
		
		$QueryItemQuantity="";
		if(count($result) > 0)
			$QueryItemQuantity = "Update tblinventory set ItemQuantity = (itemQuantity + ".$ItemQuantity."),UpdatedBy = ".$UserId.",UpdatedAt = NOW() Where ItemID = ".$ItemID.";";
		else
			$QueryItemQuantity = "Insert into tblinventory(ItemID,AddedDate,AddedBy,ItemQuantity) values(".$ItemID.",NOW(),".$UserId.",".$ItemQuantity.");";
		$addBatch = $this->db->query($QueryItemQuantity);
		return $addBatch;
	}
}

?>