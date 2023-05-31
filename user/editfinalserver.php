<?php
require('../db/db.php');
$option = $_POST['Option'];
$sql = "UPDATE report SET $option = '".$_POST['Value']."' WHERE SerialNo = '".$_POST["ID"]."'";
if($con->query($sql) ===  TRUE ){
    echo "Success";
      }
      
      else{
          echo $con->Error;
      }
?>