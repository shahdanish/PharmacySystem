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
					<span>ORTHOPAEDIC SURGERY-SLIP </span>
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
			  <span class="ribbon slipno">Slip No. <strong><span id="spanTokenNum"></span></strong></span>
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

								<span class="caption-subject font-green-sharp bold uppercase">Orthopaedic Surgery-Slip</span>
							</div>
							<div class="actions">
								<a class="btn btn-default" href="javascript:;">
									Date: <strong id="tokenDate">22-11-2016</strong>
								</a>

							</div>
						</div>
						<div class="portlet-body">
						  <form class="" >
							<div class="form-group">
							  <label for="">Patient Name</label>
							  <input type="text" name="PatientName" id="PatientName" value="" class="form-control">
							</div>
							<div class="form-group">
							  <label for="">Total Fees Received</label>
							  <input type="text" name="FeesRecieved" id="FeesRecieved" value="" class="form-control">
							</div>
							<div class="form-group">
							
							  <input type="submit" name="" value="Print" id="SaveMainSlipBtn" class="btn btn-primary btn-block">
							</div>
						  </form>
						</div>
					</div>

			</div>
		</div>
	</div>
	<!-- END CONTENT BODY -->
</div>
<script type="text/javascript">
function SuccessLoadTokenID(data)
{
	
	$("#spanTokenNum").html(data[0].TokenID);
}
function FailureLoadTokenID(err)
{


}
	$(document).ready(function() {
		
		APICall("<?php echo base_url(); ?>" + "index.php/SlipController/LoadTokenID", "SuccessLoadTokenID", "FailureLoadTokenID", "GET");
		var date = new Date();
		date = date.getDate()+"-"+(date.getMonth()+1) +"-"+date.getFullYear();
		$("#tokenDate").text(date)
		
		
		$("#SaveMainSlipBtn").click(function(event) {
			event.preventDefault();
			var PatientName = $("#PatientName").val();
			var FeesRecieved = $("#FeesRecieved").val();
			var TokenID = $("#spanTokenNum").text();
			jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "index.php/SlipController/SaveMainSlip",
				dataType: 'json',
				data: {
					PatientName: PatientName,
					FeesRecieved: FeesRecieved,
					TokenID : TokenID
				},
				success: function(res) {
					debugger;
					if (res) {
						ShowSuccessToastMessage("Token generated successfully.");
						var feilds = {"Date":$("#tokenDate").text(),"TokenNo":$("#spanTokenNum").text(), "PatientName":$("#PatientName").val(),"Fee":$("#FeesRecieved").val()}
						PrintLabTestSlip("Orthopaedic slip",feilds);
						location.reload(true);
					}
				},
				error: function(err) {
					debugger;
					if (err) {
						debugger;
						// Show Entered Value
						
					}
				}
			});
		});
	});

</script>