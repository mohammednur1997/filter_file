<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Email with php</title>
</head>
<body>
  <?php
    $email=$_POST['email'];
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false)
    {
        echo $email.':-Email is valid';
    }else{
        echo $email.':-Email is not valid';
    }
    ?>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
       <input type="text" name="email"> <br>
       <input type="submit" name="submit"> 
    </form>
   
   
   
   
   
   
   
    
</body>
</html>