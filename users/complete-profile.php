    <?php include("../config/db.php"); ?>
    <?php include("../scripts/user_profile.php"); ?>



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
                          <a class="dropdown-item" href="../users/edit.php?firstname=<?php echo $_SESSION['firstname']; ?>">Edit Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                      </li>
                    </ul>

            </div>
            </nav>
            <div class="jumbotron" style="color:black; background-color:orange;">
               <h3 class="text-center" style="font-size:70px; font-weight:600;">Welcome <?php echo $_SESSION['firstname']; ?></h3>
               <h4 class="text-center" style="font-size:30px;">(Complete Your Profile)</h4>
                
            </div>
            
            <div class="container-fluid">
               
               <h1 class="text-center" style="color:white;">FILL IN YOUR DETAILS TO COMPLETE YOUR PROFILE</h1>
               <br>
               <div class="row" style="color:white;padding : 10px 40px 10px 40px;">
                  <div class="col-sm-12">
                     <?php echo $msg; ?>
                      <form action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="" class="control-label">Profile Image</label>
                              <img src="http://via.placeholder.com/150x150" alt=""><br><br>
                              <input type="file" class="form-control" name="image">
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-sm-6">
                                  <label for="" class="control-label">Firstname</label>
                                  <input type="text" class="form-control" name="firstname" value="<?php echo $user_firstname; ?>">
                              </div>
                               <div class="col-sm-6">
                                  <label for="" class="control-label">Lastname</label>
                                  <input type="text" class="form-control" name="lastname" value="<?php echo $user_lastname; ?>">
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                  <label for="" class="control-label">Email</label>
                                  <input type="text" class="form-control" name="email" value="<?php echo $user_email; ?>">
                              </div>
                              
                              <div class="col-sm-6">
                                  <label for="" class="control-label">Gender</label>
                                  <select name="gender" id="gender" class="form-control">
                                     <option value="">Select Gender</option> 
                                     <option value="Male">Male</option>    
                                     <option value="Female">Female</option>                                 
                                  </select>
                              </div>
                          </div>
                          <br>
                          
                          <div class="form-group">
                              <label for="" class="control-label">About Me</label>
                              <textarea name="intro" class="form-control" id="" cols="30" rows="10"></textarea>
                          </div>
                          <br>
                          <div class="form-group">
                              <input type="submit" name="submit" class="form-control btn btn-primary" value="SUBMIT">
                          </div>
                
                      </form>
                  </div>
                   
               </div>
                
            </div>
            

        </body>
    </html>