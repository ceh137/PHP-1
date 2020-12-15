<?php 
    include "config.php";
    
    
    if (isset($_POST)) {
        foreach ($_POST as $key => $value) {
            $str = explode('_',$key);
            $whatweneed = $str[1];
           if ($str[0] == 'Name') {
            $sqlName = "update goods set name = '$value' where ID = '$whatweneed';";
            $result =  mysqli_query($connect,$sqlName);
           } elseif ($str[0] == 'Info') {
            $sqlInfo = "update goods set info = '$value' where ID = '$whatweneed';";
            $result =  mysqli_query($connect,$sqlInfo);
           } elseif ($str[0] == 'Price') {
            $value = (int)$value;
            $sqlPrice = "update goods set price = '$value' where ID = '$whatweneed';";
            $result =  mysqli_query($connect,$sqlPrice);
           } elseif ($str[0] == 'Count') {
            $value = (int)$value;
            $sqlCount = "update goods set count = '$value' where ID = '$whatweneed';";
            $result =  mysqli_query($connect,$sqlCount);
           } elseif ($str[0] == 'Moreinfo') {
            $value = $value;
            $sqlMoreInfo = "update goods set more_info = '$value' where ID = '$whatweneed';";
            $result =  mysqli_query($connect,$sqlMoreInfo);
           }elseif ($str[1] == 'New'){
               if  ($str[0] == 'name') {
               $name = $value;
            } elseif ($str[0] == 'info') {
                $info = $value;
            } elseif ($str[0] == 'price') {
                $price = (int)$value;
            } elseif ($str[0] == 'moreinfo') {
                $moreinfo = $value;
            } elseif ($str[0] == 'Img'){
                $path = $_FILES['Img_New']['tmp_name'];
                $move = "/Applications/MAMP/htdocs/images/".$_FILES['Img_New']['name'];
                copy($path, $move );
            }
           
        }  }   }
        if (isset($_FILES)) {
            $path = $_FILES['Img_New']['tmp_name'];
                $move = "/Applications/MAMP/htdocs/images/".$_FILES['Img_New']['name'];
                copy($path, $move );
        }
        if (($name  != "") && ($info  != "") && ($price  != "") && ($moreinfo  != "")  ) {
        $name = mysqli_real_escape_string($connect,$name);
        $info = mysqli_real_escape_string($connect,$info);
        $more_info = mysqli_real_escape_string($connect,$moreinfo);
        $price = mysqli_real_escape_string($connect,$price);
        $img = $_FILES['Img_New']['name'];
        
        $sqladd = "INSERT INTO `goods`( `name`, `info`, `more_info`, `img`, `price`,`count`) VALUES ('$name','$info','$more_info','$img','$price','0')";
        $result  = mysqli_query($connect, $sqladd);
        } 
        
        
        if (isset($_GET['delete'])){
            $id = $_GET['delete'];
            $sqldelete = "DELETE FROM `goods` where  ID = '$id';";
            $result = mysqli_query($connect,  $sqldelete);
        }
      
        header("Location: CRUD.php");
        
?>