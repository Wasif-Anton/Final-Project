<?php

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];
    $region = $_POST["region"];

    require_once 'darabase.inc.php';
    require_once 'functions.inc.php';

    // Error Handler

    // If the fields are empty
    // Function check if fields are empty
    if (emptyInputSignup($id, $name, $email, $password, $confirm_password, $phone, $region) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidId($id) !== false) {
        header("location: ../signup.php?error=invalidid");
        exit();
    }
    if (invalidName($name) !== false) {
        header("location: ../signup.php?error=invalidname");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    // If password not match
    if (passwordMatch($password, $confirm_password) !== false) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }
    if (invalidPhone($phone) !== false) {
        header("location: ../signup.php?error=invalidphone");
        exit();
    }
    // If user exists
    if (idExists($conn, $id) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($id, $name, $email, $password, $phone, $region);
}
//
else {
    header("location: ../signup.php");
}
