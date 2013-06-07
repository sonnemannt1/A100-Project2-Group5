<?php
	$this->load->helper("form");
?>

<html>
<head>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">
<script src="<?php echo base_url();?>static/js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="<?php echo base_url();?>static/js/loginview.js"></script>
<script language="JavaScript">
function autoResize(id){
    var newheight;
    var newwidth;

    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
        newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
    }

    //alert(newheight+"asd");
    document.getElementById(id).height= (newheight) + "px";
    document.getElementById(id).width= (newwidth) + "px";
    //$("#"+id).attr('scrolling','no');
}
</script>
<title>Connecticut Next Jobs</title>
</head>
<body>
    <img src="banner.png" class="img-rounded" width="700px"/>
    <div class="container-fluid">
     <div class="row-fluid">
        <div class="span2">
          <!--Sidebar content-->
          <!--SignIn-->
          <h2 class="form-signin-heading">Sign in:</h2>
        <?php
		echo form_open("/LoginController/CheckValidLogin");
		$userInput = array("type" => "text", "id" => "username", "name" => "username",
				"style" => "width: 60%; height: 20px;","placeholder"=>"username");
		$passwordInput = array("type" => "text", "id" =>"password", "name" => "password",
				"style" => "width: 60%; height: 20px","placeholder"=>"password");
		$submitButton = array("type" => "submit", "id" => "submit", "name" => "submit",
				"style" => "width: 35%; height: 25px", "value" => "Submit");
		echo (form_input($userInput) . "<br/>");
		echo (form_password($passwordInput) . "<br/>");
		?>
		<button class="btn btn-small btn-primary" type="submit">Sign in</button><br>
		</form>
          <!--/SignIn-->
          <!-- Button to trigger modal -->
          Don't have an account?<a href="#myModal" role="button" class="btn" data-toggle="modal">Create One!</a>
        </div>
        <div class="span10">
          <!--Body content-->
          <div class="tabbable">
            <ul id="myTab" class="nav nav-tabs">
              <li><a class="active" href="#home" data-toggle="tab"><i class="icon-home"></i>Home</a></li>
              <li><a href="#social" data-toggle="tab"><i class="icon-thumbs-up"></i>Social</a></li>
              <li><a href="#feedback" data-toggle="tab"><i class="icon-envelope"></i>Feedback</a></li>
              <li><a href="#jobs" data-toggle="tab"><i class="icon-pencil"></i>Jobs</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in" id="home">
                HOME ...  Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
              </div>
              <div class="tab-pane fade in " id="social">
                <!--Twitter Feed-->
                <a class="twitter-timeline" href="https://twitter.com/KFCharron_/the-whiteboard" data-widget-id="342365302589374465">Tweets from Connecticut Innovators</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <!--/Twitter Feed-->
              </div>
			 <div class="tab-pane fade in " id="feedback">
            </div>
			<div class="tab-pane fade in jobsIFrameContainer active"  id="jobs">
				<!--<iframe id="jobsResultsIFRAME" onLoad="autoResize('jobsResultsIFRAME');" class="jobsResultsIFRAME" scrolling="yes" width="100%" height="100%" src="<?php echo base_url();?>index.php/JobSeekerController" frameborder="0"></iframe>-->
				<?php
				$this->db->from("jobpostings");
									$this->db->order_by("datePosted", "desc");
									$query = $this->db->get();
									//$query = $this->db->get("jobpostings");
									echo ("<input id=\"address\" type=\"textbox\" value=\"Sydney, NSW\" style=\"display:none;\">");
									echo ("<h3>List of Job Postings On CT NextJobs</h3>");
									echo ("<div id=\"map-canvas\"></div>");
									echo ("<br/><br/><br/>");
									if ($query->num_rows() > 0) {
										for ($i = 0; $i < $query->num_rows(); $i++)
										{
											echo ("<table class=\"jobDescription\">");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowNumber\"\n colspan=\"2\">");
											echo ("<div>Posting #". ($i + 1) . "</div><br />");
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Internship/Job Name: </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ($query->row($i)->jobName);
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Company Name:  </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ($query->row($i)->companyName);
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Date Posted:  </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ($query->row($i)->datePosted);
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Address: </p>");
											echo ("</td>\n");
											echo ("<td class=\"address\">\n");
											echo ($query->row($i)->address);
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Contact Email: </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ("<a href=mailto:".$query->row($i)->contactEmail . ">" .$query->row($i)->contactEmail . "</a>");
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Job Description </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ($query->row($i)->jobDescription);
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Job Requirements: </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ($query->row($i)->skillsRequired);
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Other Information: </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ($query->row($i)->other);
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("<tr>\n");
											echo ("<td class=\"JobRowDescription\">\n");
											echo ("<p>Company Web Site: </p>");
											echo ("</td>\n");
											echo ("<td>\n");
											echo ("<a href=http://".$query->row($i)->companySite . ">" .$query->row($i)->companySite . "</a>");
											echo ("</td>\n");
											echo ("</tr>\n");
											echo ("</table>");
											if($i != $query->num_rows()-1)
												echo ("<div class=\"jobRuler\"></div>");
										}
					}
				?>
			</div>
			</div>
            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">New Account</h3>
              </div>
              <div class="modal-body">
                <p>Here is where all the new account stuff will go....</p>
              </div>
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-primary">Create Account</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
      //$('#myModal').modal(options);
    </script>
    <script>
        $(function () {
        $('#myTab a:first').tab('show');
        })
    </script>
</body>
</html>
