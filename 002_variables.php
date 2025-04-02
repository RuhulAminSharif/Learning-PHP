<?php
    $name = "Ruhul Amin Sharif";
    // it will print the value of the variable due to double quote
    echo "My name is $name"."<br>"; 
    // it will not print the value of the variable due to single quote
    echo 'My name is $name'."<br>";

    $num = 2265;
    echo $num ."<br>";

    // constant variables
    // define( name, value, case-insensitive)
    define( "pi", 3.1416);
    echo pi."<br>"; 
    echo pi*3*3;
?>