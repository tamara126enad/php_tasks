<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>PHP Function </title>
</head>
<body id="body1">
    
<h1>1.	Write a PHP script to check if the inserted number is a prime number </h1>

<form method='POST'>
   <h2>Enter number:</h2> 
 <input type="text" name="number" placeholder="Number">
 <input type="submit" value="Submit">
 </form>

<?php  
$num=$_POST['number']; 
function prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
// $num=$_POST['number']; 
$flag_val = prime($num);
if ($flag_val == 1)
echo "<h2>The Number ". $num . " is prime</h2>";
else
echo "<h2>The Number ". $num . " is not prime</h2>"; 


?> 

<hr id="line">

<h1>2.	Write a PHP script to reverse a string  </h1>

<form method='POST'>
   <h2>Enter Word:</h2> 
 <input type="text" name="word" placeholder="word">
 <input type="submit" value="Submit">
 </form>

 <?php


function Reverse($str2){
echo "<h2>  $str2  reverse is ";
for($i2=strlen($str2)-1, $j2=0; $j2<$i2; $i2--, $j2++)
{
$temp2 = $str2[$i2];
$str2[$i2] = $str2[$j2];
$str2[$j2] = $temp2;
}
return $str2;
}
$str2 =$_POST['word'];
echo (Reverse($str2));
echo "</h2>";
?>

<hr id="line">

<h1>3.	 Write a PHP script to check if the all string characters are lower cases  </h1>

<form method='POST'>
   <h2>Enter Char:</h2> 
 <input type="text" name="str" placeholder="word">
 <input type="submit" value="Submit">
 </form>

 <?php
$word =$_POST['str']; 
function lower($word){
   if (ctype_lower($word)) {
        echo "<h2>  $word is lowerCase </h2>";}
  else {
        echo "<h2> $word not lowerCase </h2>";}
}  

lower($word)

?>
<hr id="line">

<h1>4.	Write a PHP function to swap to variables?  </h1>

<form method='POST'>
   <h2>Enter Two Numbers:</h2> 
 <input type="text" name="n1" placeholder="Number"><br>
 <input type="text" name="n2" placeholder="Number"><br>
 <input type="submit" value="Submit">
 </form>

 <?php
$n1 =$_POST['n1']; 
$n2 =$_POST['n2']; 
function swap($n1, $n2){
echo "<h2>Before:  num1= ". $n1 . ', num2= ' . $n2 . "</h2>";
    $tmp=$n1;
    $n1=$n2;
    $n2=$tmp;
// }
echo "<h2>After:  num1= ". $n1 . ', num2=' . $n2. "</h2>";
}
swap($n1, $n2)
?>

<hr id="line">


<h1>5.	Write a PHP function to swap to variables?  </h1>
<h3>same  Q4</h3>
<hr id="line">


<h1>6.	Write a PHP function to check if a number is an Armstrong number or not ? </h1>

<form method='POST'>
   <h2>Enter  Number:</h2> 
 <input type="text" name="nn" placeholder="Number"><br>
 <input type="submit" value="Submit">
 </form>

<?php
$num=$_POST['nn']; 
function armstrong($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "<h2> $num is an Armstrong Number </h2>";
  } else {
    return "<h2> $num is not an Armstrong Number </h2>";
  }
}
echo armstrong($num);
?>
<hr id="line">

<h1>7.	Write a PHP function that checks whether a passed string is a palindrome or not? </h1>

<form method='POST'>
   <h2>Enter  String:</h2> 
 <input type="text" name="strr" placeholder="String">
 <input type="submit" value="Submit">
 </form>

 <?php
$string=$_POST['strr']; 

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        echo "<h2> $string is a palindrome </h2>";
    } else{
        echo "<h2> $string is NOT a palindrome </h2>"; 
    }
} 
 
Palindrome($string);

?>

<hr id="line">

<h1>8.	Write a PHP function to remove duplicates from an array ?  </h1>

<form method='POST'>
   <h2>Enter Numbers:</h2> 
 <input type="text" name="nn1" placeholder="Number1" style="width:65px; font-size:15px;">
 <input type="text" name="nn2" placeholder="Number2" style="width:65px; font-size:15px;">
 <input type="text" name="nn3" placeholder="Number3" style="width:65px; font-size:15px;">
 <input type="text" name="nn4" placeholder="Number4" style="width:65px; font-size:15px;">
 <input type="submit" value="Submit">
 </form>

<?php
// $arr1 = [$_POST['nn1'],$_POST['nn2']];    
// echo  $_POST['nn1']. $_POST['nn2'] ;


// function arr_unique($arr1) {
//   sort($arr1);
//   $curr = $arr1[0];
//   $uni_arr1[] = $arr1[0];
//   for($i=0; $i<count($arr1);$i++){
//       if($curr != $arr1[$i]) {
//         $uni_arr1[] = $arr1[$i];
//         $curr = $arr1[$i];
//       }
//   }
//    return $uni_arr;
// }
// arr_unique($arr1)
// $nn1=$_POST['nn1'];
// $nn2=$_POST['nn2'];
// $nn3=$_POST['nn3'];
// $nn4=$_POST['nn4'];
// $list = array($nn1, $nn2, $nn3, $nn4);
// $result = array_unique($list);
// echo($result);


$nn1=$_POST['nn1'];
$nn2=$_POST['nn2'];
$nn3=$_POST['nn3'];
$nn4=$_POST['nn4'];
function remove($nn1, $nn2, $nn3,$nn4){
$list = array($_POST['nn1'], $_POST['nn2'], $_POST['nn3'], $_POST['nn4']);
$result = array_unique($list);
echo "<h2>";
print_r($result);
echo "</h2>";
}
remove($nn1, $nn2, $nn3,$nn4);
?>



</body>
</html>