<!DOCTYPE />
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../css/styles.css">
   <link rel="stylesheet" href="../css/infoDisplayStyle.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../js/script.js"></script>
   <script src="../js/functions.js"></script>
    <?php include_once('constants.php'); ?>
    <?php include_once('functions.php'); ?>
    <?php


	//if there is no session then start one
	 if (session_id() == "")
	 {
        session_start();
	 }		
		 $message = "";
		 if(isset($_SESSION['message']))
		 {
			 $message = $_SESSION['message'];
			 unset($_SESSION['message']);
		 }
	 //if cookies are set check cookies to see if user has a valid login and password
		 if (isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
		 {
			 $conn = db_connect();
			 $checkSql="SELECT * FROM tblUsers WHERE username ='" .$_COOKIE["username"]. "' AND password = '" .$_COOKIE["password"]. "'";		
			 $checkResult = pg_query($conn,$checkSql);
			
			 //get the number of records returned
			 $checkRecords = pg_num_rows($checkResult);
				
			 //if a record was returned then the userid/password combo is valid
			 if($checkRecords != 0)
			 {
				 //get the user information and store it in the session
				 $_SESSION['username'] = pg_fetch_result($checkResult, 0, "username");
				 $_SESSION['password'] = pg_fetch_result($checkResult, 0, "password");
                 $_SESSION['loggedIn'] = true;
				
			 }
				
		 }
		 //otherwise unset the current session
		 else
		 {
			 session_unset();
	
		 }
         if($_SERVER["REQUEST_METHOD"] == "GET")
        {
            //if user is not logged in
            if($_SESSION['loggedIn'] != true)
            {
            //direct user to the logn page
                header('Location: login.php');
				
            }
        }
 ?>
   <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <div id='cssmenu'>
    <ul>
       <li><a href='../index.php'><span>Home</span></a></li>
       <li class='active has-sub'><a href='#'><span>Inventory</span></a>
          <ul>
             <li><a href='../additempage.php'><span>Add Item</span></a></li>
             <li><a href='../antiquemaps.php'><span>Antique Maps</span></a>
             </li>
             <li class='has-sub'><a href='#'><span>Books</span></a>
                <ul>
                   <li><a href='../collectiblebooks.php'><span>Collectible Books</span></a></li>
                   <li class='last'><a href='../newbooks.php'><span>New Books</span></a></li>
                </ul>
             </li>
          </ul>
       </li>
       <li class='has-sub'><a href='#'><span>Search</span></a>
            <ul>
                <li><a href='../searchinventory.php'><span>Search Inventory</span></a></li>
                <li class='last'><a href='../searchcontacts.php'><span>Search Contacts</span></a></li>
            </ul>
       </li>
       <li class='has-sub'><a href='#'><span>Contacts</span></a>
            <ul>
                <li><a href='../clients.php'><span>Clients</span></a></li>
                <li><a href='../dealers.php'><span>Dealers</span></a></li>
                <li><a href='../addcontactpage.php'><span>Add Contact</span></a></li>
                <li class='last'><a href='../addwishlistitempage.php'><span>Add Wish List Item</span></a></li>
            </ul>
       </li>
       <li><a href='' onClick="confirmLogout()"><span>Logout</span></a></li>
    </ul>
    </div>
    <div class="content">
        <span>