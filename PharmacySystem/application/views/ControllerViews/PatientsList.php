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
				Patients List
					
				</li>
				
			</ul>

		</div>
		<div class="clearfix"></div>
		<!-- END DASHBOARD STATS 1-->
		<div class="row">
					
					<div class="col-md-12">
					<div class="panel panel-primay">
					
					<div class="panel-heading">
					Search Patients
					</div>
					<div class="panel-body">
					<div class="row">
					<div class="col-lg-4">
					<label class="control-label">Patient Name</label>
					<input type="text" class="form-control" id="txtName" />
					</div>
					<div class="col-lg-4">
					<label class="control-label">CNIC</label>
					<input type="text" class="form-control" id="txtCnic" />
					</div>
					<div class="col-lg-4">
					<label class="control-label">Reason</label>
					<input type="text" class="form-control" id="txtReason" />
					</div>
					</div>
					<div class="row">
					<!--<div class="col-lg-4">
					<label class="label-control">From Date</label>
					<input type="text" class="form-control">
					<div class="input-group date">
					
					<div class="input-group-addon">
					<span class="glyphicon glyphicon-th"></span>
					</div>
					</div>
					</div>
					<div class="col-lg-4">
					<label class="control-label">To Date</label>
					<input type="text" class="form-control" />
					</div>-->
					<div class="col-lg-12">
					<br />
					<input type="button" class="btn btn-primary pull-right" value="Search" onclick="SearchPatients()" />
					</div>
					</div>
					</div>
					</div>
					</div>
			<div class="col-md-12">
				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet light">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-hospital-o font-green"></i>
							<span class="caption-subject font-green bold uppercase">Patients List </span>
						</div>


					</div>
					<div class="portlet-body">
					
						<div class="">
							<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable" id="tblPatientsAdmitted">
								<thead>
									<tr>
									<th>Sr.</th>
										<th>Name</th>
										<th>Admission Date</th>
										<th>Status</th>
										<th>Admit Reason</th>
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

<script>
$(function(){
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/LoadPatients/0", "SuccessLoadPatients", "FailureLoadPatients", "GET");
	$('.input-group').datetimepicker({
            format: 'DD/MM/YYYY',
            showClear: true,
			showTime:false
        });
});
function SuccessLoadPatients(data)
{
	RemoveDataTable("tblPatientsAdmitted");	
	$("#tblPatientsAdmitted tbody").html("");
	if(data && data.length > 0){
	
		
	for(var i=0;i<data.length;i++)
	{
		var patientDetails = "";
		if(data[i].IsDischarged==0)
			patientDetails ="<a href=Discharge?PID="+data[i].PatientID+"&AID="+data[i].Id+">Discharge</a>";	
		else
			patientDetails = "<a href=PatientReport?PID="+data[i].PatientID+"&AID="+data[i].Id+">View Report</a>";	
		var tr = "<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].AdmissionDate+"</td><td>"+(data[i].IsDischarged==0 ? "Admit" : "Discharged") +"</td><td>"+data[i].AdmitReason+"</td><td>"+patientDetails+"</td></tr>";
		$("#tblPatientsAdmitted tbody").append(tr);
	}
	}
	var columns =[{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}]
	BindDataTable("tblPatientsAdmitted",columns);
}
function FailureLoadPatients(err)
{

}
function SearchPatients()
{
	var name=$("#txtName").val();	
	var cnic = $("#txtCnic").val();
	var reason = $("#txtReason").val();
	var data = {Name:name,CNIC:cnic,DischargeReason:reason};
	if(name=="" && cnic=="" && reason=="")
	{
		return;
	}
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/SearchPatients", "SuccessLoadPatients", "FailureLoadPatients", "POST",data);
}
</script>
