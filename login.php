<?php
include 'config.php';

if(isset($_POST['login_btn'])) {
    $username =  $_POST['username'];
    $salt = "Jfdjdjfm74774hfbd7f8";
    $password_login = $_POST['password'].$salt;
    $password_login = sha1($password_login);

    $query = "SELECT * FROM user WHERE username='$username' AND password = '$password_login' ";
    $result = mysqli_query($db, $query);

    if($result != null) {
     session_start();
     $_SESSION['username'] = $username;
     $_SESSION['status'] = "login";
     header("location:forum/index.php");
    }
    else {
     header("location:index.php?success=login_fail" );
    }
}
?>