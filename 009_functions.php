<?php
    function sum( $a = 0, $b = 0 ) {
        # code ...
        return $a + $b;
    }

    echo sum(5,10) . '<br>';
    echo sum();

    function check( $a, &$b ) {
        $a = 'Not Changed';
        $b = 'Changed';
    }
    $a = 'Hello';
    $b = 'Haha';
    check( $a, $b );
    echo $a . '<br>';
    echo $b . '<br>';

    # variable function
    function functionName($parameter) {
        echo 'Variable Function Checking' . '<br>';
        echo $parameter;
    }
    $variable_function = "functionName";
    $variable_function("Hello"); 

    # Anonymous Function
?>