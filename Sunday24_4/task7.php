<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 7</title>
<style>
body {background:#F7DAD9; text-align:center;}
h1 {color:#000;}
h2 {color:green;}
#h {color:#FF5F00;}
span{color: red;}
span:hover{ font-size:50px;}
</style>
</head>
<body>

<h1> 7. Write a PHP script, which changes the color of the first character of a word.<br>
Sample string: PHP Tutorial.  </h1>



<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span>\1</span>',$text);
echo "<h1>".$text ."</h1>" ;
?>



</body>
</html>