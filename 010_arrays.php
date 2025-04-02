<?php
    $arr = array(10, 20, 30);
    echo $arr[1] . '<br>';
    $a = [12, 'example string', 15.1];
    echo $a[2] . '<br>';

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "<ol>";
    for ($i = 0; $i < sizeof($a); $i += 1) { 
        # code...
        echo "<li>" . $a[$i] . "</li>";
    }
    echo "</ol>";

    $assoc_arr = [
        "Bill" => 25,
        "Joe" => 28,
        "Peter" => 22
    ];
    
    echo "<pre>";
    print_r($assoc_arr);
    echo "</pre>";

    var_dump($assoc_arr);

    echo "<ol>";
    foreach ($assoc_arr as $name => $age) {
        # code...
        echo "<li> $name => $age </li>";
    }
    echo "</ol>";

    echo "<ol>";
    foreach ($arr as $value) {
        # code...
        echo "<li> $value </li>";
    }
    echo "</ol>";

    $emp = [
        [ "SEISD", 3 ],
        [ "SEISDL", 1.5 ]
    ];
    echo "<pre>";
    print_r($emp);
    echo "</pre>";
    
    echo "<table border = '2px' >";
    echo "
        <tr>
            <th>Course</th>
            <th>Credit</th>
        </tr>
    ";
    for ($i=0; $i < sizeof($emp); $i++) { 
        # code...
        echo "<tr>";
        for ($j=0; $j < sizeof($emp[$i]); $j++) { 
            # code...
            echo "<td>" . $emp[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    $names = [ 'Sanjay', 'Aman', 'Rehman', 'Karan' ];
    // return true or false
    if( in_array('Aman', $names) ) {
        echo "Found";
    }
    else {
        echo "Not Found";
    }
    echo '<br>';
    // return index or key
    if( gettype(array_search('nai', $names)) == 'integer' ) {
        echo "Found";
    }
    else {
        echo "Not Found";
    }
    echo "<pre>";
    print_r($names);
    echo "</pre>";

    array_pop($names);

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    array_push($names, 'New Entry');
    
    echo "<pre>";
    print_r($names);
    echo "</pre>";

    array_push($names, 'New Entry1', 'New Entry2');

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    # remove first element
    array_shift($names);

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    # insert at first position 
    array_unshift($names, 'New entry from first index', 'multiple entry');
    
    echo "<pre>";
    print_r($names);
    echo "</pre>";

    // read about 
        # array_replace();
        # array_replace_recursive();
?>