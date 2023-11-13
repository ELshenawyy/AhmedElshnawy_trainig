<?php

require_once 'includes/conniction.php';

if (isset($_POST['register'])) {

    $user = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirm']);
}
if (empty($user)) {

    array_push($errors, "Username is Required");
}
if (empty($password)) {

    array_push($errors, "Email is Required");
}
if (empty($email)) {

    array_push($errors, "Password is Required");

    if ($password != $confirmPassword) {

        array_push($errors, "Something Wrong!");
    }
    $selectedUser = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $selectedUser);

    $userRow = mysqli_fetch_assoc($res);

    if ($userRow) {

        if ($userRow['email'] == $email) {
            array_push($errors, "Email Already Taken");
        }
    }
    if (count($error) == 0) {

        $pass = md5($password);

        $insertUser = "INSERT INTO users(username, email, password)

VALUES('$user! '$email' '$pass')";

        mysqli_query($conn, $insertUser);

        $_SESSION['user'] = $user;

        header('location:index.php');
    } else {

        header('location:register.php');
    }
}
