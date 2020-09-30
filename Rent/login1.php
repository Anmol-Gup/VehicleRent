<html>
<head>
<title>login</title>
<script type="text/javascript">
function reg()
{
var modal=document.getElementById("mymodal");
modal.style.display="block";
}
function fun() 
{
var modal=document.getElementById("mymodal");
modal.style.display="none";
}</script>
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
 color:#fff;
 height:50px;
 z-index:1;
 

  position:absolute;
 top:300px;
 font-weight:bold;
 background:green;
 border:none;
 outline:none;
 border-radius:4px;
 cursor:pointer;
 width:180px;
 margin-top:170px;
 margin-left:530px;
 box-shadow:0 2px 2px rgba(0,0,0,0.2);
}
.button:hover{ padding-top:3px;  color:green; background:white; border:5px solid green;} 
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
 height:450px;
 background:white;
 border-radius:3px;
 margin:150px auto;
 box-shadow:0 2px 2px rgba(255,255,255,0.2);
}
.modal-header
{
 width:530px;
 height:45px;
 background:black;
 padding:10px;padding-top:3px;
 font-weight:bold;
 text-shadow:-1px 1px 1px rgba(0,0,0,0.2);
}
h1{position:relative;margin-top:1px;}
.modal-body
{
 width:550px;
 height:250px;
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
 cursor:pointer; float:right;
}
.btnc:hover{  padding-top:4px;  font-size:20px; color:green; background:white; border:3px solid green;}
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
 margin-top:25px;
}
#im
{
 position:absolute;
 top:300px;
 left:400px;
}
#pass
{
 position:absolute;
 top:388px;
 left:400px;
}
.close
{
 position:absolute;
 background:orange;
 width:48px;
 font-size:24px;
 border:none;
 color:black;
 height:58px;
 top:150px;
 left:881px;
}
.close:hover{background:red;color:white;}
hr{color:black;width:530px;}
#us{ position:absolute; top:280px;}
#p{ font-size:30px; color:blue;margin-top:10px;}
#pas{ position:absolute; top:360px;}
a
{
 text-decoration:none;background:green;font-size:18px;
 border:none;color:white;position:absolute;top:535px; 
 padding-top:9px;padding-left:19px; 
 border-radius:5px;width:180px;height:35px;
}
#op{filter:blur(200%); margin:50px;}
p{  color:brown; font-size:38px; margin-top:63px;}
h1{  font-size:44px; color:blue; }
#h{ color:blue; width:1350px; overflow:none;}
.bu
 { 
 background:white;
 text-decoration:none;
 border:white; 
 color:black; 
 padding-top:3px;
 padding-left:25px;
 position:absolute; top:30px; left:1200px;
 font-size:25px;
 }
 .bu:hover
 {  color:blue;
 border-bottom:5px blue solid; border-top:10px;
 width:90px; 
 background-color:#eee;
  }
  a:hover{ color:red;}
  a{ color:blue; border:none; background-color:white; position:absolute; left:850px; font-size:20px; text-decoration:underline;}
  #l{ color:white;}
  #hh {   text-shadow:6px 6px 6px lightblue;}
  </style>
</head>
<h1 id="hh">S<sup>3</sup>Rental Hub...</h1><hr id="h">
<a href="index.html" class="bu" >Home</a>
<p align="center">Login & Book Your Cab....</p>
<marquee direction="right"><img id="op" src="orange.png" width="200" height="120"></marquee>
<button onclick="reg()"  class="button" id="mybtn">Login</button>
<a href="chng.php" id="w">Change Password?</a>
<div class="modal" id="mymodal">
 <div class="modal-content">  
<div class="modal-header">
  <button onclick="fun()" type="button" id="cls" class="close">X</button>
<h1 id="l">Login</h1>  
 </div>
  <div class="modal-body"><p align="center" id="p">Welcome</p>
  <form method="POST" action="login2.php">
 <img id="im" src="username.jpeg" width="40" >
 <input type="text" class="user" id="us" name="a"  required placeholder="Enter Your Name"><br/>
 <span id="msg"></span>
  <img id="pass" src="c.png" width="40" height="40">
 <input type="password" class="user" id="pas" name="b" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
& 1 lowercase letter & at 8 or more characters" required placeholder="Password"><br/><span id="pa"></span>
  </div>
  <div class="modal-footer"><hr/>
  <a href="reg.php" style="text-decoration:none;background:green;font-size:18px;border:none;color:white;position:absolute;top:535px;left:400px;border-radius:5px;width=150px;height:30px;">
  NotRegistered Yet?</a>
   <button onclick="helo()"class="btnc" id="btnclose" align="center">Login</button>
   </form>
  </div>
</div>
</div>
</body>
</html>