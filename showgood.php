<?php
    $good = explode('.',$_GET['good']);
    $id = $good[0];
    include "config.php";
    $sql =  "select * from goods where ID = $id";
    $resp =  mysqli_query($connect,$sql);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="menu">
        <a href="../index.php">Главная</a>
        <a href="../reports.php">Отзывы</a>
        <img class = "basket" src="../photos/basket.png" alt="basket">
</div>
<div class="content">
    <div class="BigPhoto">
    <?php
        if (isset($_GET['good'])) {?>
            <?php
            $sql_countplus = "update goods set count = count+1 where ID = $id";
            $resp_countplus =  mysqli_query($connect,$sql_countplus);
            
            $sql_count = "select * from goods where ID = $id";
            $resp_count =  mysqli_query($connect,$sql_count);
            $array_count = mysqli_fetch_assoc($resp_count);
            $count = $array_count['count'];
                
            ($row = mysqli_fetch_assoc($resp));
            ?>
        <img class = "bigimg" src="../images/<?= $_GET['good']?>" alt="PHOTO">
        <p><?= $array_count['more_info']?></p>
        <p>Цена: <?= $array_count['price']?> руб.</p>

            <?= "Кликов по этому фото: ".$count;?>
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

