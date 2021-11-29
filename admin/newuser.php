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
        <h1 class="text-center"> View New User Request</h1>

        <?php
         include "dbconfig.php";
         $query = "select * from siteuser where status='Pending'";
         $rs = my_select($query);

         echo  '<div class="table-responsive">
         <table  class="container-fluid table table-hover" border=2px >
         <thead>
         <tr>
         <th>AadharID</th>
         <th>User Name</th>
         <th>City</th>
         <th>Address</th>
         <th>Email ID</th>
         <th>Contact</th>
         <th>Status</th>
         <th>Action</th>
         </tr>
         </thead>
         <tbody>';
         while ($row=mysql_fetch_array($rs)) 
         {
            echo "<td>$row[0]</td>
              <td>$row[1]</td>
              <td>$row[2]</td>
              <td>$row[3]</td>
              <td>$row[4]</td>
              <td>$row[5]</td>
              <td>$row[7]</td>
              <td><a href='assignstatus.php?id=$row[0]' class='btn btn-secondary' >Assign Status</a></td>
              </tbody>";
         }
         echo
        
            '</table>
            </div>';
         ?>

            
    </div>

</body>
</html>

