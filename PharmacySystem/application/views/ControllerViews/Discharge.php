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
					<span>Dashboard</span>
				</li>
			</ul>

		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN DASHBOARD STATS 1-->

		<div class="clearfix"></div>
		<!-- END DASHBOARD STATS 1-->
		<div class="row">
			<div class="col-sm-12">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-gift"></i>Discharge Form</div>
						<div class="tools">
							<a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
							<a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
							<a href="javascript:;" class="reload" data-original-title="" title=""> </a>
							<a href="javascript:;" class="remove" data-original-title="" title=""> </a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="#" class="horizontal-form">
							<div class="form-body">
								<h1 class="form-section">Patient Info</h1>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Patient Name</label>
											<input readonly="readonly" type="text" id="txtPatientName" class="form-control" placeholder="Enter Patient Name" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">CNIC Number</label>
											<input readonly="readonly" type="number" id="txtCnicNo" class="form-control" placeholder="3840375969641" maxlength="20">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Cell No</label>
											<input readonly="readonly" type="number" id="txtCellNo" class="form-control" placeholder="03141111111"maxlength="12">
										</div>
									</div>
									</div>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Age</label>
											<input readonly="readonly" type="text" id="txtAge" class="form-control" placeholder="2" maxlength="3">
										</div>
									</div>
									<div class="col-md-8">
										<div class="form-group">
											<label class="control-label">Address</label>
											<input readonly="readonly" type="text" id="txtAddress" class="form-control" placeholder="Address" maxlength="100">
										</div>
									</div>
									</div>
									<h1 class="form-section">Admission Info</h1>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Admit Reason</label>
											<input readonly="readonly" type="text" id="txtAdmitReason" class="form-control" placeholder="Admit Reason" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Reffered By</label>
											<input readonly="readonly" type="text" id="txtReffredBy" class="form-control" placeholder="Admit Reason" maxlength="50">

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Room Number</label>
											<input readonly="readonly" type="text" id="txtRoomNo" class="form-control" placeholder="Admit Reason" maxlength="50">

										</div>
									</div>


									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
								<div class="col-md-4">
										<div class="form-group">
										<label class="control-label">Advance Fee</label>
											<input readonly="readonly" type="text" id="txtAdvanceFee" class="form-control" placeholder="5000">
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-group">
										<label class="control-label">Date Of Admission</label>
											<input type="text" id="txtAdmissionDate" class="form-control" placeholder="01/01/2016" readonly="readonly">
										</div>
										</div>
								</div>


								<!--/row-->
								<h1 class="form-section">Add Inventory Items</h1>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Select Items</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-8">
										<div class="form-group">
											<label class="control-label">Item</label>
											<input type="text" id="txtInventoryItem" class="form-control" placeholder="Item">

										</div>
									</div>

									<!--/span-->
								</div>
								<h1 class="form-section">Patient Bill</h1>

								<div class="row" id="divPatientBill">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Admission Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Total Admission Fee</label>
											<input type="number" id="txtAdmissionFee" class="form-control subTotal" placeholder="Admission Fee">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalAdmissionFee" class="form-control mainTotal" placeholder="Total Fee">

										</div>
									</div>
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Consultant Visit Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Select Consultant</label>
											<select class="form-control" id="ddlDoctors">

											</select>

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Consultant Fee</label>
											<input type="number" id="txtConsultantFee" onkeyup="CalcaulateConsultantFee()" onchange="CalcaulateConsultantFee()" class="form-control" placeholder="Consultant Fee">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total Visits</label>
											<input type="number" id="txtConsultantVisits" onkeyup="CalcaulateConsultantFee()" class="form-control" placeholder="Total Visits">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalConsultantFee" class="form-control mainTotal" placeholder="Total Fee">

										</div>
									</div>
									<!--/span-->
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Nursing Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Nursing Charges</label>
											<input type="number" id="txtNursingFee" class="form-control subTotal" placeholder="Nursing Charges">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalNursingFee" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Room Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Room Charges Per Day</label>
											<input type="number" id="txtRoomCharges" onchange="CalcaulateRoomCharges()" onkeyup="CalcaulateRoomCharges()"  class="form-control" placeholder="Room Charges Per Day">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total Days</label>
											<input type="number" id="txtRoomDays" onchange="CalcaulateRoomCharges()" onkeyup="CalcaulateRoomCharges()" class="form-control" placeholder="Total Days">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalRoomCharges" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>AC Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">AC charges</label>
											<input type="number" id="txtAcCharges" class="form-control subTotal" placeholder="AC charges">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalAcCharges" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Heater Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Heater Charges</label>
											<input type="number" id="txtHeaterCharges" class="form-control subTotal" placeholder="Heater Charges">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalHeaterCharges" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Operation Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Operation Fee</label>
											<input type="number" id="txtOperationFee" class="form-control subTotal" placeholder="Operation Fee">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalOperationFee" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Theater Charges</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Theater Charges</label>
											<input type="number" id="txtTheaterCharges" class="form-control subTotal" placeholder="Theater Charges">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalTheaterCharges" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Anaesthesia Fee</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Anaesthesia Fee</label>
											<input type="number" id="txtAnesthesiaFee" class="form-control subTotal" placeholder="Anaesthesia Fee">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalAnesthesiaFee" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Hardware</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Hardware Charges</label>
											<input type="number" id="txtHardwareFee" class="form-control subTotal" placeholder="Hardware Charges">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalHardwareFee" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h3>Operation Medicine</h3>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Operation Medicine Charges</label>
											<input type="number" id="txtMedFee" class="form-control subTotal" placeholder="Medicine Charges">

										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number" id="txtTotalMedFee" class="form-control mainTotal" placeholder="Total">

										</div>
									</div>
									<!--/span-->
								</div>

								<div class="row">
								  <div class="col-sm-6">
									<div class="form-group">
									  <h2 class="">Total</h2>
									</div>
								  </div>
								  <div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Total Bill</label>
										<input type="number" id="txtBill" class="form-control input-lg" onchange="CalculateMainTotal()" placeholder="Total Bill" readonly="readonly">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-6">
									<div class="form-group">
									  <h2 class="">Advance</h2>
									</div>
								  </div>
								  <div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Advace Fee</label>
										<input type="number" id="txtAdvanceFee1" class="form-control input-lg" placeholder="Advance Fee" readonly="readonly">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-6">
									<div class="form-group">
									  <h2 class="">Discount</h2>
									</div>
								  </div>
								  <div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Total Discount</label>
										<input type="number" id="txtDiscount" onchange="CalculateMainTotal()" onkeyup="CalculateMainTotal()" class="form-control input-lg" placeholder="Total Discount">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-sm-6">
									<div class="form-group">
									  <h2 class="">Main Total</h2>
									</div>
								  </div>
								  <div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Grand Total</label>
										<input type="number" id="txtMainTotal" class="form-control input-lg" placeholder="Your Total Bill" readonly="readonly">
									</div>
								  </div>
								</div>

							<div class="form-actions right">
								<button type="button" class="btn default">Cancel</button>
								<button type="button" class="btn blue" onclick="SavePatientDischargeInformation()">
													<i class="fa fa-check"></i> Save</button>
							</div>
						</form>
						<!-- END FORM-->
					</div>

				</div>
			</div>
		</div>

	</div>
	<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->


</div>

<script>
var patientId=0;
var admissionId=0;
var inventoryUsed=[];
$(function(){

	patientId =  getUrlData()["pid"];
	admissionId = getUrlData()["aid"];
	if(!patientId)
		patientId = 0;
	if(!admissionId)
		admissionId = 0;
	APICall("<?php echo base_url(); ?>" + "index.php/SlipController/LoadDoctors", "SuccessLoadDoctors", "FailureLoadDoctors", "GET");
	var data = {PatientID:patientId,AdmissionID:admissionId};
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/LoadPatientInfo", "SuccessLoadPatientInfo", "FailureLoadPatientInfo", "POST",data);
	BindTypeAhead();

	$('#txtInventoryItem').on('typeahead:selected', function (e, obj) {
	inventoryUsed.push({"ItemId":obj.ItemID,"ItemName":obj.ItemName,"ItemPrice":obj.ItemPrice});
	AddItemsToBill(obj);
	});
	$(".subTotal").keyup(function(){
		MakeTotalFromSubtotal($(this));
	});
	$(".subTotal").change(function(){
		MakeTotalFromSubtotal($(this));
	});
	$(".mainTotal").keyup(function(){
		CalculateTotalBill($(this));
	});
	$(".mainTotal").change(function(){
		CalculateTotalBill($(this));
	});
	$(".mainTotal").attr("readonly","readonly");
});
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
function SuccessLoadPatientInfo(data)
{
	if(data && data.length > 0)
	{
		$("#txtPatientName").val(data[0].PatientName);
		$("#txtCnicNo").val(data[0].PatientCNIC);
		$("#txtCellNo").val(data[0].CellNo);
		$("#txtAge").val(data[0].Age);
		$("#txtAddress").val(data[0].Address);
		$("#txtAdmitReason").val(data[0].AdmitReason);
		$("#txtReffredBy").val(data[0].UserName);
		$("#txtRoomNo").val(data[0].RoomNo);
		$("#txtAdvanceFee").val(data[0].AdvanceFee);
		$("#txtAdmissionDate").val(data[0].AdmissionDate);
		$("#txtAdvanceFee1").val(data[0].AdvanceFee);
	}
}
function FailureLoadPatientInfo(err)
{

}
function SavePatientDischargeInformation()
{
	var patientInfo =
	{
	PatientName:$("#txtPatientName").val(),
CellNo:$("#txtCellNo").val(),
PatientCNIC:$("#txtCnicNo").val(),
Age:$("#txtAge").val(),
Address:$("#txtAddress").val(),
RefferedBy:$("#ddlRefferedBy").val(),
AdmitReason:$("#txtAdmitReason").val(),
AdvanceFee:$("#txtAdvanceFee").val(),
RoomNo:$("#ddlRoomNo").val()
	};
	APICall("<?php echo base_url(); ?>" + "index.php/PatientAdmissionController/SavePatient", "SuccessSavePatientInfo", "FailureSavePatientInfo", "POST",patientInfo);
}
function BindTypeAhead()
{

	try {
        var dataSource = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('ItemId', 'ItemName','ItemPrice'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: "<?php echo base_url(); ?>" + "index.php/InventoryController/LoadInventoryItemsByName",
                //wildcard: '%QUERY'
            },
            sufficient: 2,
        });
        const $tagsInput = $('#txtInventoryItem')
        $tagsInput.typeahead({
            minLength: 2,
            source: dataSource,
            hint: false,
            highlight: true

        },
        {
            limit: 10,
            source: dataSource,
            name: 'dataSource',
            display: function (item) {
                return item.ItemName
            },
            suggestion: function (data) {
                return '<div>' + data.ItemName + '–' + data.ItemId + '</div>'
            },

        });
    }
    catch (e) {
        console.log(e.toString())
    }
}
function AddItemsToBill(obj)
{
	var html="<div class='row'>"+
	"<div class='col-md-4'>"+
	"<div class='form-group'>"+
	"<h3>"+obj.ItemName+"</h3>"+
	"</div>"+
	"</div>"+
	"<div class='col-md-3'>"+
	"<div class='form-group'>"+
	"<label class='control-label'>Item Quantity</label>"+
	"<input type='number' id='txtItem_"+obj.ItemID+"' class='form-control' placeholder='Quantity' onkeyup='CalculatePrice(this,"+obj.ItemID+","+obj.ItemPrice+")' onchange='CalculatePrice(this,"+obj.ItemID+","+obj.ItemPrice+")' />"+
	"</div>"+
	"</div>"+
	"<div class='col-md-3'>"+
	"<div class='form-group'>"+
	"<label class='control-label'>Item Price</label>"+
	"<input type='number' class='form-control' placeholder='Quantity' value="+obj.ItemPrice+" readonly='readonly' />"+
	"</div>"+
	"</div>"+
	"<div class='col-md-2'>"+
	"<div class='form-group'>"+
	"<label class='control-label'>Total</label>"+
	"<input type='text' id='txtItemPrice_"+obj.ItemID+"' class='form-control mainTotal' placeholder='Total' />"+
	"</div>"+
	"</div>"+
	"</div>";
	$("#divPatientBill").before(html);
}
function CalculatePrice(txtBox,itemId,price)
{
	var val = parseInt($(txtBox).val());
	if(Number(val))
	{
		$("#txtItemPrice_"+itemId).val(val*price);
	}
	$(".mainTotal").trigger("change");
}
function CalcaulateConsultantFee()
{
	var visits = parseInt($("#txtConsultantVisits").val());
	var fee = parseInt($("#txtConsultantFee").val());

	var totalFee = visits * fee;
	if(isNaN(totalFee))
		$("#txtTotalConsultantFee").val("0");
	else
		$("#txtTotalConsultantFee").val(totalFee);
	$("#txtTotalConsultantFee").trigger("change");
}
function CalcaulateRoomCharges()
{
	var days = parseInt($("#txtRoomDays").val());
	var fee = parseInt($("#txtRoomCharges").val());

	var totalFee = days * fee;
	if(isNaN(totalFee))
		$("#txtTotalRoomCharges").val("0");
	else
		$("#txtTotalRoomCharges").val(totalFee);
	$("#txtTotalRoomCharges").trigger("change");
}
function MakeTotalFromSubtotal(txtBox)
{
	var parentDiv = $(txtBox).parent();
	$(parentDiv).parent().next('div').find("input[type=number]").val($(txtBox).val());
	$(parentDiv).parent().next('div').find("input[type=number]").trigger("change");
}
function CalculateTotalBill()
{
	var totalBill = 0;
	$(".mainTotal").each(function(){
		if(parseInt($(this).val()) > 0)
		totalBill = totalBill+ parseInt($(this).val());

	});
	$("#txtBill").val(totalBill).trigger("change");
}
function CalculateMainTotal()
{
	var totalBill = $("#txtBill").val();
	var advanceFee = $("#txtAdvanceFee1").val();
	var discount = parseInt($("#txtDiscount").val());
	if(isNaN(discount))
		discount = 0;

	var mainTotal = (parseInt(totalBill) + parseInt(advanceFee)) - parseInt(discount);
	$("#txtMainTotal").val(mainTotal);
}
</script>
