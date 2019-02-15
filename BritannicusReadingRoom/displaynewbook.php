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
    $inStock;
    
    $quantity > 0 ? $inStock = "Yes" : $inStock = "No";
    $pageTitle = $itemTitle. " - Britannicus Reading Room";

    
    if(isset($_SERVER['HTTP_REFERER'])) 
    {
        $previous = $_SERVER['HTTP_REFERER'];
    }
    include("./includes/header.php");
	
	

?>
<div class="container">
    <div id="displayPic" class="divFloat">

    </div>
    <div class="divFloat">
        <table class="descTable">
            <tr>
                <td>
                    <p>Title:</p>
                </td>
                <td>
                    <p><?php echo $itemTitle; ?></p>
                </td>
                <td>
                    <p>Author:</p>
                </td>
                <td>
                    <p><?php echo $author; ?></p>
                </td>
                
            </tr>
            <tr>
                
                <td>
                    <p>Publisher:</p>
                </td>
                <td>
                    <p><?php echo $publisher; ?></p>
                </td>
                <td>
                    <p>Publish Date:</p>
                </td>
                <td>
                    <p><?php echo $publishDate; ?></p>
                </td>                
            </tr>
            <tr>
                <td>
                    <p>Binding Type:</p>
                </td>
                <td>
                    <p><?php echo $bindingType; ?></p>
                </td>
                <td>
                    <p>Quantity:</p>
                </td>
                <td>
                    <p><?php echo $quantity; ?></p>
                </td>
                
            </tr>
            <tr>
                <td>
                    <p>Price:</p>
                </td>
                <td>
                    <p><?php echo $price; ?></p>
                </td>
                <td>
                    <p>Pricing Date:</p>
                </td>
                <td>
                    <p><?php echo $priceDate; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
                <td></td>
                <td></td>
                <td id="backLink">
                    <p><a href="<?php echo $previous; ?>">Go Back</a></p>
                </td>
            </tr>
            
            <!--
            <tr>
                <td>
                    <p>Date:</p>
                </td>
                <td>
                    <p>1833</p>
                </td>
                <td>
                    <p>In stock:</p>
                </td>
                <td>
                    <p><?php echo $inStock; ?></p>
                </td>
                
            </tr>-->
        </table>

    </div>
    <!--
    <table class="descTable" id="priceTable">
        <tr>
            <td>
                <p>Price: </p>
            </td>
            <td>
                <p><?php echo $price; ?></p>
            </td>
            <td>
                <p>Pricing Date:</p>
            </td>
            <td>
                <p><?php echo $priceDate; ?></p>
            </td>
        </tr>
    </table>
    <table class="descTable" id="descriptionTable">
        <tr rowspan= "3";>
            <td>
                <p>Description:</p>
            </td>
            <td colspan = "3";>
                <p>Description of Condition, Physical properties.</p>
            </td>
        </tr>
        <tr rowspan= "3";>
            <td >
                <p>Map </br>Description:</p>
            </td>
            <td colspan = "3";>
                <p>Description of Map content.</p>
            </td>
        </tr>
    </table>-->
</div>
<?php
    include("./includes/footer.php");
?>