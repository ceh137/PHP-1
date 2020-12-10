<?php 
 $images = scandir ("images");
function GetImg ($images){
    for ($i=2; $i < count($images); $i++){?>
        <div class="photo">
            <a href="showimage.php/?image=<?= $images[$i]?>" target = "_blank" ><img src="images/<?= $images[$i] ?>" alt="photo<?= $i ?>"></a>
        </div>
        <?php }
     }

    include "config.php";
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
        <h1>Тестовый сайт <?= date ('d','m','Y')?></h1>
    </div>
    <div class="content">
        <div class="photos">
            <?php 
                $sql =  "select * from images order by count desc";
                $resp =  mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($resp)):?>
                    <div class="photo">
                    <a href="showimage.php/?image=<?= $row ['path']; ?>" target = "_blank" ><img src="images/<?= $row['path'] ?>" alt="photo<?= $i ?>"></a>
                    </div> 
                <?php
                endwhile;
                ?>
        </div>
    </div>
    <div class="footer">
        Copyright &copy;  <?= date('Y');?>
    </div>
</body>
</html>