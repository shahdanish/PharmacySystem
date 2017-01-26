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
													<th></th>
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
													<th></th>
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
<div id="PatientFee" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Adjust Fee</h4>
                </div>
                <div class="modal-body">
                    
					<div class="row">
                        <div class="col-md-12">
                            <h4>Fee</h4>
                            <p>
                                <input type="text" class="col-md-12 form-control" id="txtFee" placeholder="Fee"> </p>
						</div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green" id="btnAdjustFee" onclick="AdjustFee()">Save</button>
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
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].PatientCNIC+"</td><td>"+data[i].TestName+"</td><td>"+data[i].TestDate+"</td><td><a title='Edit' onclick='ShowEditFee("+data[i].ID+","+data[i].Fee+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><span class='md-click-circle md-click-animate' style='height: 27px; width: 27px; top: -5.5px; left: -3.84375px;'></span><i class='icon-pencil'></i></a></td></tr>";
		$("#tblTests tbody").append(tr);
	}
	var columns = [{"bSortable":false},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false},{"bSortable":false}]
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
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].PatientCNIC+"</td><td>"+data[i].TestName+"</td><td>"+data[i].TestDate+"</td><td><a title='Edit' onclick='ShowEditFee("+data[i].ID+","+data[i].Fee+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><span class='md-click-circle md-click-animate' style='height: 27px; width: 27px; top: -5.5px; left: -3.84375px;'></span><i class='icon-pencil'></i></a></td></tr>";
		$("#tblXRayTest tbody").append(tr);
	}
	var columns = [{"bSortable":false},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false},{"bSortable":false}]
	BindDataTable("tblXRayTest",columns);
}
function ShowEditFee(testId,fee)
{
	$("#PatientFee").modal("show");
	$("#txtFee").val(fee);
	$("#btnAdjustFee").attr("TestId",testId);
}
function AdjustFee()
{
	var testId = $("#btnAdjustFee").attr("TestId");
	var fee = $("#txtFee").val();
	var data={TestId:testId,Fee:fee};
	APICall("<?php echo base_url(); ?>" + "index.php/PatientTestsController/AdjustTestFee", "SuccessAdjustTestFee", "FailureAdjustTestFee", "POST",data);
}
function SuccessAdjustTestFee(data)
{
	if(data)
	{
		ShowSuccessToastMessage("Fee adjusted successfully.");
		$("#PatientFee").modal("hide");
		window.location.reload();
	}
}
</script>
