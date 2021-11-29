<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="sheet1.css">
    
   

</head>
<body>
    <?php include "nav1.php"; ?>
    <?php include "header.php"; ?>

    
    <div class="container" style="margin-top: 25px;">
        <h1 class="text-center">Registeration</h1>
           <form method="post">
               <div class="form-group">
                   <label><b>Aadhar ID</b></label>
                   <input type="text" class="form-control" name="aadharid" required placeholder="xxxx-xxxx-xxxx-xxxx">
                   <br>
                   <label><b>User Name</b></label>
                   <input type="text" class="form-control" name="username" required placeholder="enter your name">
                   <br>
                   <label><b>City</b></label>
                   <input type="text" class="form-control" name="city" required placeholder="your city">
                   <br>
                   <label><b>Address</b></label>
                   <textarea class="form-control" name="address" placeholder="your full address"></textarea>
                   <br>
                   <label><b>Email ID</b></label>
                   <input type="email" class="form-control" name="emailid" required placeholder="abc@gmail.com">
                   <br>
                   <label><b>Contact Number</b></label>
                   <input type="text" class="form-control" name="contact" placeholder="10 digit contact number">
                   <br>
                   <label><b>Password</b></label>
                   <input type="password" class="form-control" name="pswd" required placeholder="password">
                   <br>
                   <label><b>Confirm Password</b></label>
                   <input type="password" class="form-control" name="conpswd" required placeholder="password">
                   <br>
                   
   
                   <input type="submit" value="signup" name="signup" class="btn btn-primary" style="width: 150px;"> <!--success,warning (options) -->
   
               </div>
           </form>
       </div>
    
</body>
</html>

<?php
include "dbconfig.php";
if (isset($_POST['signup'])) 
{
 $aadharid = $_POST['aadharid'];
 $username = $_POST['username'];
 $city = $_POST['city'];
 $address = $_POST['address'];
 $emailid = $_POST['emailid'];
 $contact = $_POST['contact'];
 $pswd = $_POST['pswd'];
 $conpswd = $_POST['conpswd'];
 $status = "Pending";
 
$query = "insert into siteuser values('$aadharid','$username','$city','$address','$emailid','$contact','$pswd','$status')";
$n = my_iud($query);
if ($n==1) {
 echo '<script> alert("SignUp Successfull");
 window.location="login.php";
 </script>';
}
else {
    echo '<script> alert("Something went wrong..!!, Try again");
    </script>';
}
}
?>