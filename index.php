<?php 

    include "server/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <div class="menu">
            <a href="index.php">Главная</a>
            <a href="reports.php">Отзывы</a>
            <a href="login.php">Личный кабинет</a>
            <?php session_start();?>
            <a href="account.php"><?= $_SESSION['login_acc']?></a>
            <a href="cart.php"><img class = "basket" src="../photos/basket.png" alt="basket"></a>        </div>
        <div class="top">
            <h1 class = "tophead">Лучшие автомобили в индустрии</h1>
            <p class = "toptext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu venenatis massa, quis scelerisque arcu. Morbi efficitur tellus et dignissim semper. Duis malesuada, orci at vulputate bibendum, eros mauris viverra ligula, sed efficitur lacus orci sit amet ante. In quis aliquam tellus. Phasellus mollis urna quis leo feugiat venenatis. Cras efficitur vel nibh at molestie. Praesent quis purus in diam ullamcorper finibus. Nullam et urna vitae nibh posuere gravida et non lacus. Ut at fringilla risus. Etiam efficitur sem id malesuada molestie. Phasellus nec gravida lorem, ut elementum tellus. Quisque lorem odio, egestas in volutpat nec, efficitur ut turpis. Cras pulvinar felis vel leo imperdiet, non sollicitudin sem dictum. Integer sit amet luctus eros. Vestibulum semper eros semper nunc interdum, eu volutpat nibh dapibus. Nunc tristique risus vel justo porta portas</p>
        </div>
    </div>
    <div class="content">
    <div >
        <h1 class ='headgoods'>Мы продаем только самое  лучшее.</h1>
    </div>
        <div class="photos">
            <?php 
                $sql =  "select * from goods order by count desc";
                $resp =  mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($resp)):?>
                    <div class="good">
                    <a class ="aimg" href="showgood.php/?good=<?= $row ['img']; ?>" target = "_blank" ><img src="images/<?= $row['img'] ?>" alt="photo"></a>
                    <h4><?= $row['name']?></h4>
                    <p><?= $row['info']?></p>
                    <h4>Цена: <?= $row['price']?> руб.</h5>
                    <form action="server/cartserver.php?good=<?= $row['ID']?>" method = "post">
                    <input type="submit" value = "В корзину">
                    <p>Кол-во</p>
                    <select name="count" >
                        <option selected value="1">1</option>
                        <option  value="2">2</option>
                        <option  value="3">3</option>
                        <option  value="4">4</option>
                        <option  value="5">5</option>
                        <option  value="6">6</option>
                        <option  value="7">7</option>
                        <option  value="8">8</option>
                        <option  value="9">9</option>
                        <option  value="10">10</option>
                    </select>
                    </form>
                    <a class = "buyButton" href="showgood.php/?good=<?= $row ['img']; ?>" target = "_blank">Подробнее</a>
                    </div> 
                <?php
                endwhile;
                ?>
        </div>
    </div>

    <div class="reviews">
        
    </div>
    <div class="footer">
        Copyright &copy;  <?= date('Y');?>
    </div>
</body>
</html>