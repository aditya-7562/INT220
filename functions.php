<?php
// function setChildren($children = 0){
//     echo"Total number of children are: $children . <br>";
// }

// setChildren(2);
// setChildren(1);
// setChildren();
// setChildren(3);


// function selfMult(&$num){
//     $num *= $num;
//     return $num;
// }

// $mynum = 5;
// selfMult($mynum);
// echo"$mynum";

// $num1 = 5;
// $num2 = 13;
// function global_var(){
//     $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
//     echo 'Sum is :'. $sum;
// }

// global_var();

// function static_var(){
//     static $num1 = 2;
//     $num2 = 5;

//     $num1++;
//     $num2++;

//     echo "Static :". $num1. "<br>";
//     echo "Non-Static :". $num2. "<br>";
// }

// static_var();
// static_var();

// function myTest()
// {
//     static $x = 1;
//     echo $x;
//     $x++;
// }

// myTest();
// echo "<br>";
// myTest();
// echo "<br>";
// myTest();
// echo "<br>";
// myTest();
// echo "<br>";


$x = 5;
function myTest(){
    $x = 7;
    echo "Value of x: $x";
}
myTest();