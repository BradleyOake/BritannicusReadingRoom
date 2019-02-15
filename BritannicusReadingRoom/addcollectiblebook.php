<?php
    $pageTitle = "Add Collectible Book- Britannicus Reading Room";
    include("./includes/header.php");
    $dbconn = db_connect();
    
    $title = validateForm($_POST['collectibleBookTitle']);
    $author = validateForm($_POST['collectibleBookAuthor']);
    $publishYear = validateForm($_POST['collectibleBookPublishDateYear']);
    $publishMonth = validateForm($_POST['collectibleBookPublishDateMonth']);
    $publishDay = validateForm($_POST['collectibleBookPublishDateDay']);
    $bookPrice = validateForm($_POST['collectibleBookPrice']);
    $acquisitionPrice = validateForm($_POST['collectibleBookAcquisitionPrice']);
   // $priceYear = validateForm($_POST['collectibleBookPricingDateYear']);
    //$priceMonth = validateForm($_POST['collectibleBookPricingDateMonth']);
    //$priceDay = validateForm($_POST['collectibleBookPricingDateDay']);
    $language = validateForm($_POST['collectibleBookLanguage']);
    $conditionGrade = validateForm($_POST['collectibleBookConditionGrade']);
    $inStock = validateForm($_POST['collectibleBookInStock']);
    $bookDescription = validateForm($_POST['collectibleBookDescription']);
    $conditionDescription = validateForm($_POST['collectibleBookConditionDescription']);
    $pricingDate = Date("Y-m-d");
   // $priceDate = "";
    $publishDate = $publishYear . "-" . $publishMonth . "-" . $publishDay;
    //$priceDate = $priceYear . "-" . $priceMonth . "-" . $priceDate;
    
    $newId = "select substring(itemid,2) from tblitems where itemid like 'B%' ORDER BY cast(substring(itemid,2) AS INTEGER) DESC limit 1";
    $results = pg_query($dbconn, $newId);
        $value = pg_fetch_result($results, 0, 0);
        $id = substr($value, 1);
        $id += 1;
        $newId = "B00" . $id;
        
    $dbconn = db_connect();
    $query = "INSERT INTO tblitems (itemid,title, author, publishdate, price, pricingdate)";
    $query .= "VALUES('" .$newId. "','".$title."','".$author."','".$publishDate."','".$bookPrice."','".$pricingDate."')";
    pg_query($dbconn, $query) or die("Failed to insert into tblitems! " .pg_last_error());
    
    $tblnewBookQuery = "INSERT INTO tblcollectiblebooks(itemid, booklanguage, conditiongrade, acquisitionprice, instock, conditiondescription, bookdescription)";
    $tblnewBookQuery .= "VALUES('".$newId."','".$language."','".$conditionGrade."','".$acquisitionPrice."','".$inStock."','".$conditionDescription."','".$bookDescription."')";
    pg_query($dbconn, $tblnewBookQuery) or die("Failed to insert into tblcollectiblebooks!" .pg_last_error());
    
    
        $nBookQuery = "SELECT tblitems.itemid, tblitems.title, tblitems.author, tblcollectiblebooks.booklanguage, tblitems.publishdate, tblcollectiblebooks.conditiongrade, tblcollectiblebooks.acquisitionprice, tblitems.price,
                        tblcollectiblebooks.instock, tblcollectiblebooks.conditiondescription, tblcollectiblebooks.bookdescription
                     FROM tblitems INNER JOIN tblcollectiblebooks ON tblItems.itemid = tblcollectiblebooks.itemid
                     WHERE tblitems.itemid ='".$newId."'";
        $result = pg_query($dbconn, $nBookQuery);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
        
        
            echo "<h2>Book added as:</h2>";
            echo "<table class='browse'>
                    <tr>
                            <th>Item ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Language</th>
                            <th>Publish Date</th>
                            <th>Condition Grade</th>
                            <th>Acquisition Price</th>
                            <th>Price</th>
                            <th>In Stock</th>
                            <th>Condition Desc</th>
                            <th>Book Desc</th>
                        </tr>
                        <tr>
                            <td>".$newId."</td>
                            <td>".$title."</td>
                            <td>".$author."</td>
                            <td>".$language."</td>
                            <td>".$publishDate."</td>
                            <td>".$conditionGrade."</td>
                            <td>".$acquisitionPrice."</td>
                            <td>".$bookPrice."</td>
                            <td>".$inStock."</th>
                            <td>".$conditionDescription."</td>
                            <td>".$bookDescription."</td>
                        </tr>
                  </table>";
        }      
        else
        {
            echo "Failed to add record!";
        }
                    
?>
    
<?php
    include("./includes/footer.php");
?>