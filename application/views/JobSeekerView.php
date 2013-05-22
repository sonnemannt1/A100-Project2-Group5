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

<title>Job Seekers</title>
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
					<td id="" class="selectedTab" align="center" onMouseOver="tab_enter(0)" onClick="tab_click(0)" onMouseOut="tab_leave(0)">
						<p style="color: inherit">Job Seekers</p>
					</td>
	
				</tr>
			</table>
		</div>
		<div>
	
			<div id="jobSearch" class="activeTabContent">
				<div style="margin-top: 10px; margin-left: 15%; margin-right: 15%">
				<table style="position: relative; width: 100%;">
					<tr>
					<td align=center valign=middle>
					<?php 
						
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