<html>
<head>
<title>Bookings</title>
<style>
p
{ color:brown; 
 font-size:35px;
 position:relative;
 top:11px;
 padding-left:3px;
 text-shadow:2px 2px 2px brown;
 font-weight:bold;
}
a:link{ color:blue;}
a:hover{ color:brown; border-bottom:brown 3px solid; background:#eee; width:80px; border-radius:4px; text-align:center; padding-left:3px; padding-top:3px; padding-bottom:2px;}
a:active{ color:red;}
a
{
 position:absolute;
 left:1220px;
 top:21px;
 font-size:23px;
 text-decoration:none;
}
hr{ color:black;}
</style>
</head>
<body bgcolor="lightyellow">
<p>Admin</p><hr>
<a href='admin1.php'>Logout</a>
<?php
mysql_connect("localhost","root","");
mysql_select_db("ucem");

$query="SELECT * FROM book";
$result=mysql_query($query);
$row=mysql_num_rows($result);

if($row!=0)
{
 echo "<table border='5' width='95%'";
 echo "<tr height='5px'>";
 echo "<td width=18%>Name:</td>";
 echo "<td width=8%>Gender:</td>";
 echo "<td width=8%>Date:</td>";
 echo "<td width=5%>No. of persons travelling:</td>";
 echo "<td width=13%>Mobile No.:</td>";
 echo "<td width=17%>Email:</td>";
 echo "<td width=16.2%>Pickup Location:</td>";
 echo "<td width=34%>Destination:</td>";
 echo "<td width=20%>Transport:</td>";
 echo "<td width=20%>Time:</td>";
 echo "</tr>";
 echo "</table>";
 
 while($row=mysql_fetch_array($result))
  {
   echo "<table border='1' width='95%'>";
   echo "<tr height='5'>";
   echo "<td width='18%'>".$row[0]."</td>";
   echo "<td width='7.9%'>".$row[1]."</td>";
   echo "<td width='7.8%'>".$row[2]."</td>";
   echo "<td width='4.8%'>".$row[3]."</td>";
   echo "<td width='13%'>".$row[4]."</td>";
   echo "<td width='16.5%'>".$row[5]."</td>";
   echo "<td width='16.0%'>".$row[6]."</td>";
   echo "<td width='20%'>".$row[7]."</td>";
   echo "<td width='29%'>".$row[8]."</td>";
   echo "<td width='25%'>".$row[9]."</td>";
   echo "</tr>";
   echo "</table>";
  }
 }
 else
 {
   echo "No Data";
 }
 ?>
</body>
</html>