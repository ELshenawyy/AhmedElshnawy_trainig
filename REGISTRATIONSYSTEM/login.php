<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php' ?>
</head>

<body>

    <!-- NavBar -->
    <?php include_once 'includes/navBar.php' ?>
    <section class="my-5 container w-50 mx-auto py-5">
        <div class="alert alert-secondary py-3 text-center">
            <h2>Login now</h2>
        </div>
        <form action="loginaction.php" method="post">
            <div class="form-group my-2">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            
            <div class="form-group my-2">
                <label for="password">Password</label>
                <input type="number" class="form-control" id="password" name="password">
            </div>

           
            <input type="Submit" value="Log in"
             class="btn btn-secondary my-2" name="login">
        </form>
    </section>


    <!-- Fotter -->
    <?php include_once 'includes/footer.php' ?>



</body>

</html>