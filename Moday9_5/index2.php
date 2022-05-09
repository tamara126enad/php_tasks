<?php

echo "<body id='body2'> <h1>Favorite City</h1>";
if (!isset($_POST['submit'])){
echo " <form method='post' action=''>
Please enter your favorite city:<br>
<input type='text' name='city'required>
<input type='submit' name='submit' value='submit'>
</form>";
}else{
$city = $_POST['city'];
echo "<h2>Your favorite city is $city</h2>";
}
?>
<style><?php include '../style.css'; ?> </style>