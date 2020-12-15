<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <?php 
        include "config.php";
        $sql =  "select * from goods;";
        $resp = mysqli_query($connect,$sql);
    ?>
    <table width = '90%'  border = '1px'>
    <tr>
        <td>Номер товара</td>
        <td>Название</td>
        <td>Описание</td>
        <td>Полное Описание</td>
        <td>Цена</td>
        <td>Фото</td>
        <td>Популярность</td>
        <td>Удаление</td>
    </tr>
    <form action="CRUDserver.php" method = "post" enctype = "multipart/form-data">
    <?php while($row = mysqli_fetch_assoc($resp)):?>
            <tr>
                <td> <?= $row['ID']?> </td>
                <td> <input type="text" name = "Name.<?= $row['ID']?>"  value = "<?= $row['name']?>"> </td>
                <td> <textarea  cols="50" rows="5" name = "Info.<?= $row['ID']?>"><?= $row['info']?></textarea> </td>
                <td> <textarea  cols="50" rows="5" name = "Moreinfo.<?= $row['ID']?>"><?= $row['more_info']?></textarea> </td>
                <td> <input type="text" name = "Price.<?= $row['ID']?>"  value = "<?= $row['price']?>"></td>
                <td> <input type="text" name = "img.<?= $row['ID']?>"  value = "<?= $row['img']?>"></td>
                <td> <input type="text" name = "Count.<?= $row['ID']?>"  value = "<?= $row['count']?>"> </td>
                <td><a href="CRUDserver.php?delete=<?= $row['ID']?>">Удалить товар</a></td>
            </tr>
    <?php endwhile; ?>
    <tr>
        <td>New ID</td>
        <td><input type="text" name =  "name_New"></td>
        <td><textarea name="info_New" cols="50" rows="5"></textarea></td>
        <td><textarea name="moreinfo_New" cols="50" rows="5"></textarea></td>
        <td><input type="text" name =  "price_New"></td>
        <td><input type="file" name = 'Img_New'></td>
        <td>0</td>
        
    </tr>
    </table>
    <input width = "100px" height ="40px" type="submit" value = "Save">
    </form>
</body>
</html>