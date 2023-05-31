<?php 
session_start();
if(isset($_SESSION['Email']) OR $_SESSION['Flag']== 'Running'){
    


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body style=" background-color: #A8E8FB;">

<div class="sidenav">
  <div class="logo">
    <i>Health Data</i>
    <i>Admin</i>
  </div>
  <a href="dashboard.php">Home</a>
  <a href="profile.php">Edit Profile</a>
  <a href="message.php">Messages</a>
  <a href="#about">Our Services</a>
</div>
<div class="navbar">
<a href="logout.php">Logout</a>
</div>

<div class="main">
  <div class="container-fluid p-4">
  <?php
include 'contactinfo.php';
   ?>
  </div>
</div>

</body>
</html> 

<?php
    
    }

else{
    header('Location: ../index.php');
}
    ?>