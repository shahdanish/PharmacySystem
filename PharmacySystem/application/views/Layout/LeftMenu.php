<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
	  <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<?php if($this->session->userdata["logged_in"]["userrole"]==1){ ?>
				<li class="nav-item start active open">
					<a href="<?php echo site_url('Dashboard/index');?>" class="nav-link nav-toggle">
						<i class="fa fa-user-md"></i>
						<span class="title">Doctor Home</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start">

					<a href= "<?php echo site_url('InventoryController/Index');?>" class="nav-link nav-toggle">
						<i class="fa fa-hospital-o"></i>
						<span class="title">Inventory Items</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start">

					<a href= "<?php echo site_url('InventoryController/Inventory');?>" class="nav-link nav-toggle">
						<i class="fa fa-hospital-o"></i>
						<span class="title">Inventory</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start">

					<a  data-target="#stack1" data-toggle="modal" class="nav-link nav-toggle">
						<i class="fa fa-hospital-o"></i>
						<span class="title">Add Xrays</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				 <li class="nav-item start">

				  <a href= "<?php echo site_url('EmployeesController/Index');?>" class="nav-link nav-toggle">
					<i class="fa fa-user-md"></i>
					<span class="title">Employee</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
				  </a>

				</li>
				<li class="nav-item start">

				  <a href= "<?php echo site_url('HospitalChargesController/HospitalChargesReport');?>" class="nav-link nav-toggle">
					<i class="fa fa-user-md"></i>
					<span class="title">Charges Report</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
				  </a>

				</li>
			<?php } else { ?>
				<li class="nav-item start">
					<a href="javascript:;" class="nav-link nav-toggle">
						<i class="fa fa-hospital-o"></i>
						<span class="title">Slips</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">

						<li class="nav-item start">
							<a class="nav-link" href= "<?php echo site_url('Dashboard/OrthopaedicSlip');?>">
								<i class="fa fa-stethoscope"></i>
								<span class="title">Orthopaedic Slip</span>
								<span class="badge badge-success">1</span>
							</a>
						</li>

						<li class="nav-item start ">
							<a class="nav-link" href= "<?php echo site_url('Dashboard/TestSlip');?>">
								<i class="fa fa-stethoscope"></i>
								<span class="title">Lab Test Slip</span>
								<span class="badge badge-danger">5</span>
							</a>
						</li>
						<li class="nav-item start ">
							<a class="nav-link" href= "<?php echo site_url('Dashboard/XRaySlip');?>">
								<i class="fa fa-stethoscope"></i>
								<span class="title">X-Ray Slip</span>
								<span class="badge badge-danger">5</span>
							</a>
						</li>
					</ul>
				</li>

				
				<li class="nav-item start">

					<a href= "<?php echo site_url('Dashboard/Inpatient');?>">
						<i class="fa fa-user-md"></i>
						<span class="title">Inpatient Form</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start">

					<a href= "<?php echo site_url('LabTestsController/Index');?>" class="nav-link nav-toggle">
						<i class="fa fa-user-md"></i>
						<span class="title">Lab Tests</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start">

				  <a href= "<?php echo site_url('HospitalChargesController/Index');?>" class="nav-link nav-toggle">
					<i class="fa fa-user-md"></i>
					<span class="title">Hospital Charges</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
				  </a>

				</li>

			<?php } ?>
<li class="nav-item start">

					<a href= "<?php echo site_url('PatientAdmissionController/PatientsList');?>">
						<i class="fa fa-user-md"></i>
						<span class="title">Admit Patients</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
	  </ul>

			<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>
