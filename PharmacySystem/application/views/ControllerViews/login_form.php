<html>
   <?php
      if (isset($this->session->userdata['logged_in'])) {
		   header('Location: '.site_url().'/Dashboard/index');
      }
      ?>
   <head>
      <title>Login Form</title>
		<style>
			#main{
			width:960px;
			margin:50px auto;
			font-family:raleway;
			}

			span{
			color:red;
			}

			h2{
			background-color: #FEFFED;
			text-align:center;
			border-radius: 10px 10px 0 0;
			margin: -10px -40px;
			padding: 30px;
			}

			#login{

			width:300px;
			float: left;
			border-radius: 10px;
			font-family:raleway;
			border: 2px solid #ccc;
			padding: 10px 40px 25px;
			margin-top: 70px;
			}

			input[type=text],input[type=password], input[type=email]{
			width:99.5%;
			padding: 10px;
			margin-top: 8px;
			border: 1px solid #ccc;
			padding-left: 5px;
			font-size: 16px;
			font-family:raleway;
			}

			input[type=submit]{
			width: 100%;
			background-color:#FFBC00;
			color: white;
			border: 2px solid #FFCB00;
			padding: 10px;
			font-size:20px;
			cursor:pointer;
			border-radius: 5px;
			margin-bottom: 15px;
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

			a{
			text-decoration:none;
			color: cornflowerblue;
			}

			i{
			color: cornflowerblue;
			}

			.error_msg{
			color:red;
			font-size: 16px;
			}

			.message{
			position: absolute;
			font-weight: bold;
			font-size: 28px;
			color: #6495ED;
			left: 262px;
			width: 500px;
			text-align: center;
			}
		</style>
      <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <?php
         if (isset($logout_message)) {
			 echo "<div class='message'>";
			 echo $logout_message;
			 echo "</div>";
         }
         ?>
      <?php
         if (isset($message_display)) {
			 echo "<div class='message'>";
			 echo $message_display;
			 echo "</div>";
         }
         ?>
      <div id="main">
         <div id="login">
            <h2>Login Form</h2>
            <hr/>
            <?php echo form_open('user_authentication/user_login_process'); ?>
            <?php
               echo "<div class='error_msg'>";
               if (isset($error_message)) {
					echo $error_message;
               }
               echo validation_errors();
               echo "</div>";
               ?>
            <label>UserName :</label>
            <input type="text" name="username" id="name" placeholder="username"/><br /><br />
            <label>Password :</label>
            <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
            <input type="submit" value=" Login " name="submit"/><br />
            <!-- <a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a> -->
            <?php echo form_close(); ?>
         </div>
      </div>
   </body>
</html>