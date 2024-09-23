<?php
/*$x = 10;
$y = 4;
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo $x ** $y;
echo "<br>";
var_dump($x);
echo "<br>";
echo gettype($x);*/

// $x = 10;
// echo $x; // Outputs: 10
// echo "<br>";
// $x = 20;
// $x += 30;
// echo $x; // Outputs: 50
// echo "<br>";
// $x = 50;
// $x -= 20;
// echo $x; // Outputs: 30
// echo "<br>";
// $x = 5;
// $x *= 25;
// echo $x; // Outputs: 125
// echo "<br>";
// $x = 50;
// $x /= 10;
// echo $x; // Outputs: 5
// echo "<br>";
// $x = 100;
// $x %= 15;
// echo $x; // Outputs: 10


// $x = 25;
// $y = 35;
// $z = "25";
// var_dump($x == $z);  // Outputs: boolean true
// echo "<br>";
// var_dump($x === $z); // Outputs: boolean false
// echo "<br>";
// var_dump($x != $y);  // Outputs: boolean true
// echo "<br>";
// var_dump($x !== $z); // Outputs: boolean true
// echo "<br>";
// var_dump($x < $y);   // Outputs: boolean true
// echo "<br>";
// var_dump($x > $y);   // Outputs: boolean false
// echo "<br>";
// var_dump($x <= $y);  // Outputs: boolean true
// echo "<br>";
// var_dump($x >= $y);  // Outputs: boolean false


// $x = 10;
// echo ++$x; // Outputs: 11
// echo $x;   // Outputs: 11
// echo "<br>";
// $x = 10;
// echo $x++; // Outputs: 10
// echo $x;   // Outputs: 11
// echo "<br>";
// $x = 10;
// echo --$x; // Outputs: 9
// echo $x;   // Outputs: 9
// echo "<br>"; 
// $x = 10;
// echo $x--; // Outputs: 10
// echo $x;   // Outputs: 9



// $x = "Hello";
// $y = " World!";
// echo $x . $y; // Outputs: Hello World!
// echo "<br>";
// $x .= $y;
// echo $x; // Outputs: Hello World!



// echo $status = (empty($user)) ? "anonymous" : $user;
// echo "<br>";

// $user = "Michael";
// echo $status = (empty($user)) ? "anonymous" : $user;



// echo $status = $user ?? 'anonymous';
// echo "<br>";

// $user = "Michael";
// echo $status = $user ?? 'anonymous';



$year = 2014;
// Leap years are divisible by 400 or by 4 but not 100
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}
