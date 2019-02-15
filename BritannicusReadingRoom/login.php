<!DOCTYPE />
<html>
    <head>
        <title>Login - Britannicus Reading Room</title>
        <link href="./css/login.css" rel="stylesheet" type="text/css" />
    <?php
        require_once('./includes/constants.php');
        require_once('./includes/functions.php');
        //establish the database connection
        $dbconn = db_connect();

        //if page is loaded in GET mode (first time)
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
			if (isset ($_COOKIE['username']))
			{
				//direct user to the welcome page
                header('Location: index.php');
			}
            if(session_id() != "" && isset($_SESSION['username']))
            {
                //direct user to the welcome page
                header('Location: index.php');
            }
                //declare the page variables	
                $error = "";
                $username = "";
                $password = "";

        
        }
        //if page is submitted in POST mode
        else if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            //get the variables from the form
            $error = "";
            $username = validateForm($_POST["username"]);
            $password = validateForm($_POST["password"]);
            $salt = '';
            $saltQuery = "SELECT salt FROM tblUsers WHERE username='" .$username. "'";
            $saltResult = pg_query($dbconn, $saltQuery);
            $saltRecords = pg_num_rows($saltResult);
            if($saltRecords != 0)
            {
                //get the salt
                $salt = pg_fetch_result(pg_query($saltQuery), 0 , 'salt');
                $password .= $salt; //add it to the password
                $password = md5($password); //encrypt it
                
                //query the database for the username/password pair
                $sql="SELECT * FROM tblUsers WHERE username ='" .$username. "' AND password = '" .$password. "'";	
                $result = pg_query($dbconn,$sql);
                
                //get the number of records returned
                $records = pg_num_rows($result);
                
                //if a record was returned then the user entered a valid username/password
                if($records != 0)
                {
                    
                    setCookie("username", $username, time() + THIRTY_DAYS_IN_SECONDS);
                    setCookie("password", $password, time() + THIRTY_DAYS_IN_SECONDS);
                    $_SESSION['loggedIn'] = true;
                    
                    //direct user to the welcome page
                    header('Location: additempage.php');
                }
                
                //otherwise the user entered invalid login info
                else
                {
                    //display error message
                    $error.="Invalid username/password. Please try again.";
                }
            }
            else
            {
                $error .="Invalid username/password. Please try again.";
            }
        }
        
	
    ?>
    </head>
    <body>
        <div class="login-div">
            <div class="login-logo">
                <img src="./images/logo4.png" alt="Britannicus Reading Room" />
            </div>
            <hr />
            
            <form id="login-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <img class="labels" src="./images/username.png" /><br />
                <input class="login-input" name="username" type="text" placeholder="Username" tabindex=1/><br />
                <img class="labels" src="./images/password.png" /><br />
                <input class="login-input" name="password" type="password" placeholder="Password" tabindex=2/><br />
                <input class="login-button" name="loginButton" type="submit" value="Login"/>
            </form>
            <a href="resetpassword.php">Reset Password</a>
            <h4><?php echo $error; ?></h4>
            
        </div>
    </body>
</html>