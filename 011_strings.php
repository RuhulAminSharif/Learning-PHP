<?php
    # explode function
    /*
        explode( delimiter, string, limit ) -> Splits a string into an array based on a specified delimiter.
        
        - delimiter: The character(s) used to split the string.
        - string: The input string to be split.
        - limit (optional): Specifies the number of elements in the returned array.

        $str = "apple,banana,orange";
        $arr = explode(",", $str);
        print_r($arr);

        output:
        Array ( 
            [0] => apple
            [1] => banana 
            [2] => orange 
        )
    */
    # implode function
    /*
        implode( separator, array ) -> Joins array elements into a string using a specified separator.
        
        - separator: The string used to join the array elements.
        - array: The input array to be joined into a string.

        $arr = ["apple", "banana", "orange"];
        $str = implode(" - ", $arr);
        echo $str;

        output: 
        apple - banana - orange
    */

    # str_split function
    /*
        str_split(string, length) -> Splits a string into an array of equal-length chunks.

        - string: The input string.
        - length (optional): The length of each chunk. Default is 1.

        $str = "Hello";
        $arr = str_split($str, 2);
        print_r($arr);

        output:
        Array ( 
            [0] => He 
            [1] => ll 
            [2] => o 
        )

    */
    # chunk_split function
    /*
        chunk_split(string, length, end) -> Splits a string into smaller parts by inserting aseparator

        - string: The input string.
        - length (optional): The length of each chunk. Default is 76.
        - end (optional): The string to insert at the end of each chunk. Default is \r\n

        $str = "HelloWorld";
        $newStr = chunk_split($str, 3, "-");
        echo $newStr;

        output:
        Hel-loW-orl-d-

    */
?>