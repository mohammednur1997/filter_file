<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check string with php</title>
</head>
<body>
   <?php
   $string=$_POST['string'];
    
    if(!filter_var($string,FILTER_SANITIZE_STRING)===false)
    {
        echo('input is valid');
    }else{
        echo('input is not valid');
    }
?>
   
   <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
      <input type="text" name="string"> <br>
      <input type="submit" name="submit">
    </form>
</body>
</html>