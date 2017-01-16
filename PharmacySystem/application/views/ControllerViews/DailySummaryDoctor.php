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
					<span>Daily Summary</span>
				</li>
			</ul>

		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN DASHBOARD STATS 1-->

		<div class="clearfix"></div>
		<!-- END DASHBOARD STATS 1-->
		<div class="row">
		  <div class="col-md-6 col-md-offset-2 ">
				  <div class="form-group">
					<label for="">Number of patients</label>
					<label for="" id="PatientCount"></label>
					<label for="" id="PatientCountCharges"></label>
				  </div>
				  <div class="form-group">
					<label for="">Number of X-ray Test</label>
					<label for="" id="XrayTestCount"></label>
					<label for="" id="XrayTestCountCharges"></label>
				  </div>
				 <div class="form-group">
					<label for="">Number of Lab Test</label>
					<label for="" id="LabTestCount"></label>
					<label for="" id="LabTestCountCharges"></label>
				  </div>
				  <div class="form-group">
					<label for="">Number of Admitted Patients</label>
					<label for="" id="AdmitPatientCount"></label>
					<label for="" id="AdmitPatientCountCharges"></label>
				  </div>
				  <div class="form-group">
					<label for="">Number of Discharged Patients</label>
					<label for="" id="DischargedPatientCount"></label>
					<label for="" id="DischargedPatientCountCharges"></label>
				  </div>
				  <div class="form-group">
					<label for="">Daily Hospital Charges (Anesthesia, Gases, Utility)</label>
					<label for="" id="DailyHospitalCharges"></label>
				  </div>
			</div>
		</div>
	</div>
	<!-- END CONTENT BODY -->
</div>
<script>
$(function(){
	APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/LoadDailySummaryDoctor", "SuccessLoadDailySummaryDoctor", "FailureLoadDailySummaryDoctor", "GET");
})
function SuccessLoadDailySummaryDoctor(data)
{
	debugger;
	$("#AdmitPatientCount").text(data[0].DailyAdmitPatientsCount)
	$("#DischargedPatientCount").text(data[0].DailyDischargePatientsCount)
	$("#LabTestCount").text(data[0].DailyLabTestCount)
	$("#PatientCount").text(data[0].DailyTokenCount);
	$("#XrayTestCount").text(data[0].DailyXRayCount)
	$("#AdmitPatientCountCharges").text(data[0].DailyAdmissionFee)
	$("#DischargedPatientCountCharges").text(data[0].DailyDischargeFee)
	$("#DailyHospitalCharges").text(data[0].DailyHospitalCharges)
	$("#LabTestCountCharges").text(data[0].DailyTestFees)
	$("#PatientCountCharges").text(data[0].DailyTokenFees)
}
function FailureLoadDailySummaryAccountant(err)
{
	
}
</script>
