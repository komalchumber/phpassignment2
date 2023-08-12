<?php

include("./dbconn.php");
session_start();

if( isset($_POST['submit']) ) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashPass = md5($password);
    $sql = "SELECT * from users where email='$email' and password='$hashPass'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($result);
    $id = $rows['id'];
    $count = mysqli_num_rows($result);
    if ( $count != 0 ) {
        $_SESSION['id'] = $id;
        ?>
        <script>
            window.location.href='loginSuccess.php'
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Invalid Email or Password..!");
            window.location.href="login.php"
        </script>
        <?php
    }
}

?>