<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </div>
    <div class="content">
        <div class="formlogin">
            <h2 class =  'loginhead' >Вход</h2>
            <form action="server/serverlogin.php" method = "POST">
                <input  class ="login" type="text" name = "login"  placeholder = 'Ваш Логин'>
                <input class ="login" type="password" name = 'pass'  placeholder = 'Ваш Пароль'>
                <input class = "submitlogin" type="submit" value = "Войти">
            </form>
            <a href="reg.php">Зарегистрироваться</a>
        </div>
    </div>
    <div class="footer">
        Copyright &copy;  <?= date('Y');?>
    </div>
    
</body>
</html>