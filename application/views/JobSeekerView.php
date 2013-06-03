<?php

	$this->load->helper("form");	

?>
<html>
<head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/styles.css">
<link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
<title>Job Seekers</title>
</head>
<body onLoad="Load">
<table align="center" style="height:10px; width: auto">
<tr>
<td valign="middle">
<h2><font color="red">Welcome to CT NextJobs</font></h2>
</td>
</tr>
<tr>
<td align="center" valign="middle">
	<div id="tabs" align="center">

		<div>
	
		<div id="firstTabContent" class="activeTabContent">
			<div style="margin-top: 10px">
				<?php 
					$query = $this->db->get("jobpostings");
					echo (form_label("List of Job Postings On CT NextJobs"));
					if ($query->num_rows() > 0) {
						echo ("<table align=center class = classesTable");
						echo ("<tr>\n");
						for ($i = 0; $i < $query->num_rows(); $i++) {
							echo ("<p align=center>Job Posting #". ($i + 1) . "</p>");
							echo ("<td>\n");
							echo ("<p align=center>Internship/Job Name: </p>");
							echo ("</td>\n");
							echo ("<td>\n");
							echo ($query->row($i)->jobName);
							echo ("</td>\n");
							echo ("</tr>\n");
							echo ("<tr>\n");
							echo ("<td>\n");
							echo ("<p align=center>Company Name:  </p>");
							echo ("</td>\n");
							echo ("<td>\n");
							echo ($query->row($i)->companyName);
							echo ("</td>\n");
							echo ("</tr>\n");
							echo ("<tr>\n");
							echo ("<td>\n");
							echo ("<p align=center>Contact Email: </p>");
							echo ("</td>\n");
							echo ("<td>\n");
							echo ("<a href=mailto:".$query->row($i)->contactEmail . ">" .$query->row($i)->contactEmail . "</a>");
							echo ("</td>\n");
							echo ("</tr>\n");
							echo ("<tr>\n");
							echo ("<td>\n");
							echo ("<p align=center>Job Description </p>");
							echo ("</td>\n");
							echo ("<td>\n");
							echo ($query->row($i)->jobDescription);
							echo ("</td>\n");
							echo ("</tr>\n");
							echo ("<tr>\n");
							echo ("<td>\n");
							echo ("<p align=center>Requirements for the Job: </p>");
							echo ("</td>\n");
							echo ("<td>\n");
							echo ($query->row($i)->skillsRequired);
							echo ("</td>\n");
							echo ("</tr>\n");
							echo ("<tr>\n");
							echo ("</tr>\n");
							echo ("<tr>\n");
							echo ("<td>\n");
							echo ("<p align=center>Other Information: </p>");
							echo ("</td>\n");
							echo ("<td>\n");
							echo ($query->row($i)->other);
							echo ("</td>\n");
							echo ("</tr>\n");
							echo ("<tr>\n");
							echo ("<td>\n");
							echo ("<p align=center>Company Web Site: </p>");
							echo ("</td>\n");
							echo ("<td>\n");
							echo ("<a href=http://".$query->row($i)->companySite . ">" .$query->row($i)->companySite . "</a>");
							echo ("</td>\n");
							echo ("</tr>\n");
							echo ("</table>");
							echo ("<table align=center");
							echo ("<tr>\n");

							echo ("</tr>\n");
							echo ("<tr>\n");
						}
						echo("</table>");
					}
				?>
			</div>
		</div>
			
	</div>
	</div>
	
</td>
</tr>
</table>
</body>
</html>