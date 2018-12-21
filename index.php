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
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div style="border-top: 20px; border-top-color: red">
                    <div class="signin-image" align="center">
                        <figure><img src="images/vitlogo1.png" alt="sing up image" width="300" height="100"></figure>
                    </div>

                    <div class="signin-form" align="center"><br>
                        <p style="text-transform: uppercase; letter-spacing: .2em; font-size: 20px; font-weight: 400; color: #000 !important;">Sign In</p>
                        <?php
                                if(isset($_GET['msg']))
                                {
                                    $msg=$_GET['msg'];
                                    if($msg=='1') {
                                    echo '<p style="color: red">Invalid Username or Password</p>'; 
                                    }
                                }
                        ?>
                        <form name="loginform" action="login_checker.php" method="POST"> <!--onsubmit="return validate()">-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="email1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required="required" style="width: 50%">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required" style="width: 50%">
                            </div>
                            <div class="form-group form-check">
                                <label><a href="1.html" style="text-decoration: underline">Forgot Password</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; background-color: #26306D;">Submit</button>
                        </form>
                        <!--<script>
                        function validate() {
                            return (verifyNull() && verifyEmail());
                        }


                        function verifyNull(){      
                            var isValid = true;
                            if(!document.getElementById('exampleInputEmail1').value.trim().length){
                                isValid = false;
                                alert('Please enter username');
                            }
                                else if(!document.getElementById('exampleInputPassword1').value.trim().length){
                                isValid = false;
                                alert('Please enter password');
                            }
                            return isValid;
                        }
                        function verifyEmail() {
                        var x = document.getElementById('exampleInputEmail1').value;
                        var atpos = x.indexOf("@");
                        var dotpos = x.lastIndexOf(".");
                        if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                            alert("Not a valid e-mail address");
                            return false;
                        }
                        return true;
                        }
                        </script>    -->                    
                    </div>
                    </div>
                </div>
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