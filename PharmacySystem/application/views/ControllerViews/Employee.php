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
					<span>User List</span>
				</li>
			</ul>
			</div>
			<div class="row">
			<div class="col-md-12">

		</div>
		</div>
		<div class="clearfix"></div>
		<!-- END DASHBOARD STATS 1-->
		<div class="row">

			<div class="col-md-12">
				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-hospital-o font-green"></i>
							<span class="caption-subject font-green bold uppercase">User List </span>
						</div>
						<div class="addbtn ">
							<a href="#" class="btn btn-danger"  id="btnShowAddTest"  onclick="ShowAddUser()">	<i class="fa fa-plus"></i> Add New User</a>
						</div>

					</div>
					<div class="portlet-body">
						<div class="">
							<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable" id="tbluserprofile">
								<thead>
									<tr>
										<th>Sr.</th>
										<th>First Name</th>
										<th>CNIC</th>
										<th>Mobile No</th>
										<th>Address</th>
										<th>Salary</th>
										<th></th>
									</tr>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- END SAMPLE TABLE PORTLET-->
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
                            <h4>Name</h4>
                            <p>
                                <input type="text" id="txtFirstName" class="col-md-12 form-control" placeholder="Enter first name" maxlength="50"> </p>
						</div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <h4>Enter CNIC</h4>
                            <p>
                                <input type="text" id="txtCNIC" class="col-md-12 form-control" placeholder="Enter CNIC" maxlength="50"> </p>
						</div>
					</div>
					<div class="row">
                        <div class="col-md-12">
                            <h4>Enter Mobile No</h4>
                            <p>
                                <input type="text" id="txtMobileNo" class="col-md-12 form-control" placeholder="Enter Mobile No" maxlength="50"> </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
								<h4>Enter Address</h4>
								<p>
										<input type="text" id="txtAddress" class="col-md-12 form-control" placeholder="Enter Address" maxlength="50"> </p>
						</div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <h4>Salary</h4>
                            <p>
                                <input type="text" id="txtSalary" class="col-md-12 form-control" placeholder="Enter Salary" maxlength="150"> </p>
						</div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green" onclick="AddUser()" id="btnAddUser">Save</button>
                </div>
            </div>
        </div>
    </div>

	<div id="divDeleteUser" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Delete User</h4>
                </div>
                <div class="modal-body">

					<div class="row">
                        <div class="col-md-12">

                            <p>
                            Are you sure you want to delete the selected user ?
						</div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" id="btnDeleteUser" class="btn green" onclick="DeleteUser()">Delete</button>
                </div>
            </div>
        </div>
    </div>

<script>
$(function(){

	LoadUser();
});

function SuccessLoadUser(data)
{
	if(data && data.length > 0){
	RemoveDataTable("tbluserprofile");
	$("#tbluserprofile tbody").html("");
	for(var i=0;i<data.length;i++)
	{
		debugger;
		var userObject = JSON.stringify({UserId:data[i].UserId,FirstName:data[i].FirstName,CNIC:data[i].CNIC,MobileNo:data[i].MobileNo,Address:data[i].Address,Salary:data[i].Salary});
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].FirstName+"</td><td>"+data[i].CNIC+"</td><td>"+data[i].MobileNo+"</td><td>"+data[i].Address+"</td><td>"+data[i].Salary+"</td><td><a title='Edit' onclick='EditUser("+userObject+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><span class='md-click-circle md-click-animate' style='height: 27px; width: 27px; top: -5.5px; left: -3.84375px;'></span><i class='icon-pencil'></i></a><a title='Delete' onclick='ConfirmDeleteUser("+data[i].UserId+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><i class='icon-trash'></i></a></td></tr>";
		$("#tbluserprofile tbody").append(tr);
	}
	var columns = [{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}];
	BindDataTable("tbluserprofile",columns);
	}
	$("#divDeleteTest").modal("hide");
	$("#divAddTest").modal("hide");
}
function FailureLoadUser(err)
{

}
function LoadUser()
{
	APICall("<?php echo base_url(); ?>" + "index.php/EmployeesController/LoadUser", "SuccessLoadUser", "FailureLoadUser", "GET");
}
function AddUser()
{
	debugger;
	var UserID = $("#btnAddUser").attr("UserID");
	if(!UserID)
		UserID=0;
	var data = {UserId:UserID,FirstName:$("#txtFirstName").val(),CNIC:$("#txtCNIC").val(),MobileNo:$("#txtMobileNo").val(),Address:$("#txtAddress").val(),Salary:$("#txtSalary").val()};
	APICall("<?php echo base_url(); ?>" + "index.php/EmployeesController/AddUser", "SuccessAddUser", "FailureAddUser", "POST",data);
}
function SuccessAddUser(data)
{
	if(data){
		LoadUser();
		ShowSuccessToastMessage("Test has been saved successfully.");
	}
}
function ShowAddUser()
{
	$("#divAddTest").modal("show")
}
function ConfirmDeleteUser(id)
{
	$("#btnDeleteUser").attr("UserId",id);
	$("#divDeleteUser").modal("show");
}
function EditUser(obj)
{
	$("#txtFirstName").val(obj.FirstName);
	$("#txtCNIC").val(obj.CNIC);
	$("#txtMobileNo").val(obj.MobileNo);
	$("#txtAddress").val(obj.Address);
	$("#txtSalary").val(obj.Salary);
	$("#btnAddUser").attr("UserID",obj.UserId);
	$("#divAddTest").modal("show");
}

function DeleteUser()
{
	var data={UserId :$("#btnDeleteUser").attr("UserId")};
	APICall("<?php echo base_url(); ?>" + "index.php/EmployeesController/DeleteUser", "SuccessDeleteUser", "FailureDeleteUser", "POST",data);
}
function SuccessDeleteUser(data)
{
	if(data){
		LoadUser();
		ShowSuccessToastMessage("User has been deleted successfully.");
		$("#divDeleteUser").modal("hide");
	}
}
</script>
