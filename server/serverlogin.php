<?php 
    include "config.php";
    if(isset($_POST)) {
        $login = $_POST['login'];
        $pass = md5($_POST['pass']);
        $sqllogin = "select * from users where login = '$login'";
        $result = mysqli_query($connect, $sqllogin);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            if ($pass = $row['pass']) {
                session_start();
                $_SESSION['user'] = $row['ID'];
                $_SESSION['login_acc'] = $row['login'];
                header("Location: ../account.php");
            } else {
                header("Locatiom: ../login.php?access=denied");
            }
        }
    }
?>
