<div class="page-footer">
	<div class="page-footer-inner"> 2017 &copy; MILLAT ORTHOPAEDIC & TRAUMA SURGERY HOSPITAL 
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>




<div id="addxray" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add X-rays</h4>
                </div>
                <div class="modal-body">
                    
					<div class="row">
                        <div class="col-md-12">
                            <h4>Enter Total Numbers of Xrays</h4>
                            <p>
                                <input type="text" class="col-md-12 form-control" placeholder="Enter total Xrays"> </p>
						</div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green">ADD</button>
                </div>
            </div>
        </div>
    </div>
    <div id="patientdetails" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Patient Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                          <h2>Farooq Shad Details</h2>
                          <ul class="list-group">
                              <li class="list-group-item"> Room Number
                                  <span class="badge badge-default"> 3 </span>
                              </li>
                              <li class="list-group-item"> Mobile Number
                                  <span class="label label-default pull-right"> 03347551833 </span>
                              </li>
                              <li class="list-group-item"> Date of Regiistration
                                  <span class="label label-default  pull-right"> 22-02-2016 </span>
                              </li>
                              <li class="list-group-item"> Date of Discharge
                                  <span class="label label-default pull-right"> 26-02-2016 </span>
                              </li>
                          </ul>
                          <h2>Patient Detail</h2>
                          <ul class="list-group">
                            <li class="list-group-item">Admission Fee
                            <span class="label label-default pull-right"> 2222Rs </span>
                            </li>
                            <li class="list-group-item">Total Bill
                            <span class="label label-default pull-right"> 2222Rs </span>
                            </li>
                            <li class="list-group-item">Advance Payment
                            <span class="label label-default pull-right"> 2222Rs </span>
                            </li>
                            <li class="list-group-item">Bill Payed
                            <span class="label label-default pull-right"> 2222Rs </span>
                            </li>


                          </ul>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green">ADD</button>
                </div>
            </div>
        </div>
    </div>
    <div id="stack1" class="modal fade" tabindex="-1" data-width="400">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add X-rays</h4>
                </div>
                <div class="modal-body">
				<div class="row">
                        <div class="col-md-12">
                            <h4>Select X-Ray Type</h4>
                            <p>
                                <select class="form-control" name="" id="ddlXRayType">
								<option value="1">X-Ray(10x14)</option>
								<option value="2">X-Ray(8x10)</option>
								</select>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Enter Total Numbers of Xrays</h4>
                            <p>
                                <input type="number" id="txtXrayItems" name="txtXrayItems" class="col-md-12 form-control" placeholder="Enter total Xrays"> </p>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="button" class="btn green" onclick="AddXRayItems()">ADD</button>
                </div>
            </div>
        </div>
    </div>

    <script>
	$(function(){

	})
	function AddXRayItems(){
		var ItemsCount = {"Items":$("#txtXrayItems").val(),"itemId":$("#ddlXRayType").val()};
		APICall("<?php echo base_url(); ?>" + "index.php/Dashboard/AddXRays", "SuccessAddXRayItems", "FailureAddXRayItems", "POST",ItemsCount);
	}
function SuccessAddXRayItems(data)
{
	if(data){
		ShowSuccessToastMessage("XRay has been added.");
		$("#stack1").modal("hide");
	}
}
function FailureAddXRayItems(err)
{
	ShowErrorToastMessage("An error occured saving XRay.");
}



	</script>
