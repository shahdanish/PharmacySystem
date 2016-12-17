<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
	  <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<?php if($this->session->userdata["logged_in"]["userrole"]==1){ ?> 
				<li class="nav-item start active open">
					<a href="<?php echo site_url('Dashboard/index');?>" class="nav-link nav-toggle">
						<i class="icon-home"></i>
						<span class="title">Doctor Home</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
			<?php } else { ?> 
				<li class="nav-item start">
					<a href="javascript:;" class="nav-link nav-toggle">
						<i class="icon-home"></i>
						<span class="title">Slips</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item start active open">
							<a class="nav-link" href= "<?php echo site_url('Dashboard/AdvanceSlip');?>">
								<i class="icon-bar-chart"></i>
								<span class="title">Advance Slip</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item start">
							<a class="nav-link" href= "<?php echo site_url('Dashboard/OrthopaedicSlip');?>">
								<i class="icon-bulb"></i>
								<span class="title">Orthopaedic Slip</span>
								<span class="badge badge-success">1</span>
							</a>
						</li>
						<li class="nav-item start">
							<a class="nav-link" href= "<?php echo site_url('Dashboard/XraySlip');?>">
								<i class="icon-graph"></i>
								<span class="title">X-ray Slip</span>
								<span class="badge badge-danger">5</span>
							</a>
						</li>
						<li class="nav-item start ">
							<a class="nav-link" href= "<?php echo site_url('Dashboard/TestSlip');?>">
								<i class="icon-graph"></i>
								<span class="title">Lab Test Slip</span>
								<span class="badge badge-danger">5</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item start  ">

					<a href="javascript:;" data-target="#stack1" data-toggle="modal" class="nav-link nav-toggle">
						<i class="icon-home"></i>
						<span class="title">Add Xrays</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start  ">

					<a href= "<?php echo site_url('Dashboard/Inpatient');?>">
						<i class="icon-home"></i>
						<span class="title">Inpatient Form</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start  ">

					<a href= "<?php echo site_url('LabTestsController/Index');?>" class="nav-link nav-toggle">
						<i class="icon-home"></i>
						<span class="title">Lab Tests</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
				<li class="nav-item start  ">

					<a href= "<?php echo site_url('LabTestsController/TestTypes');?>" class="nav-link nav-toggle">
						<i class="icon-home"></i>
						<span class="title">Test Types</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>

				</li>
			<?php } ?> 

	  </ul>

			<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>