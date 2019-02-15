<?php
    include_once('./includes/constants.php');
    include_once('./includes/functions.php');
    $itemId = trim($_GET['itemid']);
    $itemId = stripslashes($itemId);
    $itemId = htmlspecialchars($itemId, ENT_QUOTES);
    $dbconn = db_connect();
    $queryItems = "SELECT * FROM tblitems WHERE itemid = '".$itemId."'";
    $queryCollectibleBooks = "SELECT * FROM tblcollectiblebooks WHERE itemid ='".$itemId."'";
    $itemResult = pg_query($dbconn, $queryItems);
    $collectibleBooksResult = pg_query($dbconn, $queryCollectibleBooks);
    $itemRow = pg_fetch_assoc($itemResult);
    $bookRow = pg_fetch_assoc($collectibleBooksResult);
    
    
    $itemTitle = $itemRow['title']; //
    $author = $itemRow['author']; //
    $publishDate = $itemRow['publishdate']; //
	$bookLanguage = $bookRow['booklanguage'];
	$gradeCondition = $bookRow['conditiongrade']; //
    $acquisitionPrice = $bookRow['acquisitionprice']; //
    $conditionDescription = $bookRow['conditiondescription'];
    $bookDescription = $bookRow['bookdescription'];
    $price = $itemRow['price']; //
    $priceDate = $itemRow['pricingdate']; //
    $inStock = $bookRow['instock']; //
    
    $inStock == "t" ? $inStock = "Yes" : $inStock = "No";
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
                    <p>Publish Date:</p>
                </td>
                <td>
                    <p><?php echo $priceDate; ?></p>
                </td>
                <td>
                    <p>Condition Grade:</p>
                </td>
                <td>
                    <p><?php echo $gradeCondition; ?></p>
                </td>                
            </tr>
            <tr>
                <td>
                    <p>Price:</p>
                </td>
                <td>
                    <p>$<?php echo $price; ?></p>
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
                    <p>&nbsp;Acquisition Price</p>
                </td>
                <td>
                    <p>$<?php echo $acquisitionPrice; ?></p>
                </td>
                <td>
                    <p>Language</p>
                </td>
                <td>
                    <p><?php echo $bookLanguage; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>In Stock:</p>
                </td>
                <td>
                    <p><?php echo $inStock; ?></p>
                </td>
                <td>
                    <p>Condition Description</p>
                </td>
                <td>
                    <p><?php echo $conditionDescription; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Book Description</p>
                </td>
                <td>
                    <p><?php echo $bookDescription; ?></p>
                </td>

                <td id="backLink">
                    <p><a href="<?php echo $previous; ?>">Go Back</a></p>
                </td>
                <td id="backLink">
                    <?php echo"<p><a href='../deletecollectiblebook.php?itemid=".$itemId."'>Delete</a></p>";?>
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