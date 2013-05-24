<?php

	$this->load->helper("form");	

?>
<html>
<head>
<header><img src='http://newhiteboard.com/wp-content/uploads/2012/10/header.png'></header>
<style>
	html, body, #map-canvas {
		margin: 0;
		padding: 0;
		height: 100%
}



</style>
<style type="text/css">

.centerTabs {
		background: white;
		height: 100%;
		margin-right: 85%;
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">

	var currentTab = 0;

	function Load() {
	}

	function tab_enter(tabID) {
		if (tabID == 0) {
			if (currentTab == 1 || currentTab == 2 || currentTab == 3) {
				document.getElementById("firstTab").className = "tabHover";
			return;
			}
		}
		if (tabID == 1) {
			if (currentTab == 0 || currentTab == 2 || currentTab == 3) {
				document.getElementById("secondTab").className = "tabHover";
		return;
			}
		}
		if (tabID == 2) {
			if (currentTab == 0 || currentTab == 1 || currentTab == 3){
				document.getElementById("thirdTab").className = "tabHover";
		return;
			}
		}
	}

	function tab_leave(tabID) {
		if (currentTab == 0) {
			document.getElementById("secondTab").className = "inactiveTab";
			document.getElementById("thirdTab").className = "inactiveTab";
		}
		if (currentTab == 1) {
			document.getElementById("firstTab").className = "inactiveTab";
			document.getElementById("thirdTab").className = "inactiveTab";
		}
		if (currentTab == 2){
			document.getElementById("firstTab").className = "inactiveTab";
			document.getElementById("secondTab").className = "inactiveTab";
		}
	}

	function tab_click(tabID) {
		// event handler for tabs
		if (tabID == 0) { // tabID 0 indicates the first tab was clicked, so show the content in the first tab and set the current tab
			if (currentTab != 0) {
				currentTab = 0;
				document.getElementById("firstTab").className = "selectedTab";
				document.getElementById("secondTab").className = "inactiveTab";
				document.getElementById("thirdTab").className = "inactiveTab";
				document.getElementById("firstTabContent").className = "activeTabContent";
				document.getElementById("secondTabContent").className = "inactiveTabContent";
				document.getElementById("thirdTabContent").className = "inactiveTabContent";
			}
		}
		if (tabID == 1) { // tabID 1 indicates the second tab was clicked, so show the content in the second tab and set the current tab
			if (currentTab != 1) {
				currentTab = 1;
				document.getElementById("secondTab").className = "selectedTab";
				document.getElementById("firstTab").className = "inactiveTab";
				document.getElementById("thirdTab").className = "inactiveTab";
				document.getElementById("secondTabContent").className = "activeTabContent";
				document.getElementById("firstTabContent").className = "inactiveTabContent";
				document.getElementById("thirdTabContent").className = "inactiveTabContent";
			}
		}
		if (tabID == 2) { // tabID 2 indicates the third tab was clicked, so show the content in the third tab and set the current tab
			if (currentTab != 2) {
				currentTab = 2;
				document.getElementById("thirdTab").className = "selectedTab";
				document.getElementById("secondTab").className = "inactiveTab";
				document.getElementById("firstTab").className = "inactiveTab";
				document.getElementById("thirdTabContent").className = "activeTabContent";
				document.getElementById("secondTabContent").className = "inactiveTabContent";
				document.getElementById("firstTabContent").className = "inactiveTabContent";
			}
		}
	}
	
</script>

<script>
google.maps.visualRefresh = true;

var map;

function initialize() {
	var mapOptions = {
			zoom: 15,
			center: new google.maps.LatLng(41.3081, -72.9286),
			mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

<title>Login</title>
</head>
<body>
<table>
<table align=left>
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
		<td>
		</td>
		</tr>
		</table>
		</div>
		</div>
		<div id="secondTabContent" class="inactiveTabContent">
			<div>
		<?php  
				echo ("<table>");
				echo(form_open("LoginController/SubmitJobSeeker"));
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
				echo ("<table>");
				echo(form_open("LoginController/SubmitJobPoster"));
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
</table>
<div id="map-canvas" style="margin-left: 15%; height:85%">
</div>
</table>
</body>
</html>