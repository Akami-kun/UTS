<?php
$namaSaya = 'putra';

if($namaSaya = 'putra'){
  echo $namaSaya.'</br>';
  echo 'nama sudah benar';
}
else{
  echo 'nama nya salah beda cuy';
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Putra uts</title>
</head>
<body>
    <form action="" method="post" name="form1">
        <p>masukin nomimal uang kamu</p>
        <input type="number" name="uang" >
        <input type="submit" name="Submit" value="Konfirmasi">
    </form>
    <?php 
        $duit = 0;
        if(isset($_POST['Submit'])){
            $duit = $_POST['uang'];
            if($duit < 10000){
                echo 'jajan nya dikit aja';
            }else if($duit > 10000){
                echo 'jajan nya yang banyak';
            }
        }
    ?>
</body>
</html> 