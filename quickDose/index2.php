<?php
echo "<body id='body3'><br><h1> Countries and Cities</h1>";
  $cities=array("Jordan" => "Amman",
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
  );
  if(!isset($_POST['submit'])){
echo '
<form method="post" action="">
<h1>Please choose a city:</h1>
<select name="city" style="width=100px">';
 

  foreach($cities as $c){
    echo "<option value=\"$c\">$c</option>";
  }

 echo '
</select> <br><br>
<input type="submit" name="submit" value="submit">
</form>';
 


  }else{
    $city=$_POST['city'];
    $country=array_search($city, $cities);
    echo "<h2>$city is in $country.</h2> <br> <h3><a href='index2.php'>Back</a></h3>";
  }
  ?>
  <style><?php include '../../style.css'; ?> 
select {
    margin-bottom: 15px;
    width: 20%;
    border-radius: 19px;
    padding: 10px;
}</style>