<!DOCTYPE html>
<html lang="en">
<head>
<title>SignUp</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<section style="background-color: #8fc4b7;">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="Images/report.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
          <h1 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Health Data</h1>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Information</h3>

            <form action="regserver.php" method="post" enctype="multipart/form-data">
        <label for="">Full Name</label>
        <input type="text" name="FullName" class="form-control mb-2">
        <label for="">Email</label>
        <input type="email" name="Email" class="form-control mb-2">
        <label for="">Password</label>
        <input type="password" name="Password" class="form-control mb-2"> 
        <label for="">Confirm Password</label>
        <input type="password" name="CPassword" class="form-control mb-2">
         <label for="">Gender</label><br>
        <input type="radio" name="Gender" class="mb-2" value="Male"> Male 
        <input type="radio" name="Gender" class="mb-2" value="Female"> Female <br>
         <label for="">Date Of Birth</label>
        <input type="date" name="DOB" class="form-control mb-2">
        <label for="">NID</label>
        <input type="number" name="NID" class="form-control mb-2">
        <label for="">Phone Number</label>
        <input type="number" name="Phone" class="form-control mb-2"> 
        
        <label for="">Image</label>
        <input type="file" name="image" class="form-control mb-2">
         
         
          <label for="">Relationship Status</label><br>
        <input type="radio" name="RStatus" class="mb-2" value="Single"> Single 
        <input type="radio" name="RStatus" class="mb-2" value="Married"> Married
        <br>
        <label for="">Address</label>
        <textarea name="Address" id="" cols="30" rows="10" style="min-height: 70px; max-height: 70px" class="form-control mb-2"></textarea>
        <button type="submit" class="btn btn-success">Register</button>
        <br>
        <a href="index.php">Back to home</a>
        </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>         
</html>