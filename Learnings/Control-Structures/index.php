<?php

    // What are control structures in PHP?
    // Control structures are core features of the PHP language that allow your script to respond differently to different inputs or situations.

    // There are two main types of control structures in PHP: conditional statements and loops.

    // What are conditional statements in PHP?
    // Conditional statements allow you to branch the path of execution in a script based on whether a single or multiple conditions evaluate to true or false.

    // There are four types of conditional statements in PHP: if, if-else, if-elseif-else, and switch.

    // If statement
    // The if statement is the simplest form of conditional statement. It executes a block of code only if a specified condition is true. The syntax of the if statement is:
    
    //     If-else statement
    // The if-else statement is an extension of the if statement. It executes one block of code if a specified condition is true, and another block of code if the condition is false. The syntax of the if-else statement is:
    
    // If-elseif-else statement
    // The if-elseif-else statement is a further extension of the if-else statement. It allows you to test multiple conditions and execute different blocks of code accordingly. The syntax of the if-elseif-else statement is:
    // You can have as many elseif clauses as you want, but only one else clause at the end. The conditions are evaluated from top to bottom, and only the first one that evaluates to true will execute its corresponding block of code. If none of the conditions are true, the else block will execute.
    //print the if it is positive number

    $x = 10;
    if($x < 0){
        echo "$x is positive number";
    }else if($x > 0){
        echo "$x is negative number";
    }else{
        echo "number is 0";
    }
    echo "<br>";
    $grade = 85;
    if ($grade >= 90) {
        echo "You got an A.";
    } elseif ($grade >= 80) {
        echo "You got a B.";
    } elseif ($grade >= 70) {
        echo "You got a C.";
    } elseif ($grade >= 60) {
        echo "You got a D.";
    } else {
        echo "You got an F.";
    }
    echo "<br>";
    // Switch statement
    // The switch statement is an alternative way of writing multiple if-elseif-else statements. It compares a given expression with several possible values and executes the corresponding block of code. The syntax of the switch statement is:

    $day = "Monday";

    switch($day){
        case "Monday":
            echo "Todat is Monday";
            break;
        case "Tuesday":
            echo "Todat is Tuesday";
            break;
        case "Wednesday":
            echo "Todat is Wednesday";
            break;   
        case "Thursday":
            echo "Todat is Thursday";
            break;
        case "Friday":
            echo "Todat is Friday";
            break;
        case "Saturday":
            echo "Todat is Saturday";
            break;
        case "Sunday":
            echo "Todat is Saturday";
            break;
        default:
            echo "Invalid Day";
    }
    echo "<br>";

    // For Loops

    // What are loops in PHP?
    // Loops are control structures that allow you to repeat a block of code multiple times until a certain condition is met. Loops are useful for performing repetitive tasks, such as iterating over arrays, processing user input, generating output, etc.

    // There are four types of loops in PHP: while, do-while, for, and foreach.

    // While loop
    // The while loop executes a block of code as long as a specified condition is true.

    $x = 1;
    while($x <=10){
        echo $x . " ";
        $x++;
    }

    echo "<br>";

    // Do-while loop
    // The do-while loop executes a block of code once and then repeats it as long as a specified condition is true. The syntax of the do-while loop is:

    // The difference between the do-while loop and the while loop is that the do-while loop checks the condition at the end of each iteration, whereas the while loop checks it at the beginning. This means that the do-while loop will always execute at least once, even if the condition is false from the start.

    $x = 11;
    do{
        echo $x;
        $x++;
    }while($x <= 10);
    // The above code will print “11” because the value of $x starts from 11 and does not satisfy the condition, but still executes once before checking it.

    // For loop
    // The for loop executes a block of code for a specified number of times.
    echo "<br>";
    for($x = 1; $x <= 10; $x++){
        echo "$x";
    }

    // Foreach loop
    // The foreach loop executes a block of code for each element in an array or an object. 
    echo "<br>";
    $colors = ["yellow", "green","green"];
    foreach($colors as $value){
        echo $value . " ";
    }

    echo "<br>";
    //associative 
    $scores = array("mark" => 100, "ely" => 95, "mike" => 97);

    foreach($scores as $name => $values){
        echo $name . " scored " . $values . "<br>";
    }

    echo "<br>";

    // The object can be any variable that holds an object value. The $property variable holds the current property name in the object, and the $value variable holds the current value of that property. You can use both variables to access or modify the property in the code block.

    class Car{
        public $color;
        public $model;
        
        public function __construct($colors,$models){
            $this->color = $colors;
            $this->model = $models;
        }
    }

    $myCar = new Car("red", "Toyota");
    foreach($myCar as $property => $value){
        echo "Propery: $property Value: $value <br>";
    }
?>