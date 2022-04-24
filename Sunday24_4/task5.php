<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
<style>
body {background:#FBF8F1;text-align:center;}
h1 {color:blue;}
h2 {color:green;}
#h {color:#FF5F00;}
span{color:#000;}
</style>
</head>
<body>

<h1> 5.Write a PHP script to get the current file name. </h1>



<?php 
    
// To Get the Current Filename.
$currentPage= $_SERVER['SCRIPT_NAME'];
  
// To Get the directory name in 
// which file is stored.
$currentPage = substr($currentPage, 1);
  
// To Show the Current Filename on Page.
echo "<h1 id='h'> <span> The file Path is :</span>  ". $currentPage . "</h1>"; 
  
?>



</body>
</html>