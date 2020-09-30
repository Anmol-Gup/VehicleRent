<?php
$x=$_POST['a'];
$y=$_POST['b'];

if($x==""||$y=="")
{
 echo"<script>alert('Fill Required');window.location.href='up.php';</script>";
}
else
{
 mysql_connect("localhost","root","");
 mysql_select_db("ucem");
 
 $query="SELECT * FROM admin WHERE  name='$y'";
 $result=mysql_query($query);
 $row=mysql_num_rows($result);
 
 if($row!=0)
 {
  $q="UPDATE admin SET password='$x' WHERE name='$y';";
  mysql_query($q);
  echo "<script>alert('Password Updated.');window.location.href='admin1.php';</script>";
 }
 else{
  echo "<script>alert(' Wrong Username or Password Already Exists');window.location.href='up.php';</script>";
 } 
}
 ?>