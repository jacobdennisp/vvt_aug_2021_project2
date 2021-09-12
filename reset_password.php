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
                <h5>Password Reset</h5>
                <P>Please provide your email, we'll mail you <br>the reset link</P>
                <form>
                   
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="email" id="user_email" placeholder="Enter Your Email">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color: #2221F7 !important;" value="Reset Password">
                    </div>
                    <br>
                    <br>                    
                                      
                </form>
            </div>
        </div>
        <center>
       <?php include "includes\\footer.php"; ?>
    </body>
</html>