    <?php include("../config/db.php"); ?>
    <?php include("../scripts/view_profile.php"); ?>



    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>SDM APPLICATION - HOME PAGE</title>
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
           
                <a data-toggle='tab' class="navbar-brand" href="#index">SDM SYSTEM</a>
             
            
            <div class="color tab-content" style="padding-left:32.1cm;">
                
                 <ul class="nav nav-tabs justify-content-end" role="tablist">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white; background-color:#343A40;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> <em><b><?php echo $_SESSION['firstname']; ?></b></em></a>
                          <div class="dropdown-menu">
                          <a class="dropdown-item" href="../users/complete-profile.php?firstname=<?php echo $_SESSION['firstname']; ?>">Complete Profile</a>
                          <a class="dropdown-item" href="../users/edit.php?firstname=<?php echo $_SESSION['firstname']; ?>">Edit Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="../user/logout.php">Logout</a>
                        </div>
                      </li>
                    </ul>

            </div>
            </nav>
            <div class="jumbotron" style="color:black; background-color:orange;">
               <h3 class="text-center" style="font-size:70px; font-weight:600;">Welcome <?php echo $_SESSION['firstname']; ?></h3>
               <h4 class="text-center" style="font-size:30px;">(Your Profile)</h4>
                
            </div>
            
            <div class="container-fluid">
               <br>
               <h1 class="text-center" style="color:white;">VIEW YOUR PROFILE</h1>
               <br>
               
               <div class="row" style="border: 1px solid orange">
               <div class="col-sm-4" style="margin-top:20px;">
                   <div class="form-group">
                      <?php profile_image(); ?> 
                   </div>
               </div>
               <div class="col-sm-8 color" style="margin-top:20px; padding-left:12cm;">
                   <div class="row form-group">
                      <?php profile_data(); ?>
                   </div>
               </div>
  
               </div>
            </div>
            

        </body>
    </html>