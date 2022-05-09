<?php
$multiCity=array(
    array('City', 'Country', 'Continent'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);

echo "<body id='body8'><h1>Cities<br /></h1>
<table><thead><tr><th>" .
$multiCity[0][0] ."</th><th>" .
$multiCity[0][1] ."</th><th>" .
$multiCity[0][2] ."</th></tr></thead>";
 
$num = count($multiCity); 
for ($row=1; $row<$num; $row++){
    echo "<tr>";
    foreach ($multiCity[$row] as $value){
      echo "<td>$value</td>";
      }
     echo "</tr>";  
  }
  ?>

<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style> 
