<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>SCOPE EVENTS - PORTAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
      
    <script type="text/javascript" src="js/jquery-1.2.3.pack.js"></script>
		<script type="text/javascript">			
			
			function loadTabContent(tabUrl){
				$("#loader").show();
				jQuery.ajax({
					url: tabUrl,
					cache: false,
					success: function(message) {
						jQuery("#tcontent").empty().append(message);
						$("#loader").hide();
					}
				});
			}
			
			jQuery(document).ready(function(){				
				
				$("#loader").hide();				
				jQuery("[id^=tab]").click(function(){	
					
					// get tab id and tab url
					tabId = $(this).attr("id");										
					tabUrl = jQuery("#"+tabId).attr("href");
					
					jQuery("[id^=tab]").removeClass("current");
					jQuery("#"+tabId).addClass("current");
                    jQuery("[id^=tab]").css("font-weight", "400");
                    jQuery("#"+tabId).css("font-weight", "600");				
					// load tab content
					loadTabContent(tabUrl);
					return false;
				});
			});
			
		</script>
      <script>
      (function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);
      </script>
  </head>
  <body>
    
    <header role="banner">
        <div class="block-45">
        SCHOOL OF COMPUTER SCIENCE AND ENGINEERING, VIT     
    </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <img src="images/vitlogo.png" height="50px">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" id="tab1" href="tabs2.php?id=1">Home</a>
              </li>
<!--              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Requests</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" id="tab2" href="tabs.php?id=2">Guest Lecture/Workshop</a>
                  <a class="dropdown-item" id="tab3" href="tabs.php?id=3">Hackathon/Codeathon/Makethon</a>
                  <a class="dropdown-item" id="tab4" href="tabs.php?id=4">Value Added Program</a>
                  <a class="dropdown-item" id="tab5" href="tabs.php?id=5">Delete Request</a>
                  </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="tab6" href="tabs.php?id=6">Upload</a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" id="tab8" href="tabs2.php?id=8">Approve Requests</a>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logout (<?php
                    echo $_SESSION["loginid"];
                    ?>)</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04" align="center">
                    <div align="center">
                    <p id="conf" align="center">Confirm Logout ?</p>
                        <a href="logout.php"><button type="button" align="center" class="btn btn-primary" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; background-color: #26306D;">Yes</button></a>
                    <button type="button" align="center" class="btn btn-primary" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; background-color: #26306D;">No</button>
                    </div>
                </div>
            </li>
            </ul>
          </div>
        </div>
      </nav>
    </header><br><br><br><br><br>
    <!-- END header -->
    <!-- loader -->
    <div id="tcontent" align="center">
        <!--///////////////////////////////////Home/////////////////////////////////////////////////////////////////////-->
        <h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">HOME</span></h4><br>
        <div class="card w-75 mb-6" style="margin:5px; border-color: #26306D">
                <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Spotlight</div>
                <div class="card-body" align="left">
                    <ul>
                        <li style="color: #26306D;"><h5 class="card-title text-dark">Guidlines</h5>
                            <a href="http://www.vit.ac.in/" target="_blank" style="text-decoration: underline"><p class="card-text">Click Here to view guidlines</p></a>
                        </li>
                        <?php
                        include 'connect.php';
                        $query ='SELECT * FROM events WHERE dept_assigned="'.$_SESSION["department"].'" and approval_status="0"';
                        $result = mysqli_query($con, $query);
                        if(mysqli_num_rows($result)>0) {
                            echo '<br><li style="color: #26306D;"><h5 class="card-title text-dark">Awaiting Requests</h5>
                            <a href="" target="_blank" style="text-decoration: underline"><p class="card-text">Awaiting requests in your portal ('.mysqli_num_rows($result).')</p></a>
                        </li>';
                        }
                        ?>
                    </ul>
                 </div>
        </div>
        <!--//////////////////////////////////////////////////UPLOAD//////////////////////////////////////////////////-->

        <!--//////////////////////////////////////////////////DELETE//////////////////////////////////////////////////-->
<!--        <h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">DELETE REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Delete option is enabled before HOD Approval || Rejected</div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>GUEST NAME</td>
                            <td>STATUS</td>
                            <td>DELETE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2018-10-26</td>
                            <td>Guest Lecture</td>
                            <td>ABC</td>
                            <td>Mr. XYZ</td>
                            <td><h4><span class="badge badge-info" style="padding: 10px; color: #fff; font-weight: 400">PENDING</span></h4></td>
                            <td><i class="fa fa-trash" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
        </div>-->
        <!--//////////////////////////////////////////////////APPROVE REQUEST//////////////////////////////////////////////////-->
<!--        <h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">DELETE REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Delete option is enabled before HOD Approval || Rejected</div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>GUEST NAME</td>
                            <td>DETAILS</td>
                            <td>APPROVE</td>
                            <td>REJECT</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2018-10-26</td>
                            <td>Guest Lecture</td>
                            <td>ABC</td>
                            <td>Mr. XYZ</td>
                            <td><h4><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 400">DETAILS</span></h4></td>
                            <td><h4><span class="badge badge-success" style="padding: 10px; color: #fff; font-weight: 400">APPROVE</span></h4></td>
                            <td><h4><span class="badge badge-danger" style="padding: 10px; color: #fff; font-weight: 400">REJECT</span></h4></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
        </div>-->
</div>
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
      
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
      <script>
      function approve_logic(a) {
          var confirm1= confirm("Confirm Approve ?");
          if(confirm1) {
        jQuery.ajax({
            url: 'approve_request.php',
            type: 'POST', // GET or POST
            data: 'param1='+a+'&param2=12', // will be in $_POST on PHP side
            success: function(data) { // data is the response from your php script
                // This function is called if your AJAX query was successful
                alert("Request is Approved");
                loadTabContent("tabs2.php?id=8");
            },
            error: function() {
                // This callback is called if your AJAX query has failed
                alert("Error!");
            }
        });
      }
    }
          </script>
      <script>
    function reject_logic(a) {
        var confirm1= confirm("Confirm Reject ?");
        if(confirm1) {
        jQuery.ajax({
            url: 'reject_request.php',
            type: 'POST', // GET or POST
            data: 'param1='+a+'&param2=12', // will be in $_POST on PHP side
            success: function(data) { // data is the response from your php script
                // This function is called if your AJAX query was successful
                alert("Request is Rejected");
                loadTabContent("tabs2.php?id=8");
            },
            error: function() {
                // This callback is called if your AJAX query has failed
                alert("Error!");
            }
        });
        }
    }
          </script>
        <script language="javascript" type="text/javascript">
    function hod_details_logic(a) {
            jQuery.ajax({
            url: 'download_form_file.php',
            type: 'POST', // GET or POST
            data: 'param1='+a+'&param2=12', // will be in $_POST on PHP side
            success: function(data) { // data is the response from your php script
                // This function is called if your AJAX query was successful
                var link = document.createElement('a');
                // Add the element to the DOM
                link.setAttribute("type", "hidden"); // make it hidden if needed
                link.target = '_blank';
                link.href = data;
                document.body.appendChild(link);
                link.click();
                link.remove();
                //$('<a href="'+ data +'" target="_blank"></a>').get(0).click();
                loadTabContent("tabs2.php?id=8");
            },
            error: function() {
                // This callback is called if your AJAX query has failed
                alert("Error!");
            }
        });
    }
          </script>
      <!--//////////////////////////////////////////footer/////////////////////////////////////////////////////-->
      <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a style="color: #26306D"> VIT University</a>
        </div>
        <!-- Copyright -->

      </footer>
  </body>
</html>