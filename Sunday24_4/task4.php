<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
<style>
body {background:#F7DAD9;text-align:center;}
h1 {color:blue;}
h2 {color:green;}
#h {color:#FF5F00;}
</style>
</head>
<body>

<h1> 4. Write a PHP script to get the client IP address.  </h1>


<?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "<h1 id='h'> Your IP Address is " . $ipaddress. "</h1>";
?>

</body>
</html>