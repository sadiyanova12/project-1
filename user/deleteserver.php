<?php
require ('../db/db.php');
$sql = "UPDATE report SET DeletionStatus = 1 WHERE SerialNo = '".$_GET['id']."'";
if($con->query($sql) ===  TRUE ){
    echo "Success";
      }
      
      else{
          echo $con->Error;
      }
?>