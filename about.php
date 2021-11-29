<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="sheet1.css">
    <script src="bootstrap/js/bootstrap.min.css"></script>
    <script src="bootstrap/jquery.min.css"></script>
    
    <?php include "header.php"; ?>
    <style>
        .container{
            margin-top: 30px;
        }
        #about{
            border: 2px solid blueviolet;
            border-radius: 7px;
            box-shadow: aquamarine;
            border-image-width: 4px;
            transform: rotateX(360deg);
        }
        .row{
            margin-top: 30px;
        }
       
    </style>
    
</head>
<body>
    <?php include "nav1.php"; ?>
    <div class="container">
        <h1 class="text-center">About Us</h1>
        <div class="row">
            <div class="col-sm-4"><img src="images/aboutus.jpg"  style="height: 200px ; width:300px;"  id="about"class="imr-rwsponsive"></div>
            <div class="col-sm-8">
               <b> Hey There..!!
                It looks like you are here to know us better. Civil Problem Resolution is a user friendly , easy to use website where one can add
                problems of society which he/she thinks goverment should look upon and other people can cote  on these problems. The problem with 
                the highest number of votes will be considered as priority and would be solved first.
                one can view all the problems that people had been uploaded, the problems that are being worked upon and the problems that are already
                solved. To use all these features you need to login first. So register you self fast and help this city to become your dream city.</b>
            </div>

        </div>
     </div>
</div>


    
</body>
</html>