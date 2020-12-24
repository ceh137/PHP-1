<?php
    include "server/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="menu">
        <a href="index.php">Главная</a>
        <a href="reports.php">Отзывы</a>
        <a href="login.php">Личный кабинет</a>
        <?php session_start();
        if(isset($_SESSION['login_acc'])): ?>
            <a href="account.php"><?= $_SESSION['login_acc']?></a>
        <?php endif; ?>
        <a href="cart.php"><img class = "basket" src="../photos/basket.png" alt="basket"></a>        </div>
</div>
<div class="content">
    <div class="info">
        <?php
            session_start();
            if (isset($_SESSION)){
                $id = $_SESSION['user'];
                $sql_getuser = "select * from users where ID = '$id'";
                $result = mysqli_query($connect, $sql_getuser);
                $row = mysqli_fetch_assoc($result);
                echo "Добро пожаловать, ".$row['name']."!<br>";
                echo "Ваш логин: ".$row['login']."<br>";
                echo "Ваша почта: ".$row['mail']."<br>";
                
            }
        ?>
    </div>
</div>
<div class="footer">
        Copyright &copy;  <?= date('Y');?>
    </div>
</body>
</html>