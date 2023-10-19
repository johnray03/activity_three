<?php
include_once("config.php");

if(isset($_POST["submit-form"])) {
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $getRow = $pdo->query("select * from users where lastname='$lastname' and firstname='$firstname' and email='$email' and password='$password';");
    if($getRow->rowCount() == 1) {
        $_SESSION["msg"] = "User account already exist.";
        header("location: index.php");
    } else {
        
        if(empty($lastname) || empty($firstname) || empty($email) || empty($password)) {
            $_SESSION["msg"] = "All fields are required.";
            header("location: index.php");
        } else {
            $insert = $pdo->query("insert into users(lastname, firstname, email, `password`) values('$lastname', '$firstname', '$email', '$password');");
        
            $_SESSION["msg"] = "Account was added.";
            header("location: index.php");
        }
    }
}


