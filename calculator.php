
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculatorserver.php" method = "POST">
    <input type="number" name = "x" value = "<?=$_GET['x']?>">
    <select name="sign" >
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="number" name = "y" value = "<?=$_GET['y']?>">
    =
    <?= $_GET['result']?>

    <input type="submit" value = "Посчитать"> 
    </form>
</body>
</html>