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

<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="background-color: blueviolet;">
    <a href="index.php" class="navbar-brand" id="brand">Civil Problem Resolution</a>
    <span class="navbar-text" style="color:yellow;">Vote For Development 
    </span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mymenu">
        <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="user_home.php" class="nav-link" style="color: white;">Home</a></li>
            <li class="nav-item"><a href="addproblemuser.php" class="nav-link" style="color: white;">Add Problem</a></li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"   data-toggle="dropdown" style="color: white;">
                View Problems</a>
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="notstarteduser.php"> Problems yet not solved</a></li>
                    <li><a class="dropdown-item" href="inprogressuser.php">Problems in progress</a></li>
                    <li><a class="dropdown-item" href="completeduser.php" >Problems solved</a></li>
                    <li><a class="dropdown-item" href="allproblemuser.php" >View all problems</a></li>
                </ul>
            </li>

            <li class="nav-item"><a href="logout.php" class="nav-link" style="color: white;">Logout</a></li>
        </ul>
    </div>  
</nav>
<div class="container-fluid"  style="background-color:rgba(128, 128, 128, 0.411); padding: 7px;" >
<div class="container" style="margin-top: 30px;">
 <div class="row">
 <div class="col-sm-4"><img  src="images/civilsociety.jpg" style="margin-top: 35px;" class="img-responsive" ></div>
     <div class="col-sm-8 responsive" style="margin-top: 60px;"><h1 style="color:rgb(180, 43, 43);font-family: 'Monotype Corsiva';">Civil Problem Resolution</h1></div>
</div>
</div>
 </div>
 </body>
 </html>
