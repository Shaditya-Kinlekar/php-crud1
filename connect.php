<?php
$con = new mysqli('localhost', 'root', '', 'college');

if (!$con) {
    die(mysqli_error($con));
}
