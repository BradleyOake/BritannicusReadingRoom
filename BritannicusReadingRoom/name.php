<html>
<head>
<title>Name</title>
<?php
    
   
    
    $username = "connor";
    $password = "reading";
    $salt = 2586340281;
    
    $saltedName = $password . $salt;
    $encrypt = md5($saltedName);
?>
</head>
<body>
<h2><?php echo $username . " " ;  echo $password . " "; echo $salt . " "; echo $saltedName . " "; ?></h2>
<h2><?php echo $encrypt; ?></h2>

</body>
</html>