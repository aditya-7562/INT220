<?php
echo "<pre>";
// left angle triangle

$n = 5;

// for($i = 1; $i<=$n; $i++){
//     for($j = 1; $j <= $i; $j++){
//         echo"*";
//     }
//     echo"<br>";
// }

// inverted left angle triangle

// for($i = $n; $i >=1; $i--){
//     for($j = 1; $j <= $i; $j++){
//         echo"*";
//     }
//     echo"<br>";
// }

// pyramid pattern

for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo " ";
    }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}



echo "</pre>";