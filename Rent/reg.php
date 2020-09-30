<html>
<head>
<script type="text/javascript">
function register()
{
var modal=document.getElementById("mymodal");
modal.style.display="block";
}
function cls() 
{
var modal=document.getElementById("mymodal");
modal.style.display="none";
}
</script>
</head>
<style>
body
{
 margin:20px;
 color:#fff;
 font-family:arial;
 background:white;
}
.button
{
 font-size:30px;
 padding:8px 16px;
 position:absolute;
 top:300px;
 color:#fff;
 height:50px;
 z-index:1;
 font-weight:bold;
 background:green;
 border:none;
 outline:none;
 border-radius:4px;
 cursor:pointer;
 width:180px;
 margin-top:150px;
 margin-left:540px;
 box-shadow:0 2px 2px rgba(0,0,0,0.2);
}
.button:hover{ color:green; background-color:white; border:3px solid green; padding-top:3px; }
.modal
{
 width:100%;
 height:100%;
 background:rgba(0,0,0,0.4);
 position:fixed;
 top:0;
 left:0;
 z-index:1;
 overflow:auto;
 display:none;
}
.modal-content
{ 
 width:550px;
 height:470px;
 background:white;
 border-radius:3px;
 margin:150px auto;
 box-shadow:0 2px 2px rgba(255,255,255,0.2);
}
.modal-header
{
 width:530px;
 height:40px;
 background:black;
 padding:10px;
 font-weight:bold;
 text-shadow:-1px 1px 1px rgba(0,0,0,0.2);
}
h1{position:relative;margin-top:1px;}
.modal-body
{
 width:550px;
 height:280px;
 padding:20px 10px;
}
.modal-footer
{
 width:500px;
 height:70px;
 padding:10px;
 box-shadow:0 1px 1px rgba(0,0,0,0.1);
}
.btnc
{
 position:relative;
 padding:10px 16px;
 margin-top:5px;
 margin-left:200px;
 background:green;
 color:white;
 font-weight:bold;
 border:none;
 width:100px;
 font-size:15px;
 height:40px;
 outline:none;
 border-radius:3px;
 box-shadow:0 2px 2px rgba(0,0,0,0.2);
 cursor:pointer;
}
.user
{
 border-width:1.5px;
 border-bottom-color:black;
 border-height:3px;
 border-style:solid;
 outline:none;
 border-top-color:white;
 border-left-color:white;
 border-right-color:white;
 font-family:"calibri";
 line-height:1;
 width:460px;
 height:40px;
 letter-spacing:1.5;
 padding-left:8px;
 font-size:20px;
 font-weight:bold;
 font-color:black;
 margin-left:65px;
 margin-top:15px;
}
#im
{
 position:absolute;
 top:245px;
 left:400px;
}
#pass
{
 position:absolute;
 top:410px;
 left:400px;
}
#con
{
 position:absolute;
 top:465px;
 left:505px;
}
.close
{
 position:absolute;
 background:blue;
 width:55px;
 font-size:24px;
 border:none;
 color:white;
 height:60px;
 top:150px;
 left:875px;
}
.close:hover{background:red;color:white;}
hr{color:black;width:530px;}
#mail
{
 position:absolute;
 left:400px;
 top:300px;
}
#mob
{
 position:absolute;
 top:350px;
 left:375px;
}
#h1{ font-size:44px; color:blue; text-shadow:6px 6px 6px lightblue;}
#a1{ font-size:24px;  color:blue; position:absolute; top:550px; left:880px;} 
#a1:hover{ color:red;}
#opt{filter:orange;}
p{ color:brown; font-size:38px; margin-top:80px;}
 #opt{ margin-top:40px;}
 #h{ color:blue; width:1370px; overflow:none; position:absolute; right:8px; }
 .bu
 { 
 background:white;
 text-decoration:none;
 border:white;  
 padding-top:3px;
 padding-left:25px;
 position:absolute; top:30px; left:1200px;
 font-size:25px;
  border-radius:3px;
 }
 .bu:hover
 {  color:blue;
 border-bottom:5px blue solid; border-top:10px;
 width:90px; 
 background-color:#eee;
  }
  .btnc:hover{  font-size:16px;color:green; background-color:white; border:3px solid green; padding-top:3px; }

</style>
<body>
<h1 id="h1">S<sup>3</sup>Rental Hub...</h1><hr id="h">
<a href="index.html" class="bu" >Home</a>
<p align="center">Register and Book your Cab...</p>
<div id="opt">
<marquee direction="right"><img src="f.png" align="center" width="230" height="160"></marquee></div>
<button onclick="register()"   class="button" id="mybtn">Register</button>
<a href="login1.php" id="a1">Already Registered?</a>
<div class="modal" id="mymodal">
 <div class="modal-content">  
<div class="modal-header">
  <button onclick="cls()" type="button" id="cls" class="close">X</button>
<h1>Register</h1>
 </div>
  <div class="modal-body">
  <form method="POST" action="connect.php">
 <img id="im" src="username.jpeg" width="40" height="40">
 <input type="text" class="user" name="a"  required placeholder="Enter Your Name"><br/>
 <img src="email.png" width="40" height="40" id="mail">
 <input type="email" class="user" name="b"  pattern="[a-z0-9._/%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Must start from lowercase letters & at least 1 no." 
 required placeholder="Enter Your Mail"><br/>
 <img src="b.png" width="85" height="45" id="mob" >
 <input type="tel" class="user" name="c" pattern="[6-9]{1}[0-9]{9}" title="Must contain on 10 digits & start from eithr 6,7,8 or 9" required placeholder="Mobile"><br/>
 <img id="pass" src="c.png" width="40" height="40">
 <input type="password" class="user" name="d" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
& 1 lowercase letter & at 8 or more characters" required placeholder="Password"><br/> 
 </div>
  <div class="modal-footer"><hr/>
   <button class="btnc" type="submit" id="btnclose" align="center">Register</button>
   </form>
  </div>
</div>
</div>
</body>
</html>