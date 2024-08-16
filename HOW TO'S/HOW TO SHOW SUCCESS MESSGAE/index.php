<?php
    session_start();
?>
<!-- this file will create database so beware -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <!-- Show the Success Message or Error MEssage -->
    <?php
        if(isset($_SESSION['status']) && $_SESSION['status'] != "") {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= $_SESSION['status'] ?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
        unset($_SESSION['status']);
        }
        
    ?>
    <form action="process.php" method="POST">
        <label for="name">Name: </label>
        <!-- ternary oparator and session in the value attr in input tag so when there is error the input value will retain or unchage -->
        <input type="text" name="name" id="name" value="<?= isset($_SESSION['form_values']['name']) ? htmlspecialchars($_SESSION['form_values']['name']) : '' ?>" ><br>
        <label for="age">Age: </label>
        <input type="text" name="age" id="age"  value="<?= isset($_SESSION['form_values']['age']) ? htmlspecialchars($_SESSION['form_values']['age']) : '' ?>"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>