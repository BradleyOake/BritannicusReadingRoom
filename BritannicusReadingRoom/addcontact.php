<?php
    $pageTitle = "Add Contact - Britannicus Reading Room";
    include("./includes/header.php");
    $dbconn = db_connect();
    
    $type = validateForm($_POST['clientType']);
    $name = validateForm($_POST['clientName']);
    $phone = validateForm($_POST['clientPhoneNumber']);
    $email = validateForm($_POST['clientEmail']);
    $address = validateForm($_POST['clientAddress']);
    
    if($type == "Client")
    {
        $newId = "select substring(clientid,2,4) from tblclients where clientid like 'C%' ORDER BY cast(substring(clientid,2,4) AS INTEGER) DESC limit 1";
        $results = pg_query($dbconn, $newId);
        $value = pg_fetch_result($results, 0, 0);
        $id = substr($value, 1);
        $id += 1;
        $newId = "C00" . $id;

   }
    else if($type == "Dealer")
    {
        $newId = "select substring(clientid,2,4) from tblclients where clientid like 'D%' ORDER BY cast(substring(clientid,2,4) AS INTEGER) DESC limit 1";
        $results = pg_query($dbconn, $newId);
        $value = pg_fetch_result($results, 0, 0);
        $id = substr($value, 1);
        $id += 1;
        $newId = "D00" . $id;   
    }
    
    
    $query = "INSERT INTO tblclients (clientid, clientname, clientphonenumber, clientemail, clientaddress)";
    $query .= "VALUES('".$newId."','".$name."','".$phone."','".$email."','".$address."')";
    pg_query($dbconn, $query) or die("Failed to insert into tblclients! " .pg_last_error());    
    
        $nBookQuery = "SELECT * FROM tblclients where clientid = '".$newId."'";
        $result = pg_query($dbconn, $nBookQuery);
        $records = pg_num_rows($result);
        
        if($records > 0)
        {
        
        
            echo "<h2>Contact added as:</h2>";
            echo "<table class='browse'>
                    <tr>
                            <th>Client ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                        <tr>
                            <td>".$newId."</td>
                            <td>".$name."</td>
                            <td>".$phone."</td>
                            <td>".$email."</td>
                            <td>".$address."</td>

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