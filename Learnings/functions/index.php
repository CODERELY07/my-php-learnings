<?php
    
    //default value
    function php($name = "mark"){
            echo $name;
    }
    php();
    echo "<br>";
    //variable scope
    
    $globalVar = 34;
    function scop(){
        global $globalVar;
        echo $globalVar;
    }
    scop();
     echo "<br>";
    //variable function
    function varfunc(){
        echo "Hello World";
    }
    
    $hello = 'varfunc';
    $hello();
     echo "<br>";
    //anonymous function
    
    $sayBye = function($name){
        return "byee $name";
    };
    
    echo $sayBye(" may");
     echo "<br>";
    //  Function Overloading
// PHP does not support function overloading (i.e., defining multiple functions with the same name but different parameters). Instead, you can use default arguments or variadic functions:

   function arr(...$numbers){
       return array_sum($numbers);
   }
   
   echo arr(1,2,3,4,5);
    echo "<br>";
    
    //recursive function
    function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
    }
?>