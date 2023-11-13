<?php

require_once 'includes/connection.php';
session_start();
if(!isset($_SESSION['users'])){
    header('location:login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php' ?>
</head>

<body>

    <!-- NavBar -->
    <?php include_once 'includes/navBar.php' ?>

    <section class="my-5 container text-center">
        <?php if (isset($_SESSION['user'])) : ?>

            <div class="alert alert-success py-4 w-50 m-auto">

                <h2>Welcome

            </div>

        <?php endif ?>
    </section>
    <!-- Fotter -->
    <?php include_once 'includes/footer.php' ?>



</body>

</html>