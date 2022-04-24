<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
<style>
body {background:#F9F7F7;text-align:center;}
h1 {color:blue;}
h2 {color:green;}
#h {color:#FF5F00;}
</style>
</head>
<body>

<h1> 3.Create a simple HTML form and accept the user’s name and display the name through PHP echo statement.  </h1>



<form method='POST'>
   <h2>Please input your name:</h2> 
 <input type="text" name="name" placeholder="First name">
 <input type="text" name="lname" placeholder="Last name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$Name = $_POST['name'];
$lName = $_POST['lname'];
echo "<h1 id='h'> Hello ". $Name. " ". $lName . "</h1>";
?>



</body>
</html>