<?php
session_start();

$x=$_POST['m']; //name
$y=$_POST['a']; // password
$z=$_POST['b']; //new password
$w=$_SESSION['oo'];
$aa=$_SESSION['pp'];

if($x==""||$y==""||$z=="")
{
 echo "<script>alert('Fill Required');window.location.href='chng.php';</script>";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("ucem");

$query="SELECT * FROM project WHERE password='$y' and name='$x'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

$q="SELECT * FROM project WHERE password='$y'";
$r=mysql_query($query);
$row1=mysql_num_rows($r);

if($row!=0)
{
  $query1="UPDATE project SET password='$z' WHERE password='$y'";
 mysql_query($query1);
 echo "<script>alert('Password Updated'); window.location.href='chng.php';</script>";
}
else if($y==$z)
{
	echo "<script>alert('Password Already Exists!!!');window.location.href='chng.php';</script>";
}
 else
 {
   echo "<script>alert('Wrong username or password!!!');window.location.href='chng.php';</script>";
 }
}

 ?>

 
