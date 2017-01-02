
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner ">

		<div class="page-actions">
			<div class="btn-group">
				<h2>MILLAT ORTHOPAEDIC &amp; TRAUMA SURGERY HOSPITAL</h2>
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<i class="fa fa-user-md"></i>
							<span class="username username-hide-on-mobile"> <?php echo $this->session->userdata["logged_in"]["username"] ?> </span>
<i class=""></i>
						</a>

					</li>
					<li class="dropdown dropdown-extended quick-sidebar-toggler" onclick="window.location.href='<?php echo site_url('User_Authentication/logout');?>'">
						<span class="sr-only">Toggle Quick Sidebar</span>
						<i class="icon-logout"></i>
					</li>
					<!-- END QUICK SIDEBAR TOGGLER -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
