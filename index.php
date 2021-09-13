<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Login Page</title>
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
                <h5>USER LOGIN FORM</h5>
                <P>Please fill in your credentials to continue</P>
                <form method="post" action="server.php">
                <input type="hidden" name="operation_type" value="login">
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="email" id="user_email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="password" id="user_password" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <input class="form-check-inline" type="checkbox" name="signedIn" value="1">Keep me Signed in
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color: #2221F7 !important;" value="Login">
                    </div>
                    <br>
                    <p>Don't have an account? <a href="register.php">Sign up now</a></p>
                    <p>Forgot Password? <a href="reset_password.php">Click to Reset</a></p>
                </form>
            </div>
        </div>
        <center>
       <?php include "includes\\footer.php"; ?>
    </body>
</html>