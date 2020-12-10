<?php
    $photo = explode('.',$_GET['image']);
    $id = $photo[0];
    include "config.php";
    $sql =  "select * from images where ID = $id";
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
   
<div class="BigPhoto">
<?php
    if (isset($_GET['image'])) {?>
        <?php
        $sql_countplus = "update images set count = count+1 where ID = $id";
        $resp_countplus =  mysqli_query($connect,$sql_countplus);
        
        $sql_count = "select * from images where ID = $id";
        $resp_count =  mysqli_query($connect,$sql_count);
        $array_count = mysqli_fetch_assoc($resp_count);
        $count = $array_count['count'];
            
        ($row = mysqli_fetch_assoc($resp));
        ?>
       <img width = <?= $row['size']."px"; ?> src="../images/<?= $_GET['image']?>" alt="PHOTO">
       <br>
        <?= "Кликов по этому фото: ".$count;?>
    <?php
    
    } 
?>
</div>
</body>
</html>

