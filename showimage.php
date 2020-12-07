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
       <img class ="fullImage" src="../images/<?= $_GET['image']?>" alt="PHOTO">
    <?php
    } 
?>
</div>
</body>
</html>

