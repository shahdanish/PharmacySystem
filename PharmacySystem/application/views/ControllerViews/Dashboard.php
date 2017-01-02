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
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="dashboard-stat green">
					<div class="visual">
						<i class="fa fa-line-chart"></i>
					</div>
					<div class="details">
						<div class="number">
							<span id="dailyTokenCount"></span>
						</div>
						<div class="desc"> Daily Visitors </div>
					</div>
					<a class="more" href="../Welcome/VisitorsList?type=m"> View more
							<i class="m-icon-swapright m-icon-white"></i>
						</a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="dashboard-stat green">
					<div class="visual">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="details">
						<div class="number">
							<span id="monthlyTokenCount"></span> </div>
						<div class="desc"> Monthly Visitors </div>
					</div>
					<a class="more" href="javascript:;"> View more
							<i class="m-icon-swapright m-icon-white"></i>
						</a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="dashboard-stat purple">
					<div class="visual">
						<i class="fa fa-heartbeat"></i>
					</div>
					<div class="details">
						<div class="number">
							<span id="spanTotalXray">0</span>
						</div>
						<div class="desc"> Total Xrays Files </div>
					</div>
					<a class="more" href="javascript:;"> View more
							<i class="m-icon-swapright m-icon-white"></i>
						</a>
				</div>
			</div>

			<div class="col-sm-4 col-xs-12">
				<div class="dashboard-stat blue-dark">
					<div class="visual">
						<i class="fa fa-stethoscope"></i>
					</div>
					<div class="details">
						<div class="number">
							<span id="spanLabTests"></span>
						</div>
						<div class="desc"> Lab Tests </div>
					</div>
					<a class="more" href="../PatientTestsController/Index"> View more
							<i class="m-icon-swapright m-icon-white"></i>
						</a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="dashboard-stat red">
					<div class="visual">
						<i class="fa fa-user-md"></i>
					</div>
					<div class="details">
						<div class="number"> +
							<span id="spanPatientsAdmit"></span> </div>
						<div class="desc"> Patient Admit </div>
					</div>
					<a class="more" href="../PatientAdmissionController/PatientsList"> View more
							<i class="m-icon-swapright m-icon-white"></i>
						</a>
				</div>
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
							<i class="fa fa-stethoscope font-green"></i>
							<span class="caption-subject font-green bold uppercase">TICKETS SECTION</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
								<thead>
									<tr>
										<th> Ticket No. </th>
										<th> Name </th>
										<th> Fees </th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td> 1 </td>
										<td> Farooq Shad </td>
										<td> 600 </td>
									</tr>
									<tr>
										<td> 2 </td>
										<td> Danish </td>
										<td> 600 </td>
									</tr>
									<tr>
										<td> 2 </td>
										<td> Muhammad Imran </td>
										<td> 600 </td>
									</tr>
									<tr>
										<td> 3 </td>
										<td> Nouman Ali </td>
										<td> 600 </td>
									</tr>
									<tr>
										<td> 4 </td>
										<td> Danish </td>
										<td> 600 </td>
									</tr>
									<tr>
										<td> 5 </td>
										<td> Danish </td>
										<td> 600 </td>
									</tr>
									<tr>
										<td> 6</td>
										<td> Danish </td>
										<td> 600 </td>
									</tr>
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


	<!-- END CONTENT BODY -->

<script>
$(document).ready(function() {
		LoadDashBoardData();
		setInterval(function(){LoadDashBoardData()},30000);

	});
function LoadDashBoardData()
{
	APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/LoadTokenCount", "SuccessLoadTokenID", "FailureLoadTokenID", "GET","",false);
}
function SuccessLoadTokenID(data)
{
	$("#dailyTokenCount").html(data[0].DailyTokenCount);
	$("#monthlyTokenCount").html(data[0].MonthlyTokenCount);
	$("#spanPatientsAdmit").html(data[0].AdmitPatients);
	if(data[0].ItemQuantity==null)
	$("#spanTotalXray").html("0");
	else
	$("#spanTotalXray").html(data[0].ItemQuantity);
	$("#spanLabTests").html(data[0].LabTests);
	//$("#spanPatientsAdmit").attr({"data-value":data[0].AdmitPatients,"data-counter":"counterup"});

}
function FailureLoadTokenID(err)
{
}


</script>
