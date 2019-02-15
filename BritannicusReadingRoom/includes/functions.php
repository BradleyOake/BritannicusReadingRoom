<?php
    //This is the function is used to validate form input
    //Example usage: $password = validateForm($_POST["password"];
    function validateForm($data)
    {
        $data = trim($data); //remove unnecessary whitespace and newlines
        $data = stripslashes($data); //remove all backslashes (\) from the input
        $data = htmlspecialchars($data, ENT_QUOTES); //turns symbols such as > to their code instead ie: &lt;
        return $data; //return validated input
    }
    
    function db_connect()
    {
        $host = 'localhost';
        $dbName = DB_NAME;
        $dbUser = DB_USER;
        $dbPassword = DB_PASSWORD;
        return (pg_connect("host=$host dbname=$dbName user=$dbUser password=$dbPassword"));
    }
    
    function randomString()
    {
        $character_set_array = array();
        $character_set_array[] = array('count' => 7, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
        $character_set_array[] = array('count' => 1, 'characters' => '0123456789');
        $temp_array = array();
        foreach ($character_set_array as $character_set) {
            for ($i = 0; $i < $character_set['count']; $i++) {
                $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
            }
        }
        shuffle($temp_array);
        return implode('', $temp_array);
    }
    
    function listMaps()
    {   
        $dbconn = db_connect();
        $mapQuery = "SELECT * FROM tblItems WHERE itemid LIKE 'M%' ORDER BY itemid ASC";
        $result = pg_query($dbconn, $mapQuery);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
            echo "<table class='browse'>
                    <tr>
                        <th>Item ID</th>
                        <th>Title</th>
                        <th>Cartographer</th>
                        <th>Date</th>
                        <th>Price</th>
                    </tr>";
                    
            while($row = pg_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td>".$row['itemid']."</td>";
                echo"<td>".$row['title']."</td>";
                echo"<td>".$row['author']."</td>";
                echo"<td>".$row['publishdate']."</td>";
                echo"<td>$".$row['price']."</td>";
                echo"</tr>";
            }
            echo"</table>";
        }
        else
        {   
            echo"No records to show";
        }
       
    }
    
    function listCollectibleBooks()
    {   
        $dbconn = db_connect();
        $cBookQuery = "SELECT tblitems.itemid, tblitems.title, tblitems.author, tblitems.publishdate,
                        tblitems.price, tblitems.pricingdate, tblcollectiblebooks.booklanguage, tblcollectiblebooks.conditiongrade,
                        tblcollectiblebooks.acquisitionprice, tblcollectiblebooks.instock, tblcollectiblebooks.conditiondescription, tblcollectiblebooks.bookdescription
                        FROM tblitems INNER JOIN tblcollectiblebooks on tblitems.itemid = tblcollectiblebooks.itemid
                        WHERE tblitems.itemid LIKE 'B%' AND tblcollectiblebooks.instock = TRUE ORDER BY itemid ASC";
        $result = pg_query($dbconn, $cBookQuery);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
            echo "<table class='browse'>
                    <tr>
                        <th>Item ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Acquisition Price</th>
                        <th>Condition Grade</th>
                        <th>Delete</th>
                    </tr>";
                    
            while($row = pg_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td><a href='../displaycollectiblebook.php?itemid=".$row['itemid']."'>".$row['itemid']."</a></td>";
                echo"<td>".$row['title']."</td>";
                echo"<td>".$row['author']."</td>";
                echo"<td>$".$row['price']."</td>";
                echo"<td>$".$row['acquisitionprice']."</td>";
                echo"<td>".$row['conditiongrade']."</td>";
                echo"<td><a href='../deletecollectiblebook.php?itemid=".$row['itemid']."'>Delete</a></td>";
                echo"</tr>";
            }
            echo"</table>";
        }
        else
        {   
            echo"No records to show";
        }
       
    }
    
    function listNewBooks()
    {   
        $dbconn = db_connect();
        $nBookQuery = "SELECT tblitems.itemid, tblitems.title, tblitems.author, tblnewbooks.publisher, tblitems.publishdate, tblnewbooks.bindingtype, tblnewbooks.quantity, tblitems.price 
                     FROM tblitems INNER JOIN tblnewbooks ON tblItems.itemid = tblnewbooks.itemid
                     WHERE tblitems.itemid ~ '^[0-9]' ORDER BY tblItems.itemid ASC";
        $result = pg_query($dbconn, $nBookQuery);
        $records = pg_num_rows($result);
        
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
                        <th>Delete</th>
                    </tr>";
                    
            while($row = pg_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td><a href='../displaynewbook.php?itemid=".$row['itemid']."'>".$row['itemid']."</a></td>";
                echo"<td>".$row['title']."</td>";
                echo"<td>".$row['author']."</td>";
                echo"<td>".$row['publisher']."</td>";
                echo"<td>".$row['publishdate']."</td>";
                echo"<td>".$row['bindingtype']."</td>";
                echo"<td>".$row['quantity']."</td>";
                echo"<td>$".$row['price']."</td>";
                echo"<td><a href='../deletenewbook.php?itemid=".$row['itemid']."'>Delete</a></td>";
                echo"</tr>";
            }
            echo"</table>";
        }
        else
        {   
            echo"No records to show";
        }
       
    }
    
    function listClients()
    {
        $dbconn = db_connect();
        $clientQuery = "select * from tblclients where clientid like 'C%' ORDER BY cast(substring(clientid,2,4) AS INTEGER) ASC";
                        #SELECT * FROM tblclients WHERE clientid LIKE 'C%' ORDER BY clientid ASC
        $result = pg_query($dbconn, $clientQuery);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
            echo "<table class='browse'>
                    <tr>
                        <th>Client ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>";
                    
            while($row = pg_fetch_assoc($result))
            {
                $phoneNumber = "(".substr($row['clientphonenumber'], 0, 3).") "
                .substr($row['clientphonenumber'], 3, 3)."-"
                .substr($row['clientphonenumber'],6);
                echo"<tr>";
                echo"<td>".$row['clientid']."</td>";
                echo"<td>".$row['clientname']."</td>";
                echo"<td>".$phoneNumber."</td>";
                echo"<td>".$row['clientemail']."</td>";
                echo"<td>".$row['clientaddress']."</td>";
                echo"</tr>";
            }
            echo"</table>";
        }
        else
        {   
            echo"No records to show";
        }
    }
    
    function listDealers()
    {
        $dbconn = db_connect();
        $dealerQuery = "SELECT * FROM tblclients WHERE clientid LIKE 'D%' ORDER BY clientid ASC";
        $result = pg_query($dbconn, $dealerQuery);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
            echo "<table class='browse'>
                    <tr>
                        <th>Client ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>";
                    
            while($row = pg_fetch_assoc($result))
            {
                $phoneNumber = "(".substr($row['clientphonenumber'], 0, 3).") "
                .substr($row['clientphonenumber'], 3, 3)."-"
                .substr($row['clientphonenumber'],6);
                echo"<tr>";
                echo"<td>".$row['clientid']."</td>";
                echo"<td>".$row['clientname']."</td>";
                echo"<td>".$phoneNumber."</td>";
                echo"<td>".$row['clientemail']."</td>";
                echo"<td>".$row['clientaddress']."</td>";
                echo"</tr>";
            }
            echo"</table>";
        }
        else
        {   
            echo"No records to show";
        }
    }
    
    function conditionList($name)
    {
        $dbconn = db_connect();
        $query = "SELECT * FROM tblconditions";
        $result = pg_query($dbconn, $query);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
            echo "<select name='".$name."' id='".$name."'>";
			
			echo "<option value=''>Select a Condition</option>";
            
            while($row = pg_fetch_assoc($result))
            {
                echo "<option value='".$row['grade']."'>".$row['conditionname']."</option>";
            }
            echo "</select>";

        }
    }
    
    function clientList($name)
    {
        $dbconn = db_connect();
        $query = "SELECT ClientId, ClientName FROM tblClients WHERE (ClientId LIKE 'C%') ORDER BY ClientName";
        $result = pg_query($dbconn, $query);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
            echo "<select name='".$name."' id='".$name."'>";
			
			echo "<option value=''>Select a Client</option>";
            
            while($row = pg_fetch_assoc($result))
            {
                echo "<option value='".$row['clientid']."'>".$row['clientname']."</option>";
            }
            echo "</select>";

        }
    }
?>