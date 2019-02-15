<?php 

header("Content-type: text/xml"); 

$host = "localhost"; 
$user = "connor"; 
$pass = "reading"; 
$database = "test"; 

$linkID = pg_connect("host=localhost dbname=$database user=test password=test ");
//$linkID = pg_connect($host, $user, $pass) or die("Could not connect to host."); 
//pg_select_db($database, $linkID) or die("Could not find database."); 

$query = "SELECT * FROM blog ORDER BY date DESC"; 
$resultID = pg_query($linkID, $query) or die("Data not found."); 
$records = pg_num_rows($resultID);

$xml_output = "<?xml version=\"1.0\"?>\n"; 
$xml_output .= "<entries>\n"; 

for($x = 0 ; $x < $records ; $x++){ 
    $row = pg_fetch_assoc($resultID); 
    $xml_output .= "\t<entry>\n"; 
    $xml_output .= "\t\t<date>" . $row['date'] . "</date>\n"; 
    $xml_output .= "\t\t<text>" . $row['text'] . "</text>\n"; 
    $xml_output .= "\t</entry>\n"; 
} 

$xml_output .= "</entries>"; 

echo $xml_output; 

$myFile = "entries.xml";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $xml_output);
fclose($fh);

?>
