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

    # uppercase and lowercase functions
    /*
        strtolower(string) -> Converts all characters in a string to lowercase.
        strtoupper(string) -> Converts all characters in a string to uppercase.
        ucfirst(string) -> Converts the first character of a string to uppercase.
        ucwords(string) -> Converts the first letter of each word in a string to uppercase.
        lcfirst(string) -> Converts the first character of a string to lowercase.
    */

    # string length and count functions
    /*
        strlen(string) -> Returns the length of a string
        str_word_count(string, return) -> Counts the number of words in a string.
            Parameters:
                string → The input string.
                return (optional):
                    0 (default) → Returns the word count.
                    1 → Returns an array of words.
                    2 → Returns an associative array with word positions.
        substr_count( string, substring, start, length ) -> Counts how many times a substring appears in a string.
            Parameters:
                string → The main string.
                substring → The substring to count.
                start (optional) → Starting position (default: 0).
                length (optional) → Length of the string to search.
    */

    # string position functions
    /*
        strpos(string, substring, start) -> Finds the first occurrence of a substring in a string (case-sensitive)
            Parameters:
                string → The main string.
                substring → The text to find.
                start (optional) → The position to start the search.
        strrpos(string, substring, start) -> Finds the last occurrence of a substring (case-sensitive).
        stripos(string, substring, start) -> Same as strpos(), but case-insensitive
        strripos(string, substring, start) -> Same as strrpos(), but case-insensitive.
    */

    # string search functions
    /*
        strstr(string, search, before_search) -> Finds the first occurrence of a substring and returns the rest of the string.
            Parameters:
                string → The main string.
                search → The substring to find.
                before_search (optional, true/false):
                    false (default) → Returns the portion from the first occurrence onward.
                    true → Returns the portion before the first occurrence.

        stristr(string, search, before_search) -> Same as strstr(), but case-insensitive.
        strchr(string, search, before_search) -> It is an exact alias of strstr()
        strrchr(string, search) -> Finds the last occurrence of a character and returns the rest of the string.
        strpbrk(string, char_list) -> Finds the first occurrence of any character from a set.
            Parameters:
                string → The main string.
                char_list → A set of characters to look for.
    */

    # string substr functions
    /*
        substr(string, start, length) -> extracts a portion of a string based on a starting position and an optional length.
        Parameters:
            string → The input string.
            start → The position to start extracting.
                Positive number → Start from that position (0-based index).
                Negative number → Start counting from the end of the string.
            length (optional) → The number of characters to extract.
                Positive number → Extract up to length characters.
                Negative number → Remove length characters from the end.
                Omitted → Extract until the end of the string.

        Extract a username from an email:
            substr("user@example.com", 0, strpos("user@example.com", "@"));
        Extract file extension:
            substr("document.pdf", -3);
    */
?>