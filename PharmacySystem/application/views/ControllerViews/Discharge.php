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
							<i class="fa fa-gift"></i>Discharge Form</div>
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
								<h1 class="form-section">Patient Info</h1>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Patient Name</label>
											<input readonly="readonly" type="text" id="txtPatientName" class="form-control" placeholder="Enter Patient Name" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">CNIC Number</label>
											<input readonly="readonly" type="number" id="txtCnicNo" class="form-control" placeholder="3840375969641" maxlength="20">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Cell No</label>
											<input readonly="readonly" type="number" id="txtCellNo" class="form-control" placeholder="03141111111"maxlength="12">
										</div>
									</div>
									</div>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Age</label>
											<input readonly="readonly" type="text" id="txtAge" class="form-control" placeholder="2" maxlength="3">
										</div>
									</div>
									<div class="col-md-8">
										<div class="form-group">
											<label class="control-label">Address</label>
											<input readonly="readonly" type="text" id="txtAddress" class="form-control" placeholder="Address" maxlength="100">
										</div>
									</div>
									</div>
									<h1 class="form-section">Admission Info</h1>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Admit Reason</label>
											<input readonly="readonly" type="text" id="txtAdmitReason" class="form-control" placeholder="Admit Reason" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Reffered By</label>
											<input readonly="readonly" type="text" id="txtReffredBy" class="form-control" placeholder="Admit Reason" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Room Number</label>
											<input readonly="readonly" type="text" id="txtRoomNo" class="form-control" placeholder="Admit Reason" maxlength="50">

										</div>
									</div>
									
									
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
								<div class="col-md-4">
										<div class="form-group">
										<label class="control-label">Advance Fee</label>
											<input readonly="readonly" type="text" id="txtAdvanceFee" class="form-control" placeholder="5000">
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-group">
										<label class="control-label">Date Of Admission</label>
											<input type="text" id="txtAdmissionDate" class="form-control" placeholder="01/01/2016" readonly="readonly">
										</div>
										</div>
								</div>
								
								
								<!--/row-->
								<h1 class="form-section">Patient Bill</h1>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Admission Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Total Admission Fee</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Consultant Visit Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Select Consultant</label>
											<select class="form-control" name="">
											  <option>Dr Cheema</option>
												<option>Dr Ahmed</option>
												  <option>Dr Nouman</option>
											</select>

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Consultant Fee</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total Visits</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Nursing Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Nursing Charges</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Room Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Room Charges Per Day</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total Days</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>AC Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">AC charges</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Heater Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Heater Charges</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Operation Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Operation Fee</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Theater Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Theater Charges</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Anaesthesia Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Anaesthesia Fee</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Hardware</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Hardware Charges</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Operation Medicine</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Operation Medicine Charges</label>
											<input type="text" id="roomnumber" class="form-control" placeholder="Lim">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="text" id="mob" class="form-control" placeholder="Lim">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
								  <div class="col-sm-6">
									<div class="form-group">
									  <h2 class="">Total</h2>
									</div>
								  </div>
								  <div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Total Bill</label>
										<input type="text" id="tbill" class="form-control input-lg" placeholder="Your Total Bill">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-6">
									<div class="form-group">
									  <h2 class="">Advance</h2>
									</div>
								  </div>
								  <div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Total Bill</label>
										<input type="text" id="tbill" class="form-control input-lg" placeholder="Your Total Bill">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-6">
									<div class="form-group">
									  <h2 class="">Main Total</h2>
									</div>
								  </div>
								  <div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Remaining Bill</label>
										<input type="text" id="tbill" class="form-control input-lg" placeholder="Your Total Bill">
									</div>
								  </div>
								</div>

							<div class="form-actions right">
								<button type="button" class="btn default">Cancel</button>
								<button type="button" class="btn blue" onclick="SavePatientDischargeInformation()">
													<i class="fa fa-check"></i> Save</button>
							</div>
						</form>
						<!-- END FORM-->
					</div>

				</div>
			</div>
		</div>

	</div>
	<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->


</div>

<script>
var patientId=0;
var admissionId=0;
$(function(){
	
	patientId =  getUrlData()["pid"];
	admissionId = getUrlData()["aid"];
	if(!patientId)
		patientId = 0;
	if(!admissionId)
		admissionId = 0;
	
	var data = {PatientID:patientId,AdmissionID:admissionId};
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/LoadPatientInfo", "SuccessLoadPatientInfo", "FailureLoadPatientInfo", "POST",data);
	
});
function SuccessLoadPatientInfo(data)
{
	if(data && data.length > 0)
	{
		$("#txtPatientName").val(data[0].PatientName);
		$("#txtCnicNo").val(data[0].PatientCNIC);
		$("#txtCellNo").val(data[0].CellNo);
		$("#txtAge").val(data[0].Age);
		$("#txtAddress").val(data[0].Address);
		$("#txtAdmitReason").val(data[0].AdmitReason);
		$("#txtReffredBy").val(data[0].UserName);
		$("#txtRoomNo").val(data[0].RoomNo);
		$("#txtAdvanceFee").val(data[0].AdvanceFee);
		$("#txtAdmissionDate").val(data[0].AdmissionDate);
	}
}
function FailureLoadPatientInfo(err)
{
	
}
function SavePatientDischargeInformation()
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

</script>