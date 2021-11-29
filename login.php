<?php
session_start();
?>


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

    <div class="container" style="margin-top: 30px;">
     <h1 class="text-center">User Login</h1>
        <form method="post">
            <div class="form-group">
                <label><b>Aadhar ID</b></label>
                <input type="text" class="form-control" name="aadharid">
                <br>
                <label><b>Password</b></label>
                <input type="password" class="form-control" name="password">

                <input type="checkbox" name="rem" id="rem">&nbsp Remember me
                <br><br>

                <input type="submit" name="login" value="login" class="btn btn-primary" style="width: 190px;"> <!--success,warning (options) -->

            </div>
        </form>
    </div>

    
</body>
</html>

<?php
include "dbconfig.php";
if (isset($_POST['login']))
 {
 $aadharid = $_POST['aadharid'];
 $password = $_POST['password'];
 if (isset($_POST['rem'])) {
    $rem = "yes";
 }
 else {
    $rem = "no";
 }
 
 
 $query = "select count(*) from siteuser where aadharid='$aadharid' and password='$password' and status='accept' ";
 $ans = my_one($query);
 if ($ans == 1) 
 {
     $_SESSION['sun']=$aadharid;
     $_SESSION['spwd']=$password;

     if ($rem==yes) 
     {
        setcookie('cun',$aadharid,time()+60*60*24*7);
        setcookie('cpwd',$password,time()+60*60*24*7);
     }
   header("location:user_home.php");
 }
 else {
    echo '<script style="font-weight:bold"> alert("Invalid Id or Password..!!, Try again");
    </script>';
 }

}

?>