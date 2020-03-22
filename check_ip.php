<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check ip with php code</title>
</head>
<body>
  
     <?php
    /*
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $ip=test_input($_POST['ip']);
    }
    
    function test_input(data)
    {
        $data=trim(data);
        $data=stripslashes(data);
        $data=htmlspecialchars(data);
        return $data;
    }
    */
    
  
        $ip =$_POST['ip'];

        if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
            echo("$ip is a valid IP address");
        } else {
            echo("$ip is not a valid IP address");
        }

    ?>
    
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" name="ip"> <br>
        <input type="submit" name="submit">
    </form>

</body>
</html>