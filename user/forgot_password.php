<?php include("../config/db.php"); ?> 
<?php include("../scripts/forgot_pass.php") ?>
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>FORGOT PASSWORD RECOVERY</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
            <link rel="stylesheet" href="./css/bootstrap.min.css">

            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
                    crossorigin="anonymous"></script>
            <script src="./js/jquery-3.2.1.min.js"></script>


            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
            <script src="./js/bootstrap.min.js"></script>


            <link rel="stylesheet" href="../css/custom.css">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

        </head>


        <body>    


            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand/logo -->
                <a data-toggle='tab' class="navbar-brand" href="#index">Home</a>
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item"><a data-toggle='tab' class="nav-link" href="/user/login_form.php">Login</a></li>
                    <li class="nav-item"><a data-toggle='tab' class="nav-link" href="#signup">Sign Up</a></li>
                    <li class="nav-item"><a data-toggle='tab' class="nav-link" href="#aboutus">About Us</a></li>
                </ul>
            </nav>



            <div class="container-fluid">
            <div class="color center impact" style="margin: 200px 100px 20px 100px">
            <h3>Forgot Password</h3>        
        </div>


        <div class="color signup padding">
            <div class="comic">
                <h3>Please Enter Your Email Below</h3>
            
            </div>
            
                
                <?php echo $info; ?>
                <?php echo $fail; ?>
                <?php echo $error; ?>

            <form action="" method="post" class="form-horizontal">  
                <div class="row form-group input_group" style="margin: 00px 10px 20px 10px">
                    <label for="" class="col-sm-2">Email:</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" id="email" class="form-control">
                        <span id="error_Email"></span>
                    </div>
                </div>


                <div class="form-group" style="margin: 00px 10px 20px 10px">
                    <div class="col-xs-12">
                        <input type="submit" name="forgot" id="submit" class="form-control" value="SUBMIT">
                    </div>
                </div>           

            </form>



        </div>



            </div>
            <script src="/js/reg.js"></script>
            <script src="/js/login.js"></script>

        </body>
    </html>