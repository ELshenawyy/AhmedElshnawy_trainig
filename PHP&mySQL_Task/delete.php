<?php

include_once 'incluses/connection.php';

$id = $_GET['id'];

$deleteStd = "DELETE FROM students WHERE id=$id";

if(mysqli_query($conn , $deleteStd)){
    header('location:index.php');
}