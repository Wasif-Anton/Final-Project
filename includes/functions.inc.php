<?php

require_once 'database.inc.php';

// Signup Functions
// emptyInputSignup function check if the signup fields are empty
function emptyInputSignup($id, $name, $email, $password, $confirm_password, $phone)
{
    $result = null;
    // If fields are empty
    if (empty($id) || empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($phone)) {
        $result = true; // There is a mistake
    }
    // Else fields are not empty
    else {
        $result = false; // Everything is good
    }
    return $result;
}

// invalidId function check if the id only numbers
function invalidId($id)
{
    $result = null;
    // If id field contain other thing (letters etc)
    if (!preg_match("/^[0-9]+$/", $id)) {
        $result = true; // There is a mistake
    }
    // Else id field contain only numbers
    else {
        $result = false;  // Everything is good
    }
    return $result;
}

// invalidName function check if the id only letters
function invalidName($name)
{
    $result = null;
    // If name field contain other thing (numbers etc)
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $result = true; // There is a mistake
    }
    // Else name field contain only letters
    else {
        $result = false; // Everything is good
    }
    return $result;
}

// invalidEmail function check if the email is right
function invalidEmail($email)
{
    $result = null;
    // If email field is not right
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true; // There is a mistake
    }
    // Else email field is right
    else {
        $result = false; // Everything is good
    }
    return $result;
}

// passwordMatch function check if the passwords are the same
function passwordMatch($password, $retype_password)
{
    $result = null;
    // If passwords are not equal
    if ($password !== $retype_password) {
        $result = true; // There is a mistake
    }
    // Else passwords are equal
    else {
        $result = false; // Everything is good
    }
    return $result;
}

// invalidPhone function check if the phone only numbers
function invalidPhone($phone)
{
    $result = null;
    // If phone field contain other thing (letters etc)
    if (!preg_match("/^[0-9]+$/", $phone)) {
        $result = true; // There is a mistake
    }
    // Else phone field contain only numbers
    else {
        $result = false; // Everything is good
    }
    return $result;
}

// uidExists function check if the user exists
function uidExists($conn, $id)
{
    // Selecting the data, id
    $sql = "SELECT * FROM tbluser WHERE userId = ?;";
    $stmt = mysqli_stmt_init($conn);
    // If there is an error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfaild");
        exit();
    }
    // If did not fails, passing data from the user
    // i -> it means one int, the id
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    // Grabbing the data
    $resultData = mysqli_stmt_get_result($stmt);
    // If there is data for the user in the database
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    // Else there is no data for the user
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

// createUser function will create a new user in not exists
function createUser($conn, $id, $name, $email, $password, $phone, $region)
{
    // Will insert the user into the table
    $sql = "INSERT INTO tbluser (userId, userName, userEmail, userPassword, userPhone, userRegion) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    // If failed
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfaild");
        exit();
    }
    // Hashing Password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // If not fail
    mysqli_stmt_bind_param($stmt, "isssss", $id, $name, $email, $hashedPassword, $phone, $region);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();
}

// Login Functions
//emptyInputLogin function check if the login fields are empty
function emptyInputLogin($id, $password)
{
    $result = null;
    // If fields are empty
    if (empty($id) || empty($password)) {
        $result = true; // There is a mistake
    }
    // Else fields are not empty
    else {
        $result = false; // Everything is good
    }
    return $result;
}

//-------------------------------------------------------------
//loginUser function
function loginUser($conn, $id, $password)
{
    // Admin Login
    if ($id === "admin") {
        if ($password === "1") {
            header("location: ../admin/adminHome.php");
            exit();
        }
    }
    // User Login
    //Grabbing data from the database (ID)
    $uidExists = uidExisits($conn, $id); // Passing ID
    // Wrong login
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    // Checking password
    $pwdHashed = $uidExists["password"]; // Grabbing password and save in into pwdHashed
    $checkPwd = password_verify($password, $pwdHashed); // Check if the password is right
    // If password is wrong
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    // If password is right
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["id"] = $uidExists["id"];
        header("location: ../user/userHome.php");
        exit();
    }
}
