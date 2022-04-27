<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title> PHP Super Global Variables </title>
</head>
<body id="body2">

<?php
session_start();
$y= $_SESSION['mail'];
$user = strstr($y, '@', true);
echo "<h1> Welcome  $user </h1>";
echo "<span>Secound</span>";
echo "<h3> “Success usually comes to those who are too busy looking for it.” — Henry David Thoreau</h3>";
echo '<form action="form.php" method="post"> <input type="submit" value="Home"> </form>';
?>

</body>
</html>