<?php

    session_start();
    $id_user = $_SESSION['login_acc'];
    include "config.php";
    if(isset($_SESSION['login_acc'])){
        if(isset($_GET['good'])){
            $id_good = $_GET['good'];
            $count = $_GET['count'];
            $sql = "select * from cart where id_good = $id_good and id_user = '$id_user'";
            $result = mysqli_query($connect, $sql);
            
            if (mysqli_num_rows($result) == 0) {
                $sql1 = "insert into cart (`id_good`,`count`,`id_user`) values ('$id_good','$count','$id_user')";
                $result = mysqli_query($connect, $sql1);
             } elseif (mysqli_num_rows($result) >= 1) {
                $sql2 = "update cart set count = count+$count where id_good = $id_good and id_user = '$id_user'";
                $result = mysqli_query($connect, $sql2);

             }

            header("Location: ../cart.php");
       
    };

    }
    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $sql = "delete from cart where ID = $delete";
        $result = mysqli_query($connect, $sql);
        //header("Location: ../cart.php");
    }

    if(isset($_GET['del'])) {
        $sql = "select * from cart where id_user = '$id_user'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        $row = json_encode($row);
        $address = $_GET['address'];
        $del = $_GET['del'];
        $sql = "insert into orders (login,info,address,delivery) values ('$id_user','$row','$address','$del')";
        $result = mysqli_query($connect,$sql);
        $sql = "delete  from cart where id_user = '$id_user'";
        $result = mysqli_query($connect,$sql);
        $sql = "select * from orders where login = '$id_user'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        $id_order = $row['ID'];
        header("Location: ../cart.php?order=$id_order");
    }
    ?>