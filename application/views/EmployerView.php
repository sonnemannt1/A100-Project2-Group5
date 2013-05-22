<?php

	$this->load->helper("form");	

?>
<html>
<head>
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

<title>Job Posting</title>
</head>
<body>
<div class="centerTabs" id="tabs" align="center">
<div>
		<div id="firstTabContent" class="activeTabContent">
		<?php 
		if (isset($jobposting_success)) {
			echo ("<p align=center>" . $jobposting_success . "</p>");
		}
		else {
		echo ("<p align=center><font color=red>" . validation_errors() . "</font></p>");
				echo ("<p align=center>Use this form to submit job postings</p>");
		}
				echo ("\n<br />\n");
				echo (form_open("LoginController/SubmitJobPosting"));
				echo ("\n<table align=center>\n");
			
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Job Name:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "jobName", "name" => "jobName", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
					
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
					echo ("Date Posted:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "datePosted", "name" => "datePosted", "type" => "date")));
					echo ("</td>");
					echo ("</tr>\n");
					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Job Description:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "jobDescription", "name" => "jobDescription", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Skills Required:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "skillsRequired", "name" => "skillsRequired", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");
					
					echo ("<tr>\n");
					echo ("<td>\n");
					echo ("Other:");
					echo ("</td>\n");
					echo ("<td>\n");
					echo (form_input(array("id" => "other", "name" => "other", "type" => "text")));
					echo ("</td>");
					echo ("</tr>\n");

				echo ("<tr>\n");
				echo ("<td colspan=2>\n");
				echo (form_submit(array("name" => "minorSubmit", "value" => "Submit", "style" => "width: 47%; margin-right: 3%")));
				echo (form_reset(array("name" => "minorReset", "style" => "width: 47%; margin-left: 3%"), "Reset"));
				echo ("</td>\n");
				echo ("</tr>\n");
				echo ("</table>");
				echo (form_close() . "\n");
				?>
				</div>
				</div>
				</div>
				
</body>
</html>