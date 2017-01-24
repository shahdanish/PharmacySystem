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
					<span>Dashboard</span>
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
							<i class="fa fa-medkit"></i>ADMISSION FORM</div>

					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="#" class="horizontal-form">
							<div class="form-body">
								<h1 class="form-section">Patient Info</h1>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Patient Name</label>
											<input type="text" id="txtPatientName" class="form-control" placeholder="Enter Patient Name" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">CNIC Number</label>
											<input type="number" id="txtCnicNo" class="form-control" placeholder="3840375969641" maxlength="20">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Cell No</label>
											<input type="number" id="txtCellNo" class="form-control" placeholder="03141111111"maxlength="12">
										</div>
									</div>
									</div>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Age</label>
											<input type="text" id="txtAge" class="form-control" placeholder="2" maxlength="3">
										</div>
									</div>
									<div class="col-md-8">
										<div class="form-group">
											<label class="control-label">Address</label>
											<input type="text" id="txtAddress" class="form-control" placeholder="Address" maxlength="100">
										</div>
									</div>
									</div>
									<h1 class="form-section">Admission Info</h1>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Admit Reason</label>
											<input type="text" id="txtAdmitReason" class="form-control" placeholder="Admit Reason" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Reffered By</label>
											<select class="form-control" id="ddlRefferedBy">

											</select>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Room Number</label>
											<select class="form-control" id="ddlRoomNo">
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											</select>

										</div>
									</div>


									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
								<div class="col-md-4">
										<div class="form-group">
										<label class="control-label">Advance Fee</label>
											<input type="number" id="txtAdvanceFee" class="form-control" placeholder="5000">
										</div>
										</div>
								</div>
								<div class="form-actions right">
								<button type="button" class="btn default" onclick="advanceinpatient();";>Print</button>
								<button type="button" class="btn blue" onclick="SavePatientInformation()">
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
$(function(){

	APICall("<?php echo base_url(); ?>" + "index.php/SlipController/LoadDoctors", "SuccessLoadDoctors", "FailureLoadDoctors", "GET");
});
function SuccessLoadDoctors(data)
{
	if(data && data.length > 0){
	for(var i=0;i<data.length;i++)
	{
	$("#ddlRefferedBy").append($("<option></option>").attr({"value":data[i].UserID}).text(data[i].UserName));
	}
	}
}
function FailureLoadDoctors(err)
{

}
function SavePatientInformation()
{
	var patientInfo =
	{
	PatientName:$("#txtPatientName").val(),
CellNo:$("#txtCellNo").val(),
PatientCNIC:$("#txtCnicNo").val(),
Age:$("#txtAge").val(),
Address:$("#txtAddress").val(),
RefferedBy:$("#ddlRefferedBy").val(),
AdmitReason:$("#txtAdmitReason").val(),
AdvanceFee:$("#txtAdvanceFee").val(),
RoomNo:$("#ddlRoomNo").val()
	};
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/SavePatient", "SuccessSavePatientInfo", "FailureSavePatientInfo", "POST",patientInfo);
}
function SuccessSavePatientInfo(data)
{
	ShowSuccessToastMessage("Patient information saved successfully.");
}
function FailureSavePatientInfo(err)
{

}
function advanceinpatient(){
	var feilds = {"Patient Name":$("#txtPatientName").val(),"CNIC":$("#txtCnicNo").val(), "Cell No":$("#txtCellNo").val(),"Age":$("#txtAge").val(),"Address":$("#txtAddress").val(),"Admit Reason":$("#txtAdmitReason").val(),"Reffered By":$("#ddlRefferedBy").val(),"Room Number":$("#ddlRoomNo").val(),"Advance Fees":$("#txtAdvanceFee").val()}
	PrintAdmitedPatientReport("Patient Report",feilds);
}
</script>
