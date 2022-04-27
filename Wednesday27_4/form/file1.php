<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title> PHP Super Global Variables </title>
</head>
<body id="body3">

<?php
session_start();
$y= $_SESSION['mail']=$_POST['mail'];
$_SESSION['pass']=$_POST['pass'];

$user = strstr($y, '@', true);
echo "<h1> Welcome  $user </h1>";
echo "<span> First</span>";
echo "<h3> “Develop success from failures. Discouragement and failure are two of the surest stepping stones to success.” —Dale Carnegie</h3>";
echo '   <form action="file2.php" method="post"> <input type="submit" value="Next"> </form>';
?>





</body>
</html>