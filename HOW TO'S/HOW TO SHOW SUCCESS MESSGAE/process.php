<?php
    define("SERVER_NAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DB_NAME", "mylearnings");

    session_start();
    $db = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $age = $_POST['age']; // Cast to integer

        // store form values in session to reatian them in case of error
        $_SESSION['form_values'] = ['name' => $name, 'age' => $age];
        if(empty($name) || empty($age)){
            $_SESSION['status'] = "Please Insert inputs";
        }else{
            // insert data into the student table
            $age = (int) $_POST['age'];
            $sql = "INSERT INTO student (name, age) VALUES (?, ?)";
            $stmt = $db->prepare($sql);

            // create database for the student
            $create_database = "CREATE DATABASE $name";
            if($db->query($create_database)){
                if ($stmt === false) {
                    $_SESSION['status'] = "Statement preparation failed: " . $db->error;
                } else {
                    $stmt->bind_param("si", $name, $age); // Use "si" for string and integer
                    if ($stmt->execute()) {
                        // clear the form values when successfully saved the data
                        unset($_SESSION['form_values']);
                        $_SESSION['status'] = "Data Saved";
                    } else {
                        $_SESSION['status'] = "Execution failed: " . $stmt->error;
                    }
                    $stmt->close();
                }
            }else{
                $_SESSION['status'] = "Can't create user database: " . $db->error;
            }
           
        }
        header("Location: index.php");
        exit();
    }
    $db->close();
    
?>
