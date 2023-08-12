<?php

session_start();

if ( !isset($_SESSION['id']) ) {
    ?>
    <script>
        alert("Please Signin..!");
        window.location.href="login.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
        <!-- <link rel="stylesheet" href="css/css/bootstrap.css" /> -->
        <link href="css/css/bootstrap.min.css" rel="stylesheet" />
        <script src="css/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <title>Login Success</title>
    </head>

    <body>
        <h1 class="text-center mt-5">Login Success</h1>
        <div class="text-center">
            <img class="img-fluid" src="./img/check-green.gif" alt="Success" height="200px" width="200px" alt="" />
        </div>
        <!--  -->
    </body>
</html>

