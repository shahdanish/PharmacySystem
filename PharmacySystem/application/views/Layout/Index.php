<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to pharmacy</title>
	<?php if($Header) echo $Header ;?>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
	<div class="page-container">
		<?php if($Top) echo $Top ;?>
		<?php if($LeftMenu) echo $LeftMenu ;?>
		<?php if($Body) echo $Body ;?>
		<?php if($Footer) echo $Footer ;?>
	</div>
</body>
</html>