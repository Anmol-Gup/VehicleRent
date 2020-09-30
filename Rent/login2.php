<?php
session_start();
$m=$_POST['a'];
$n=$_POST['b'];

$_SESSION['name']=$m;
$_SESSION['passwd']=$n;
$_SESSION['oo']=$m;
$_SESSION['pp']=$n;

mysql_connect("localhost","root","");//servername username password
mysql_select_db("ucem");

$query="SELECT * FROM project WHERE name='$m' AND password='$n'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

if($m==""||$n=="")   //Empty field
{
 echo"<script>alert('Fill Required');window.location.href='login1.php';</script>";
 //echo"<a href='login1.php'>Try Again</a>";
}
else
{
 if($row!=0)
 {
  echo "<script>alert('Congrats $m !!! You are successfully logged in.Book Your Cab.');window.location.href='book.php';</script>";
  //echo "<left><a href='book.php'>Book your cab</a></left>";
 }
 else 
 {
  echo "<script>alert('Wrong username or password. Create new account or try again...');window.location.href='login1.php'</script>";
  //echo"<a href='login1.php'>Try Again</a>";
 }
}
?>