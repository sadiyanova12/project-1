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
  <a href="#about">Home</a>
  <a href="profile.php">Edit Profile</a>
  <a href="message.php">Messages</a>
  <a href="#about">Our Services</a>
</div>
<div class="navbar">
<a href="logout.php">Logout</a>
</div>


<div class="main">
  <div class="container-fluid p-4">
      <table class="table table-sm table-bordered table-striped">
          <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>DOB</th>
              <th>Gender</th>
              <th><small>Status</small></th>
              <th>NID</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Action</th>
          </tr>
          
          <?php 
          include_once('../db/dbconnect.php');
          $sql = "SELECT * FROM members INNER JOIN users ON users.Email = members.Email";
          $result = getDataFromDB($sql);
          foreach($result as $row){
              ?>
              <tr>
                  <td><img src="<?php echo $row["Image"] ?>" style="height: 70px; width: 70px" alt=""></td>
                  <td><?php echo $row["Name"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                  <td><?php echo $row["DOB"] ?></td>
                  <td><?php echo $row["Gender"] ?></td>
                  <td><?php echo $row["RelationshipStatus"] ?></td>
                  <td><?php echo $row["NID"] ?></td>
                  <td><?php echo $row["Address"] ?></td>
                  <td><?php echo $row["PhoneNo"] ?></td>
                  <td><?php
                      if($row['Status'] == 'Pending'){
                          ?>
                          <a href="update.php?state=approve&id=<?php echo $row["Email"] ?>" class="btn btn-sm btn-success">Approve</a>
                          <a  href="update.php?state=decline&id=<?php echo $row["Email"] ?>"  class="btn btn-sm btn-danger">Decline</a>
                          <?php
                      }
                        elseif($row['Status'] == 'Approved'){
                          ?>
                          <a href="update.php?state=hold&id=<?php echo $row["Email"] ?>"  class="btn btn-sm btn-warning">Hold</a>
                          <?php
                      }
              
              else{
                          ?>
                            <a href="update.php?state=approve&id=<?php echo $row["Email"] ?>" class="btn btn-sm btn-success">Approve</a>
                          <a  href="update.php?state=decline&id=<?php echo $row["Email"] ?>"  class="btn btn-sm btn-danger">Decline</a>
                          <?php
                      }
                      ?></td>
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