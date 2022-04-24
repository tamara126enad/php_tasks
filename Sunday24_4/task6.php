<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
<style>
body {background:#F9F7F7;  text-align:center; }
h1 {color:blue;}
h2 {color:green;}
#h {color:#FF5F00;}
span{color:#000;}
</style>
</head>
<body>

<h1> 6. Write a PHP script, which will return the following components of the URL  https://www.w3schools.com/php/default.asp. </h1>



<?php
$url = 'https://www.w3schools.com/php/default.asp.';
$url=parse_url($url);
echo "<h2 id='h'>";
echo '<span> Scheme : </span>'.$url['scheme']."<br>";
echo '<span> Host :   </span>'.$url['host']."<br>";
echo '<span> Path :   </span>'.$url['path']."<br>";
echo "</h2>";
?>



</body>
</html>