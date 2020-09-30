<?php
session_start();
$x=$_POST['a'];//name
$y=$_POST['pick'];//pickup address
$z=$_POST['des'];//destination address
$w=$_POST['sx'];//gender
$u=$_POST['nop'];//persons
$v=$_POST['dt'];//date
$t=$_POST['mob'];//mobile
$o=$_POST['e'];//email
$tr=$_POST['trans'];//transport
$tt=$_POST['rr'];
$_SESSION["iii"]=$o;


mysql_connect("localhost","root","");
mysql_select_db("ucem");

$query="INSERT INTO book(name,gender,date,nop,mobile,email,pick,destination,transport,time) VALUES ('$x','$w','$v','$u','$t','$o','$y','$z','$tr','$tt')";
mysql_query($query);

echo "<script>alert('Request Accepted');</script>";
?>
<html>
<head>
<title>Booking</title>
<style>
p
{
 position:absolute;
 top:13px;
 padding-left:50px;
 font-size:45px;
 color:brown;
}
img
{
 width:500px;
 height:380px;
 margin-top:170px;
 margin-left:450px;
} 
.bu{ width:100px; height:35px; color:white; background-color:blue; position:absolute; left:660px; top:580px; border:none; font-weight:bold; border-radius:3px;}
.bu:hover{ color:blue; background-color:white; border: solid blue;}
</style>
</head>
<body bgcolor="lightyellow">
<p align="center"><?php echo "  Congratulations $x !!! Your Booking has been Received...";?></p>
<img src='VdgG.gif' align="center" width="200" height="50">
<form method="POST" action="My.php"><button class="bu" type="submit">My Booking</button></form>
</body>
</html>