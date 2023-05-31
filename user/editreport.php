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
  <div class="container p-4">
      <table class="table tabl-bordered">
          <tr>
              <th>Title</th>
              <th>Date</th>
              <th>Details</th>
              <th>File</th>
          </tr>
          
           <?php 
          include_once('../db/dbconnect.php');
          $sql = "SELECT * FROM report WHERE Email = '".$_SESSION['Email']."' AND DeletionStatus = 0";
          $result = getDataFromDB($sql);
          foreach($result as $row){
              ?>
              <tr>
                 
                  <td><?php echo $row["ReportHeadline"] ?></td>
                  <td><?php echo $row["ReportDate"] ?></td>
                  <td><?php echo $row["ReportDetails"] ?></td>
                   <td>  <a href="editserver.php?id=<?php echo $row["SerialNo"]  ?>" >Edit</a></td>
                 </tr>
              <?php
          }
          ?>
      </table>
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