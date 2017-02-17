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
					<span>LAB TEST SLIP</span>
				</li>
			</ul>

		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN DASHBOARD STATS 1-->

		<div class="clearfix"></div>
		<!-- END DASHBOARD STATS 1-->
		<div class="row">
		  <div class="col-md-6 col-md-offset-2 ">
			<div class="portlet light ">
			  
			  <div class="media">
				<div class="media-left">
				  <div class="slip-logo">
					   <img src="<?php echo base_url();?>application/assets/global/img/logomain.png" alt="logo" class="" />
				   </div>

				</div>
				<div class="media-body">
				  <h3>MILLAT ORTHOPAEDIC & TRAUMA SURGERY HOSPITAL</h3>
				  </div>
			  </div>
			  <br>
				<div class="portlet-title">
					<div class="caption">

						<span class="caption-subject font-green-sharp bold uppercase">Lab Test Slip</span>
					</div>
					<div class="actions">
						<a class="btn btn-default" href="javascript:;">
							Date: <strong><span id="slipDate"></span></strong>
						</a>

					</div>
				</div>
				<div class="portlet-body">
				 

				  <form class="" id="testform">
				   <div class="form-group">
					<label for="">Patient Name</label>
					<input type="text" name="" value="" id="txtPatientName" class="form-control" required>
				  </div>
					<div class="form-group">
					  <label for="">Ref by Doctor</label>
					  <select class="form-control" name="" id="ddlDoctors" required>
						
					  </select>
					</div>
					<div class="form-group">
					  <label for="">Select Test</label>
					  <select class="form-control" name="" id="ddlTests"" required>
						
					  </select>
					</div>
					<!---<div class="form-group">
					  <label for="">Select Test</label>
					  <div class="form-group">
						  <select class="" multiple="multiple" data-width="100%" id="SelectMultiTest">
								
						   </select>
						</div>
					</div>---->
						
                        

					<div class="form-group">
					  <label for="">Total Fee</label>
					  <input type="number" name="txtFee" id="txtFee" readonly="readonly" value="" class="form-control" required>
					</div>
					<div class="form-group">
					  <input type="button" name="" value="Print" class="btn btn-primary btn-block" onclick="SavePatientAndTest()">
					</div>
				  </form>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT BODY -->
</div>
<script>
$(function(){
	APICall("<?php echo base_url(); ?>" + "index.php/SlipController/LoadTests", "SuccessLoadTests", "FailureLoadTests", "GET");	
	APICall("<?php echo base_url(); ?>" + "index.php/SlipController/LoadDoctors", "SuccessLoadDoctors", "FailureLoadDoctors", "GET");	
	$("#slipDate").text(GetSlipDate());
	$("#ddltests").change(function(){
		var selectedtestfees = $('option:selected', this).attr('data-fees');
		$("#txtfee").val(selectedtestfees);
	});
	// $("#SelectMultiTest").change(function(){
		
		// var selectedTestFeesTotal = 0;
		// for(var i=0;i<$('option:selected', this).length;i++){
			// selectedTestFeesTotal += parseInt($($('option:selected', this)[i]).attr("data-fees"));
		// }
		// $("#txtFee").val(selectedTestFeesTotal);
	// });
	
})
function SuccessLoadTests(data)
{
	if(data && data.length > 0)
	{
		for(var i=0;i<data.length;i++)
		{
			debugger;
			$("#SelectMultiTest").append($("<option></option>").attr({"value":data[i].TestID,"data-TestType":data[i].TestType,"data-Fees":data[i].TestFee}).text(data[i].TestName));
			$("#ddlTests").append($("<option></option>").attr({"value":data[i].TestID,"data-TestType":data[i].TestType,"data-Fees":data[i].TestFee}).text(data[i].TestName));
		}
	}
	$("#ddlTests").change();
	$("#SelectMultiTest").multiselect({
		includeSelectAllOption: true,
		buttonClass: 'form-control'
	});
}
function FailureLoadTests(err)
{
	
}
function SuccessLoadDoctors(data)
{
	if(data && data.length > 0){
	for(var i=0;i<data.length;i++)
	{
	$("#ddlDoctors").append($("<option></option>").attr({"value":data[i].UserID}).text(data[i].UserName));		
	}
	}
}
function FailureLoadDoctors(err)
{
	
}
function SavePatientAndTest()
{
	if(!ValidateForm("testform")) {
				return false;
			}
	var data = {
		PatientName:$("#txtPatientName").val(),
		PatientCnic:$("#txtCnicNo").val(),
		RefferedBy:$("#ddlDoctors").val(),
		TestFee:$("#txtFee").val(),
		Test:$("#ddlTests").val(),
		TestType:$("#ddlTests option:selected").attr("data-TestType")
	}
	APICall("<?php echo base_url(); ?>" + "index.php/SlipController/SavePatientAndTest", "SuccessSavePatientAndTest", "FailureSavePatientAndTest", "POST",data);	
}
function SuccessSavePatientAndTest(data)
{
	if(data){
		ShowSuccessToastMessage("Test information saved successfully.");
		var feilds = {"Date":$("#slipDate").text(), "PatientName":$("#txtPatientName").val(),"RefferedBy":$("#ddlDoctors option:selected").text(),"Fee":$("#txtFee").val()}
		PrintLabTestSlip($("#ddlTests option:selected").text(),feilds);
		location.reload(true);
	}
}
function FailureSavePatientAndTest(err)
{
	
}
</script>
