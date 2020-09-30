<?php
session_start();
$m=$_POST['user'];    //name
$n=$_POST['pass'];    //password

$_SESSION['name']=$m;
$_SESSION['passwd']=$n;
$p=$_SESSION['mail'];

mysql_connect("localhost","root","");//servername username password
mysql_select_db("blood");

$query="SELECT * FROM signup WHERE name='$m' and password='$n'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

if($m==""||$n=="")            //Empty field
{
 echo"<script>alert('Fill Required');window.location.href='login.php';</script>";
}
else
{
 if($row!=0)
 {
  echo "<script>alert('Congrats $m !!! You are successfully logged in.');window.location.href='reg.php';</script>";
 }
 else 
 {
  echo "<script>alert('Wrong username or password. Create new account or try again...');window.location.href='login.php';</script>";
 }
}
?>