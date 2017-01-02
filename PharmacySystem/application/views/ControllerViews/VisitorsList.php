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
					<span>Patients List</span>
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
							<span class="caption-subject font-green bold uppercase">Patients List</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="">
							<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable " id="tblVisitorsPatients">
								<thead>
									<tr>
									<th>Sr.</th>
										<th>Name</th>
										<th>Date</th>
										<th>Fee</th>
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
var visitorType="d";
$(function(){
visitorType = getUrlData()["type"];
APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/LoadVisitors?VisitorType="+visitorType, "SuccessLoadVisitors", "FailureLoadVisitors", "GET");
});
function SuccessLoadVisitors(data)
{
	if(data && data.length > 0){
	for(var i=0;i<data.length;i++)
	{
		var tr = "<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].TokenDate+"</td><td>"+data[i].TotalFee+"</td></tr>";
		$("#tblVisitorsPatients tbody").append(tr);
	}
	var columns =[{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true}]
	BindDataTable("tblVisitorsPatients",columns);
	}
}
function FailureLoadVisitors(err)
{

}
					</script>
