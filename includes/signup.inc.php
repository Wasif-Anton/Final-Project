<?php

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];
    $region = $_POST["region"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    // Error Handler
    // If the fields are empty

    // emptyInputSignup function check if fields are empty (require_once 'functions.inc.php';)
    if (emptyInputSignup($id, $name, $email, $password, $confirm_password, $phone, $region) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    // invalidId function check if the id is invalid
    if (invalidId($id) !== false) {
        header("location: ../signup.php?error=invalidid");
        exit();
    }

    // invalidName function check if the name is invalid
    if (invalidName($name) !== false) {
        header("location: ../signup.php?error=invalidname");
        exit();
    }

    // invalidEmail function check if the email is invalid
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    // passwordMatch function check if the password are the same or not
    if (passwordMatch($password, $confirm_password) !== false) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }

    // invalidPhone function check if the phone only numbers
    if (invalidPhone($phone) !== false) {
        header("location: ../signup.php?error=invalidphone");
        exit();
    }

    // idExists function check if the user id exists
    if (idExists($conn, $id) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    // createUser function will create the user if it pass all the other functions
    createUser($comm, $id, $name, $email, $password, $phone, $region);
}
//
else {
    header("location: ../signup.php");
}
