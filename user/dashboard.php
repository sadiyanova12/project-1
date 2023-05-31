
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
  </div>
  <a href="dashboard.php">Home</a>
  <a href="profile.php">Edit Profile</a>
  <a href="contact.php">Contact</a>
  <a href="#about">About</a>
</div>
<div class="navbar">

<a href="logout.php">Logout</a>
</div>

<div class="main">
  <div class="container p-4 bg-dark" style= "border: 1px solid; box-shadow: 20px 20px 10px grey;">
      <div class="row">
          <div class="col-5">
              <div class="card - text-light p-5" style=" background-color: #10176b;">
                     <img src="../Images/reportadd.jpg" alt="" style="height: 300px; border: 3px solid red; box-shadow: 0px 0px 10px white">
                      <h3 class="mt-4 mb-4 text-center">Report Modification</h3>
                      <div class="row">
                      <div class="col-3">
                      <a href="addreport.php" class="btn btn-primary btn-sm">Add Report</a>
                      </div>
                      <div class="col-3">
                      <a href="generatereport.php" class="btn btn-success btn-sm">Generate Report</a>
                      </div>
                      <div class="col-3">
                      <a href="editreport.php" class="btn btn-warning btn-sm">Edit Report</a>
                      </div>
                      <div class="col-3">
                      <a href="deletefile.php" class="btn btn-danger btn-sm">Delete Report</a>
                      </div>
                      </div>
              </div>
          </div>
          <div class="col-2"></div>
          <div class="col-5">
               <div class="card bg-info text-light p-5"  style=" background-color: #4c528d;">
                <img src="../Images/search.jpg" alt="" style="height: 300px; border: 3px solid red; box-shadow: 0px 0px 10px white">
                      <h3 class="mt-4 mb-4 text-center">Report Search</h3>
                  <div class="row">
                      <div class="col">
                      <a href="datewise.php" class="btn btn-danger btn-sm">Date Wise</a></div>
                      <div class="col">
                      <a href="headerwise.php" class="btn btn-danger btn-sm">Header Wise</a></div><div class="col">
                      <a href="all.php" class="btn btn-danger btn-sm">View All</a></div>
                  </div>
              </div>
          </div>
      </div>
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
