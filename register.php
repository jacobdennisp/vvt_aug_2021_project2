<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Register Page</title>
        <?php include "includes\header.php"; ?> 
        <style>
            .login-section-logo{
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }

            .top-spacing{
                padding-top: 10px !important;
            }

            .navbar-nav {
                flex-direction: row;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include "includes\landing_page_nav.php"; ?>
        </header>
        <center>
        <div class="card" style="width: 450px;top:50px">
            <div class="container">
                <img src="assets\images\logo\vvt_short_logo.png" width="75px" class="login-section-logo">
                <h5>USER REGISTRATION FORM</h5>
                <P>Please fill in your credentials to continue</P>
                <form method="post" action="server.php">
                    <input type="hidden" name="operation_type" value="register">
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="name" id="user_name" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="phone_no" id="user_phone_no" placeholder="Enter Your Phone No.">
                    </div>
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="email" id="user_email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="password" id="user_password" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="password_confirm" id="user_password_confirmation" placeholder="Confirm Your Password">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color: #2221F7 !important;" value="Signup">
                    </div>
                    <br>
                    <p>Already have an account? <a href="index.php">Login instead</a></p>
                    
                </form>
            </div>
        </div>
        <center>
       <?php include "includes\\footer.php"; ?>
    </body>
</html>