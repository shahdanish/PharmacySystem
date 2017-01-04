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
				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-hospital-o font-green"></i>
							<span class="caption-subject font-green bold uppercase">Discharged Patients List </span>
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
					});
					function SuccessLoadPatients(data)
{
	if(data && data.length > 0){
	for(var i=0;i<data.length;i++)
	{
		var patientDetails = data[i].PatientName;
		<?php if($this->session->userdata["logged_in"]["userrole"]==1){ ?>
		patientDetails = "<a href=PatientReport?PID="+data[i].PatientID+"&AID="+data[i].Id+">"+data[i].PatientName+"</a>";
		
		<?php } ?>
		
		var tr = "<tr><td>"+(i+1)+"</td><td>"+patientDetails+"</td><td>"+data[i].AdmissionDate+"</td><td>"+(data[i].IsDischarged==0 ? "Admit" : "Discharged") +"</td><td>"+data[i].AdmitReason+"</td><td><a href=Discharge?PID="+data[i].PatientID+"&AID="+data[i].Id+">Discharge</a></td></tr>";
		$("#tblPatientsAdmitted tbody").append(tr);
	}
	var columns =[{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false},{"bSortable":false}]
	BindDataTable("tblPatientsAdmitted",columns);
	}
}
function FailureLoadPatients(err)
{

}
					</script>
