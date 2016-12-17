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
					<span>User Profile</span>
				</li>
			</ul>

		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN DASHBOARD STATS 1-->

		<div class="clearfix"></div>
		<!-- END DASHBOARD STATS 1-->
		<div class="row">
			<div class="col-sm-12">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-gift"></i>User Profile</div>
						<div class="tools">
							<a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
							<a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
							<a href="javascript:;" class="reload" data-original-title="" title=""> </a>
							<a href="javascript:;" class="remove" data-original-title="" title=""> </a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="#" class="horizontal-form">
							<div class="form-body">
								
								<div class="form-group">
								<div class="row">
									
										
<div class="col-md-12">									
									<div class="col-md-4">										
										<label class="control-label">User Name</label>
										</div>
										<div class="col-md-8">
											<input type="text" id="txtUserName" class="form-control" placeholder="Enter User Name" maxlength="50">
										</div>	
										</div>
									</div>
									</div>
									<div class="form-group">
								<div class="row">
									
										
<div class="col-md-12">									
									<div class="col-md-4">										
										<label class="control-label">Password</label>
										</div>
										<div class="col-md-8">
											<input type="password" id="txtPassword" class="form-control" placeholder="Enter Password" maxlength="50">
										</div>	
										</div>
									</div>
									</div>
								<div class="form-group">
								<div class="row">
									
										
<div class="col-md-12">									
									<div class="col-md-4">										
										<label class="control-label">First Name</label>
										</div>
										<div class="col-md-8">
											<input type="text" id="txtFirstName" class="form-control" placeholder="Enter First Name" maxlength="50">
										</div>	
										</div>
									</div>
									</div>
									<div class="form-group">
									<div class="row">
									
										
<div class="col-md-12">									
									<div class="col-md-4">	
											<label class="control-label">Last Name</label>
											</div>
											<div class="col-md-8">	
											<input type="text" id="txtLastName" class="form-control" placeholder="Enter Last Name" maxlength="50">
</div>
										</div>
									</div>
									</div>
									<div class="form-group">
									<div class="row">
									<div class="col-md-12">
										
										<div class="col-md-4">	
											<label class="control-label">Address</label>
											</div>
										<div class="col-md-8">		
											<input type="text" id="txtAddress" class="form-control" placeholder="Enter Address"maxlength="100">
										</div>
										</div>
									</div>
									</div>
									
								<div class="form-actions right">
								<button type="button" class="btn default">Cancel</button>
								<button type="button" class="btn blue" onclick="SaveUserInformation()">
													<i class="fa fa-check"></i> Save</button>
								</div>
								
	</div>
</div>
<!-- END QUICK SIDEBAR -->
</div>
</div>
</div>
</div>
</div>


<script>
var userID = <?php echo $this->session->userdata["logged_in"]["userID"] ?>;
$(function(){
	
	APICall("<?php echo base_url(); ?>" + "index.php/User_Authentication/LoadUserInfo?UserId="+userID, "SuccessLoadUserInfo", "FailureLoadUserInfo", "GET");
});
function SuccessLoadUserInfo(data)
{
	if(data && data.length > 0){
	$("#txtUserName").val(data[0].UserName);
	$("#txtPassword").val(data[0].Password);
	$("#txtFirstName").val(data[0].FirstName);
	$("#txtLastName").val(data[0].LastName);
	$("#txtAddress").val(data[0].Address);
	}
}
function FailureLoadUserInfo(err)
{
	
}
function SaveUserInformation()
{
	var userInfo = 
	{
	FirstName:$("#txtFirstName").val(),
	LastName:$("#txtLastName").val(),
	UserName:$("#txtUserName").val(),
	Address:$("#txtAddress").val(),
	Password:$("#txtPassword").val(),
	UserID:userID
	};
	APICall("<?php echo base_url(); ?>" + "index.php/User_Authentication/SaveUserInformation", "SuccessSavePatientInfo", "FailureSaveUserInformation", "POST",userInfo);
}
function SuccessSavePatientInfo(data)
{
	
	if(data)
		ShowSuccessToastMessage("User information saved successfully.");
}
function FailureSaveUserInformation(err)
{
	
}
</script>