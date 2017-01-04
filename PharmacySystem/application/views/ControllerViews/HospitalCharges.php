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
					<span>Hospital Charges</span>
				</li>
			</ul>
			</div>
			<div class="row">
			<div class="col-md-12">

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
							<span class="caption-subject font-green bold uppercase">Anesthesia  List</span>
						</div>
						<div class="addbtn ">
							<a href="#" class="btn btn-danger"  id="btnShowAddAnesthesia"  onclick="ShowAddAnesthesia()">	<i class="fa fa-plus"></i> Add New Anesthesia Charges</a>
						</div>

					</div>
					<div class="portlet-body">
						<div class="">
							<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable" id="tblAnesthesia">
								<thead>
									<tr>
										<th>Sr.</th>
										<th>Doctor Name</th>
										<th>Patient Name</th>
										<th>Charges</th>
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
		<div id="divAddAnesthesia" class="modal fade" tabindex="-1" data-width="400">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">Add Anesthesia</h4>
					</div>
					<div class="modal-body">

						<div class="row">
							<div class="col-md-12">
								<h4>Doctor Name</h4>
								<p>
									<input type="text" id="txtDoctorName" class="col-md-12 form-control" placeholder="Enter doctor name" maxlength="50"> </p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4>Patient Name</h4>
								<p>
									<input type="text" id="txtPatientName" class="col-md-12 form-control" placeholder="Enter Patient Name" maxlength="50"> </p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4>Charges</h4>
								<p>
									<input type="text" id="txtCharges" class="col-md-12 form-control" placeholder="Enter Charges" maxlength="50"> </p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
						<button type="button" class="btn green" onclick="AddAnesthesia()" id="btnAddAnesthesia">Save</button>
					</div>
				</div>
			</div>
		</div>
	<div id="divDeleteAnesthesia" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Delete Anesthesia</h4>
                </div>
                <div class="modal-body">

					<div class="row">
                        <div class="col-md-12">

                            <p>
                            Are you sure you want to delete the selected Anesthesia ?
						</div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" id="btnDeleteAnesthesia" class="btn green" onclick="DeleteAnesthesia()">Delete</button>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Gases N2O Oxygen Flourin -->
	
	<div class="row">

			<div class="col-md-12">
				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-hospital-o font-green"></i>
							<span class="caption-subject font-green bold uppercase">Gases Charges List</span>
						</div>
						<div class="addbtn ">
							<a href="#" class="btn btn-danger"  id="btnShowAddGases"  onclick="ShowAddGases()">	<i class="fa fa-plus"></i> Add New Gases Charges</a>
						</div>

					</div>
					<div class="portlet-body">
						<div class="">
							<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable" id="tblGases">
								<thead>
									<tr>
										<th>Sr.</th>
										<th>Gase Type</th>
										<th>Charges</th>
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
		<div id="divAddGases" class="modal fade" tabindex="-1" data-width="400">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">Add Gases</h4>
					</div>
					<div class="modal-body">

						<div class="row">
							<div class="col-md-12">
								<h4>Gase Name</h4>
								<p>
									<input type="text" id="txtGaseType" class="col-md-12 form-control" placeholder="Enter Gase Name" maxlength="50"> </p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4>Charges</h4>
								<p>
									<input type="text" id="txtGaseCharges" class="col-md-12 form-control" placeholder="Enter Gase Charges" maxlength="50"> </p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
						<button type="button" class="btn green" onclick="AddGases()" id="btnAddGases">Save</button>
					</div>
				</div>
			</div>
		</div>
	<div id="divDeleteGases" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Delete Gases</h4>
                </div>
                <div class="modal-body">

					<div class="row">
                        <div class="col-md-12">

                            <p>
                            Are you sure you want to delete the selected Gase item ?
						</div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" id="btnDeleteGases" class="btn green" onclick="DeleteGases()">Delete</button>
                </div>
            </div>
        </div>
    </div>

<script>
$(function(){
	LoadAnesthesia();
	LoadGases();
});

function SuccessLoadAnesthesia(data)
{
	if(data && data.length > 0){
	RemoveDataTable("tblAnesthesia");
	$("#tblAnesthesia tbody").html("");
	for(var i=0;i<data.length;i++)
	{
		debugger;
		var AnesthesiaObject = JSON.stringify({ChargesID:data[i].ChargesID,DoctorName:data[i].DoctorName,PatientName:data[i].PatientName,Charges:data[i].Charges});
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].DoctorName+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].Charges+"</td><td><a title='Delete' onclick='ConfirmDeleteAnesthesia("+data[i].ChargesID+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><i class='icon-trash'></i></a></td></tr>";
		$("#tblAnesthesia tbody").append(tr);
	}
	var columns = [{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}];
	BindDataTable("tblAnesthesia",columns);
	}
	$("#divDeleteAnesthesia").modal("hide");
	$("#divAddAnesthesia").modal("hide");
}
function FailureLoadAnesthesia(err)
{

}
function LoadAnesthesia()
{
	var data = {ItemType:1};
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/LoadAnesthesia", "SuccessLoadAnesthesia", "FailureLoadAnesthesia", "POST", data);
}
function AddAnesthesia()
{
	debugger;
	var data = {ChargesID:0,DoctorName:$("#txtDoctorName").val(),PatientName:$("#txtPatientName").val(),Charges:$("#txtCharges").val()};
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/AddAnesthesia", "SuccessAddAnesthesia", "FailureAddAnesthesia", "POST",data);
}
function SuccessAddAnesthesia(data)
{
	if(data){
		LoadAnesthesia();
		ShowSuccessToastMessage("Anesthesia with charges has been saved successfully.");
	}
}
function ShowAddAnesthesia()
{
	$("#divAddAnesthesia").modal("show")
}
function ConfirmDeleteAnesthesia(ID)
{
	$("#btnDeleteAnesthesia").attr("ChargesID",ID);
	$("#divDeleteAnesthesia").modal("show");
}
function DeleteAnesthesia()
{
	var data={ChargesID :$("#btnDeleteAnesthesia").attr("ChargesID")};
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/DeleteAnesthesia", "SuccessDeleteAnesthesia", "FailureDeleteAnesthesia", "POST",data);
}
function SuccessDeleteAnesthesia(data)
{
	if(data){
		LoadAnesthesia();
		ShowSuccessToastMessage("Anesthesia has been deleted successfully.");
		$("#divDeleteAnesthesia").modal("hide");
	}
}


function SuccessLoadGases(data)
{
	if(data && data.length > 0){
	RemoveDataTable("tblGases");
	$("#tblGases tbody").html("");
	for(var i=0;i<data.length;i++)
	{
		debugger;
		var AnesthesiaObject = JSON.stringify({ChargesID:data[i].ChargesID,ItemName:data[i].ItemName,Charges:data[i].Charges});
		var tr="<tr><td>"+(i+1)+"</td><td>"+data[i].ItemName+"</td><td>"+data[i].Charges+"</td><td><a title='Delete' onclick='ConfirmDeleteGases("+data[i].ChargesID+")' class='btn btn-circle btn-icon-only btn-default' href='javascript:;'><i class='icon-trash'></i></a></td></tr>";
		$("#tblGases tbody").append(tr);
	}
	var columns = [{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}];
	BindDataTable("tblGases",columns);
	}
	$("#divDeleteGases").modal("hide");
	$("#divAddGases").modal("hide");
}
function FailureLoadGases(err)
{

}
function LoadGases()
{
	var data = {ItemType:2};
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/LoadAnesthesia", "SuccessLoadGases", "FailureLoadGases", "POST",data);
}
function AddGases()
{
	debugger;
	var data = {ChargesID:0,ItemType:$("#txtGaseType").val(),Charges:$("#txtGaseCharges").val()};
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/AddGases", "SuccessAddGases", "FailureAddGases", "POST",data);
}
function SuccessAddGases(data)
{
	if(data){
		LoadGases();
		ShowSuccessToastMessage("Gase with charges has been saved successfully.");
	}
}
function ShowAddGases()
{
	$("#divAddGases").modal("show")
}
function ConfirmDeleteGases(ID)
{
	$("#btnDeleteGases").attr("ChargesID",ID);
	$("#divDeleteGases").modal("show");
}
function DeleteGases()
{
	var data={ChargesID :$("#btnDeleteGases").attr("ChargesID")};
	APICall("<?php echo base_url(); ?>" + "index.php/HospitalChargesController/DeleteAnesthesia", "SuccessDeleteGases", "FailureDeleteGases", "POST",data);
}
function SuccessDeleteGases(data)
{
	if(data){
		LoadGases();
		ShowSuccessToastMessage("Gase has been deleted successfully.");
		$("#divDeleteGases").modal("hide");
	}
}
</script>
