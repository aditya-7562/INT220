<?php
$superHero = array(
    "name"=> "Peter Parker",
    "email"=> "peterparker@gmail.com",
    "age"=> 18,
);

foreach ($superHero as $key => $value) {
    echo $key .": ". $value ."<br>";
}