<?php
    for ($i=0; $i < 10; $i += 1) { 
        # code...
        if( $i == 5 ) continue;
        if( $i == 8 ) break;
        echo $i . ' ';
    }
    echo '<br>';

    for ($i=0; $i < 10; $i += 1) { 
        # code...
        if( $i == 3 ) {
            goto abc;
        }
        echo $i . ' ';
    }
    echo 'Not printed';
    abc:
        echo 'Printed';
?>