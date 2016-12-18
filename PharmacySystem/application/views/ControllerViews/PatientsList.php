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
					<a href="index.html">Patients List</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li class="active">
					<a href="index.html">Admit Patients List</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="index.html">Discharged Patients List</a>
					
				</li>
			</ul>

		</div>
<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover" id="tblPatientsAdmitted">
								<thead>
									<tr>
									<th>Sr.</th>
										<th>Name</th>
										<th>Admission Date</th>
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
		var tr = "<tr><td>"+(i+1)+"</td><td>"+data[i].PatientName+"</td><td>"+data[i].AdmissionDate+"</td><td>"+data[i].AdmitReason+"</td><td><a href=Discharge?PID="+data[i].PatientID+"&AID="+data[i].Id+">Discharge</a></td></tr>";	
		$("#tblPatientsAdmitted tbody").append(tr);	
	}
	var columns =[{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":true},{"bSortable":false}]
	BindDataTable("tblPatientsAdmitted",columns);
	}
}
function FailureLoadPatients(err)
{
	
}
					</script>