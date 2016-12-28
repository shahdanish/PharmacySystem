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
<div class="portlet-body">
<div class="row">
<div class="col-lg-12">
<input type="button" class="btn btn-primary pull-right" value="Add Item" onclick="ShowAddItemModal()" />
</div>
</div>
						<div class="table-scrollable">
							<table class="table table-hover" id="tblInventoryItems">
								<thead>
									<tr>
									<th>Sr.</th>
										<th>Item Name</th>
										<th>Item Price</th>
										<th></th>
										
	
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
					</div>
					</div>
					
					<div id="AddInventoryItem" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Item Name</h4>
                            <p>
                                <input type="text" id="txtItemName" name="txtItemName" class="col-md-12 form-control" placeholder="Enter Name"> 
								</p>

                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <h4>Item Price</h4>
                            <p>
                                <input type="number" id="txtPrice" name="txtPrice" class="col-md-12 form-control" placeholder="Enter Price"> 
								</p>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green" onclick="AddInventoryItem()" id="btnAddItem">Save</button>
                </div>
            </div>
        </div>
    </div>
	
					<div id="DeletInventoryItem" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Delete Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <p>
                                Are you sure you want to delete selected item ?
								</p>

                        </div>
                    </div>
					

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green" onclick="DeleteInventoryItem()" id="btnDeleteItem">Delete</button>
                </div>
            </div>
        </div>
    </div>

<script>
$(function(){
	LoadItems();
	 $("#AddInventoryItem").on("shown.bs.modal", function () { 
	 if(!$("#btnAddItem").attr("itemId"))
	 {
     $("#txtItemName").val("");
	 $("#txtPrice").val("");
	 }
	});
});
function LoadItems(){
	APICall("<?php echo base_url(); ?>" + "index.php/InventoryController/LoadInventoryItems", "SuccessLoadInventoryItems", "FailureLoadInventoryItems", "GET");
}
function SuccessLoadInventoryItems(data)
{
	if(data && data.length > 0){
		RemoveDataTable("tblInventoryItems");
	$("#tblInventoryItems tbody").html("");
	for(var i=0;i<data.length;i++)
	{
		var itemObject = JSON.stringify({ItemID:data[i].ItemId,ItemName:data[i].ItemName,ItemPrice:data[i].ItemPrice});
		var tr = "<tr><td>"+(i+1)+"</td><td>"+data[i].ItemName+"</td><td>"+data[i].ItemPrice+"</td><td><a title='Edit' onclick='EditItem("+itemObject+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><span class='md-click-circle md-click-animate' style='height: 27px; width: 27px; top: -5.5px; left: -3.84375px;'></span><i class='icon-pencil'></i></a><a title='Delete' onclick='ConfirmDeleteItem("+data[i].ItemId+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><i class='icon-trash'></i></a></td></tr>";	
		$("#tblInventoryItems tbody").append(tr);	
	}
	
	}
	var columns =[{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}]
	BindDataTable("tblInventoryItems",columns);
}
function FailureLoadInventoryItems(err)
{
	
}
function AddInventoryItem()
{
	var itemID = 0;
	if($("#btnAddItem").attr("itemId"))
		itemID = $("#btnAddItem").attr("itemId");
	else
		itemID = 0;
	$("#btnAddItem").removeAttr("itemId");
	var data = {ItemName:$("#txtItemName").val(),ItemPrice:$("#txtPrice").val(),ItemID:itemID};
	APICall("<?php echo base_url(); ?>" + "index.php/InventoryController/SaveInventoryItem", "SuccessSaveInventoryItem", "FailureSaveInventoryItem", "POST",data);
}
function SuccessSaveInventoryItem(resp)
{
	if(resp){
		ShowSuccessToastMessage("Item saved successfully.");
		LoadItems();
		$("#AddInventoryItem").modal("hide");
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