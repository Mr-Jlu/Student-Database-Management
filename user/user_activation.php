<?php include("../config/db.php"); ?>
<?php include("../scripts/activate.php"); ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>USER ACTIVATION</title>

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

        <script src="./js/reg.js"></script>

    </head>
    <body>

       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a data-toggle='tab' class="navbar-brand" href="#index">Home</a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item"><a data-toggle='tab' class="nav-link" href="#login">Login</a></li>
                <li class="nav-item"><a data-toggle='tab' class="nav-link" href="#signup">Sign Up</a></li>
                <li class="nav-item"><a data-toggle='tab' class="nav-link" href="#aboutus">About Us</a></li>
            </ul>
        </nav>

        <div class="container">
            <div class="row text=center" >
                <?php echo $update_good; ?>
                <?php echo $good_update; ?>
                <?php echo $error; ?>
            </div>


            <div class="">
                <div class="sub_msg" style="margin-bottom:20px;">
                    <h3><a href="../index.php" class="btn btn-primary">CLICK HERE TO LOGIN</a></h3>
                </div>

            </div>

        </div>

    </body>
</html>