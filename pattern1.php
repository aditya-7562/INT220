<?php
echo "<pre>";

$n = 5;

// left angle triangle


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

// pyramid triangle pattern 

// for ($i = 1; $i <= $n; $i++) {
//     for ($j = $i; $j < $n; $j++) {
//         echo " ";
//     }
//         for ($k = 1; $k <= (2 * $i - 1); $k++) {
//         echo "*";
//     }
//     echo "<br>";
// }

// right angle triangle pattern

for ($i = 1; $i <= $n; $i++) {
    // Print spaces
    for ($j = $i; $j < $n; $j++) {
        echo " "; // HTML non-breaking space for web output
    }
    
    // Print stars
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    
    echo "<br>"; // HTML line break for web output
}


echo "</pre>";