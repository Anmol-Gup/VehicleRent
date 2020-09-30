<html>
<head>
<title>Admin Login</title>
<style>
.a
{
 width:280px;
 height:35px;
 border-radius:5px;
 border-width:1px;
 padding-left:2px;
}
.loc
{
 font-size:20px;
 color:blue;
}
fieldset
{
 width:580px;
 height:230px;
 background-color:lightblue;
 position:absolute;
 left:400px;
 top:150px;
 border-width:2px;
 border-color:blue;
}
#ad
{
  position:absolute;
 left:160px;
 top:50px;
}
#p
{
  position:absolute;
 top:100px;
}
#pass
{
  position:absolute;
 left:160px;
 top:100px;
}
#n
{
  position:absolute;
 top:52px;
}
.but
{
 background-color:green;
 color:white;
 border:none;
 border-radius:4px;
 position:absolute;
 top:180px;
 left:420px;
 width:130px;
 font-size:20px;
 height:40px;
}
a
{ 
font-size:20px;
position:absolute;
top:180px;
left:40px;
background:green;
color:white;
width:150px;
padding-top:4px;
height:35px;
padding-left:4px;
border-radius:3px;
text-decoration:none;
}
legend{ font-size:30px; font-color:brown; }
</style>
</head>
<body bgcolor="lightpink">
<form method="POST" action="admin2.php">
<fieldset>
<legend align="center">AdminLogin</legend>
<label for="user" id="n" class="loc">Admin Name :</label>
<input type="text" id="ad" name="A"  class="a" placeholder="Enter Your Name"><br>
<label for="password" id="p" class="loc">Password :</label>
<input type="password" id="pass" name="P" class="a" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
& 1 lowercase letter & at 8 or more characters" placeholder="Enter Your Password">
<a href="up.php">Change Password</a>
<center><button type="submit" class="but">Login</button></center>
</fieldset>
</form>
</body>
</html> 