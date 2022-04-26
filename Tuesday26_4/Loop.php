<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title> PHP Loops </title>
</head>
<body id="body8">
    
<h1>1.	Create a script that displays 1-2-3-4-5 on one line. There will be no dash (-) at the start and end position.  </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
 <input type="text" name="yy" placeholder="number">
 <input type="submit" value="Submit">
 </form>

<?php  
$n=$_POST['yy'];
for ($i=1; $i <=$n ; $i++) { 
    if($i<$n)
    {
        echo "<span>". $i . " - </span>";
    }
    else
    echo "<span>". $i . "</span>";
}
?>

<hr id="line">

<h1>2.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. </h1>

<form method='POST'>
   <h2>Enter number:</h2> 
 <input type="text" name="t" placeholder="number">
 <input type="submit" value="Submit">
 </form>

 <?php
$t =$_POST['t'];

$sum=0;
echo "<br><span> $sum </span>" ;
for ($i=1; $i <= $t ; $i++) { 
     echo   "<span> + $i </span>" ;
    $sum += $i; 
    
}
echo "<span> = $sum </span>";
?>

<hr id="line">

<h1>3.	Create a script to generate the following pattern, using the nested for loop.  </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="n1" placeholder="Number1"><br>
 <!-- <input type="text" name="n2" placeholder="Number2"><br> -->
 <input type="submit" value="Submit">
 </form>

 <?php
$n1 = $_POST['n1'];
// $n2 = $_POST['n2'];
for ($i=0; $i < $n1  ; $i++) { 
    for ($x=0; $x < $n1 ; $x++) { 
        if($i == 1 && $x>=3)
        { echo "<span> B </span>";  }
        elseif($i == 2 && $x>=2)
        { echo "<span> C </span>";  }
        elseif($i == 3 && $x>=1)
        { echo "<span> D </span>";  }
        elseif($i == 4 )
        { echo "<span> E </span>";  }
        else
        { echo "<span> A </span>";  }
    }
    echo "<br>";
}

?>
<hr id="line">

<h1>4.	Create a script to generate the following pattern, using the nested for loop. 
  </h1>

  <form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="n1" placeholder="Number1"><br>
 <!-- <input type="text" name="n2" placeholder="Number2"><br> -->
 <input type="submit" value="Submit">
 </form>

 <?php
$n1 = $_POST['n1'];
// $n2 = $_POST['n2'];
for ($i=0; $i < $n1  ; $i++) { 
    for ($x=0; $x < $n1 ; $x++) { 
        if($i == 1 && $x>=3)
        { echo "<span>  2  </span>";  }
        elseif($i == 2 && $x>=2)
        { echo "<span>  3  </span>";  }
        elseif($i == 3 && $x>=1)
        { echo "<span>  4  </span>";  }
        elseif($i == 4 )
        { echo "<span>  5  </span>";  }
        else
        { echo "<span>  1  </span>";  }
    }
    echo "<br>";
}

?>
<hr id="line">


<h1>5.	Create a script to generate the following pattern, using the nested for loop.  </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="n1" placeholder="Number1">
 <input type="submit" value="Submit">
 </form>

<?php
$n1 = $_POST['n1'];

for ($i=1; $i <= $n1  ; $i++) { 
    for ($x=1; $x <= $n1 ; $x++) { 
        if($x == $i){
             echo "<span> $i </span>"  ;   }
        else { 
             echo "<span> 0 </span>"  ;    }
       }
    echo "<br>";
}

?>

<hr id="line">

<h1>6.	Write a program to calculate and print the factorial of a number using a for loop.
     The factorial of a number is the product of all integers up to and including that number.   </h1>

<form method='POST'>
   <h2>Enter  Number:</h2> 
 <input type="text" name="nn1" placeholder="number">
 <input type="submit" value="Submit">
 </form>

<?php
$nn =$_POST['nn1'];
$x = 1;
for ($i=1; $i <= $nn ; $i++) { 
    $x *= $i;
}
echo "<h2> The factorial of   $nn = $x </h2>";

?>

<hr id="line">

<h1>7.	Write a program to calculate and print the Fibonacci sequence using a for loop.<be></be>
Fibonacci is a series of numbers where a number is the sum of previous two numbers.<br>
 Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
 </h1>

<form method='POST'>
   <h2>Enter  number:</h2> 
 <input type="text" name="n" placeholder="number">
 <input type="submit" value="Submit">
 </form>

 <?php
$n =$_POST['n'];
// $sum=0;
echo "<span>". 0  . " , " . 1 .  "  </span>";
$arr = array (0,1);
 $length = count($arr);
for ($i=0; $i < $n; $i++) {  
    $num = $arr[$length-1] + $arr[$length -2];
     echo "<span> , ". $num . "  ". " </span>";
    array_push($arr,$num);
    $length = count($arr);
}

?>

<hr id="line">

<h1>8.	Write a program which will count the "c" characters in the text "Orange Coding Academy". </h1>

<form method='POST'>
   <h2>Enter  unit:</h2> 
 <input type="text" name="n" placeholder="text"><br>
 <input type="text" name="tt" placeholder="char"><br>
 <input type="submit" value="Submit">
 </form>

 <?php
$n =$_POST['n'];
$tt =$_POST['tt'];
// $t = "Orange Coding Academy";
$t1 = strtolower($n);
echo "<h2>". substr_count($t1, $tt) ."</h2>";
?>

<hr id="line">

<h1>9.	Write a PHP script that creates the Multiplication table using for loops.  </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
 <input type="text" name="tt" placeholder="Number"><br> 
<input type="submit" name="op" value=" Submit "> 
 </form>



<?php
$tt=$_POST['tt'];
echo "<table style= 'border: solid 1px; padding: 3px ; cellspacing = 0px; margin-left:10%; font-weight: bold;'>";
for ($i=1; $i <= 10; $i++) { 
    echo "<tr >";
    for ($x=1; $x <=$tt ; $x++) { 
        $m = $i * $x;
        echo "<td style= 'border: solid 1px;'> $i * $x = $m" . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>


<hr id="line">

<h1>10.	Write a PHP program that repeats integers from 1 to 50.<br>
     For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz".<br>
     For numbers that are multiples of both three and five, print "FizzBuzz".</h1>

<form method='POST'>
   <h2>Enter number:</h2> 
 <input type="text" name="tt"  placeholder="number"><br>
 <input type="submit" value="Submit">
 </form>

<?php
$nn=$_POST['tt'];
for ($i=1; $i <= $nn; $i++) { 
    if($i % 3 == 0 && $i % 5 == 0 )
    {   echo "<h2 style= 'color:red;'> $i is multiples of <b> 3 and 5</b> , fizz buzz </h2>";    }
    else  if($i % 5 == 0 )
    {
        echo "<h2 style= 'color:blue;'> $i is multiples of <b> 5</b> ,  buzz </h2>" ;
    }
    else if($i % 3 == 0 )
    {
        echo "<h2 style= 'color:oragneed;'> $i is multiples of <b> 3</b> , fizz  </h2>";
    } 
    else 
    echo "<h4> $i  It is not a complication of  3 or 5</h4>";

}

?>

<hr id="line">


<h1> 11.	Write a PHP program to generate and display the first n lines of a Floyd triangle  </h1>

<form method='POST'>
   <h2>Enter Number:</h2> 
<input type="text" name="nt1" placeholder="Number">
 <input type="submit" value="Submit">
 </form>

<?php
$nt =$_POST['nt1']; 
echo "<h2><table style= ' cellspacing = 0px; margin-left:45%;'>";
for ($i=1; $i <= 5; $i++) { 
    echo "<tr >";
    for ($x=1; $x <= $i ; $x++) { 
        
        echo  "<td >" . $nt . " </td>";
            $nt++;
    }
    echo "</tr>";
}
echo "</table></h2>";



?>

<hr id="line">

<h1>12.	Write a PHP program to print the following pattern.    </h1>

<!-- <form method='POST'>
   <h2>Enter U`re marks</h2> 
 <input type="text" name="eng"  placeholder="English"><br>
 <input type="submit" value="Submit">
 </form> -->

<?php
// $m1=$_POST['eng'];

$space = 0;
$letters = 4;
for ($i=0; $i < 5 ; $i++) { 
 echo "<h2 style='line-height: 1px;'>";
    for ($x=$space; $x < 4; $x++ ) { 
       echo " ";
    }
    $letter = "A";
    for ($y=$letters; $y <=4 ; $y++) {        
        echo $letter . " ";
        $letter++;
    }
    echo "</h2>";
    $space++;
    $letters--;
}
$space1 = 0;
$letters1 = 3;
for ($i=0; $i < 5 ; $i++) { 
    echo "<h2 style='line-height: 1px;'>";
       for ($x=$letters1; $x < 4; $x++ ) { 
          echo " ";
       }
       $letter = "A";
       for ($y=$space1; $y <=3 ; $y++) { 
           echo $letter . " ";
           $letter++;
       }
       echo "</h2>";
       $space1++;
       $letters1--;
   }

?>

<hr id="line">

</body>
</html>