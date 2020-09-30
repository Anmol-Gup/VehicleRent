<html>
<head>
<title>My Bookings</title>
<style>
h1
{ color:blue;position:relative;top:3px;padding-left:3px;font-size:45px; text-shadow:6px 6px 6px lightblue; z-index:2;}
@media screen and (min-device-width:768px)
{ 
 body{ background-image:url('aa.jpg'); }
}
 span
 { color:black; font-weight:italic; font-family:"bahnschrift";}
 fieldset
  { margin-left:390px; margin-top:80px; width:500px; border-radius:5px; z-index:2; border-color:black;}
legend{  color:blue; font-size:25px; font-weight:bold;}
img{ position:absolute; left:330px; top:1px;}
a
{  
   position:absolute; left:1180px; color:white; 
   border-radius:3px; font-size:30px; 
   height:40px; width:100px; bottom:57px; 
   background:black;text-decoration:none;
   padding-left:7px;
}
a:hover{ background:white; color:black; border:5px solid black;}
</style>
</head> 
<body>
<h1>S<sup>3</sup>Rental Hub...</h1>
<img src="ca.gif" width="200" height="110">
<div><a href="log.php" >Logout</a></div>
<hr>
<?php
session_start();
$xx= $_SESSION["iii"];

mysql_connect("localhost","root","");
mysql_select_db("ucem");

$query="SELECT * FROM book WHERE email='$xx'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

if($row!=0)
{
 while($row=mysql_fetch_array($result))
  {
  echo "<fieldset><legend>My Bookings</legend><span>Name  :&#160;&#160;".$row[0]."</span><br><br>";
  echo "<span>Gender  :&#160;&#160;".$row[1]."</span><br><br>";
  echo "<span>Transport   : &#160;&#160;  ".$row[8]."</span><br><br>";
  echo "<span>Date   :  &#160;&#160; ".$row[2]."</span><br><br>";
  echo "<span>No. of persons travelling    :&#160;  &#160;".$row[3]."</span><br>";
  echo "<br><span>Mobile No.   :&#160;&#160;    ".$row[4]."</span><br><br>";
  echo "<span>Email   :   &#160;&#160; ".$row[5]."</span><br>";
  echo "<br><span>Pickup Location    : &#160;&#160; ".$row[6]."</span><br><br>";
  echo "<span>Destination    : &#160;&#160; ".$row[7]."</span><br>";
  echo "<br><span>Pickup Time   :    &#160;&#160;".$row[9]."</span><br></fieldset>";
  }
}
else
{
 echo "No Bookings";
}
?>
</body>
</html>