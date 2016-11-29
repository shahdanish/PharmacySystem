<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<?php if($header) echo $header ;?>
	<?php if($left) echo $left ;?>
	<?php if($middle) echo $middle ;?>
	<?php if($footer) echo $footer ;?>
</div>

</body>
</html>