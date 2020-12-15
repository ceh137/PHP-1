<?php 
    if (isset($_POST)) {
        $y = $_POST['y'];
        $x = $_POST['x'];
        if ($_POST['sign'] == '+') {
            $result = $x + $y;
        } elseif ($_POST['sign'] == '-') {
            $result = $x - $y;
        } elseif ($_POST['sign'] == '/') {
            $result = $x / $y;
        } elseif ($_POST['sign'] == '*') {
            $result = $x * $y;
        }
        
       header ("Location: calculator.php?result=$result&x=$x&y=$y");
    }
    
    
?>