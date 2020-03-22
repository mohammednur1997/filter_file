<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check website with php code</title>
</head>
<body>
  <?php
    
    $website=$_POST['website'];
    $website=filter_var($website,FILTER_SANITIZE_URL);
    
    if(!filter_var($website,FILTER_VALIDATE_URL)===false)
    {
        echo $website.':-is valid website';
    }else{
        echo $website.':-website is not valid';
    }
    
 ?>
 
 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <input type="text" name="website"> <br>
    <input type="submit" name="submit">
 </form>
 
 
 
 
 
 </body>
</html>