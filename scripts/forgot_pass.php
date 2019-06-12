<?php include("../config/db.php"); ?>
<?php include("../lib/swift_required.php"); ?>


<?php

    global $connection;
    global $error, $fail, $info;

    if(isset($_POST['forgot'])){
        $email = $_POST['email'];

        $email = mysqli_real_escape_string($connection, $email);

        $query_sql = "SELECT * FROM signup WHERE email = '{$email}' ";
        $query = mysqli_query($connection, $query_sql);
        $user_row = mysqli_num_rows($query);

        if(!empty($email)){
            if($user_row <= 0){
                $error = "<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                            Email Does Not Exist</div>";
            }else{
                while($row = mysqli_fetch_array($query)){
                    $user_email = $row['email'];
                    $user_key = $row['activation_key'];
                }




                    $msg = "  Hey User, did you want to reset your password? <br><br>
    Someone (hopefully you) has asked us to reset the password for your Student Database Management account. Please click the link below to do so. <br>If you didn't request this password reset, you can go ahead and ignore this email!<br><br><a href='http://localhost/SDM/user/reset_password.php?key=".$user_key."'>http://localhost/SDM/user/reset_password.php?key=".$user_key."</a>";

                /*$msg = "Please follow this link to reset your password <a href='http://localhost/SDM/user/reset_password.php?key=".$user_key."'>http://localhost/SDM/user/reset_password.php?key=".$user_key."</a>";*/

                //Create the Transport that call setUsername() and setPassword()
                $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('robotisageek@gmail.com')
                ->setPassword('Computer123');

                $mailer = Swift_Mailer::newInstance($transport);
                // Create the message
                $message = Swift_Message::newInstance('Test')
                // Give the message a subject
                ->setSubject('Reset Your Password')
                // Set the From address with an associative array
                ->setFrom(array('robotisageek@gmail.com' => 'Student Database Management'))
                // Set the To addresses with an associative array
                ->setTo(array($email))
                // Give it a body
                ->setBody('Body Message')
                // And optionally an alternative body
                ->addPart($msg, 'text/html');
                // Optionally add any attachments
                $result = $mailer->send($message);

                if(!$result){
                    $fail = "<div class='alert alert-danger email_alert'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                        Failed To Send Reset Email.</div>";
                }else{
                    $info = "<div class='alert alert-info email_alert'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                        An Email To Reset Your Password Has been Sent.</div>";
                }

            }
        }

    }

?>