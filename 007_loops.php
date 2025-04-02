<?php
    # while loop
    $a = 0;
    while ($a <= 10) {
        # code...
        echo $a.' ';
        $a += 1;
    }
    echo '<br>';
    # do while loop
    $a = 0;
    do {
        # code...
        echo $a.' ';
        $a += 1;
    } while ($a <= 10);
    echo '<br>';
    # for loop
    for ($i=0; $i <= 10; $i++) { 
        # code...
        echo $i.' ';
    }
    echo '<br>';
    # foreach loop
    foreach ($variable as $key => $value) {
        # code...
    }

    foreach ($arr as $value) {
        # code...
    }
?>