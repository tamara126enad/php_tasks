<?php 
echo "<body id='body1'><br><h1>Days of the Week</h1>";
#!empty($day = $_POST["dd"];)
if (!isset($_POST['submit'])){
 echo '<form method="post" action="">
<h2>Please enter a day of the week: </h2><br>
<input type="text" name="dd" required>
<input type="submit" name="submit" value="submit" >
</form>';
 }
else
{$day =strtolower($_POST['dd']);
if ($day == 'monday'){
  echo "<h2>Laugh on Monday, laugh for danger.</h2><br><h4><a href='index3.php'>Back</a></h4>";
} elseif ($day == 'tuesday'){
  echo "<h2>Laugh on Tuesday, kiss a stranger.</h2><br><h4><a href='index3.php'>Back</a></h4>";
} elseif ($day == 'wednesday'){
  echo "<h2>Laugh on Wednesday, laugh for a letter.</h2><br><h4><a href='index3.php'>Back</a></h4>";
} elseif ($day == 'thursday'){
  echo "<h2>Laugh on Thursday, something better.</h2><br><h4><a href='index3.php'>Back</a></h4>";
} elseif ($day == 'friday' ){
  echo "<h2>Laugh on Friday, laugh for sorrow.</h2><br><h4><a href='index3.php'>Back</a></h4>";
} elseif ($day == 'saturday'){
  echo "<h2>Laugh on Saturday, joy tomorrow.</h2><br><h4><a href='index3.php'>Back</a></h4>";
} else {echo "No thing to do.";
}}?>
<style><?php include '../style.css'; ?> </style>