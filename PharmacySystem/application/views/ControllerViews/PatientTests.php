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
					<span>Patient Tests List</span>
				</li>
			</ul>
			</div>


					<div class="clearfix"></div>
					<!-- END DASHBOARD STATS 1-->
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN SAMPLE TABLE PORTLET-->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-medkit font-green"></i>
										<span class="caption-subject font-green bold uppercase">Patient Tests List</span>
									</div>
								</div>
								<div class="portlet-body">
									<div class="">
										<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable " id="tblTests">
											<thead>
												<tr>
													<th>Sr.</th>
													<th>Name</th>
													<th>CNIC</th>
													<th>Test</th>
													<th>Test Date</th>
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
<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<span>X-Ray Tests List</span>
				</li>
			</ul>
			</div>


					<div class="clearfix"></div>
					<!-- END DASHBOARD STATS 1-->
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN SAMPLE TABLE PORTLET-->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-medkit font-green"></i>
										<span class="caption-subject font-green bold uppercase">X-Ray Tests List</span>
									</div>
								</div>
								<div class="portlet-body">
									<div class="">
										<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable " id="tblXRayTest">
											<thead>
												<tr>
													<th>Sr.</th>
													<th>Name</th>
													<th>CNIC</th>
													<th>Test</th>
													<th>Test Date</th>
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

<script>
$(function(){

	LoadPatientTests();
});
function LoadPatientTests()
{
	APICall("<?php echo base_url(); ?>" + "index.php/PatientTestsController/LoadPatientTests", "SuccessLoadPatientTests", "FailureLoadPatientTests", "GET");
	APICall("<?php echo base_url(); ?>" + "index.php/PatientTestsController/LoadPatientXRays", "SuccessLoadPatientXRays", "FailureLoadPatientXRays", "GET");
}
function SuccessLoadPatientTests(data)
{
	$("#tblTests tbody").html("");
	for(var i=0;i<data.length;i++)
	{
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].PatientCNIC+"</td><td>"+data[i].TestName+"</td><td>"+data[i].TestDate+"</td></tr>";
		$("#tblTests tbody").append(tr);
	}
	var columns = [{"bSortable":false},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}]
	BindDataTable("tblTests",columns);
}
function FailureLoadPatientTests(err)
{

}
function SuccessLoadPatientXRays(data)
{
	$("#tblXRayTest tbody").html("");
	for(var i=0;i<data.length;i++)
	{
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].PatientCNIC+"</td><td>"+data[i].TestName+"</td><td>"+data[i].TestDate+"</td></tr>";
		$("#tblXRayTest tbody").append(tr);
	}
	var columns = [{"bSortable":false},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}]
	BindDataTable("tblXRayTest",columns);
}

</script>
