<html>
<head>
<title>Change Password</title>
<style>
legend{
  font-size:25px; font-weight:bold; color:black;
 }
 fieldset
 {
  width:550px; height:250px;
  position:absolute;
  left:330px;
  top:190px;
  z-index:2; border-radius:3px; border-color:black; 
 } 
@media screen and (min-device-width:768px){ body{ background-image:url('r.jpg'); } opacity:0.5; filter:alpha(opacity=10); }
 
 input{
   margin-top:13px;
  margin-left:170px;
  width:330px;
  height:35px;
  padding-left:3px;
  border:none; border-bottom:blue 2px solid;
  }
  .o{
  padding-left:3px;
  position:absolute;
  left:20px; top:53px; font-weight:bold; font-size:17px;
  }
  h1{
  padding-left:4px;
  text-shadow:6px 6px 6px lightblue;
  color:blue;
  }
  a{
   font-weight:bold;
   position:absolute;
   top:20px; right:60px;
   text-decoration:none;
   font-size:25px;
   color:black;
   border-radius:3px; 
   }
  a:hover{
  color:blue;
 border-bottom:5px blue solid; border-top:10px;
 width:70px;
 padding-bottom:3px; 
 background-color:#eee;
 padding-left:11px;
 padding-top:3px;
  }
 #c{
  margin-left:1px;
  margin-top:98px;
  }
  button{
  border:none;
  border-radius:3px;
  background-color:green;
  position:absolute;
  left:235px;
  font-size:20px;
  top:210px;
  width:100px;
  height:35px;
  color:white;
 } 
 #p{ position:absolute; top:103px;}
 #i{ padding-left:5px;}
</style>
</head>
<body>
<div>
<h1>S<sup>3</sup>Rental_Hub</h1>
<a href="index.html">Home</a><hr>
</div>
<form method="POST" action="pass.php">
<fieldset>
<legend align="center">Change Password</legend>
<label for="name" class="o" id="n">Username &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;:</label>
<input type="text"  name="m" id="i" required placeholder="Enter Your Name"><br>
<label for="password" class="o" id="p">Password &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;:</label>
<input type="password" name="a"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
& 1 lowercase letter & at 8 or more characters" required placeholder=" Enter Your Password"><br>
<label for="password" id="c" class="o">New Password  &#160;&#160;:</label>
<input type="password" name="b" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
& 1 lowercase letter & at 8 or more characters" required placeholder=" Enter Your New Password"><br>
<button type="submit" class="b">Submit</button>
</fieldset>
</body>
</html>