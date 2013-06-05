<!DOCTYPE HTML>
<html>
    
    <head>
        <title>Welcome to CTNextJobs!</title>
        <link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/styles.css">
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/static/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/static/js/javascript.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/bootstrap/js/bootstrap.min.js"></script>
		<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <?php $this->load->helper("form"); ?>
    
    <body>
        <header>
            <img src='http://newhiteboard.com/wp-content/uploads/2012/10/header.png'>
        </header>
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
                                <div>
                                    <table style="position: relative; width: 100%;">
                                        <tr>
                                            <td align=center valign=middle>
                                                <?php echo form_open( "/LoginController/CheckValidLogin"); $userInput=array( "type"=>"text", "id" => "username", "name" => "username", "style" => "width: 60%; height: 20px;"); $passwordInput = array("type" => "text", "id" =>"password", "name" => "password", "style" => "width: 60%; height: 20px"); $submitButton = array("type" => "submit",
                                                "id" => "submit", "name" => "submit", "style" => "width: 35%; height: 25px", "value" => "Submit"); $clearButton = array("type" => "button", "id" => "btnClear", "name" => "btnClear", "style" => "width: 30%; height: 25px; margin-left: 4%", "value" => "Clear");
                                                echo(form_label("username", "labelUser", null) . "
                                                <br />"); echo (form_input($userInput) . "
                                                <br/>"); echo (form_label("password") . "
                                                <br/>"); echo (form_password($passwordInput) . "
                                                <br/>"); echo (form_submit($submitButton)); echo (form_input($clearButton)); echo form_close(); ?></td>
                                        </tr>
										<tr>
											<td> 
												Don't have an account? <a href="<?php echo base_url() ?>index.php/SignupFormController">Register now.</a>
											</td>
										</tr>
                                    </table>

<a class="twitter-timeline"  href="https://twitter.com/CodeA100"  data-widget-id="341937786095546368">Tweets by @CodeA100</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


	</body>
	</html>
