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
   <form action="editfinalserver.php" method="post">
       <label for="">ID</label>
       <input type="text" name="ID" class="form-control mb-3" value="<?php echo $_GET['id'] ?>" readonly>
       <label for="">Option To Change</label>
       <select name="Option" id="" class="form-control mb-3">
           <option value="">Select an option to change</option>
           <option value="ReportHeadline">Report Headline</option>
           <option value="ReportDetails">Report Details</option>
       </select>
       <label for="">Value</label>
       <input type="text" class="form-control mb-3" name="Value">
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