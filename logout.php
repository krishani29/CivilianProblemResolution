<?php

session_start();
$_SESSION['sadmin']="";
$_SESSION['spwd']="";
session_destroy();
setcookie('cadmin',"",time()-60*60*24*7);
setcookie('cpwd',"",time()-60*60*24*7);
header("Location:index.php");
?>