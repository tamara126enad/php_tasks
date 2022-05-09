<?php 
echo "<body id='body7'><br><h1>Days of the Week</h1>";
#!empty($day = $_POST["dd"];)
if (!isset($_POST['submit'])){
 echo '<form method="post" action="">
<h2>Please enter a day of the week: </h2><br>
<input type="text" name="dd" required>
<input type="submit" name="submit" value="submit" >
</form>';
 }
else
{$day = strtolower($_POST['dd']);
    switch($day){
      case 'monday':
        echo "<h2>Laugh on Monday, laugh for danger.</h2> <br><h4><a href='index4.php'>Back</a></h4>";
        break;
      case 'tuesday':
        echo "<h2>Laugh on Tuesday, kiss a stranger.</h2> <br><h4><a href='index4.php'>Back</a></h4>";
        break;
      case 'wednesday':
        echo "<h2>Laugh on Wednesday, laugh for a letter. <br><h4><a href='index4.php'>Back</a></h4>";
        break;
      case 'thursday':
        echo "<h2>Laugh on Thursday, something better.</h2> <br><h4><a href='index4.php'>Back</a></h4>";
        break;
      case 'friday':
       echo "<h2>Laugh on Friday, laugh for sorrow.</h2> <br><h4><a href='index4.php'>Back</a></h4>";
        break;
      case 'saturday':
        echo "<h2>Laugh on Saturday, joy tomorrow.</h2> <br><h4><a href='index4.php'>Back</a></h4>";
        break;
      default:
        echo "No thing to do. <br><h4><a href='index3.php'>Back</a></h4>";
        break; 
}
}
?>
<style><?php include '../style.css'; ?> </style>