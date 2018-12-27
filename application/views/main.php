<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CryptoApplication</title>
	<link rel="stylesheet" type="text/css" href="assest\css\css.css">

</head>
<body>
	<div class="encrypt">
		<h3>Encrypt</h3>
		<br>
		<?php echo form_open('crypto/encrypt');
			  echo form_input(array('id'=>'text','name'=>'text','placeholder'=>'please enter the word '));
			  echo form_submit(array('id'=>'submit','value'=>'encrypt'));
			  echo form_close();
			  ?>
	</div>
	<div class="encrypt">
		<h3>Decrypt</h3>
		<br>
		<?php echo form_open('crypto/decrypt');
			  echo form_input(array('id'=>'text','name'=>'text'));
			  echo form_submit(array('id'=>'submit','value'=>'decrypt'));
			  echo form_close();
			  ?>
	</div>


</body>
</html>