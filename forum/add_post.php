<?php
include '../php/config.php';
session_start();
$sql = mysqli_query($db, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");
$row = mysqli_fetch_assoc($sql);


$username = $row['username'];
$message = $_POST['message'];
$cat = $_POST['category'];
$title = $_POST['title'];

$row = mysqli_num_rows(mysqli_query($db, "select * from post")) + 1;
$query = "insert into post(id, username, message, id_parent, category, title) values('$row', '$username', '$message', '$row', '$cat', '$title')";
$is_success = "post_fail";
if (mysqli_query($db, $query) === TRUE){
    $is_success = "post_success";
    $res = mysqli_query($db, "SELECT * from categories WHERE name = '$cat'");
    if(mysqli_num_rows($res) == 0) {
        $row2 = mysqli_num_rows(mysqli_query($db, "select * from categories")) + 1;
        mysqli_query($db, "insert into categories(id, name) values('$row2', '$cat')");
    }
}

$is_success = "";
header("location:index.php?success=" . $is_success );
?>
