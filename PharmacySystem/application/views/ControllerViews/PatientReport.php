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
							<i class="fa fa-gift"></i>Patient Report (<span id="spanPateintStatus"></span>)</div>
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
								<h1 class="form-section">Discharge Info</h1>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Discharged By</label>
											<select class="form-control" id="ddlDischargedBy">

											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Discharge Reason</label>
											<input type="text" id="txtDischargeReason" class="form-control" placeholder="Reason" maxlength="50">

										</div>
									</div>
									
									</div>

								<!--/row-->
								
								<h1 class="form-section">Patient Bill</h1>
							<h2 class="form-section" id="h2InvetoryUsed" style="display:none">Inventory Items Used</h2>
								<h2 id="h2PatientBill" class="form-section">Charges</h2>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Admission Fee</h3>
										</div>
									</div>
									<!--/span-->
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalAdmissionFee" class="form-control mainTotal" placeholder="Total Fee">

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
									
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalConsultantFee" class="form-control mainTotal" placeholder="Total Fee">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalNursingFee" class="form-control mainTotal" placeholder="Total">

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
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalRoomCharges" class="form-control mainTotal" placeholder="Total">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalAcCharges" class="form-control mainTotal" placeholder="Total">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalHeaterCharges" class="form-control mainTotal" placeholder="Total">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalOperationFee" class="form-control mainTotal" placeholder="Total">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalTheaterCharges" class="form-control mainTotal" placeholder="Total">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalAnesthesiaFee" class="form-control mainTotal" placeholder="Total">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalHardwareFee" class="form-control mainTotal" placeholder="Total">

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
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalMedFee" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>

								<div class="row">
								  <div class="col-sm-4">
									<div class="form-group">
									  <h2 class="">Total</h2>
									</div>
								  </div>
								  <div class="col-sm-4">
									<div class="form-group">
										<label class="control-label">Total Bill</label>
										<input type="number" id="txtBill" class="form-control input-lg" onchange="CalculateMainTotal()" placeholder="Total Bill" readonly="readonly">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-4">
									<div class="form-group">
									  <h2 class="">Advance</h2>
									</div>
								  </div>
								  <div class="col-sm-4">
									<div class="form-group">
										<label class="control-label">Advace Fee</label>
										<input type="number" id="txtAdvanceFee1" class="form-control input-lg" placeholder="Advance Fee" readonly="readonly">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-4">
									<div class="form-group">
									  <h2 class="">Discount</h2>
									</div>
								  </div>
								  <div class="col-sm-4">
									<div class="form-group">
										<label class="control-label">Total Discount</label>
										<input type="number" id="txtDiscount" onchange="CalculateMainTotal()" onkeyup="CalculateMainTotal()" class="form-control input-lg" placeholder="Total Discount">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-4">
									<div class="form-group">
									  <h2 class="">Main Total</h2>
									</div>
								  </div>
								  <div class="col-sm-4">
									<div class="form-group">
										<label class="control-label">Grand Total</label>
										<input type="number" id="txtMainTotal" class="form-control input-lg" placeholder="Your Total Bill" readonly="readonly">
									</div>
								  </div>
								</div>

							<div class="form-actions right">
								<button type="button" class="btn default" onclick="window.location='PatientsList'";>Back</button>
								
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
var inventoryUsed=[];
$(function(){

	patientId =  getUrlData()["pid"];
	admissionId = getUrlData()["aid"];
	if(!patientId)
		patientId = 0;
	if(!admissionId)
		admissionId = 0;
	APICall("<?php echo base_url(); ?>" + "index.php/SlipController/LoadDoctors", "SuccessLoadDoctors", "FailureLoadDoctors", "GET");
	var data = {PatientID:patientId,AdmissionID:admissionId};
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/LoadPatientInfo", "SuccessLoadPatientInfo", "FailureLoadPatientInfo", "POST",data);
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/LoadInventoryUsed?AdmissionId="+admissionId, "SuccessLoadInventoryUsed", "FailureLoadInventoryUsed", "GET");
	$("input").attr("readonly","readonly");
	$("select").attr("disabled","disabled");
});
function SuccessLoadDoctors(data)
{
	if(data && data.length > 0){
	for(var i=0;i<data.length;i++)
	{
	$("#ddlDoctors").append($("<option></option>").attr({"value":data[i].UserID}).text(data[i].UserName));
	$("#ddlDischargedBy").append($("<option></option>").attr({"value":data[i].UserID}).text(data[i].UserName));
	}
	}
}
function FailureLoadDoctors(err)
{

}
function SuccessLoadPatientInfo(data)
{
	if(data && data.length > 0)
	{
		$("#spanPateintStatus").text(data[0].IsDischarged==1 ? "Discharged" : "Admit");
		
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
		$("#txtAdvanceFee1").val(data[0].AdvanceFee);
		
		$("#ddlDischargedBy").val(data[0].DischargedBy);
		$("#txtDischargeReason").val(data[0].DischargeReason);
		$("#txtTotalAdmissionFee").val(data[0].AdmissionFee);
		$("#txtTotalConsultantFee").val(data[0].ConsultantFee);
		$("#txtTotalNursingFee").val(data[0].NursingCharges);
		$("#txtTotalRoomCharges").val(data[0].RoomCharges);
		$("#txtTotalAcCharges").val(data[0].AcCharges);
		$("#txtTotalHeaterCharges").val(data[0].HeaterCharges);
		$("#txtTotalOperationFee").val(data[0].OperationFee);
		$("#txtTotalTheaterCharges").val(data[0].TheaterFee);
		$("#txtTotalAnesthesiaFee").val(data[0].AnaesthesiaFee);
		$("#txtTotalHardwareFee").val(data[0].HardWareFee);
		$("#txtTotalMedFee").val(data[0].OperationMedicines);
		$("#txtDiscount").val(data[0].Discount);
		$("#txtMainTotal").val(data[0].TotalFee);
		
		$("#txtBill").val(parseInt(data[0].TotalFee) - parseInt(data[0].Discount));
		
	}
	
}
function FailureLoadPatientInfo(err)
{

}
function SuccessLoadInventoryUsed(data)
{
	if(data.length > 0){
	var html="";
for(var i=0;i<data.length;i++){
	var price = parseInt(data[i].ItemQuantity) * parseInt(data[i].ItemPrice);
	var html="<div class='row'>"+
	"<div class='col-md-4'>"+
	"<div class='form-group'>"+
	"<h3>"+data[i].ItemName+"</h3>"+
	"</div>"+
	"</div>"+
	"<div class='col-md-4'>"+
	"<div class='form-group'>"+
	"<label class='control-label'>Total</label>"+
	"<input type='text' class='form-control mainTotal invetoryItems' placeholder='Total' readonly='readonly' value='"+price+"' />"+
	"</div>"+
	"</div>"+
	"</div>";
	$("#h2PatientBill").before(html);
	}
	$("#h2InvetoryUsed").show();
	}
}
</script>
