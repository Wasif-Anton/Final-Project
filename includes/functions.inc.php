<?php

// Function check if fields are empty
function emptyInputSignup($id, $name, $email, $password, $confirm_password, $phone)
{
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

function invalidId($id)
{
    $result = null;
    // 
    if (!preg_match("/^[0-9]+$/", $id)) {
        $result = true; // There is a mistake
    }
    // 
    else {
        $result = false;  // Everything is good
    }
    return $result;
}
