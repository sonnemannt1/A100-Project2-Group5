	<?php

		$this->load->helper("form");	

	?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
		<title>
			Invalid Login Attempt
		</title>
		<img src='http://newhiteboard.com/wp-content/uploads/2012/10/header.png'>
	</head>
	
	<div id="tryAgain"><br><br><br>
	<h1>Sorry!~ Invalid Login Attempt. </h1><h2>Try again?</h2>
	
	<?php 

			echo form_open("/LoginController/CheckValidLogin");
			$userInput = array("type" => "text", "id" => "username", "name" => "username",
					"style" => "width: 60%; height: 25px;");
			$passwordInput = array("type" => "text", "id" =>"password", "name" => "password",
					"style" => "width: 60%; height: 25px");
			$submitButton = array("type" => "submit", "id" => "submit", "name" => "submit",
					"style" => "width: 35%; height: 25px", "value" => "Submit");
			$clearButton = array("type" => "button", "id" => "btnClear", "name" => "btnClear",
					"style" => "width: 30%; height: 25px; margin-left: 4%", "value" => "Clear");
			echo(form_label("Username", "labelUser", null) . "<br />");
			echo (form_input($userInput) . "<br/>". "<br/>");
			echo (form_label("Password") . "<br/>");
			echo (form_password($passwordInput) . "<br/>". "<br/>");
			echo (form_submit($submitButton));
			echo (form_input($clearButton));
			echo form_close();

			?>
			
			</div>

</html>