<?php
    include("./header.php");
    
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        //if user is not logged in
        if($_SESSION['loggedIn'] != true)
        {
           //direct user to the logn page
            header('Location: login.php');
				
        }
        $dbconn = db_connect();
        $set = '';
        $query = '';
        
        $isbn = ''; //new books
        $itemid = '';
        $title = ''; //all
        $titleSet = '';
        $author = ''; //books
        $authorSet = '';
        $publisher = ''; //all 
        $publisherSet = '';
        $publishDate = ''; //new books
        $publishDateSet = '';
        $bindingType = ''; //books
        $bindingTypeSet = '';
        $quantity = ''; //all 
        $quantitySet = '';
        $price = ''; //all 
        $priceSet = '';
        
        $wishlistId = ''; //wishlist 
        $wishlistIdSet = '';
        $clientId = '';
        $clientIdSet = '';
        $itemType = ''; //wishlist 
        $itemTypeSet = '';
        $notes = ''; //wishlist 
        $notesSet = '';
        $dateRequested = ''; //wishlist 
        $dateRequestedSet = '';
        $error = '';
        header('Location: searchinventory.php')
    }
    else if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $dbconn = db_connect();
        $type = validateForm($_POST['type']);
        $set = false;
        $query = "SELECT tblitems.itemid ";
        
        if($type == 'c')
        {
            
        }
        else if($type == 'n')
        {
            $isbn = validateForm($_POST['isbn']);
            $title = validateForm($_POST['title']);
            $author = validateForm($_POST['author']);
            $publisher = validateForm($_POST['publisher']);
            $publishDate = validateForm($_POST['publishDate']);
            $bindingType = validateForm($_POST['bindingType']);
            $quantity = validateForm($_POST['quantity']);
            $price = validateForm($_POST['price']);
            
            if(empty($isbn))
            {
                $error .= "You must select an ISBN";
            }
            else
            {         
                if(!empty($title))
                {   
                    $query .= ", tblitems.title ";
                    $titleSet = true;
                }
                if(!empty($author))
                {
                    $query .= ", tblitems.author ";
                    $authorSet = true;
                }
                if(!empty($publisher))
                {
                    $query .= ", tblnewbooks.publisher "
                    $publisherSet = true;
                }
                if(!empty($publishdate))
                {
                    $query .= ", tblitems.publishdate "
                    $publishDateSet = true;
                }
                if(!empty($bindingType))
                {
                    $query .= ", tblnewbooks.bindingtype "
                    $bindingTypeSet = true;
                }
                if(!empty($quantity))
                {
                    $query .= ", tblnewbooks.quantity "
                    $quantitySet = true;
                }
                if(!empty($price))
                {
                    $query .= ", tblitems.price "
                    $priceSet = true;
                }
                
                    $query .= "FROM tblitems INNER JOIN tblnewbooks ON tblItems.itemid = tblnewbooks.itemid "
                    $query .= "WHERE tblitems.itemid = '" .$isbn. "'";
                    $query .= ($titleSet == TRUE ? "AND tblitems.title = '" .$title."' " : '');
                    $query .= ($authorSet == TRUE ? "AND tblitems.author = '" .$author."'" : '');
                    $query .= ($publisherSet == TRUE ? "AND tblnewbooks.publisher = '" .$publisher."'" : '');
                    $query .= ($publishDateSet == TRUE ? "AND tblitems.publishdate = '" .$publishDate. "'" : '');
                    $query .= ($bindingTypeSet == TRUE ? "AND tblnewbooks.bindingtype = '" .$bindingType. "'" : '');
                    $query .= ($quantitySet == TRUE ? "AND tblnewbooks.quantity = '" .$quantity. "'" : '');
                    $query .= ($priceSet == TRUE ? "AND tblitems.price = '" .$price. "'" : '');
                    
                    $results = pg_query($dbconn, $query);
                    $records = pg_num_rows($results);
                    if($records > 0)
                    {
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
                        </tr>";
                    
                        while($row = pg_fetch_assoc($result))
                        {
                            echo"<tr>";
                            echo"<td>".$row['itemid']."</td>";
                            echo"<td>".$row['title']."</td>";
                            echo"<td>".$row['author']."</td>";
                            echo"<td>".$row['publisher']."</td>";
                            echo"<td>".$row['publishdate']."</td>";
                            echo"<td>".$row['bindingtype']."</td>";
                            echo"<td>".$row['quantity']."</td>";
                            echo"<td>$".$row['price']."</td>";
                            echo"</tr>";
                        }
                        echo"</table>";
                    }
                    else
                    {
                        $error = "No items matched your search";
                    }
                    
            }
        }
        else if($type == 'm')
        {
        }
        else if($type == 'w')
        {
        }
        else
        {   
            $error = "You must select an item type";
        }
    }

?>

<?php include("./footer.php"); ?>