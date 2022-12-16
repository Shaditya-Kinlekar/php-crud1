<?php
include 'connect.php';

if (isset($_GET['deletename'])) {
    $name = $_GET['deletename'];

    $sql = "delete from `crud` where name='$name'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
