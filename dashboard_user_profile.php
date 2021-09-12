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
            main{
                left: 0;
                display: block !important;
                right: 0;
                margin-left: 250px;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include "includes\dashboard_top_nav.php"; ?>
            <?php include "includes\dashboard_side_nav.php"; ?>
        </header>
       <main class="alignment">
            <div class="container">                
                <h5>User Profile</h5>
                
                <form>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_name">Your Name</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                               <input class="form-control" type="text" name="name" id="user_name" placeholder="Enter Your Name">
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_phone_no">Your Phone No.</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="phone_no" id="user_phone_no" placeholder="Enter Your Phone No.">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_email">Your Email</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="email" id="user_email" placeholder="Enter Your Email">
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_password">Enter a Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input  class="form-control" type="password" name="password" id="user_password" placeholder="Enter Your Password">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_password_confirmation">Confirm the Entered Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input  class="form-control" type="password" name="password_confirm" id="user_password_confirmation" placeholder="Confirm Your Password">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-1 col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" style="background-color: #2221F7 !important;" value="Update">
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-12">
                            <div class="form-group">
                                <a href="#" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <br>
                
                    
                </form>
            </div>
       </main>
       <?php include "includes\\footer.php"; ?>
    </body>
</html>