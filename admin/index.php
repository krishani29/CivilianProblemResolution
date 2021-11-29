<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/jquery.min.js"></script>
    <link rel="stylesheet" href="sheet1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php include "header.php"; ?>
</head>
<body>
    <?php include "nav1.php"; ?>
    

    <div class="container" style="margin-top: 30px;">
     <h1 class="text-center">Admin Login</h1>
        <form method="post">
            <div class="form-group">
                <label><b>Admin Name</b></label>
                <input type="text" class="form-control" name="adminname">
                <br>
                <label><b>Password</b></label>
                <input type="password" class="form-control" name="password">
                <input type="checkbox" name="rem" id="rem">&nbsp Remember me
                <br><br>

                <input type="submit" value="login"  name="login" class="btn btn-primary" style="width: 190px;"> <!--success,warning (options) -->

            </div>
        </form>
    </div>
</body>
</html>

<?php
include "dbconfig.php";
if (isset($_POST['login']))
{
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    if (isset($_POST['rem']))
     {
        $remember = "yes";
     }
    else 
    {
        $remember = "no";
    }

    $query = "select count(*) from admin where adminname='$adminname' and password='$password' ";
    $n = my_one($query);
    if ($n==1) 
    {
        $_SESSION['sun'] = $adminname;
        $_SESSION['spwd'] = $password;
        if ($remember=='yes') 
        {
            setcookie('cun',$adminname,time()+60*60*24*7);
            setcookie('cpwd',$password,time()+60*60*24*7);
        }
    header("Location:admin_home.php");
    }
   else 
   {
       echo '<script> alert("Invalid Login Credentials, Try again"); </script>';
   }
    
}
?>