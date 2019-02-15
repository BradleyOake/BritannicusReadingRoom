<?php
    include_once('./includes/constants.php');
    include_once('./includes/functions.php');
    $itemId = trim($_GET['itemid']);
    $itemId = stripslashes($itemId);
    $itemId = htmlspecialchars($itemId, ENT_QUOTES);
    $dbconn = db_connect();
    $queryItems = "DELETE FROM tblitems WHERE itemid = '".$itemId."'";
    $deleteMessage = "";
    $itemResult = pg_query($dbconn, $queryItems);
    
    $checkQuery = "SELECT * FROM tblitems WHERE itemid= '".$itemId."'";
    $checkResult = pg_query($dbconn, $checkQuery);
    
    $checkRecord = pg_num_rows($checkResult);
    if($checkRecord > 0)
    {
        $deleteMessage = "Record not deleted!";
    }
    else
    {
        $deleteMessage = "Record successfully deleted!";
    }


    $pageTitle = "Delete ".$itemId. " - Britannicus Reading Room";

    
    if(isset($_SERVER['HTTP_REFERER'])) 
    {
        $previous = $_SERVER['HTTP_REFERER'];
    }
    include("./includes/header.php");
	
    echo "<h2>".$deleteMessage."</h2>";
    echo "<a id='backLink' href=" . $previous . ">Go Back</a></p>";

	
    include("./includes/footer.php");
?>