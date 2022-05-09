<?php 		
echo "<body id='body3'><br><h2>How Are You Traveling?</h2>";

if (!isset($_POST['submit'])){
$travel=array("Automobile", "Jet", "Ferry", "Subway");
 
 echo "<p>Travel takes many forms, whether across town, across the country, or
 around the world. Here is a list of some common modes of transportation:</p>
<ul>";
 foreach ($travel as $t){
  echo "<li>$t</li>"; 
}
 echo "
</ul>
<form method='post' action=''>
<p>Please add your favorite, local, or even imaginary modes of travel 
to the list, separated by commas:</p>
<input type='text' name='added'>
<br>";
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\">";
}
echo '<br><input type="submit" name="submit" value="submit" >
</form>';
 
}else{
$travel=($_POST['travel']);
$added=explode(',',$_POST['added']);
array_splice($travel, count($travel), 0, $added);

 echo "<p>Here is the list with your additions:</p><ul>";
foreach($travel as $t){
  echo "<li>".trim($t)."</li>";  
}
echo'</ul>  <p>Add more?</p><form method="post" action="index1.php">
<input type="text" name="added">
<br>';
foreach ($travel as $t){
 echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\">";
}
echo'<br><input type="submit" name="submit" value="submit">
</form>';}
?>
<style><?php include '../../style.css'; ?> </style>