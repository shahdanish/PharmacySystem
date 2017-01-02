<html>
   <?php
      if (isset($this->session->userdata['logged_in'])) {
		   header('Location: '.site_url().'/Dashboard/index');
      }
      ?>
   <head>
     <meta charset="utf-8" />
         <title>LOGIN FORM</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta content="width=device-width, initial-scale=1" name="viewport" />
         <meta content="" name="description" />
         <meta content="" name="author" />
         <!-- BEGIN GLOBAL MANDATORY STYLES -->
         <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
         <!-- END GLOBAL MANDATORY STYLES -->
         <!-- BEGIN PAGE LEVEL PLUGINS -->
         <link href="<?php echo base_url();?>application/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
         <!-- END PAGE LEVEL PLUGINS -->
         <!-- BEGIN THEME GLOBAL STYLES -->
         <link href="<?php echo base_url();?>application/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
         <!-- END THEME GLOBAL STYLES -->
         <!-- BEGIN THEME LAYOUT STYLES -->
         <link href="<?php echo base_url();?>application/assets/layouts/layout2/css/layout.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
         <link href="<?php echo base_url();?>application/assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>application/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

         <!-- END THEME LAYOUT STYLES -->
         <link rel="shortcut icon" href="favicon.ico" />
         <!-- BEGIN CORE PLUGINS -->
         <script src="<?php echo base_url();?>application/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
         <!-- END CORE PLUGINS -->
         <!-- BEGIN PAGE LEVEL PLUGINS -->
         <script src="<?php echo base_url();?>application/assets/global/plugins/moment.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

         <script src="<?php echo base_url();?>application/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

         <script src="<?php echo base_url();?>application/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>


         <!-- END PAGE LEVEL PLUGINS -->
         <!-- BEGIN THEME GLOBAL SCRIPTS -->
         <script src="<?php echo base_url();?>application/assets/global/scripts/app.min.js" type="text/javascript"></script>
         <!-- END THEME GLOBAL SCRIPTS -->
         <!-- BEGIN PAGE LEVEL SCRIPTS -->
         <script src="<?php echo base_url();?>application/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
         <!-- END PAGE LEVEL SCRIPTS -->
         <!-- BEGIN THEME LAYOUT SCRIPTS -->
         <script src="<?php echo base_url();?>application/assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/scripts/common.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>application/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>


         <style>


			span{
			color:red;
			}

			#profile{
			padding:50px;
			border:1px dashed grey;
			font-size:20px;
			background-color:#DCE6F7;
			}

			#logout{
			float:right;
			padding:5px;
			border:dashed 1px gray;
			margin-top: -168px;
			}



			i{
			color: cornflowerblue;
			}
	.message{
		    color: #e73d4a;
	}
	
		</style>

   </head>
   <body class="login">
      <?php
         if (isset($logout_message)) {
			 echo "<div class=' alert alert-success'>";
			 echo $logout_message;
			 echo "</div>";
         }
         ?>
      <?php
         if (isset($message_display)) {
			 echo "<div class=' alert alert-success'>";
			 echo $message_display;
			 echo "</div>";
         }
         ?>
      <div id="main">
        <div class="logo">
         <a href="#">
             <img src="<?php echo base_url();?>application/assets/global/img/logomain.png" alt="" /> </a>
           </div>
           <div class="content">
             <div class="login-form">
               <div id="login" >
                 <h3 class="form-title font-green">Login Here</h3>

                  <hr/>
                  <?php echo form_open('user_authentication/user_login_process'); ?>
                  <?php
                     echo "<div class='message '>";
                     if (isset($error_message)) {
      					 echo $error_message;
                     }
                     echo validation_errors();
                     echo "</div>";
                     ?>
                     <div class="form-group">
                       <label>UserName :</label>
                       <input type="text" name="username" id="name" class="form-control form-control-solid placeholder-no-fix" placeholder="username"/>
                     </div>
                     <div class="form-group">
                       <label>Password :</label>
                     <input type="password" name="password" class="form-control form-control-solid placeholder-no-fix" id="password" placeholder="**********"/>

                     </div>
                     <div class="form-group">
                       <input type="submit" value=" Login " class="btn green uppercase btn-block" name="submit"/>

                     </div>
                    <!-- <a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a> -->
                  <?php echo form_close(); ?>
               </div>
             </div>
           </div>


      </div>
   </body>
</html>
