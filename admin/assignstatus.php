<?php
$id=$_GET['id'];
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
    <style>
      thead{
          background-color: skyblue;
          <color:black></color:black>;
          }
          table{
              margin-top:20px;
          }
        
      </style>

    <?php include "header.php"; ?>
</head>
<body>
    <?php include "nav2.php"; ?>

    <div class="container" style="margin-top: 30px;">
        <h1 class="text-center">Assign Status</h1>

        <form action="" method="post">
        <div class="form-group"></div>
        <label>Aadhai Id</label>
        <input type="text" class="form-control" readonly name="aadharid" value="<?php echo $id ?>">
      <br>
        <label for="status">Status</label>
        <select name="status" class="form-control">
        <option value="accept">Accept</option>
        <option value="reject">Reject</option>
        </select>
  <br>
        <input type="submit" value="submit" name="submit" class="btn btn-primary" style="width: 150px;">
        
        </form>
         </div>
         </body>
         </html>
    <?php
    include "dbconfig.php";
    if (isset($_POST['submit']))
     {
        $status = $_POST['status'];
        $query = "update siteuser set status = '$status' where aadharid='$id' ";
         my_iud($query);
         header("Location:newuser.php");
    }

