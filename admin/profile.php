
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
        <div class="col-4 m-auto">
            <?php 
            $sql = "SELECT * FROM users WHERE Email = '".$_SESSION['Email']."'";
    
          include_once('../db/dbconnect.php');
    $res = getDataFromDB($sql);
    foreach($res as $row){
        ?>
        <form action="" method="post">
            <label for="">First Name</label>
            <input class="form-control" readonly type="text" value="<?php echo $row['FirstName'] ?>">
            <label for="">Email</label>
            <input class="form-control" readonly  type="text" value="<?php echo $row['Email'] ?>">
            <label for="">Password</label>
            <input class="form-control" name="password"   type="text">
            
            <button type="submit" name="submit" class="btn btn-warning">Update Password</button>
        </form>
        
        <?php
    }
            ?>
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
    
    <?php 
     if(isset($_POST['submit'])){
         $sql = "UPDATE users SET Password = '".$_POST['password']."' WHERE Email = '".$_SESSION['Email']."'";
         include_once('../db/db.php');
         if($con->query($sql) ===  TRUE ){
    echo "Success";
      }
      
      else{
          echo $con->Error;
      }
     };   
?>
