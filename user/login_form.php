<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include("./scripts/login.php"); ?>

<div class="container">
    <div class="color center impact" style="margin: 100px 100px 100px 100px">
        <h3>STUDENT DATABASE MANAGEMENT USER LOGIN</h3>        
    </div>

 
    <div class="color signup padding">
        <div class="comic">
            <h3>Welcome, Please Login</h3>
        </div>

        <form action="" method="post" class="form-horizontal">  
            <?php echo $error1; ?>
            <?php echo $error2; ?>
            <?php echo $error3; ?>
            <?php echo $error4; ?>
            <?php echo $error5; ?>
            <?php echo $error6; ?>

            <div class="row form-group input_group" style="margin: 00px 10px 20px 10px">
                <label for="" class="col-sm-2">Email:</label>
                <div class="col-sm-10">
                    <input type="text" name="email_login" id="email_login" class="form-control">
                    <span id="error_Email"></span>
                </div>
            </div>


            <div class="row form-group input_group" style="margin: 00px 10px 20px 10px">
                <label for="" class="col-sm-2">Password:</label>
                <div class="col-sm-10">
                    <input type="password" name="password_login" id="password_login" class="form-control">
                    <span id="error_Password"></span>
                </div>
            </div>


            <div class="form-group" style="margin: 00px 10px 20px 10px">
                <div class="col-xs-12">
                    <input type="submit" name="login" id="login_in" class="form-control" value="LOGIN">
                </div>
            </div>           

        </form>
        
        
        <div class="row a" >
            <div class="col-sm-12" text-center >
                <a href="./user/forgot_password.php" >Forgot Password ?</a>
            </div>
            
        </div>
        
        
    </div>
</div>