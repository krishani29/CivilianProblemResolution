<?php
$dbserver = "127.0.0.1";//localhost
$dbuser = "root";
$dbpwd = "";
$dbname = "civilproblem";

function my_iud($query)//insert,update,delete
{
    global $dbserver, $dbuser, $dbpwd, $dbname; //user previously declared variables 

    $cid = mysql_connect($dbserver,$dbuser,$dbpwd) or die("Connection Failed");

    mysql_select_db($dbname,$cid);
    mysql_query($query,$cid);
    $n = mysql_affected_rows($cid);
    mysql_close($cid);
    return $n;
}

function my_select($query) //select(search)
{
    global $dbserver, $dbuser, $dbpwd, $dbname; //user previously declared variables 

    $cid = mysql_connect($dbserver,$dbuser,$dbpwd) or die("Connection Failed");

    mysql_select_db($dbname,$cid);
    $rs = mysql_query($query,$cid);
    mysql_close($cid);
    return $rs;
}

function my_one($query)//to be used when sql query returns a single value i.e login
{
    global $dbserver, $dbuser, $dbpwd, $dbname; //user previously declared variables 

    $cid = mysql_connect($dbserver,$dbuser,$dbpwd) or die("Connection Failed");

    mysql_select_db($dbname,$cid);
    $rs =  mysql_query($query,$cid);
    $row = mysql_fetch_array($rs);
    mysql_close($cid);
    return $row[0];
}

function verifyuser()
{
   $u = "";
   $p = "";
   if(isset($_COOKIE['cun']) && isset($_COOKIE['cpwd']))
   {
       $u = $_COOKIE['cun'];
       $p = $_COOKIE['cpwd'];
   }
   else {
            if(isset($_SESSION['sun']) && isset($_SESSION['spwd']))
            {
                $u = $_SESSION['sun'];
                $p = $_SESSION['spwd'];
        
         }
         $query = "select count(*) from siteuser where aadharid='$u' and password='$p'";
         $n = my_one($query);
         if ($n==1) {
             return true;       
         }
         else {
             return false;
         }
        }
}
function verifyadmin()
{
   $u = "";
   $p = "";
   if(isset($_COOKIE['cadmin']) && isset($_COOKIE['cpwd']))
   {
       $u = $_COOKIE['cadmin'];
       $p = $_COOKIE['cpwd'];
   }
   else {
            if(isset($_SESSION['sadmin']) && isset($_SESSION['spwd']))
            {
                $u = $_SESSION['sadmin'];
                $p = $_SESSION['spwd'];
        
         }
         $query = "select count(*) from admin where adminname='$u' and password='$p'";
         $n = my_one($query);
         if ($n==1) {
             return true;       
         }
         else {
             return false;
         }
        }
}
?>