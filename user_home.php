<?php
session_start();
include "dbconfig.php";
if(verifyuser()){
    $u = $_SESSION['sun'];
    $query = "select * from siteuser where aadharid='$u'";
    $rs = my_select($query);
    while ($row=mysql_fetch_array($rs)) {
        $username=$row[1];
        }
        
}
else {
    header("location:index.php");
}
?>
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
    <?php include "header.php"; ?>
</head>
<body>
    <?php include "nav2.php"; ?>
    <?php echo "<br><h2 style='text-align:center;color:green;'>Welcome $username</h2>"?>

    <div class="container" style="margin-top: 30px;">
   

            
    </div>

</body>
</html>

