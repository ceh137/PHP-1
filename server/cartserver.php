<?php
    session_start();
    include "config.php";
    if(isset($_SESSION['login_acc'])){
        if(isset($_GET['good'])){
            $id_good = $_GET['good'];
            $count = $_POST['count'];
            $id_user = $_SESSION['login_acc'];
            $sql = "insert into cart (`id_good`,`count`,`id_user`) values ('$id_good','$count','$id_user')";
            $result = mysqli_query($connect, $sql);
            
            header("Location: ../cart.php");
        }
    }
    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $sql = "delete from cart where ID = $delete";
        $result = mysqli_query($connect, $sql);
        header("Location: ../cart.php");
    }
?>