<?php
include '../config.php';

if(isset($_POST['add_new_admin'])) {
    $username = $_POST['username'];
    $salt = "Jfdjdjfm74774hfbd7f8";
    $password = $_POST['password'].$salt;
    $password = sha1($password);
    $query = "INSERT INTO user(username, password) VALUES('$username', '$password')";
    #$result = mysqli_query($connect, $query);
    $is_success = "register_fail";

    if($db->query($query) === TRUE){
     $is_success = "register_success";
    }

    header("location:../index.php?success=" . $is_success );
}

?>