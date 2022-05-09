<?php
echo "<body id='body3'> <h1>Favorite City</h1>";
$city = $_POST['city'];
echo "<h2>Your favorite city is $city</h2>";
echo '<form action="index1.html" method="post"> <input type="submit" value="Home"> </form>';
?>
<style><?php include '../style.css'; ?> </style>