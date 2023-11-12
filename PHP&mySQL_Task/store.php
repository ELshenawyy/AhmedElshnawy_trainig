<?php

require_once "includes/connection.php";

if (isset($_POST['add_student'])) {

    $name = $_POST['name'];

    $address = $_POST['address'];

    $grade = $_POST['grade'];

    $gender = $_POST['gender'];

    $insertStd = "INSERT INTO students(name, address, grade, gender)

VALUES('$name', '$address','$grade','$gender)";



    if (mysqli_query($conn, $insertStd)) {

        header('location:index.php');
    } else {

        header('location:create.php');
    }
}
