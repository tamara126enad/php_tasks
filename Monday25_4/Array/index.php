<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>PHP Array </title>
</head>
<body id="body8">
    
<h1>1.	Write a script to generate the following paragraph  </h1>
<p><h3>
    "The memory of that scene for me is like a frame of film forever frozen at that moment:<br>
    the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"<br>
    The words 'red', 'green' and 'white' should come from $colors array.</h3>
</p>

<!-- 
<form method='POST'>
   <h2>Enter Text:</h2> 
 <input type="text" name="str" placeholder="String">
 <input type="submit" value="Submit">
 </form> -->
<!-- $txt = "The memory of that scene for me is like a frame of film forever frozen at that moment:<br>
    the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
$index = 6;
$new_txt = substr_replace($txt, $txtt .' ', $index, 0);
echo "<h2>" . $new_txt  ."</h2>"; -->
<?php  
$color = array('white', 'green', 'red');
echo "<h2>The memory of that scene for me is like a frame of film forever frozen at that moment: the <span>$color[2]</span> carpet,<br>
      the <span>$color[1]</span> lawn, the <span>$color[0]</span> house, the leaden sky. The new president and his first lady.<br>
       - Richard M. Nixon</h2>";
?>

<hr id="line">

<h1>2. Write a PHP script that will display the colors as unordered list.</h1>

<form method='POST'>
   <h2>Enter colors:</h2> 
 <input type="text" name="col" placeholder="color"><br>
 <input type="text" name="col1" placeholder="color"><br>
 <input type="text" name="col2" placeholder="color"><br>
 <input type="submit" value="Submit">
 </form>

 <?php
$col =$_POST['col'];
$col1 =$_POST['col1'];  
$col2 =$_POST['col2'];  

echo "<h2><ul>";
echo "<li> $col  </li>";
echo "<li> $col1 </li>";
echo "<li> $col2 </li>";
echo "</ul></h2>";


?>

<hr id="line">

<h1>3. Create a PHP script to displays the capital and country name from the above array $cities. 
    Sort the list by the capital of the country. </h1>

<!-- <form method='POST'>
   <h2>Enter Text:</h2> 
  <input type="text" name="str1" placeholder="test"> 
 <textarea  name="txt" rows="3" cols="40"></textarea><br>
 <input type="text" name="str2" placeholder="Search"><br>
 <input type="submit" value="Submit">
 </form> -->

 <?php
// $str1 = $_POST['txt'];
// $str2 = $_POST['str2'];

$ceu = array("Italy"=>"Rome", 
"France" => "Paris",
"Germany" => "Berlin",
"United Kingdom"=>"London") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "<h3>The capital of $country is $capital </h3>" ;
}


?>
<hr id="line">

<h1>4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');<br>
Write a PHP script to display the first element of the above array. 
  </h1>
<!-- 
<form method='POST'>
   <h2>Enter URL:</h2> 
 <input type="text" name="url" placeholder="www.orange.com/index.php"><br>
 <input type="submit" value="Submit">
 </form> -->

 <?php
// $x =$_POST['url']; 
// $file = basename($x); 
// echo "<h2> $file  </h2>";

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo "<h2>". reset($color) ."</h2>";
?>

<hr id="line">


<h1>5.	Write a PHP script that inserts a specific new item in an array in any position.  </h1>
<!-- <form method='POST'>
   <h2>Enter Email:</h2> 
 <input type="text" name="name" placeholder="tamara@mail.com">
 <input type="submit" value="Submit">
 </form> -->

<?php
// $y =$_POST['name']; 
// $user = strstr($y, '@', true);
// echo "<h2> $user </h2>";

$original = array( '1','2','3','4','5' );
echo '<h2>Original array : ';
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : </h2>";
foreach ($original as $x) 
{echo " <span>$x </span>";}
?>

<hr id="line">


<h1>6.	Write a PHP script to sort the following associative array depending on the key value [asc] :   </h1>

<!-- <form method='POST'>
   <h2>Enter  String:</h2> 
 <input type="text" name="nn1" placeholder="string">
 <input type="submit" value="Submit">
 </form> -->



<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach($fruits as $y=>$y_value)
{
echo "<h2>the ordering of  ".$y." is : ".$y_value. "</h2>";
}


?>

<hr id="line">

<h1>7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures   </h1>

<form method='POST'>
   <h2>Enter  Strings:</h2> 
 <input type="text" name="strr" placeholder="String">
 <input type="submit" value="Submit">
 </form>

 <?php
$string=$_POST['strr']; 
$ps=6;
echo "<h2>" . substr(str_shuffle($string), 0, $ps) . "</h2>";

?>

<hr id="line">

<h1>8.	Write a PHP program to merge the following two arrays.   </h1>

<form method='POST'>
   <h2>Enter text:</h2> 
 <input type="text" name="txt" placeholder="That new trainee is so genius"><br>
 <input type="text" name="txt1" placeholder="Fine"><br>
 <input type="text" name="txt2" placeholder="Replace"><br>
 <input type="submit" value="Submit">
 </form>

<?php
$txt=$_POST['txt'];
// $txt1=$_POST['txt1'];
// $txt2=$_POST['txt2'];
echo "<h2>" . preg_replace( $_POST['txt1'] , $_POST['txt2'], $txt, 1)."</h2>";

?>

<hr id="line">

<h1>9.	Write a PHP function to change the following array's and convert all the strings to upper case.    </h1>

<form method='POST'>
   <h2>Enter String:</h2> 
 <input type="text" name="txtt"  placeholder="String"><br>
 <input type="text" name="txtt1" placeholder="String"><br>
 <input type="submit" value="Submit">
 </form>

<?php
$txtt=$_POST['txtt'];
$txtt1=$_POST['txtt1'];
echo "<h3>" . $txtt . " VS " .  $txtt1 ."</h3>";
$str_pos = strspn($txtt ^ $txtt1, "\0");
echo "<h2> position # :<span> $str_pos </span>  char 1: <span>$txtt[$str_pos]</span>   VS   char2: <span>$txtt1[$str_pos]</span> </h2> ";
?>
<hr id="line">

<h1>10.	Write a PHP function to change the following array's and convert all the strings to lower case.    </h1>

<form method='POST'>
   <h2>Enter String:</h2> 
 <input type="text" name="txtt"  placeholder="String">
 <input type="submit" value="Submit">
 </form>

<?php
$txtt=$_POST['txtt'];
$array = explode("<b>", $txtt);
echo "<h2>" ;
echo var_dump($array) ;
echo "</h2>";

?>

<hr id="line">


<h1> 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.  </h1>

<form method='POST'>
   <h2>Enter Char:</h2> 
 <input type="text" name="char"  placeholder="Char">
 <input type="submit" value="Submit">
 </form>

<?php
$ch=$_POST['char'];
$nextCh = ++$ch; 
if (strlen($nextCh) > 1) 
{
 $nextCh = $nextCh[0];
 }
echo "<h2> $nextCh  </h2>";
?>

<hr id="line">

<h1>12.	Write a PHP script to get the shortest/longest string length from an array.  </h1>

<form method='POST'>
   <h2>Hello ------ , How are u today!!</h2> 
 <!-- <input type="text" name="txtt"  placeholder="Text"><br> -->
 <input type="text" name="txtt" placeholder="String">
 <input type="submit" value="Submit">
 </form>

<?php
$txtt=$_POST['txtt'];
$txt = 'Hello , How are u today!!';
$index = 6;
$new_txt = substr_replace($txt, $txtt .' ', $index, 0);
echo "<h2>" . $new_txt  ."</h2>";
 
?>

<hr id="line">

<h1>13.	Write a PHP script to generate unique random 10 numbers within a specific range.   </h1>

<form method='POST'>
   <h2>Enter Numbers</h2> 
 <!-- <input type="text" name="txtt"  placeholder="Text"><br> -->
 <input type="text" name="txtt" placeholder="Numbers">
 <input type="submit" value="Submit">
 </form>

<?php
$txt=$_POST['txtt'];
$str1 = ltrim($txt, '0');
echo "<h2>  $str1 </h2>";
?>

<hr id="line">

<h1>14.	Write a PHP script that returns the lowest integer in the array  that is not 0.   </h1>

<!-- <form method='POST'>
   <h2> “ I never dreamed about success. I worked for it ” —Estée Lauder</h2> 
 <!-- <input type="text" name="txtt"  placeholder="Text"><br> -->
 <input type="text" name="txtt" placeholder="String">
 <input type="submit" value="Submit">
 </form> -->

<?php
$txtt=$_POST['txtt'];
$txt = ' “I never dreamed about success. I worked for it.” —Estée Lauder';
echo "<h2>" .str_replace($txtt, " ", $txt)."</h2>";
?>

<hr id="line">

</body>
</html>