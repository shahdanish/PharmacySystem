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
					<span>Lab Tests List</span>
				</li>
			</ul>
			</div>
			<div class="row">
			<div class="col-md-12">
<input type="button" id="btnShowAddTest" value="Add New Test" onclick="ShowAddTest()" class="btn green pull-right" />
		
		
		</div>
		</div>
		
<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover" id="tblTests">
								<thead>
									<tr>
										<th>Sr.</th>
										<th>Name</th>
										<th>Test Type</th>
										<th>Fee</th>
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
					<div id="divAddTest" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add Test</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Select Test Type</h4>
                            <p>
                                <select id="ddlTestType" class="form-control">
								</select>
						</div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <h4>Enter Test Name</h4>
                            <p>
                                <input type="text" id="txtTestName" class="col-md-12 form-control" placeholder="Enter test name" maxlength="50"> </p>
						</div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <h4>Enter Test Fee</h4>
                            <p>
                                <input type="number" id="txtTestFee" class="col-md-12 form-control" placeholder="Enter test fee" maxlength="6"> </p>
						</div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green" onclick="AddTest()" id="btnAddTest">Save</button>
                </div>
            </div>
        </div>
    </div>
		
	<div id="divDeleteTest" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Delete Test</h4>
                </div>
                <div class="modal-body">
                    
					<div class="row">
                        <div class="col-md-12">
                            
                            <p>
                            Are you sure you want to delete the selected test ?
						</div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" id="btnDeleteTest" class="btn green" onclick="DeleteLabTest()">Delete</button>
                </div>
            </div>
        </div>
    </div>
					
<script>
$(function(){
	APICall("<?php echo base_url(); ?>" + "index.php/LabTestsController/LoadTestTypes", "SuccessLoadTestTypes", "FailureLoadTestTypes", "GET");
	LoadTests();
});
function LoadTests()
{
	APICall("<?php echo base_url(); ?>" + "index.php/LabTestsController/LoadTests", "SuccessLoadTests", "FailureLoadTests", "GET");
}
function SuccessLoadTests(data)
{
	if(data && data.length > 0){
	RemoveDataTable("tblTests");
	$("#tblTests tbody").html("");
	for(var i=0;i<data.length;i++)
	{
		var testObject = JSON.stringify({TestID:data[i].TestID,TestName:data[i].TestName,TestType:data[i].Id,TestFee:data[i].TestFee});
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].TestName+"</td><td>"+data[i].TestType+"</td><td>"+data[i].TestFee+"</td><td><a title='Edit' onclick='EditLabTest("+testObject+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><span class='md-click-circle md-click-animate' style='height: 27px; width: 27px; top: -5.5px; left: -3.84375px;'></span><i class='icon-pencil'></i></a><a title='Delete' onclick='ConfirmDeleteLabTest("+data[i].TestID+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><i class='icon-trash'></i></a></td></tr>";
		$("#tblTests tbody").append(tr);
	}
	var columns = [{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}];
	BindDataTable("tblTests",columns);
	}
	$("#divDeleteTest").modal("hide");
	$("#divAddTest").modal("hide");
}
function FailureLoadTests(err)
{
	
}
function AddTest()
{
	var TestID = $("#btnAddTest").attr("TestID");
	if(!TestID)
		TestID=0;
	var data = {TestType:$("#ddlTestType").val(),TestName:$("#txtTestName").val(),TestFee:$("#txtTestFee").val(),TestId:TestID};
	APICall("<?php echo base_url(); ?>" + "index.php/LabTestsController/AddTest", "SuccessAddTest", "FailureAddTest", "POST",data);
}
function SuccessAddTest(data)
{
	if(data){
		LoadTests();
		ShowSuccessToastMessage("Test has been saved successfully.");
	}
}
function FailureAddTest(err)
{
	
}
function SuccessLoadTestTypes(data)
{
	for(var i=0;i<data.length;i++){
	$("#ddlTestType").append($("<option></option>").attr("value",data[i].Id).text(data[i].TestType));
	}
	
}
function ShowAddTest()
{
	$("#divAddTest").modal("show")
}
function ConfirmDeleteLabTest(id)
{
	$("#btnDeleteTest").attr("TestId",id);
	$("#divDeleteTest").modal("show");
}
function DeleteLabTest()
{
	var data={TestID :$("#btnDeleteTest").attr("TestId")};
	APICall("<?php echo base_url(); ?>" + "index.php/LabTestsController/DeleteLabTest", "SuccessDeleteLabTest", "FailureDeleteLabTest", "POST",data);
}
function SuccessDeleteLabTest(data)
{
	if(data){
		LoadTests();
		ShowSuccessToastMessage("Test has been deleted successfully.");
	}
}
function EditLabTest(obj)
{
	$("#ddlTestType").val(obj.TestType);
	$("#txtTestName").val(obj.TestName);
	$("#txtTestFee").val(obj.TestFee);
	$("#btnAddTest").attr("TestID",obj.TestID);
	$("#divAddTest").modal("show");	
}
</script>