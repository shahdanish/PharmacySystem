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
					<span>Hospital Charges List</span>
				</li>
			</ul>
			</div>
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-primay">
						<div class="panel-heading"> Search Hospital Charges </div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label">From Date</label>
									<div class="form-group">
										<div class='input-group date'>
											<input type='text' class="form-control" id='fromdate' />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<label class="control-label">To Date</label>
									<div class="form-group">
										<div class='input-group date'>
											<input type='text' class="form-control" id='todate' />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<label class="control-label">Type</label>
									<select class="form-control" id="ChargesType">
									  <option value="0">Select</option>
									  <option value="1">Anesthesia</option>
									  <option value="2">Gases</option>
									  <option value="3">Utility</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
								<br />
								<input type="button" class="btn btn-primary pull-right" value="Search" onclick="SearchChargesReports()" />
								</div>
							</div>
						</div>
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
							<i class="fa fa-hospital-o font-green"></i>
							<span class="caption-subject font-green bold uppercase">Hospital Charges List</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="">
							<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable" id="tblChargesReport">
								<thead>
									<tr>
										<th>Sr.</th>
										<th>Charges</th>
										<th>Item Name</th>
										<th>Date</th>
										<th>Type</th>
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
	LoadAnesthesia();
});

function SuccessLoadChargesReport(data)
{
	RemoveDataTable("tblChargesReport");
	$("#tblChargesReport tbody").html("");
	if(data && data.length > 0){
		for(var i=0;i<data.length;i++)
		{
			debugger;
			var AnesthesiaObject = JSON.stringify({ChargesID:data[i].ChargesID,Charges:data[i].Charges,ItemName:data[i].ItemName,Date:data[i].Date,Name:data[i].Name});
			var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].Charges+"</td><td>"+data[i].ItemName+"</td><td>"+data[i].Date+"</td><td>"+data[i].Name+"</td></tr>";
			$("#tblChargesReport tbody").append(tr);
		}
	}
	var columns = [{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true}];
	BindDataTable("tblChargesReport",columns);
}
function FailureLoadChargesReport(err)
{

}
function LoadAnesthesia()
{
	var data = {ItemType:0};
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/LoadAnesthesia", "SuccessLoadChargesReport", "FailureLoadChargesReport", "POST", data);
}
function SearchChargesReports()
{
	var fromdate=$("#fromdate").val();	
	var todate=$("#todate").val();	
	var chargestype = $("#ChargesType").val();
	var data = {fromdate:fromdate,todate:todate,chargestype:chargestype};
	if(fromdate=="" && todate=="" && chargestype=="")
	{
		return;
	}
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/SearchAnesthesia", "SuccessLoadChargesReport", "FailureLoadChargesReport", "POST",data);
}
</script>
