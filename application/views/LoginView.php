<<<<<<< HEAD
	<?php

		$this->load->helper("form");	

	?>
	<html>
	<head>
	<header><img src='http://newhiteboard.com/wp-content/uploads/2012/10/header.png'></header>
	<link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/styles.css">
	<title>Welcome to CTNextJobs!</title>
	</head>

	<body>

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

<<<<<<< HEAD
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
=======
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
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
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

<title>Login</title>
=======
<?php
	$this->load->helper("form");
?>
<html>
<head>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">
<style>
	html, body, #map-canvas {
		margin: 0;
		padding: 0;
		height: 100%
}
</style>
<title>Connecticut Next Jobs</title>
>>>>>>> new scaffolding
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
              <li><a href="#map" data-toggle="tab"><i class="icon-globe"></i>Map</a></li>
              <li><a href="#social" data-toggle="tab"><i class="icon-thumbs-up"></i>Social</a></li>
              <li><a href="#feedback" data-toggle="tab"><i class="icon-envelope"></i>Feedback</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="home">
                HOME ...  Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. 
              </div>            
              <div class="tab-pane fade in " id="map">
				<div id="map-canvas"></div>
			</div>         
              <div class="tab-pane fade in " id="social">
                <!--Twitter Feed-->
                <a class="twitter-timeline" href="https://twitter.com/KFCharron_/the-whiteboard" data-widget-id="342365302589374465">Tweets from Connecticut Innovators</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <!--/Twitter Feed--> 
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
      $('#myModal').modal(options);
    </script>
    <script>
        $(function () {
        $('#myTab a:first').tab('show');
        })
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
     <script type="text/javascript">
	var geocoder;
	var map;
	function initialize() {
 	 geocoder = new google.maps.Geocoder();
 	 var latlng = new google.maps.LatLng(41.3081, -72.9286);
 	 var mapOptions = {
 	   zoom: 10,
 	   center: latlng,
 	   mapTypeId: google.maps.MapTypeId.ROADMAP
 	 }
 	 map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 	  google.maps.event.addListenerOnce(map, 'idle', function(){
   	 pinAddress_func();
	});
	}
	function codeAddress() {
 	 var address = document.getElementById('address').value;
  	geocoder.geocode( { 'address': address}, function(results, status) {
   	 if (status == google.maps.GeocoderStatus.OK) {
   	   map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
<<<<<<< HEAD
  };
>>>>>>> 5c1a1a28fc8feb309dd6bcc955f91b1371f48c7d

	<script>
	google.maps.visualRefresh = true;

<<<<<<< HEAD
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
=======
  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.name + '.');
    });
  }
</script>
</div>
<div>
		<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
		</div>
</table>
</table>

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
>>>>>>> 5c1a1a28fc8feb309dd6bcc955f91b1371f48c7d

	</script>
	
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
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
	
<<<<<<< HEAD
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
=======
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
		<div id="secondTabContent" class="inactiveTabContent" style="float:right; margin-top:-15%" >
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
>>>>>>> 5c1a1a28fc8feb309dd6bcc955f91b1371f48c7d
					
	<div id="firstTabContent">
	<script>
	  window.fbAsyncInit = function() {
	  FB.init({
		appId      : '468413103234050', // App ID
		channelUrl : 'http://localhost/A100-Project2-Group5/', // Channel File
		status     : true, // check login status
		cookie     : true, // enable cookies to allow the server to access the session
		xfbml      : true  // parse XFBML
	  });

	  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
	  // for any authentication related change, such as login, logout or session refresh. This means that
	  // whenever someone who was previously logged out tries to log in again, the correct case below 
	  // will be handled. 
	  FB.Event.subscribe('auth.authResponseChange', function(response) {
		// Here we specify what we do with the response anytime this event occurs. 
		if (response.status === 'connected') {
		  // The response object is returned with a status field that lets the app know the current
		  // login status of the person. In this case, we're handling the situation where they 
		  // have logged in to the app.
		  testAPI();
		} else if (response.status === 'not_authorized') {
		  // In this case, the person is logged into Facebook, but not into the app, so we call
		  // FB.login() to prompt them to do so. 
		  // In real-life usage, you wouldn't want to immediately prompt someone to login 
		  // like this, for two reasons:
		  // (1) JavaScript created popup windows are blocked by most browsers unless they 
		  // result from direct interaction from people using the app (such as a mouse click)
		  // (2) it is a bad experience to be continually prompted to login upon page load.
		  FB.login();
		} else {
		  // In this case, the person is not logged into Facebook, so we call the login() 
		  // function to prompt them to do so. Note that at this stage there is no indication
		  // of whether they are logged into the app. If they aren't then they'll see the Login
		  // dialog right after they log in to Facebook. 
		  // The same caveats as above apply to the FB.login() call here.
		  FB.login();
		}
	  });
	  };

	  // Load the SDK asynchronously
	  (function(d){
	   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	   if (d.getElementById(id)) {return;}
	   js = d.createElement('script'); js.id = id; js.async = true;
	   js.src = "//connect.facebook.net/en_US/all.js";
	   ref.parentNode.insertBefore(js, ref);
	  }(document));

	  // Here we run a very simple test of the Graph API after login is successful. 
	  // This testAPI() function is only called in those cases. 
	  function testAPI() {
		console.log('Welcome!  Fetching your information.... ');
		FB.api('/me', function(response) {
		  console.log('Good to see you, ' + response.name + '.');
		});
	  }
	</script>
	<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
	</div>
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

<<<<<<< HEAD
					
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
	<div id="map-canvas" style="width:25%; height:25%; margin-top: -10%; float:right">
	</div>
	</table>
=======
				?>
		</div>
		</div>
		</div>
		</table>
		<div id="map-canvas" style="width:40%; height:40%; margin-top: -15%; float:middle; margin-left:45%">
</div>
</table>
>>>>>>> 5c1a1a28fc8feb309dd6bcc955f91b1371f48c7d

	</body>
	</html>
=======
}
google.maps.event.addDomListener(window, 'load', initialize);
	pinAddress_func = null;
	$(function() {
		function pinAddress(){
			var address=$('.address');
			var addressInput=$('#address');
			for(var i=address.length-1; i>=0; i--)
			{
				var addressText = address.eq(i).text();
				addressInput.val(addressText);
				codeAddress();
			}
		}
		pinAddress_func = pinAddress;
		}
		);	
	</script>
</body>
</html>
>>>>>>> new scaffolding
