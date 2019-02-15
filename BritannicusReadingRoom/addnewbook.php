<?php
    $pageTitle = "Add New Book- Britannicus Reading Room";
    include("./includes/header.php");
    
    $isbn = validateForm($_POST['isbn']);
    $title = validateForm($_POST['title']);
    $author = validateForm($_POST['author']);
    $publisher = validateForm($_POST['publisher']);
    $publishYear = validateForm($_POST['publishDateYear']);
    $publishMonth = validateForm($_POST['publishDateMonth']);
    $publishDay = validateForm($_POST['publishDateDay']);
    $bindingType = validateForm($_POST['bindingType']);
    $quantity = validateForm($_POST['quantity']);
    $price = validateForm($_POST['price']);
    $pricingDate = Date("Y-m-d");
    
    $publishDate = $publishYear . "-" . $publishMonth . "-" . $publishDay;
    
    $dbconn = db_connect();
    $query = "INSERT INTO tblitems (itemid,title, author, publishdate, price, pricingdate)";
    $query .= "VALUES('".$isbn."','".$title."','".$author."','".$publishDate."','".$price."','".$pricingDate."')";
    pg_query($dbconn, $query) or die("Failed to insert into tblitems! " .pg_last_error());
    
    $tblnewBookQuery = "INSERT INTO tblnewbooks(itemid, publisher, bindingtype, quantity)";
    $tblnewBookQuery .= "VALUES('".$isbn."','".$publisher."','".$bindingType."','".$quantity."')";
    pg_query($dbconn, $tblnewBookQuery) or die("Failed to insert into tblnewbooks!" .pg_last_error());
    
    
        $nBookQuery = "SELECT tblitems.itemid, tblitems.title, tblitems.author, tblnewbooks.publisher, tblitems.publishdate, tblnewbooks.bindingtype, tblnewbooks.quantity, tblitems.price 
                     FROM tblitems INNER JOIN tblnewbooks ON tblItems.itemid = tblnewbooks.itemid
                     WHERE tblitems.itemid ='".$isbn."'";
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
                            <th>Publisher</th>
                            <th>Publish Date</th>
                            <th>Binding Type</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>".$isbn."</td>
                            <td>".$title."</td>
                            <td>".$author."</td>
                            <td>".$publisher."</td>
                            <td>".$publishDate."</td>
                            <td>".$bindingType."</td>
                            <td>".$quantity."</td>
                            <td>".$price."</td>
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