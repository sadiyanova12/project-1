<?php

$email = $_POST["Email"];
$filename = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$fileextension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$newname = $email.'.'.$fileextension;
$destination = 'Images/'.$newname;
$dbdestination = '../Images/'.$newname;
if(file_exists($destination)){
    echo "File already there";
}

else{
move_uploaded_file($tmp_name,$destination);
    require ('db/db.php');
    $member = "INSERT INTO `members`( `Name`, `Email`, `Gender`, `RelationshipStatus`, `DOB`, `Address`, `Image`, `PhoneNo`, `NID`) VALUES ('".$_POST['FullName']."','".$_POST['Email']."','".$_POST['Gender']."','".$_POST['RStatus']."','".$_POST['DOB']."','".$_POST['Address']."','".$dbdestination."','".$_POST['Phone']."','".$_POST['NID']."')";
    
    $users = "INSERT INTO `users`( `Email`, `Password`, `FirstName`) VALUES ('".$_POST['Email']."','".$_POST['Password']."','".$_POST['FullName']."')";
}
if($con->query($member) ===  TRUE AND $con->query($users) ===  TRUE){
    echo "Success";
      }
      
      else{
          echo $con->Error;
      }
?>
