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
		<div class="row widget-row">
      <div class="col-md-4">
          <!-- BEGIN WIDGET THUMB -->
          <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
              <h4 class="widget-thumb-heading">Number of patients</h4>
              <div class="widget-thumb-wrap">
                  <i class="widget-thumb-icon bg-green fa fa-wheelchair"></i>
                  <div class="widget-thumb-body">
                      <span class="widget-thumb-body-stat"><label for="" id="PatientCount"></label></span>
                  </div>
              </div>
          </div>
      </div>


			<div class="col-md-4">
          <!-- BEGIN WIDGET THUMB -->
          <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
              <h4 class="widget-thumb-heading">Number of X-ray Test</h4>
              <div class="widget-thumb-wrap">
                  <i class="widget-thumb-icon bg-red fa fa-stethoscope"></i>
                  <div class="widget-thumb-body">
                      <span class="widget-thumb-body-stat">
											<label for="" id="XrayTestCount"></label></span>
                  </div>
              </div>
          </div>
      </div>
			<div class="col-md-4">
          <!-- BEGIN WIDGET THUMB -->
          <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
              <h4 class="widget-thumb-heading">Number of Lab Test</h4>
              <div class="widget-thumb-wrap">
                  <i class="widget-thumb-icon bg-red fa fa-medkit"></i>
                  <div class="widget-thumb-body">
                      <span class="widget-thumb-body-stat">
											<label for="" id="LabTestCount"></label></span>
                  </div>
              </div>
          </div>
      </div>
			<div class="col-md-4">
          <!-- BEGIN WIDGET THUMB -->
          <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
              <h4 class="widget-thumb-heading">Number of Admitted Patients</h4>
              <div class="widget-thumb-wrap">
                  <i class="widget-thumb-icon bg-purple fa fa-user-md"></i>
                  <div class="widget-thumb-body">
                      <span class="widget-thumb-body-stat">
											<label for="" id="AdmitPatientCount"></label></span>
                  </div>
              </div>
          </div>
      </div>
			<div class="col-md-4">
          <!-- BEGIN WIDGET THUMB -->
          <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
              <h4 class="widget-thumb-heading">Number of Discharged Patients</h4>
              <div class="widget-thumb-wrap">
                  <i class="widget-thumb-icon bg-purple fa fa-user-md"></i>
                  <div class="widget-thumb-body">
                      <span class="widget-thumb-body-stat">
											<label for="" id="DischargedPatientCount"></label></span>
                  </div>
              </div>
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
