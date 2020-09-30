<html>
<head>
<title>Update</title>
<style>
fieldset
{
 position:absolute;
 left:500px;
 width:350px;
 height:240px;
 top:150px;
 background-color:lightgreen;
}
.pack
{
 color:darkgreen;
 font-size:20px;
 }
#n{ 
 width: 300px;
 height:30px;
 padding-left:2px;
 margin-top:10px;
 border-radius:5px; 
 margin-left:20px;
 }
 legend{ font-size:23px;}
 #o
 {
  position:absolute;
  top:120px;
  left:30px;
 }
 #m{ margin-left:20px;}
 #pass
 { width:300px;height:30px;padding-left:2px;border-radius:5px; margin-left:20px;margin-top:40px;}
.but
{ color:white; background:blue; margin-left:140px;}
.p
{ color:darkgreen;font-size:17px;}
button
{ border:none; width:90px; height:30px; font-weight:bold;margin-left:105px;margin-top:20px;border-radius:3px;}
</style>
</head>
<body>
<form method="POST" action="update.php">
<fieldset>
<legend align="center" >Update Password</legend><br>
<label for="name" class="p" id="m">Name :</label><br>
<input type="text" id="n" name="b" placeholder="Enter Your Name">
<label for="password" class="p" id="o">New Password :</label><br>
<input type="password" id="pass" name="a" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
& 1 lowercase letter & at 8 or more characters" placeholder="Enter new password"><br>
<button type="update" class="but">Update</button>
</form>
</body>
</html>