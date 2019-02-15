<!DOCTYPE />
<html>
    <head>
        <title>Reset Password - Britannicus Reading Room</title>
        <link href="./css/login.css" rel="stylesheet" type="text/css" />
    <?php
        require_once('./includes/constants.php');
        require_once('./includes/functions.php');
        //establish the database connection
        $dbconn = db_connect();
        //if page is loaded in GET mode (first time)
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
            $error = "Enter your username to reset your password";
            $username = "";
            $enteredEmail = "";
        }
        else if($_SERVER["REQUEST_METHOD"] == "POST")
        {
           $username = validateForm($_POST['username']);
           $enteredEmail = validateForm($_POST['email']);
           
           $sql = "SELECT * FROM tblUsers WHERE username='" .$username."' AND email='" .$enteredEmail."'";
           $result = pg_query($dbconn, $sql);
           $records = pg_num_rows($result);
           
           if($records != 0)
           {
                $emailQuery = "SELECT email FROM tblUsers WHERE username ='" .$username."'";
                $emailResult = pg_query($dbconn, $emailQuery);
                $emailRecords = pg_num_rows($emailResult);
                $saltQuery = "SELECT salt FROM tblUsers WHERE username = '" .$username. "'";
                $salt = pg_fetch_result(pg_query($dbconn, $saltQuery), 0, 'salt');
                
                if($emailRecords != 0)
                {
                    $email = pg_fetch_result(pg_query($dbconn, $emailQuery), 0, 'email');
                    $newPassword = randomString();
                    $newPassword .= $salt;
                    $newPassword = md5($newPassword);
                    $updateSql = "UPDATE tblUsers SET password = '" . $newPassword . "' WHERE username = '" . $username . "'";
                    pg_query($dbconn, $updateSql) or die('Query failed: ' . pg_last_error());
                
                    
                    
                    $to = $email;
                    $subject = "New Password";
                    $message = "Your new password is " . $newPassword;
                    $from = "passwordteam@britannicusreadingroom.com";
                    $headers = "From:" . $from;
                    //mail($to,$subject,$message,$headers);
                    $error = "New password sent to your email";
                }
           }
           else
           {
               $error = "Username or Email not found";
           } 
        }
        
	
    ?>
    </head>
    <body>
        <div class="login-div-modified">
            <div class="login-logo">
                <img src="./images/logo4.png" alt="Britannicus Reading Room" />
            </div>
            <hr />
            <h4><?php echo $error; ?></h4>
            <form id="login-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <img class="labels" src="./images/username.png" /><br />
                <input class="login-input" name="username" type="text" placeholder="Username" tabindex=1 value="<?php echo $username;?>"/><br />
                <img class="labels" src="./images/email.png" /><br />
                <input class="login-input" name="email" type="text" placeholder="Email" tabindex=2 value="<?php echo $enteredEmail;?>"/><br />
                <input class="login-button" name="loginButton" type="submit" value="Submit"/>
            </form>
            <h4><a href='login.php'>Back to login</a></h4>
        </div>
    </body>
</html>