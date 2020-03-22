<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check integer with php code</title>
</head>
<body>
        
          <?php 
    /*      */
    //data check korar jonno php code
    
        if($_SERVER['REQUEST_METHOD'] =='POST')
        {
            $integer=test_input($_POST['integer']);
        }
    
       function test_input($data)
       {
           $data = trim($data);
           $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
       }
      
    
     $intErr='';
    
      if($_SERVER['REQUEST_METHOD']=='POST')
      {
          
          if(empty($_POST['integer']))
        {
           $intErr='please input your integer';
        }else{
               $int=test_input($_POST['integer']);
          }
    
       }
    
    
        $int=test_input($_POST['integer']);
        $int_option=array("options"=>array("min_range"=>0,"max_range"=>300));

        if(!filter_var($int,FILTER_VALIDATE_INT,$int_option)===false)
        {
            echo($int.':-integer is valid');
        }else{
            echo($int.':-integer is not valid');
        }
        ?>
 
 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
     <input type="text" name="integer">
     <span class="error">* <?php echo  $intErr;?></span> <br>
     <input type="submit" value="submit">
 </form>
  

</body>
</html>