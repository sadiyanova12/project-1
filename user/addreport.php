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

<div class="main">
  <div class="container p-4 bg-info mt-5">
      <form action="reportserver.php" method="post" enctype="multipart/form-data">
          <label for="">Title</label>
          <input type="text" name="Title" class="form-control">
           <label for="">Date</label>
          <input type="date" name="Date" class="form-control"> 
          <label for="">File</label>
          <input type="file" name="File" class="form-control">
           <label for="">Description</label>
           <textarea name="Desc" class="form-control" style="min-height: 100px; max-height: 100px;" id="" cols="30" rows="10"></textarea>
           <button type="submit" class="btn btn-success">Submit</button>
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
