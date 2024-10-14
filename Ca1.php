<?php

$arr = [2,3,4,5,6,7,8,9];
$n = 8;
$out = [];

for($i = $n - 1; $i >= 0; $i--){
    $out[] = $arr[$i];
}

print_r($arr);
echo "</br>";
echo "After reversing the output arra: </br>";
print_r($out);
echo "</br>";
echo "-----------------------------------------------------------</br>";

///////////////////////////////////////////////////////////////////////////

$num1 = 20;
$num2 = 25;
$smallest = 0;

if($num1 < $num2){
    $smallest = $num1;
}else{
    $smallest = $num2;
}
$GCD = 1;
for($i = 1; $i <= $smallest; $i++){
    if($num1 % $i == 0 && $num2 % $i == 0){
        $GCD = $i;
    }
}
echo"Value of num1 : $num1 </br>";
echo"Value of num2 : $num2 </br>";
echo"Value of GCD is $GCD";
?>