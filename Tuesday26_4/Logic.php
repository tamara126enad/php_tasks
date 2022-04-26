<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title> Logical Statements and Operators </title>
</head>
<body id="body5">
    
<h1>1.	Write a PHP script to see if the specified year is a leap year or not. </h1>

<form method='POST'>
   <h2>Enter Year:</h2> 
 <input type="text" name="yy" placeholder="Year">
 <input type="submit" value="Submit">
 </form>

<?php  
$year=$_POST['yy'];
  function year_check($year){
    if ($year % 400 == 0)
       echo"<h2> $year It is a leap year</h2>";
    else if ($year % 100 == 0)
       echo "<h2> $year It is not a leap year</h2>";
    else if ($year % 4 == 0)
       echo "<h2>$year It is a leap year</h2>";
    else
       echo "<h2> $year It is not a leap year</h2>";
 }
 year_check($year);
?>

<hr id="line">

<h1>2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20,
     we are in winter otherwise the season is summer.</h1>

<form method='POST'>
   <h2>Enter tempreture:</h2> 
 <input type="text" name="tem" placeholder="tempreture">
 <input type="submit" value="Submit">
 </form>

 <?php
$tem =$_POST['tem'];
if ($tem<=20){
 echo "<h2> It`s Winter Season <b style='color:blue;'> &#10052;</b></h2>";
}else {
    echo "<br><Span> It`s Summer Season <b style='color:orange;'> &#x2600; </b></span>";
}
?>

<hr id="line">

<h1>3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum. </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="n1" placeholder="Number1"><br>
 <input type="text" name="n2" placeholder="Number2"><br>
 <input type="submit" value="Submit">
 </form>

 <?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
if ($n1 == $n2 ){
// echo "<h2> $n1 + $n2 = ". $n1 + $n2." </h2>" ;
echo "<h2>( $n1 + $n2  ) * 3 = ";
echo ($n1+$n2)*3 ;
echo " </h2>" ;
}else{
    echo "<h2> $n1 not equal $n2 </h2>" ;
}

?>
<hr id="line">

<h1>4.	Write PHP to check if the sum of the two given numbers equals 30,
     if the condition is true the return their sum otherwise return false 
  </h1>

  <form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="n1" placeholder="Number1"><br>
 <input type="text" name="n2" placeholder="Number2"><br>
 <input type="submit" value="Submit">
 </form>

 <?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
if ($n1+ $n2 == 30 ){
// echo "<h2> $n1 + $n2 = ". $n1 + $n2." </h2>" ;
echo "<h2> $n1 + $n2   = ";
echo $n1+$n2 ;
echo " </h2>" ;
}else{
    echo "<h2> $n1 + $n2 not equal 30 </h2>" ;
}

?>
<hr id="line">


<h1>5.	Write in PHP script to check if the given positive number is a multiple of 3. </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="n1" placeholder="Number1">
 <input type="submit" value="Submit">
 </form>

<?php
$n =$_POST['n1']; 
if ($n > 0 ){
    if ($n %3 == 0){
        echo "<h2> $n % 3 =";
        echo  $n %3 ;
        echo "    (ture) </h2>";
    } else {
        echo "<h2> $n  multiple of 3 not equal 0   (flase) </h2> ";}  
} else {
    echo "<h2> $n  not positive number </h2>";
}

?>

<hr id="line">


<h1>6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.   </h1>

<form method='POST'>
   <h2>Enter  Number:</h2> 
 <input type="text" name="nn1" placeholder="number">
 <input type="submit" value="Submit">
 </form>

<?php
$n =$_POST['nn1'];
if ($n >=20 && $n <=50 )
{ echo "<h2> $n  in the range of [20-50] inclusive </h2>";
} else {
    echo "<h2> $n  NOT in the range of [20-50] </h2>";
}

?>

<hr id="line">

<h1>7.	Write PHP script to find the largest number between the three integers  </h1>

<form method='POST'>
   <h2>Enter  number:</h2> 
 <input type="text" name="n" placeholder="number1" style="width:65px; font-size:15px;">
  <input type="text" name="n1" placeholder="number2" style="width:65px; font-size:15px;">
   <input type="text" name="n2" placeholder="number3" style="width:65px; font-size:15px;">
 <input type="submit" value="Submit">
 </form>

 <?php
$n =$_POST['n'];
$n1 =$_POST['n1'];
$n2 =$_POST['n2'];

// $larg = $n ;
if ($n > $n1 && $n > $n2  )
{ echo "<h2>num1 :   $n  is large than $n1 and $n2 </h2>";
} elseif ($n1 > $n && $n1 > $n2 ) {
    echo "<h2>num 2:  $n1  is large than $n and $n2 </h2>";
}else {
    echo "<h2>num 3: $n2  is large than $n and $n1 </h2>";
}

?>

<hr id="line">

<h1>8.	Write PHP script to calculate the monthly electricity bill according to these rules  </h1>
<h3>a.	For first 50 units - 2.50 JOD/Unit<br>
    b.	For next 100 units - 5.00 JOD/Unitt<br>
    c.	For next 100 units - 6.20 JOD/Unitt<br>
    d.	For units above 250 - 7.50 JOD/Unitt
</h3>

<form method='POST'>
   <h2>Enter  unit:</h2> 
 <input type="text" name="n" placeholder="unit">
 <input type="submit" value="Submit">
 </form>

 <?php
$n =$_POST['n'];
$f=2.50;
$s=5.00;
$t=6.20;
$o=7.50;

if ($n <=50 )
{ echo "<h2>  The Bill: $n* $f = ".$n* $f ."</h2>";
} elseif ( $n >50 && $n <=100 ) {
    echo "<h2>  The Bill: $n* $s = ".$n* $s ."</h2>";
}elseif ( $n >=101 && $n <=249 ) {
    echo "<h2>  The Bill: $n* $t = ".$n* $t ."</h2>";
}else {
    echo "<h2>  The Bill: $n* $o = ".$n* $o ."</h2>";
}

?>

<hr id="line">

<h1>9.	 Write php script to make a calculator, the calculator should contain the four main operations  </h1>

<form method='POST'>
   <h2>Enter String:</h2> 
 <input type="text" name="txtt"  placeholder="Number 1"><br>
 <input type="text" name="txtt1" placeholder="Number 2"><br> 
 <!-- <div>
 <input type="submit" name="opA" value=" + ">
 <input type="submit" name="opS" value=" - ">
 <input type="submit" name="opM" value=" * ">
 <input type="submit" name="opD" value=" / ">
</div> -->
<input type="submit" name="op" value=" Submit ">
 </form>



<?php
$txtt=$_POST['txtt'];
// $opa=$_POST['opA'];
// $ops=$_POST['opS'];
// $opm=$_POST['opM'];
// $opd=$_POST['opD'];
$txtt1=$_POST['txtt1'];
// // echo "<h2>" . $txtt ." " .  $op ." " .  $txtt1 ."</h2>";
 echo "<span>$txtt + $txtt1 = ";
 echo  $txtt + $txtt1 . " </span><br>";
 echo "<span>$txtt - $txtt1 = ";
 echo  $txtt - $txtt1  ."</span><br>";
 echo "<span>$txtt * $txtt1 = ";
 echo  $txtt * $txtt1 ."</span><br>";
 echo "<span>$txtt / $txtt1 = ";
 echo  $txtt / $txtt1 . "</span><br>";
 echo "<span> squ ($txtt) =" .$txtt*$txtt ."<br>". "squ ($txtt1) =" . $txtt1 * $txtt1;
 echo "<br> cube  ($txtt) =" .$txtt*$txtt*$txtt ."<br>". "cube  ($txtt1) =" . $txtt1 * $txtt1 * $txtt1 .  "</span>";
?>


<hr id="line">

<h1>10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.</h1>

<form method='POST'>
   <h2>Enter Data:</h2> 
 <input type="text" name="txtt"  placeholder="Your Name"><br>
 <input type="text" name="g"  placeholder="Your Age"><br>
 <input type="submit" value="Submit">
 </form>

<?php
$n=$_POST['txtt'];
$age=$_POST['g'];
if ($age >= 18) {
    echo "<h2> $n, you Are Eligible For Vote </h2>";
} else {
    echo "<h2> $n, you are not eligible for vote. </h2>";
}

?>

<hr id="line">


<h1> 11.	Write php script  to check whether a number is positive, negative or zero  </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="n1" placeholder="Number1">
 <input type="submit" value="Submit">
 </form>

<?php
$n =$_POST['n1']; 
if ($n > 0 ){
        echo "<h2> $n  is a number is positive </h2> ";
} else {
    echo "<h2> $n  is NOT positive number </h2>";
}
?>

<hr id="line">

<h1>12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject   </h1>

<form method='POST'>
   <h2>Enter U`re marks</h2> 
 <input type="text" name="eng"  placeholder="English"><br>
 <input type="text" name="ara" placeholder="Arabic"><br>
 <input type="text" name="math" placeholder="Math"><br>
 <input type="text" name="sce" placeholder="Science"><br>
 <input type="text" name="soci" placeholder="Social"><br>
 <input type="submit" value="Submit">
 </form>

<?php
$m1=$_POST['eng'];
$m2=$_POST['ara'];
$m3=$_POST['math'];
$m4=$_POST['sce'];
$m5=$_POST['soci'];
$avg= ($m1 + $m2 + $m3 + $m4 + $m5) /5 ;

if ($avg <60 ){
echo "<h2> Your avg is " . $avg  ."<span> Your Grad is  F </span> </h2>";
}elseif ($avg <70 ){
echo "<h2> Your avg is " . $avg  ."<span> Your Grad is  D </span> </h2>";
} elseif($avg <80 ){
echo "<h2> Your avg is " . $avg  ."<span> Your Grad is  C </span> </h2>";
}elseif ($avg <90 ){
echo "<h2> Your avg is " . $avg  ."<span> Your Grad is  B </span> </h2>";
} else {
echo "<h2> Your avg is " . $avg  ."<span> Your Grad is  A </span> </h2>";
}

?>

<hr id="line">

</body>
</html>