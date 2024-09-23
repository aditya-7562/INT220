<?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $name = $_GET["name"];
        if(!empty($name)){
            echo"<h2> Hello, $name !</h2>";
        }else{
            echo "<h2> Name field cannot be empty. Please go back and enter your name. </h2>";
        }
    }