<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<!-- BEGIN THEME PANEL -->
		<div class="theme-panel">
			<div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
				<i class="icon-settings"></i>
			</div>
			<div class="toggler-close">
				<i class="icon-close"></i>
			</div>
			<div class="theme-options">
				<div class="theme-option theme-colors clearfix">
					<span> THEME COLOR </span>
					<ul>
						<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
						<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
						<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
						<li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark"> </li>
						<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
					</ul>
				</div>
				<div class="theme-option">
					<span> Layout </span>
					<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
				</div>
				<div class="theme-option">
					<span> Header </span>
					<select class="page-header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
				</div>
				<div class="theme-option">
					<span> Top Dropdown</span>
					<select class="page-header-top-dropdown-style-option form-control input-small">
							<option value="light" selected="selected">Light</option>
							<option value="dark">Dark</option>
						</select>
				</div>
				<div class="theme-option">
					<span> Sidebar Mode</span>
					<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
				</div>
				<div class="theme-option">
					<span> Sidebar Style</span>
					<select class="sidebar-style-option form-control input-small">
							<option value="default" selected="selected">Default</option>
							<option value="compact">Compact</option>
						</select>
				</div>
				<div class="theme-option">
					<span> Sidebar Menu </span>
					<select class="sidebar-menu-option form-control input-small">
							<option value="accordion" selected="selected">Accordion</option>
							<option value="hover">Hover</option>
						</select>
				</div>
				<div class="theme-option">
					<span> Sidebar Position </span>
					<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
				</div>
				<div class="theme-option">
					<span> Footer </span>
					<select class="page-footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
				</div>
			</div>
		</div>
		<!-- END THEME PANEL -->
		<h3 class="page-title"> Dashboard
				<small>dashboard & statistics</small>
			</h3>
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
			<div class="page-toolbar">
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
							<i class="fa fa-angle-down"></i>
						</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<li>
							<a href="#">
								<i class="icon-bell"></i> Action</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-shield"></i> Another action</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-user"></i> Something else here</a>
						</li>
						<li class="divider"> </li>
						<li>
							<a href="#">
								<i class="icon-bag"></i> Separated link</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN DASHBOARD STATS 1-->
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="dashboard-stat blue">
					<div class="visual">
						<i class="fa fa-comments"></i>
					</div>
					<div class="details">
						<div class="number">
							<span id="dailyTokenCount"></span>
						</div>
						<div class="desc"> Daily Visitors </div>
					</div>
					<a class="more" href="javascript:;"> View more
							<i class="m-icon-swapright m-icon-white"></i>
						</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="dashboard-stat red">
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
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="dashboard-stat green">
					<div class="visual">
						<i class="fa fa-shopping-cart"></i>
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
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="dashboard-stat purple">
					<div class="visual">
						<i class="fa fa-globe"></i>
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
							<i class="icon-social-dribbble font-green"></i>
							<span class="caption-subject font-green bold uppercase">TICKETS SECTION</span>
						</div>
						<div class="actions">
							<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
								<i class="icon-cloud-upload"></i>
							</a>
							<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;"><span class="md-click-circle md-click-animate" style="height: 27px; width: 27px; top: -5.5px; left: -3.84375px;"></span>
									<i class="icon-wrench"></i>
								</a>
							<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
								<i class="icon-trash"></i>
							</a>
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
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-social-dribbble font-green"></i>
							<span class="caption-subject font-green bold uppercase">Laboratory Test Price List</span>
						</div>

					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover" id="tblTests">
								<thead>
									<tr>
										<th> # </th>
										<th> Lab Test Name</th>
										<th>Lab Test Price</th>
										<th>Action</th>
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
		<div class="row">
			<div class="col-sm-12">
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-share font-blue"></i>
							<span class="caption-subject font-blue bold uppercase">In Patient Lists</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
							<ul class="feeds">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="#" data-target="#patientdetails" data-toggle="modal">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">Farooq Shad</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> <a href="">View Detail</a> </div>
									</div>
								</li>



							</ul>
						</div>
						<div class="scroller-footer">
							<div class="btn-arrow-link pull-right">
								<a href="javascript:;">See All Records</a>
								<i class="icon-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
			</div>
		</div>

	</div>
	<!-- END CONTENT BODY -->
</div>
<script>
$(document).ready(function() {
		APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/LoadTokenCount", "SuccessLoadTokenID", "FailureLoadTokenID", "GET");
		
	});
function SuccessLoadTokenID(data)
{
	$("#dailyTokenCount").html(data[0].DailyTokenCount);
	$("#monthlyTokenCount").html(data[0].MonthlyTokenCount);
	$("#spanPatientsAdmit").html(data[0].AdmitPatients);
	$("#spanTotalXray").html(data[0].ItemQuantity);
	//$("#spanPatientsAdmit").attr({"data-value":data[0].AdmitPatients,"data-counter":"counterup"});
	
}
function FailureLoadTokenID(err)
{
}
	

</script>