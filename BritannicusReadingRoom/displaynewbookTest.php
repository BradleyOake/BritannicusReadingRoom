<?php
    include_once('./includes/constants.php');
    include_once('./includes/functions.php');
    $itemId = trim($_GET['itemid']);
    $itemId = stripslashes($itemId);
    $itemId = htmlspecialchars($itemId, ENT_QUOTES);
    $dbconn = db_connect();
    $queryItems = "SELECT * FROM tblitems WHERE itemid = '".$itemId."'";
    $queryNewBooks = "SELECT * FROM tblnewbooks WHERE itemid ='".$itemId."'";
    $itemResult = pg_query($dbconn, $queryItems);
    $newBooksResult = pg_query($dbconn, $queryNewBooks);
    $itemRow = pg_fetch_assoc($itemResult);
    $bookRow = pg_fetch_assoc($newBooksResult);
    
    $itemTitle = $itemRow['title'];
    $author = $itemRow['author'];
    $publisher = $bookRow['publisher'];
    $publishDate = $itemRow['publishdate'];
    $bindingType = $bookRow['bindingtype'];
    $quantity = $bookRow['quantity'];
    $price = $itemRow['price'];
    $priceDate = $itemRow['pricingdate'];
    
    
    $pageTitle = $itemTitle. " - Britannicus Reading Room";
    include("./includes/header.php");
    
    
?>

<?php
    include("./includes/footer.php");
?>