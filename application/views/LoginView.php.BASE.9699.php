<!DOCTYPE HTML>	
	<html>

	<head>
		<title>Welcome to CTNextJobs!</title>
		
			<link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/styles.css">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/static/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/static/js/javascript.js"></script>
	
	
	
	</head>
	<?php

		$this->load->helper("form");	

	?>

<body>
<header><img src='http://newhiteboard.com/wp-content/uploads/2012/10/header.png'></header>
<table>
<tr>
<td align=left valign="middle">
	<div id="tabs" align="left">
		<div class="tabContainer">
			<table style="width: 100%; height: 100%;">
				<tr>
				<td id="firstTab" class="selectedTab" align="center" onMouseOver="tab_enter(0)" onClick="tab_click(0)" onMouseOut="tab_leave(0)">
					<p style="color: inherit">Sign In</p>
				</td>
			</tr>
		</table>
	</div>
	<div>
		<div id="firstTabContent" class="activeTabContent">
			<div >
			<table style="position: relative; width: 100%;">
				<tr>
				<td align=center valign=middle>
		<?php 

		echo form_open("/LoginController/CheckValidLogin");
		$userInput = array("type" => "text", "id" => "username", "name" => "username",
				"style" => "width: 60%; height: 20px;");
		$passwordInput = array("type" => "text", "id" =>"password", "name" => "password",
				"style" => "width: 60%; height: 20px");
		$submitButton = array("type" => "submit", "id" => "submit", "name" => "submit",
				"style" => "width: 35%; height: 25px", "value" => "Submit");
		$clearButton = array("type" => "button", "id" => "btnClear", "name" => "btnClear",
				"style" => "width: 30%; height: 25px; margin-left: 4%", "value" => "Clear");
		echo(form_label("username", "labelUser", null) . "<br />");
		echo (form_input($userInput) . "<br/>");
		echo (form_label("password") . "<br/>");
		echo (form_password($passwordInput) . "<br/>");
		echo (form_submit($submitButton));
		echo (form_input($clearButton));
		echo form_close();

		?>
		</td>
		</tr>
		</table>
		<div id="fb-root">

</div>
<div>
		<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
		</div>
		

	<div id="tabs" style="float:right; margin-right:10%;margin-top:-15%">
		<div class="tabContainer">
			<table style="width: 100%; height: 100%;">
				<tr>
				<td id="firstTab" class="selectedTab" align="center" onMouseOver="tab_enter(0)" onClick="tab_click(0)" onMouseOut="tab_leave(0)">
					<p style="color: inherit">New Job Seeker</p>
				</td>
				<td id="secondTab" class="inactiveTab" align="center" onMouseOver="tab_enter(1)" onMouseOut="tab_leave(1)" onClick="tab_click(1)">
					<p style="color: inherit">New Job Poster</p>
				</td>
			</tr>
		</table>
	</div>
<div id="firstTabContent" class="inactiveTabContent" style="float:right; margin-top:-15%" >
			<div>
		<?php  				
				echo(form_open("LoginController/SubmitJobSeeker"));
				echo ("<table>");
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("First Name:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "firstName", "name" => "firstName", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
					
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("Last Name:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "lastName", "name" => "lastName", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
					
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("Address:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "address", "name" => "address", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
					
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("City:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "city", "name" => "city", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
					
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("State:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "state", "name" => "state", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
					
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("ZIP Code:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "zip", "name" => "zip", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
					
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("Email Address:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "emailAddress", "name" => "emailAddress", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
					
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("Telephone Number:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "telephone", "name" => "telephone", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
				echo ("</table>");
				echo ("</form>");

	?>
	
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script type="text/javascript">
	new TWTR.Widget({
	  version: 2,
	  type: 'profile',
	  rpp: 4,
	  interval: 6000,
	  width: 216,
	  height: 240,
	  theme: {
		shell: {
		  background: 'lightblue',
		  color: '#292b2c'
		},
		tweets: {
		  background: 'lightgray',
		  color: '#292b2c',
		  links: '#1388d2'
		}
	  },
	  features: {
		scrollbar: true,
		loop: false,
		live: true,
		hashtags: true,
		timestamp: true,
		avatars: false,
		behavior: 'all'
	  }
	}).render().setUser('gridnewhaven').start();
	</script>
	

	<table>
	<tr>
	<td align=left valign="middle">
		<div id="tabs" align="left">
			<div class="tabContainer">
				<table style="width: 100%; height: 100%;">
					<tr>
					<td id="firstTab" class="selectedTab" align="center" onMouseOver="tab_enter(0)" onClick="tab_click(0)" onMouseOut="tab_leave(0)">
						<p style="color: inherit">Sign In</p>
					</td>
					<td id="secondTab" class="inactiveTab" align="center" onMouseOver="tab_enter(1)" onMouseOut="tab_leave(1)" onClick="tab_click(1)">
						<p style="color: inherit">New Job Seeker</p>
					</td>
					<td id="thirdTab" class="inactiveTab" align="center" onMouseOver="tab_enter(2)" onClick="tab_click(2)" onMouseOut="tab_leave(2)">
						<p style="color: inherit">New Job Poster</p>
					</td>
				</tr>
			</table>
		</div>
		<div>
			<div id="firstTabContent" class="activeTabContent">
				<div >
				<table style="position: relative; width: 100%;">
					<tr>
					<td align=center valign=middle>
					<?php
				echo ("<tr>\n");
				echo ("<td colspan=2>\n");
				echo (form_submit(array("name" => "submit", "value" => "Submit", "style" => "width: 47%; margin-right: 3%")));
				echo (form_reset(array("name" => "reset", "style" => "width: 47%; margin-left: 3%"), "Reset"));
				echo ("</td>\n");
				echo ("</tr>\n");
				echo ("</table>");

				?>
				
		</div>
		</div>
		<div id="secondTabContent" class="inactiveTabContent" style="float:right; margin-top:-15%" >
			<div style="margin-top: 10px;">
			<?php  
				echo(form_open("LoginController/SubmitJobPoster"));
				echo ("<table>");
				echo ("<tr>\n");
				echo ("<td>\n");
				echo ("Company Name:");
				echo ("</td>\n");
				echo ("<td>\n");
				echo (form_input(array("id" => "companyName", "name" => "companyName", "type" => "text")));
				echo ("</td>");
				echo ("</tr>\n");
				echo ("</table>");
				echo ("</form>");
				?>
					
	<div id="firstTabContent">
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
			echo("<br />". form_label("Username", "labelUser", null) . "<br />");
			echo (form_input($userInput) . "<br/>". "<br/>");
			echo (form_label("Password") . "<br/>");
			echo (form_password($passwordInput) . "<br/>". "<br/>");
			echo (form_submit($submitButton));
			echo (form_input($clearButton));
			echo form_close();

			?>
			
			<!-- </td>
			<td>
			</td>
			</tr>
			</table> -->
			</div>
			</div>
			<div id="secondTabContent" class="inactiveTabContent">
				<div>
			<?php 
					echo(form_open("LoginController/SubmitJobSeeker"));
					echo ("<table>");
					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("First Name:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "firstName", "name" => "firstName", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Last Name:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "lastName", "name" => "lastName", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Address:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "address", "name" => "address", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("City:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "city", "name" => "city", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("State:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "state", "name" => "state", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("ZIP Code:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "zip", "name" => "zip", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Email Address:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "emailAddress", "name" => "emailAddress", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Telephone Number:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "telephone", "name" => "telephone", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");

					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Username:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "username", "name" => "username", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
		
					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Password:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_password(array("id" => "password", "name" => "password", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");

					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Confirm Password:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_password(array("id" => "confirmPassword", "name" => "confirmPassword", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
		
					echo ("<tr>\n");
					echo ("<td colspan=2>\n");
					echo (form_submit(array("name" => "submit", "value" => "Submit", "style" => "width: 47%; margin-right: 3%")));
					echo (form_reset(array("name" => "reset", "style" => "width: 47%; margin-left: 3%"), "Reset"));
					echo ("</td>\n");
					echo ("</tr>\n");
					echo ("</table>");
					echo (form_close() . "\n");

					?>
			</div>
			</div>
			<div id="thirdTabContent" class="inactiveTabContent">
				<div style="margin-top: 10px;">
				<?php  
					echo(form_open("LoginController/SubmitJobPoster"));
					echo ("<table>");
					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Company Name:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "companyName", "name" => "companyName", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Address:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "address", "name" => "address", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("City:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "city", "name" => "city", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("State:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "state", "name" => "state", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("ZIP Code:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "zip", "name" => "zip", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
						
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Contact Email:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "contactEmail", "name" => "contactEmail", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");

					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Username:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "username", "name" => "username", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
		
					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Password:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_password(array("id" => "password", "name" => "password", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");

					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Confirm Password:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_password(array("id" => "confirmPassword", "name" => "confirmPassword", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
		
					echo ("<tr>\n");
					echo ("<td colspan=2>\n");
					echo (form_submit(array("name" => "submit", "value" => "Submit", "style" => "width: 47%; margin-right: 3%")));
					echo (form_reset(array("name" => "reset", "style" => "width: 47%; margin-left: 3%"), "Reset"));
					echo ("</td>\n");
					echo ("</tr>\n");
					echo ("</table>");
					echo (form_close() . "\n");

					?>
			</div>
			</div>

	</div>
	
    <div id="map-canvas"></div>

</div>


	</body>
	</html>
