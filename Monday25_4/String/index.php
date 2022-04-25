<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>PHP String </title>
</head>
<body id="body3">
    
<h1>1.	Write a PHP script to: </h1><h4>
a.	Convert the entered string to uppercase.<br>
b.	Convert the entered string to lowercase.<br>
c.	Make the first letter of the string uppercase.<br>
d.	Make the first letter of each word capitalized.</h4>

<form method='POST'>
   <h2>Enter Text:</h2> 
 <input type="text" name="str" placeholder="String">
 <input type="submit" value="Submit">
 </form>

<?php  
$word =$_POST['str']; 
echo "<h2>";
echo (strtoupper($word))."<br>";
echo (strtolower($word))."<br>";
echo (ucfirst($word))."<br>";
echo (ucwords($word))."<br>";
echo "</h2>";
?> 

<hr id="line">

<h1>2.	Write a PHP script splitting the following numeric string to be a date format.   </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
 <input type="text" name="num1" placeholder="Number">
 <input type="submit" value="Submit">
 </form>

 <?php
$num1 =$_POST['num1'];  
echo substr(chunk_split($num1, 2, ':'), 0, -1);
?>

<hr id="line">

<h1>3.	Write a PHP script to check whether the sentence contains a specific word.  </h1>

<form method='POST'>
   <h2>Enter Text:</h2> 
 <!-- <input type="text" name="str1" placeholder="test"> -->
 <textarea  name="txt" rows="3" cols="40"></textarea><br>
 <input type="text" name="str2" placeholder="Search"><br>
 <input type="submit" value="Submit">
 </form>

 <?php
$str1 = $_POST['txt'];
$str2 = $_POST['str2'];

if (strpos($str1,$str2) !== false) 
 {
    echo "<h2> $str2  is  Found !! </h2>"; 
 }
else
 {
    echo "<h2> $str2  don`t Found !! </h2>";
 }

?>
<hr id="line">

<h1>4.	Write a PHP script to extract the file name from the URL.   </h1>

<form method='POST'>
   <h2>Enter URL:</h2> 
 <input type="text" name="url" placeholder="www.orange.com/index.php"><br>
 <input type="submit" value="Submit">
 </form>

 <?php
$x =$_POST['url']; 
$file = basename($x); 
echo "<h2> $file  </h2>";
?>

<hr id="line">


<h1>5.	Write a PHP script to extract the username from the following email address.   </h1>
<form method='POST'>
   <h2>Enter Email:</h2> 
 <input type="text" name="name" placeholder="tamara@mail.com">
 <input type="submit" value="Submit">
 </form>

<?php
$y =$_POST['name']; 
$user = strstr($y, '@', true);
echo "<h2> $user </h2>";
?>

<hr id="line">


<h1>6.	Write a PHP script to get the last three characters from the string.  </h1>

<form method='POST'>
   <h2>Enter  String:</h2> 
 <input type="text" name="nn1" placeholder="string">
 <input type="submit" value="Submit">
 </form>



<?php
$str=$_POST['nn1']; 
echo "<h2>" . substr($str, -3). " </h2>";
?>

<hr id="line">

<h1>7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string.  </h1>

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

<h1>8.	Write a PHP script to replace the first word of the sentence with another word.  </h1>

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

<h1>9.	Write a PHP script to find the first character that is different between two strings.   </h1>

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

<h1>10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array.   </h1>

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


<h1> 11.	Write a PHP script to print the next letter of the inputted letter. </h1>

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

<h1>12.	Write a PHP script to insert a string at the specified position in a given string. </h1>

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

<h1>13.	Write a PHP script to remove zeroes from the given number.  </h1>

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

<h1>14.	Write a PHP script to remove part of a string.  </h1>

<form method='POST'>
   <h2> “ I never dreamed about success. I worked for it ” —Estée Lauder</h2> 
 <!-- <input type="text" name="txtt"  placeholder="Text"><br> -->
 <input type="text" name="txtt" placeholder="String">
 <input type="submit" value="Submit">
 </form>

<?php
$txtt=$_POST['txtt'];
$txt = ' “I never dreamed about success. I worked for it.” —Estée Lauder';
echo "<h2>" .str_replace($txtt, " ", $txt)."</h2>";
?>

<hr id="line">

<h1>15.	Write a PHP script to remove trailing dashes from a string.  </h1>

<!-- <form method='POST'> -->
   <!-- <h2>'Hello ------ , How are u today!!</h2>  -->
 <!-- <input type="text" name="txtt"  placeholder="Text"><br> -->
 <!-- <input type="text" name="txtt" placeholder="String"><br> -->
 <!-- <input type="submit" value="Submit"> -->
 <!-- </form> -->

<?php
$txt = 'Hello, How are u today!!!';
echo "<h2> $txt <br>";
echo rtrim($txt, '!') . "</h2>";
?>

<hr id="line">

<h1> 16.	Write a PHP script to remove Special characters from the following string. </h1>

<form method='POST'>
   <h2>Enter Text</h2> 
 <input type="text" name="text"  placeholder="Text">
 <!-- <input type="text" name="txtt" placeholder="String"><br> -->
 <input type="submit" value="Submit">
 </form>

<?php
$text=$_POST['text'];
echo "<h2>". str_replace(str_split('\\/:*?"<>|+- !'), ' ', $text)."</h2>";
?>

<hr id="line">


<h1> 17.	Write a PHP script to select first 5 words from the following string.  </h1>

<form method='POST'>
   <h2>Enter Text</h2> 
 <!-- <input type="text" name="txtt"  placeholder="Text"><br> -->
 <input type="text" name="txtt" placeholder="String">
 <input type="submit" value="Submit">
 </form>

<?php
$txtt=$_POST['txtt'];
echo "<h2>" . implode(' ', array_slice(explode(' ', $txtt), 0, 5))."</h2>";
?>

<hr id="line">


<h1>18.	Write a PHP script to remove comma(s) from the following numeric string. </h1>

<form method='POST'>
   <h2>Enter Text</h2> 
 <!-- <input type="text" name="txtt"  placeholder="Text"><br> -->
 <input type="text" name="txt" placeholder="Text">
 <input type="submit" value="Submit">
 </form>

<?php
$txt=$_POST['txt'];
$x = str_replace( ',', '', $txt);
if( is_numeric($x))
  {
    echo "<h2>" . $x  ."</h2>";
  }
  echo "<h2>" . $x  ."</h2>";
?>

<hr id="line">

<h1> 19.	Write a PHP script to print letters from 'a' to 'z'. </h1>

<form method='POST'>
   <h2>Enter String:</h2> 
 <input type="text" name="txtt"  placeholder="String"><br>
 <input type="text" name="txtt1" placeholder="String"><br>
 <input type="submit" value="Submit">
 </form>

<?php
$txtt=$_POST['txtt'];
$txtt1=$_POST['txtt1'];
for ($x = ord($txtt); $x <= ord($txtt1); $x++){
echo "<span>  " . chr($x) . "  </span>";
}
echo "<h2> from  <span>" . $txtt . " </span> to  <span>" .  $txtt1 ."</span> </h2>";
?>

<hr id="line">

</body>
</html>