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
					<span>Lab Test Types List</span>
				</li>
			</ul>
			</div>
			<div class="row">
			<div class="col-md-12">
<input type="button" id="btnShowAddTest" value="Add New Type" onclick="ShowAddTestType()" class="btn green pull-right" />
		
		
		</div>
		</div>
		
<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover" id="tblTestTypes">
								<thead>
									<tr>
										<th>Sr.</th>
										<th>Test Type</th>
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
					
		<div id="divAddTestType" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add Test Type</h4>
                </div>
                <div class="modal-body">
                    
					<div class="row">
                        <div class="col-md-12">
                            <h4>Enter Test Type</h4>
                            <p>
                                <input type="text" id="txtTestType" class="col-md-12 form-control" placeholder="Enter test type" maxlength="50"> </p>
						</div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green" id="btnAddTestType" onclick="AddTestType()">Save</button>
                </div>
            </div>
        </div>
    </div>
	<div id="divDeleteTestType" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Delete Test Type</h4>
                </div>
                <div class="modal-body">
                    
					<div class="row">
                        <div class="col-md-12">
                            
                            <p>
                            Are you sure you want to delete the selected test type?
						</div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" id="btnDeleteTestType" class="btn green" onclick="DeleteTestType()">Delete</button>
                </div>
            </div>
        </div>
    </div>
					
					<script>
					$(function(){
						LoadTestTypes();
						
					});
function LoadTestTypes()
{
	APICall("<?php echo base_url(); ?>" + "index.php/LabTestsController/LoadTestTypes", "SuccessLoadTestTypes", "FailureLoadTestTypes", "GET");
}
function AddTestType()
{
	var TestID = $("#btnAddTestType").attr("TestID");
	if(!TestID)
		TestID = 0;
	var data = {TestType:$("#txtTestType").val(),TestId:TestID}
	APICall("<?php echo base_url(); ?>" + "index.php/LabTestsController/AddTestType", "SuccessAddTestType", "FailureAddTestType", "POST",data);
}
function SuccessAddTestType(data)
{
	if(data){
		LoadTestTypes();
		ShowSuccessToastMessage("Test type has been saved successfully.");
	}
}
function ShowAddTestType()
{
	$("#divAddTestType").modal("show");
}
function SuccessLoadTestTypes(data)
{
	if(data && data.length > 0)
	{
		$("#tblTestTypes tbody").html("");
		for(var i=0;i<data.length;i++)
		{
			var object = JSON.stringify({TestTypeId:data[i].Id,TestType:data[i].TestType});
		var tr = "<tr><td>"+(i+1)+"</td><td>"+data[i].TestType+"</td><td><a title='Edit' onclick='EditTestType("+object+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><span class='md-click-circle md-click-animate' style='height: 27px; width: 27px; top: -5.5px; left: -3.84375px;'></span><i class='icon-pencil'></i></a><a title='Delete' onclick='ConfirmDeleteTestType("+data[i].Id+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><i class='icon-trash'></i></a></td></tr>";
		$("#tblTestTypes").append(tr);
		}
		$("#divDeleteTestType").modal("hide");
		$("#divAddTestType").modal("hide");
	}
}
function ConfirmDeleteTestType(id)
{
	$("#btnDeleteTestType").attr("TestID",id);
	$("#divDeleteTestType").modal("show");
}
function DeleteTestType()
{
	var data={TestID :$("#btnDeleteTestType").attr("TestID")};
	APICall("<?php echo base_url(); ?>" + "index.php/LabTestsController/DeleteTestType", "SuccessDeleteTestType", "FailureDeleteTestType", "POST",data);
}
function SuccessDeleteTestType(data)
{
	if(data){
	 LoadTestTypes();	
	 ShowSuccessToastMessage("Test type has been deleted successfully.");
	}
}
function EditTestType(obj)
{	
	$("#btnAddTestType").attr("TestID",obj.TestTypeId);
	$("#txtTestType").val(obj.TestType);
	$("#divAddTestType").modal("show");	
}
</script>