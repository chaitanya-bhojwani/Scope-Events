<!doctype html>
<html lang="en">
  <head>
    <title>SCOPE EVENTS - LOGIN</title>
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
  </head>
  <body>
    
    <header role="banner">
        <div class="block-45">
        SCHOOL OF COMPUTER SCIENCE AND ENGINEERING, VIT     
        </div>
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
    </header>
    <!-- Sing in  Form -->
      <br><br><br>
      <?php
/*	$servername="localhost";
	$username="root";
	$password="";
	$database="scope_events";
	$conn=mysqli_connect($servername, $username, $password, $database);
	if(!$conn)
	{
		die("Connection Failed");
	}*/
      include 'connect.php';
      session_start();
	
	if(isset($_POST['submit']))
	{
		$teacher_id=$_SESSION["loginid"];
		$topic=$_POST['topic'];
		//echo $topic;
		$event_date=$_POST['event_date'];
		$event_time=$_POST['event_timing'];
		$event_venue=$_POST['event_venue'];
		$guest_name=$_POST['person_name'];
		//echo $guest_name;
		$approval_status=0;
		$doc_status=0;
		$file_name=$_FILES['file']['name'];
		//$file_type=$_FILES['file']['type'];
		//$file_size=$_FILES['file']['size'];
		$file_tmp_loc=$_FILES['file']['tmp_name'];
		$file_store="upload/".$file_name;
		move_uploaded_file($file_tmp_loc, $file_store);
		$dept_assigned=$_SESSION["department"];
		$remarks=" ";
		$type_req=$_POST['form_type'];
		$upload_file_path="abc";
		$details="abc";
		$query="INSERT INTO events(`teacher_id`, `event_date`, `event_time`, `event_venue`, `guest_name`, `approval_status`, `doc_status`, `remarks`, `topic`, `file_path`, `dept_assigned`, `type_req`, `upload_file_path`, `details`) VALUES ('$teacher_id','$event_date','$event_time','$event_venue','$guest_name','$approval_status','$doc_status','$remarks','$topic','$file_store','$dept_assigned','$type_req','$upload_file_path','$details')";
		mysqli_query($con, $query);
		//echo mysqli_affected_rows($conn);
	}
?>
        <section class="sign-in">
            <div class="container">
                        <p align="center" style="text-transform: uppercase; letter-spacing: .2em; font-size: 20px; font-weight: 400; color: #000 !important;">REQUEST SUBMITTED SUCCESSFULLY.</p>
            </div>
      </section>
    <!-- loader -->
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
  </body>
</html>