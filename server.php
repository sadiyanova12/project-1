<?php
$Email = $_POST['email'];
$Password = $_POST['password'];

$usersql = "SELECT * FROM users WHERE Email = '".$Email."' and Status = 'Approved'";
include_once 'db/dbconnect.php';
$res = getDataFromDB($usersql);
$count = count($res);

if ($count != 0){ 
    session_start();
    foreach ($res as $row) {
        if($row['Email']== $Email and $row["Password"] == $Password){
if ($row["UserRole"]=="Admin")
         {
         $_SESSION["userrole"] = 'admin';
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Flag"] = 'Running';
             header("Location: admin/dashboard.php");
         }
        else {
            $_SESSION["userrole"] = 'General';
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Flag"] = 'Running';
            header ("Location: user/dashboard.php") ;
          }
       }
   else{
 echo '<script language="javascript">';
  echo 'alert("Invalied Usermail OR PASSWORD"); location.href="index.php"';
  echo '</script>';
        }
 }
}
else{
    echo '<script language="javascript">';
    echo 'alert("NO USER FOUND"); location.href="index.php"';
    echo '</script>';
  }
?>