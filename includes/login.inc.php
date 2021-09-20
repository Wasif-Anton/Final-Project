<?php

if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $password = $_POST["password"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    // If input is empty
    if (emptyInputLogin($id, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $id, $password);
}
//
else {
    header("location: ../login.php");
    exit();
}
