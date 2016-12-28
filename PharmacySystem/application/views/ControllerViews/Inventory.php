<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="index.html">Inventory List</a>
					<i class="fa fa-angle-right"></i>
				</li>
				
			</ul>

		</div>
<div class="row">
		  <div class="col-md-6 col-md-offset-2 ">
			<div class="portlet light ">
			  
			  <br>
				<div class="portlet-title">
					<div class="caption">

						<span class="caption-subject font-green-sharp bold uppercase">Add Inventory</span>
					</div>
					
				</div>
				<div class="portlet-body">
				  <div class="form-group">
					<label for="">Select Item</label>
					
					<select class="form-control" name="" id="ddlItems">
						<option value="-1">Select</option>
					  </select>
				  </div>
				  <div class="form-group">
					<label for="">Quantity</label>
					<input type="number" name="txtQuantity" id="txtQuantity" value="" class="form-control">
				  </div>
				  <form class="">
					
					<div class="row">
					<div class="form-group">
					<div class="col-lg-12">
					  <input type="button" name="" value="Save" class="btn btn-primary pull-right" onclick="AddInventory()">
					</div>
					</div>
					</div>
				  </form>
				</div>
			</div>
			</div>
			</div>

</div>	
</div>		
	
					

<script>
$(function(){
	LoadItems();
});
function LoadItems(){
	APICall("<?php echo base_url(); ?>" + "index.php/InventoryController/LoadInventoryItems", "SuccessLoadInventoryItems", "FailureLoadInventoryItems", "GET");
}
function SuccessLoadInventoryItems(data)
{
	if(data && data.length > 0){
	for(var i=0;i<data.length;i++)
	{
		$("#ddlItems").append($("<option></option>").attr("value",data[i].ItemId).text(data[i].ItemName));
		
	}
	}
}
function FailureLoadInventoryItems(err)
{
	
}
function AddInventory()
{
	var itemID = 0;
	var ItemName = $("#ddlItems option:selected").text();
	if(ItemName.length > 3)
		ItemName = ItemName.substring(0,3);
	itemID = $("#ddlItems").val();
	var data = {ItemName:ItemName,ItemQuantity:$("#txtQuantity").val(),ItemID:itemID};
	APICall("<?php echo base_url(); ?>" + "index.php/InventoryController/AddInventory", "SuccessSaveInventoryItem", "FailureSaveInventoryItem", "POST",data);
}
function SuccessSaveInventoryItem(resp)
{
	if(resp){
		ShowSuccessToastMessage("Inventory saved successfully.");
	}
}
function FailureSaveInventoryItem()
{
	
}
function ConfirmDeleteItem(itemID)
{
	$("#DeletInventoryItem").modal("show");	
	$("#btnDeleteItem").attr("itemId",itemID);
}
function DeleteInventoryItem()
{
	var itemId = $("#btnDeleteItem").attr("itemId");
	$("#btnDeleteItem").removeAttr("itemId");
	var data = {"itemID":itemId};
	APICall("<?php echo base_url(); ?>" + "index.php/InventoryController/DeleteInventoryItem", "SuccessDeleteInventoryItem", "FailureDeleteInventoryItem", "POST",data);
}
function SuccessDeleteInventoryItem(resp)
{
	if(resp){
		ShowSuccessToastMessage("Item deleted successfully.");
		LoadItems();
		$("#DeletInventoryItem").modal("hide");
	}
}
function EditItem(EditItem)
{
	$("#AddInventoryItem").modal("show");
	$("#btnAddItem").attr("itemId",EditItem.ItemID);
	$("#txtItemName").val(EditItem.ItemName);
	$("#txtPrice").val(EditItem.ItemPrice);
	
}
function ShowAddItemModal()
{
	$("#btnAddItem").removeAttr("itemId");$("#AddInventoryItem").modal("show");
}

					</script>