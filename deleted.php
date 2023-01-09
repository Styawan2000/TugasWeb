<?php
require 'set.php';

if (isset($_GET['code'])) {

    $code = $_GET['code'];

    $query = mysqli_query($connect, "DELETE FROM Blog where id_blog='$code'");

    if ($query) {
        header('location: index.php');
    } else {
        echo 'Error => ' . mysqli_error($connect);
    }
} else {
    header('location: index.php');
}