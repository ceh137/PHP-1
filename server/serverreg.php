<?php 
    include "config.php";
    if(isset($_POST)){
        $login = $_POST['login'];
        $name = $_POST['name'];
        $pass = md5($_POST['pass']);
        $mail = $_POST['mail'];
        session_start();
        $_SESSION["login"] =  $login;
        $_SESSION['pass'] = $pass;
        
        $sql = "insert into `users` (name, login, pass, mail) values ('$name','$login','$pass','$mail')";
        $result = mysqli_query($connect, $sql);
        header("Location: ../login.php");
    }
?>