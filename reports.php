<?php
    include "config.php";
    $sql = "select * from reports;";
    $resp =  mysqli_query($connect,$sql);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="menu">
    <a href="index.php">Главная</a>
    <a href="reports.php">Отзывы</a>
    <a href="login.php">Личный кабинет</a>
    <?php session_start();?>
    <a href="account.php"><?= $_SESSION['login_acc']?></a>
    <a href="cart.php"><img class = "basket" src="../photos/basket.png" alt="basket"></a>        </div>
</div>
<div class="content">
    <h1>Отзывы</h1>
    <div class="reports">
    <?php 
    while($row = mysqli_fetch_assoc($resp)):?>
        <div class="report">
            <h4><?= $row['FIO']?></h4>
            <p><?= $row['text']?></p>
            <p class = "date"><?= $row['date']?></p>
        </div>
    <?php endwhile;?>
    </div>
    <div class="form">
        <form action="server/server.php" method="post">
            <p>Ваше Имя</p>
            <input type="text" required name = "name">
            <p>Ваш Отзыв</p>
            <textarea name="report"  cols="30" rows="10" required></textarea>
            <input class = "reportButton" type="submit" value = "Отправить">
        </form>
    </div>
</div>
<div class="footer">
        Copyright &copy;  <?= date('Y');?>
</div>
</body>
</html>