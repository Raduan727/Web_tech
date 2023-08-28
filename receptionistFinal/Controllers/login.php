<?php 
require_once('../Models/alldb.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" && $password == "") {
        $upError = "Email and Password are required";
    } elseif ($username == "") {
        $usernameError = "Enter username";
    } elseif ($password == "") {
        $passwordError = "Enter password";
    } else {

        $status = auth($username, $password);
        if ($status) {
            header('location:../Views/room.php');
            exit(); 
        } else {
            $error = "Invalid password";
        }
    }
} else {
    header('location:../Views/login.php');
    exit(); 
}
?>
