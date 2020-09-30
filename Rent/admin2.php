<?php
session_start();
$x=$_POST['A'];//name
$y=$_POST['P'];//password

$_SESSION['name']=$x;
$_SESSION['pswd']=$y;

mysql_connect("localhost","root","");
mysql_select_db("ucem");
 
$query="SELECT * FROM admin WHERE name='$x' AND password='$y'";
$result=mysql_query($query);
$row=mysql_num_rows($result);
 
//for empty field
if($x==""||$y=="")
{
 echo "<script>alert('Fill Required...');window.location.href='admin1.php';</script>";
 //echo "<a href='admin1.php'>Try Again</a>";
}
else
{
 if($row!=0)
 {
  echo "<script>alert('Welcome,$x');window.location.href='admin.php';</script>";
 }
 else
 {
  echo "<script>alert('Wrong name or password !!! Try again...');window.location.href='admin1.php';</script>";
 }
}
?>