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
				  </div>
				  <div class="form-group">
					<label for="">Number of X-ray Test</label>
					<label for="" id="XrayTestCount"></label>
				  </div>
				 <div class="form-group">
					<label for="">Number of Lab Test</label>
					<label for="" id="LabTestCount"></label>
				  </div>
				  <div class="form-group">
					<label for="">Number of Admitted Patients</label>
					<label for="" id="AdmitPatientCount"></label>
				  </div>
				  <div class="form-group">
					<label for="">Number of Discharged Patients</label>
					<label for="" id="DischargedPatientCount"></label>
				  </div>
			</div>
		</div>
	</div>
	<!-- END CONTENT BODY -->
</div>
<script>
$(function(){
	APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/LoadDailySummaryAccountant", "SuccessLoadDailySummaryAccountant", "FailureLoadDailySummaryAccountant", "GET");
})
function SuccessLoadDailySummaryAccountant(data)
{
	debugger;
	$("#AdmitPatientCount").text(data[0].DailyAdmitPatientsCount)
	$("#DischargedPatientCount").text(data[0].DailyDischargePatientsCount)
	$("#LabTestCount").text(data[0].DailyLabTestCount)
	$("#PatientCount").text(data[0].DailyTokenCount);
	$("#XrayTestCount").text(data[0].DailyXRayCount)
}
function FailureLoadDailySummaryAccountant(err)
{
	
}
</script>
