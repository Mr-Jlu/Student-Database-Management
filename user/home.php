    <?php include("../config/db.php"); ?>


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
                          <a class="dropdown-item" href="../users/profile.php?firstname=<?php echo $_SESSION['firstname']; ?>">View Profile</a>
                          <a class="dropdown-item" href="../users/complete-profile.php?firstname=<?php echo $_SESSION['firstname']; ?>">Complete Profile</a>
                          <a class="dropdown-item" href="../users/edit.php?firstname=<?php echo $_SESSION['firstname']; ?>">Edit Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                      </li>
                    </ul>

            </div>
            </nav>
            <div class="container-fluid">
                <div class="" style="padding-left:8cm; padding-top:2.5cm;">
                    
                    <div class="col-md-3">
                        
                    </div>
                    
                    <div class="col-md-9">

                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                              <img class="d-block img-fluid" src="../images/slider1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block img-fluid" src="../images/slider2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block img-fluid" src="../images/slider3.jpg" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

                        
                    </div>
                </div>
            </div>
            

        </body>
    </html>