<?php

	$this->load->helper("form");	

?>
<html>
<head>
<header><img src='banner.png'></header>
<style type="text/css">
	.leftTabs {
		background: white;
		height: 100%;
		margin-left: 5%;
		margin-right: 75%;
	}
	
	.selectedTab {
		background: gold;
		color: black;
	}
	
	.inactiveTab {
		background: 0099FF;
		color: black;
	}
	
	.tabHover {
		background: 00CCFF;
		color: black;
	}
	
	.tabContainer {
		background: gray;
		position: relative;
		width: 100%;
		height: 5%;
	}
	
	.activeTabContent {
		position: relative;
		visibility: visible;
	}
	
	.inactiveTabContent {
		position: absolute;
		visibility: hidden;
		height: 100%;
	}
	
	.collapsedContent {
		position: relative;
		margin-left: 15%;
		margin-right: 15%;
		visibility: hidden;
	}
	
	.visibleContent {
		position: relative;
		margin-left: 15%;
		margin-right: 15%;
		visibility: visible;
	}
	
	.tabContainerTable {
		position: relative;
		width: 100%;
		height: 100%;
		
	}
	
		.classesTable {
		border-style: solid;
		border-width: 1px;
		border-color: #DAA520;
	}
	
	.classesTable td {
		background: white;
		color: black;
	}
	
	.classesTable th {
		background: #FFD700;
		color: black;
	}
	
</style>

<title>Login</title>
</head>
<body onLoad="Load">
<table align="left" style="height: 80%; width: auto">
<tr>
<td valign="middle">
<h2><font color="red">Welcome to CT NextJobs</font></h2>
</td>
</tr>
<tr>
<td align="center" valign="middle">
	<div class="centerTabs" id="tabs" align="left">
		<div class="tabContainer">
			<table style="position: relative; width: 100%; height: 100%;">
				<tr>
					<td id="loginTab" class="selectedTab" align="center" onMouseOver="tab_enter(0)" onClick="tab_click(0)" onMouseOut="tab_leave(0)">
						<p style="color: inherit">Sign In</p>
					</td>
	
				</tr>
			</table>
		</div>
		<div>
	
			<div id="loginContent" class="activeTabContent">
				<div style="margin-top: 10px; margin-left: 15%; margin-right: 15%">
				<table style="position: relative; width: 100%;">
					<tr>
					<td align=center valign=middle>
					<?php 
						echo form_open("/LoginController/CheckValidLogin");
						$userInput = array("type" => "text", "id" => "username", "name" => "username", 
										   "style" => "width: 75%; height: 20px;");
						$passwordInput = array("type" => "text", "id" =>"password", "name" => "password", 
											   "style" => "width: 75%; height: 20px");
						$submitButton = array("type" => "submit", "id" => "submit", "name" => "submit", 
											  "style" => "width: 40%; height: 25px", "value" => "Submit");
						$clearButton = array("type" => "button", "id" => "btnClear", "name" => "btnClear",
											 "style" => "width: 40%; height: 25px; margin-left: 4%", "value" => "Clear");
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
				</div>
			</div>
			
	</div>
</td>
</tr>
</table>
</body>
</html>