<?php

include('./dbconn.php');

if( isset($_POST['submit']) ) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $hashPass = md5($pass);

    $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$hashPass')";
    $result = mysqli_query($conn, $query);
    if ( $result ) {
        ?>
        <script>
        alert("Signup Successfully..!")
        window.location.href="login.php";
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("DB Error..!")
        window.location.href="signup.php";
        </script>
        <?php
    }

}

?>