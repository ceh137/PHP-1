<?php
    include "server/config.php";
    session_start();
    $id_user = $_SESSION['login_acc'];
    $sql = "select * from cart where id_user = '$id_user'";
    $result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=max, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php">Главная</a>
        <a href="reports.php">Отзывы</a>
        <a href="login.php">Личный кабинет</a>
        <?php session_start();?>
        <a href="account.php"><?= $_SESSION['login_acc']?></a>
        <a href="cart.php"><img class = "basket" src="../photos/basket.png" alt="basket"></a>        </div>
    <div class="content">
        <div class="info">
            <p>Ваша корзина:</p>
            <br>
            <br>
            <?php
            while($row = mysqli_fetch_assoc($result)){?>
                <p>Вы заказали товар номер <?= $row['id_good']?></p>
                <p>Кол-во: <?= $row['count']?></p>
                <a href="server/cartserver.php?delete=<?=$row['ID']?>">Удалить товар</a>
                <br>
                <br>
            <?php
        }
        ?>
            
        </div>
    </div>
    <div class="footer">
        Copyright &copy;  <?= date('Y');?>
    </div>
</body>
</html>