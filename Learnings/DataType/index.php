<?php

    //data types
    //Integer and float

    $int_var = 12345;
    $double_var = 123.53;

    //add two varibale and store in the value in $add variable
    $add = $int_var + $double_var;

    echo $int_var . " + " . $double_var . " = " . $add . '<br>';
    //boolean
    //value only with true or false
    $true = true;
    $false = false;
    //ternary oparator 
    echo isset($true) ? "Yes, True" : "No, False";
    
    //string is a sequence of characters.
    echo "<br>Check the difference between this output <br>";

    $variable = "'mark'";
    $output = '$output value will not print<br>';
    echo $output;

    $output = "$variable value will print";
    echo $output;

    // the escape-sequence replacements are −

    // \n is replaced by the newline character
    
    // \r is replaced by the carriage-return character
    
    // \t is replaced by the tab character
    
    // \$ is replaced by the dollar sign itself ($)
    
    // \" is replaced by a single double-quote (")
    
    // \\ is replaced by a single backslash (\)

    //null represebt speacuak type that only has one vaue : NULL this is undefined or unset so when check it by isset it will return false

    $isFalse = NULL;
    echo "<br>";
    echo isset($isFalse) ? "Is set" : "Is not set";
    echo "<br>";
    // array
    //associative array
    $array = array("name" => "mark ely");
    $array2 = ["name" => "mark ely"];

    // associative multideminsional array
    $array3 = array("arr1" => array("name" => "mark", "age" => 19));
    $array4 =["arr1" => ["name" => "mark", "age" => 19],
    "arr2" => ["name" => "ely", "age" => 20]];

    //indexed array
    $arrray5 = array("hello world","hi world");
    $arrray6 = ["hello world","hi world"];

    //indexed multidiminsional array
    $array7 = [
        ["row1 index 0", "row1 index1"],
        ["row2 index 0", "row2 index1"],
    ];

    //access aassociative array
    echo "access assocaitive array " . $array["name"];

    //access multideminsional array
    echo "<br> access multideminsional array " . $array4["arr1"]["name"];
    echo  "<br> access multideminsional array " . $array4["arr2"]["name"];

    // Object Data Type in PHP
    // An object type is an instance of a programmer-defined class, which can package up both other kinds of values and functions that are specific to the class.

    // To create a new object, use the new statement to instantiate a class −

    class foo{
        function myfunc(){
            echo "<br>hello world";
        }
    }

    $obj = new foo;
    $obj->myfunc();

    // Resource Data Type in PHP
    // Resources are special variables that hold references to resources external to PHP (such as a file stream or database connections).
    
    // Here is an example of file resource −

    $fp = fopen("foo.txt", "w");
    echo $fp;

    //getthe type function is built in function
    $x = 11;
    echo "<br>" . gettype($x);
    $x = "hi";
    echo "<br>" .  gettype($x);
    $x = array();
    echo "<br>" .  gettype($x);

    //casting
    $x = (bool) $x;
    echo "I use casting to change the data type from array " . gettype($x);
?>