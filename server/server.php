<?php
    
    include "config.php"; 
    if  (($_POST['name'] != '') && ($_POST['report'] != '')) {
        $name = $_POST['name'];
        $report = $_POST['report'];
        $name  = mysqli_real_escape_string($connect,$name);
        $report = mysqli_real_escape_string($connect,$report);
        $sql = "insert into reports (`FIO`,`text`) values ('$name','$report')";
        $result =  mysqli_query($connect,$sql);
    }
        header ("Location: reports.php");
        

        
  


    

    

   

?>
