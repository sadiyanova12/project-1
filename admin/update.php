<?php
$state = $_GET['state'];
$id = $_GET['id'];

require('../db/db.php');
if($state == 'approve'){
    $sql = "UPDATE users SET Status = 'Approved' WHERE Email = '".$id."'";
}
elseif($state == 'hold'){
    $sql = "UPDATE users SET Status = 'Hold' WHERE Email = '".$id."'";
}
elseif($state == 'decline'){
    $sql = "DELETE FROM users WHERE Email = '".$id."'";
}

if($con->query($sql) ===  TRUE){
    echo "Success";
      }
      
      else{
          echo $con->Error;
      }


?>