<!DOCTYPE HTML>
<html>
    
    <head>
        <title>Welcome to CTNextJobs!</title>
        <link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/styles.css">
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/static/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/static/js/javascript.js"></script>
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
                                                <?php echo form_open( "/LoginController/CheckValidLogin"); $userInput=a rray( "type"=>"text", "id" => "username", "name" => "username", "style" => "width: 60%; height: 20px;"); $passwordInput = array("type" => "text", "id" =>"password", "name" => "password", "style" => "width: 60%; height: 20px"); $submitButton = array("type" => "submit",
                                                "id" => "submit", "name" => "submit", "style" => "width: 35%; height: 25px", "value" => "Submit"); $clearButton = array("type" => "button", "id" => "btnClear", "name" => "btnClear", "style" => "width: 30%; height: 25px; margin-left: 4%", "value" => "Clear");
                                                echo(form_label("username", "labelUser", null) . "
                                                <br />"); echo (form_input($userInput) . "
                                                <br/>"); echo (form_label("password") . "
                                                <br/>"); echo (form_password($passwordInput) . "
                                                <br/>"); echo (form_submit($submitButton)); echo (form_input($clearButton)); echo form_close(); ?></td>
                                        </tr>
                                    </table>
                                    <div id="fb-root"></div>
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
                                        <div id="firstTabContent" class="inactiveTabContent" style="float:right; margin-top:-15%">
                                            <div>
                                                <?php echo(form_open( "LoginController/SubmitJobSeeker")); echo ( "<table>"); echo ( "<tr>\n"); echo ( "<td>\n"); echo ( "First Name:"); echo ( "</td>\n"); echo ( "<td>\n"); echo (form_input(array( "id"=>"firstName", "name" => "firstName", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
            <tr>\n"); echo ("
                <td>\n"); echo ("Last Name:"); echo ("</td>\n"); echo ("
                <td>\n"); echo (form_input(array("id" => "lastName", "name" => "lastName", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
            <tr>\n"); echo ("
                <td>\n"); echo ("Address:"); echo ("</td>\n"); echo ("
                <td>\n"); echo (form_input(array("id" => "address", "name" => "address", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
            <tr>\n"); echo ("
                <td>\n"); echo ("City:"); echo ("</td>\n"); echo ("
                <td>\n"); echo (form_input(array("id" => "city", "name" => "city", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
            <tr>\n"); echo ("
                <td>\n"); echo ("State:"); echo ("</td>\n"); echo ("
                <td>\n"); echo (form_input(array("id" => "state", "name" => "state", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
            <tr>\n"); echo ("
                <td>\n"); echo ("ZIP Code:"); echo ("</td>\n"); echo ("
                <td>\n"); echo (form_input(array("id" => "zip", "name" => "zip", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
            <tr>\n"); echo ("
                <td>\n"); echo ("Email Address:"); echo ("</td>\n"); echo ("
                <td>\n"); echo (form_input(array("id" => "emailAddress", "name" => "emailAddress", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
            <tr>\n"); echo ("
                <td>\n"); echo ("Telephone Number:"); echo ("</td>\n"); echo ("
                <td>\n"); echo (form_input(array("id" => "telephone", "name" => "telephone", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("</table>"); echo ("</form>"); ?>
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
                                <div>
                                    <table style="position: relative; width: 100%;">
                                        <tr>
                                            <td align=center valign=middle>
                                                <?php echo ( "<tr>\n"); echo ( "<td colspan=2>\n"); echo (form_submit(array( "name"=>"submit", "value" => "Submit", "style" => "width: 47%; margin-right: 3%"))); echo (form_reset(array("name" => "reset", "style" => "width: 47%; margin-left: 3%"), "Reset")); echo ("</td>\n"); echo ("</tr>\n"); echo ("</table>"); ?></div>
                            </div>
                            <div id="secondTabContent" class="inactiveTabContent" style="float:right; margin-top:-15%">
                                <div style="margin-top: 10px;">
                                    <?php echo(form_open( "LoginController/SubmitJobPoster")); echo ( "<table>"); echo ( "<tr>\n"); echo ( "<td>\n"); echo ( "Company Name:"); echo ( "</td>\n"); echo ( "<td>\n"); echo (form_input(array( "id"=>"companyName", "name" => "companyName", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("</table>"); echo ("</form>"); ?>
        <div id="firstTabContent">
            <script type="text/javascript">
                window.fbAsyncInit = function () {
                    FB.init({
                            appId: '468413103234050', // App ID
                            channelUrl: 'http://localhost/A100-Project2-Group5/', // Channel File
                            status: true, // check login status
                            cookie: true, // enable cookies to allow the server to access the session
                            xfbml: true // parse XFBML
                        });

                    // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
                    // for any authentication related change, such as login, logout or session refresh. This means that
                    // whenever someone who was previously logged out tries to log in again, the correct case below 
                    // will be handled. 
                    FB.Event.subscribe('auth.authResponseChange', function (response) {
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
                (function (d) {
                    var js, id = 'facebook-jssdk',
                        ref = d.getElementsByTagName('script')[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement('script');
                    js.id = id;
                    js.async = true;
                    js.src = "//connect.facebook.net/en_US/all.js";
                    ref.parentNode.insertBefore(js, ref);
                }(document));

                 // Here we run a very simple test of the Graph API after login is successful. 
                 // This testAPI() function is only called in those cases. 

                function testAPI() {
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function (response) {
                        console.log('Good to see you, ' + response.name + '.');
                    });
                }
            </script>
            <fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
        </div>
        <?php echo form_open( "/LoginController/CheckValidLogin"); $userInput=a rray( "type"=>"text", "id" => "username", "name" => "username", "style" => "width: 60%; height: 25px;"); $passwordInput = array("type" => "text", "id" =>"password", "name" => "password", "style" => "width: 60%; height: 25px"); $submitButton = array("type" => "submit",
        "id" => "submit", "name" => "submit", "style" => "width: 35%; height: 25px", "value" => "Submit"); $clearButton = array("type" => "button", "id" => "btnClear", "name" => "btnClear", "style" => "width: 30%; height: 25px; margin-left: 4%", "value" => "Clear");
        echo("
        <br />". form_label("Username", "labelUser", null) . "
        <br />"); echo (form_input($userInput) . "
        <br/>". "
        <br/>"); echo (form_label("Password") . "
        <br/>"); echo (form_password($passwordInput) . "
        <br/>". "
        <br/>"); echo (form_submit($submitButton)); echo (form_input($clearButton)); echo form_close(); ?>
        <!-- </td>
			<td>
			</td>
			</tr>
			</table> -->
        </div>
        </div>
        <div id="secondTabContent" class="inactiveTabContent">
            <div>
                <?php echo(form_open( "LoginController/SubmitJobSeeker")); echo ( "<table>"); echo ( "<tr>\n"); echo ( "<td>\n"); echo ( "First Name:"); echo ( "</td>\n"); echo ( "<td>\n"); echo (form_input(array( "id"=>"firstName", "name" => "firstName", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Last Name:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "lastName", "name" => "lastName", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Address:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "address", "name" => "address", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("City:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "city", "name" => "city", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("State:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "state", "name" => "state", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("ZIP Code:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "zip", "name" => "zip", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Email Address:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "emailAddress", "name" => "emailAddress", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Telephone Number:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "telephone", "name" => "telephone", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Username:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "username", "name" => "username", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Password:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_password(array("id" => "password", "name" => "password", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Confirm Password:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_password(array("id" => "confirmPassword", "name" => "confirmPassword", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td colspan=2>\n"); echo (form_submit(array("name" => "submit", "value" => "Submit", "style" => "width: 47%; margin-right: 3%"))); echo (form_reset(array("name" => "reset", "style" => "width: 47%; margin-left: 3%"), "Reset")); echo ("</td>\n"); echo ("</tr>\n"); echo
                ("</table>"); echo (form_close() . "\n"); ?></div>
        </div>
        <div id="thirdTabContent" class="inactiveTabContent">
            <div style="margin-top: 10px;">
                <?php echo(form_open( "LoginController/SubmitJobPoster")); echo ( "<table>"); echo ( "<tr>\n"); echo ( "<td>\n"); echo ( "Company Name:"); echo ( "</td>\n"); echo ( "<td>\n"); echo (form_input(array( "id"=>"companyName", "name" => "companyName", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Address:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "address", "name" => "address", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("City:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "city", "name" => "city", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("State:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "state", "name" => "state", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("ZIP Code:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "zip", "name" => "zip", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Contact Email:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "contactEmail", "name" => "contactEmail", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Username:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_input(array("id" => "username", "name" => "username", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Password:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_password(array("id" => "password", "name" => "password", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td>\n"); echo ("Confirm Password:"); echo ("</td>\n"); echo ("
                    <td>\n"); echo (form_password(array("id" => "confirmPassword", "name" => "confirmPassword", "type" => "text"))); echo ("</td>"); echo ("</tr>\n"); echo ("
                <tr>\n"); echo ("
                    <td colspan=2>\n"); echo (form_submit(array("name" => "submit", "value" => "Submit", "style" => "width: 47%; margin-right: 3%"))); echo (form_reset(array("name" => "reset", "style" => "width: 47%; margin-left: 3%"), "Reset")); echo ("</td>\n"); echo ("</tr>\n"); echo
                ("</table>"); echo (form_close() . "\n"); ?></div>
        </div>
        </div>
        <div id="map-canvas" style="width:25%; height:25%; margin-top: -10%; float:right"></div>
        </table>
        </div>
        </div>
        </div>
        </table>
        <div id="map-canvas" style="width:40%; height:40%; margin-top: -15%; float:middle; margin-left:45%"></div>
    </body>

</html>