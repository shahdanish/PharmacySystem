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
										<th>Token No</th>
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
var visitorType="d";
$(function(){
visitorType = getUrlData()["type"];
APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/LoadVisitors?VisitorType="+visitorType, "SuccessLoadVisitors", "FailureLoadVisitors", "GET");
});
function SuccessLoadVisitors(data)
{
	debugger;
	if(data && data.length > 0){
	for(var i=0;i<data.length;i++)
	{
		var tr = "<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].TokenDate+"</td><td>"+data[i].TotalFee+"</td><td>"+data[i].TokenID+"</td><td><a title='Edit' onclick='ShowEditFee("+data[i].Id+","+data[i].TotalFee+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><span class='md-click-circle md-click-animate' style='height: 27px; width: 27px; top: -5.5px; left: -3.84375px;'></span><i class='icon-pencil'></i></a></td></tr>";
		$("#tblVisitorsPatients tbody").append(tr);
	}
	var columns =[{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true}]
	BindDataTable("tblVisitorsPatients",columns);
	}
}
function FailureLoadVisitors(err)
{

}
function ShowEditFee(VisitorId,fee)
{
	$("#PatientFee").modal("show");
	$("#txtFee").val(fee);
	$("#btnAdjustFee").attr("VisitorId",VisitorId);
}
function AdjustFee()
{
	var testId = $("#btnAdjustFee").attr("VisitorId");
	var fee = $("#txtFee").val();
	var data={"VisitorId":testId,Fee:fee};
	APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/AdjustTestFee", "SuccessAdjustTestFee", "FailureAdjustTestFee", "POST",data);
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
