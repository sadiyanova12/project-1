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
<body>

<div class="sidenav">
<div class="logo">
    <i>HEALTH DATA</i>
    
  </div>
  <a href="dashboard.php">Home</a>
  <a href="profile.php">Edit Profile</a>
  <a href="contact.php">Contact</a>
  <a href="#about">About</a>
</div>
<div class="navbar">

<a href="../index.php">Logout</a>
</div>
<?php 
require ('../db/db.php')?>
<div class="main">
  <div class="container p-4">
   <form action="datewiseresult.php" method="post">
       <label for="">Date</label>
       <input type="date" class="form-control" name="Date">
       <button class="btn btn-block btn-success">Submit</button>
   </form>
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