<?php
require "../db/db.php";
$Name = $_POST["Name"];

$Email = $_POST["Email"];

$Subject = $_POST["Subject"];
$YourMassage = $_POST["YourMassage"];


$query = "INSERT INTO `contact`(`Name`, `Email`, `Subject`, `YourMassage`) VALUES ('$Name','$Email','$Subject','$YourMassage')";
if($con->query($query) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Info Added Successfully"); location.href="contact.php"';
    echo '</script>';
      }
      
      else{
          echo $con->Error;
      }
      ?>