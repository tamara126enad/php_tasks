<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title> PHP Super Global Variables </title>
</head>
<body id="body1">
    <br>
<?php
session_start();
echo ' <h1>PHP Super Global Variables </h1>
    <h2> 1.	create a form and send email and password, in the action page you will determine if the data is sent by get or post  </h2>
    <form action="file1.php" method="post">
        Email: &ensp;&nbsp; <input type="text" name="mail" ><br><br>
        Password: <input type="text" name="pass" ><br><br>
        <input type="submit" formtarget="_blank">
        </form>' ;

echo '<hr id="line">';

echo '<h2> 2.	make a search engine website that contain URL as input text and button named (GO) if you click on Go will redirect you to the written URL   </h2>
<br><form action="" method="post">
Enter URL <input type="url" name="url" value="https://www.orange.com/en" style="font-size:14px"> 
<input type="submit" value=" Go " formtarget="_blank" >
</form> ';

$go =$_POST['url'];
header("location: $go");


echo '<hr id="line">';

echo '<h2>3.	make a Calculator that contain Basic Mathematical operations (+,-,*,/)</h2>
<form method="POST">
<h3>Enter Data:</h3> 
<input type="text" name="txtt"  placeholder="Number 1"><br>
<input type="text" name="txtt1" placeholder="Number 2"><br> 
<input type="submit" name="op" value=" Submit ">
</form>';

$txtt=$_POST['txtt'];
$txtt1=$_POST['txtt1'];
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

echo '<hr id="line">';

echo '<h2>4.	Create a To Do List Page. </h2>
<form method="POST">
<h3>Enter Task:</h3> 
<input type="text" name="task"  value="Task"><br>
<input type="submit"  value=" Add Task ">
</form>';

$t=$_SESSION['task'].=$_POST['task'] ."," ;
$add=explode("," , $t);
for ($i=0; $i<count($add)-1; $i++){
    // echo "<br>";
    echo "<input type= 'checkbox'> ". $add[$i] ." <br>";
   
}

?>
</body>
</html>