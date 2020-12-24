<?php
    include "server/config.php";
    session_start();
    $id_user = $_SESSION['login_acc'];
    $sql = "select * from cart where id_user = '$id_user'";
    $result = mysqli_query($connect, $sql);
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
function CartDelete(id){
    $.ajax({
            type: "GET",
            url: "server/cartserver.php",
            data: "delete="+id,
            success: function(id){
               
            }
        });

}
</script>
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
        <?php session_start();
        if(isset($_SESSION['login_acc'])): ?>
            <a href="account.php"><?= $_SESSION['login_acc']?></a>
        <?php endif; ?>
        <a href="cart.php"><img class = "basket" src="../photos/basket.png" alt="basket"></a>        </div>
    <div class="content">
        <?php
            if(!isset($_GET['order'])){
        ?>
        <div class="info">
            <p>Ваша корзина:</p>
            <br>
            <br>
            <?php
            while($row = mysqli_fetch_assoc($result)){?>
                <p>Вы заказали товар номер <?= $row['id_good']?></p>
                <p>Кол-во: <?= $row['count']?></p>
                <button onclick="CartDelete(<?= $row['ID'] ?>)">Удалить из корзины</button>
                <br>
                <br>
            <?php
        }
        ?>
        
        </div>
        <div class="info">
            <h2>Оформление заказа</h2>
            <h3>Способ получения</h3>
            <form action="server/cartserver.php?order=yes">
            <p>Самовывоз</p>
            <input type="radio" name = "del" value = 'self'>
            <p>Курьер</p>
            <input type="radio" name = "del" value = 'courier'>
            <p>Почта</p>
            <input type="radio" name = "del" value = 'post'>
            <p>адрес</p>
            <input type="text" name = 'address'>
            <input type="submit" value="Сделать заказ">
            </form>

        </div>
        <?php } elseif(isset($_GET['order'])) {
                    $id = $_GET['order'];
            ?>
            <div class="info">
                <h1>Спасибо за заказ в нашем магазине. Номер вашего  заказа <?= $id ?></h1>
            </div>
        <?php }?>
    </div>
    <div class="footer">
        Copyright &copy;  <?= date('Y');?>
    </div>
</body>
</html>