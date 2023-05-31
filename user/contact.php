<?php 
session_start();
if(isset($_SESSION['Email']) OR $_SESSION['Flag']== 'Running'){
    


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../css/design.css">
</head>
<body style=" background-color: #A8E8FB;">

<div class="sidenav">
<div class="logo">
    <i>Health Data</i> <br>
  
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
<div class="container"> 
        
        <form action="contactserver.php" method="post">
                 <h1 class="text-center text-dark  pt-5 pb-2">Contact Us</h1>
           <div class="card-group mt-3 pt-5 pb-3 ">
            
            
            <div class="card  text-light p-4" style="background:#22313a;">
              <div class="card-body text-center">
               <h2 class="card-text text-light mb-3 "> Write down your massage</h2>
                 </div>
                                                <label for="">Name</label>
                                                <input type="text" id="" name="Name" class="form-control form-control-sm p-4 mb-3" placeholder=" Name">
                                               
                                           
                                                <label for="">Email</label>
                                                <input type="email" id="" name="Email" class="form-control form-control-sm p-4 mb-3" placeholder="Email">
        
        
                                                <label for="">Subject</label>
                                                <input type="text" id="" name="Subject" class="form-control form-control-sm p-4 mb-3" placeholder="Subject">
        
                                                <label for="">Your Massage</label>
                                                <input type="text" id="" name="YourMassage" class="form-control form-control-sm p-4 mb-3" placeholder="Massage">
        
                                                <button class="btn mt-3 mb-3 btn-block btn-info p-2"><a title="submit" href="#"></a>Submit</button>
</form>
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