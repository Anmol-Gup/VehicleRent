<html>
<head>
<title>Booking</title>
<style>
h1
{
 padding-top:9px;
 color:white;
 font-size:48px;
 padding-left:8px;
}
a:hover
{
 background-color:white; border-bottom:5px solid white;
 color:black;
 } 
 div{ background-color:black;}
a
{ 
 position:absolute;
 left:1130px;
 text-decoration:none;
 top:13px; 
 padding-left:23px;
 color:white;
 font-size:28px;
 padding-top:3px;
 border-radius:3px;
 width:100px;
 height:32px;
}
.loc
{ padding-left:3px;
margin-left:10px;
 font-size:22px;
 color:black; font-weight:bold; 
}
.book
{ margin-left:10px;
 width:270px;
 height:30px;
 border-radius:3px;
 border-color:black;
 position:absolute;
 top:200px;
 padding-left:3px;
}
#p
{
 position:absolute;
 left:1050px;
 top:39px;
 font-size:23px;
 color:white;
}
#pic
{
 position:absolute;
 left:500px;
 top:170px;
}
#up
{
 position:absolute;
 left:500px;
 top:200px;
}
#des
{
 position:absolute;
 left:500px;
 top:250px;
}
#o
{
 position:absolute;
 left:500px;
 top:280px;
}
#gen
{
 position:absolute;
 top:240px;
}
#nop
{
 position:absolute;
 top:410px;
}
#per
{
 position:absolute;
 top:440px;
}
#date
{
 position:absolute;
 top:330px;
}
#dd
{
 position:absolute;
 top:360px;
}
#mob
{
 position:absolute;
 top:490px;
}
#phone
{
 position:absolute;
 top:520px;
}
#sign
{
 position:absolute;
 top:520px;
 left:510px;
 background:blue;
 border:none;
 border-radius:4px;
 color:white;
 width:120px;
 height:40px;
 font-weight:bold;
 font-size:20px;
}
#sign:hover{ color:blue; background-color:white; border:3px solid blue; padding-top:3px;}
.s
{
 position:absolute;
 top:280px;
 width:120px;
 height:30px;
 border-radius:3px; border-color:black;
 left:19px;
}
#g
{
 position:absolute;
 top:250px;
}
#em
{
 position:absolute;
 top:565px;
}
#mail
{
 position:absolute;
 top:590px;
}
#noo{ position:absolute;top:170px;}
img{ position:absolute; left:350px; top:10px;}
#veh{ position:absolute; margin-left:500px; top:330px;}
@media screen and (min-width:768px){body{background-image:url("F.jpg");background-repeat:no-repeat;background-size:cover;  }}
#v
{ position:absolute;
 top:360px;
 left:510px;
 width:120px;
 height:30px; border-color:lightblack;
 border-radius:3px;
} 
img{ margin-left:50px; opacity:0.3; }
#u
{
 position:absolute;
 left:500px;
 top:410px;
 border-color:lightblack;
 } .j{ margin-top:719px; position:absolute;left:60px; zindex:2; color:white; }
 .j:hover{ color:black;} 
 #tc{ position:absolute; left:180px;}
 .fa {
  padding: 20px;
  font-size: 30px;
  width: 15px; height:15px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa-facebook:hover {
 background-color:blue;
 height:15px;
}

.fa-facebook {
  position:absolute; top:725px; left:700px;
  background: #3B5998;
  width: 15px; height:15px;
    color: white;
}
.fa-twitter {
  background: #55ACEE;
  position:absolute; top:725px; left:770px;
  color: white;
}
.fa-twitter:hover {
 background:#55ACEE;
 }

.fa-google {
    position:absolute; top:725px; left:850px;
  background: #dd4b39;
  color: white;
}
.fa-google:hover {
 background:red;
}
.fa-linkedin {
      position:absolute; top:725px; left:935px;
  background: #007bb5;
  color: white;
}
.fa-linkedin:hover {
 background:blue;
}
.fa-instagram {
     position:absolute; top:725px; left:1015px;
  background: magenta;
  color: white;
}
.fa-instagram:hover { background:violet;}
</style>
</head>
<body>
<div><h1>S<sup>3 </sup>Rental Hub...</h1>
<p><a href="index.html">Home</a></p>
<p id="p">Contact: +91 9935212537</p><hr>
</div>
<h2 style="font-size:30px;color:yellow;position:absolute;top:98px;">Ride Booking:</h2>
<form method="POST" action="booking.php">
<label for="location" id="noo" class="loc">Name of Traveller:</label><br>
<label for="email" class="loc" id="em">E-Mail:</label>
<input type="email" id="mail" class="book"  pattern="[a-z0-9._/%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Must start from lowercase letters & at least 1 no." 
name="e" required placeholder="Email"><br>
<input type="text"  class="book" name="a"  required placeholder="Name"><br>
<label for="pickup" id="pic" class="loc">Pickup Address:</label><br>
<input type="text"  id="up" class="book" name="pick" required placeholder="Address"><br>
<label for="destination" id="des" class="loc">Destination Address:</label><br>
<input type="text" id="o" class="book" name="des" required placeholder="Address"><br>
<label for="gender" id="g" class="loc">Gender</label><br>
<select class="s" required name="sx"><option>--Select--</option><option>Male</option><option>Female</option><option>Other</option></select>
<label for="person"  id="nop" class="loc" >No. of persons travelling:</label><br>
<input type="text" id="per" name="nop" pattern="[1-5]" title="Max. 5 persons" required placeholder="Persons" class="book"><br>
<label for="date"  id="date" class="loc">Date:</label><br>
<input type="date" id="dd" name="dt" class="book" required placeholder="dd/mm/yy"><br>
<label for="no" id="mob"  class="loc">Mobile Number:</label><br>
<input type="tel"  id="phone" pattern="[6-9]{1}[0-9]{9}" title="Must contain on 10 digits & start from either 6,7,8 or 9"name="mob" class="book" required placeholder="Mobile"><br>
<label for="vehicle" id="veh" class="loc">Transport :</label><br>
<select id="v" required name="trans" ><option>--Select--</option><option>Bike</option><option>Scooty</option><option>Car</option></select>
<label for="time" class="loc" id="u">Pickup Time:</label><br>
<input type="time" name="rr"style="position:absolute; left:510px; top:450px; width:100px;height:30px; border-color:white;">
<button type="submit" id="sign">Submit</button>
</form>
<div class="fo" style="margin-top:300px; z-index:0; height:85px; background:black; padding-top:4px;">
<a href="index.html" class="j">Home</a>
<a href="contact.php" id="tc" class="j">Contact</a>
<span style="white; position:absolute; top:745px; color:white; font-size:24px; margin-left:503px;"> Follow Us On :</span>
<span style="position:absolute; left:723px; margin-top:18px; font-size:35px; font-weight:bold; font-family:arial; z-index:2; color:white;">f</span><a href="#" class="fa fa-facebook"></a>
<span style="position:absolute; left:792px; margin-top:18px; font-size:35px; font-weight:bold; font-family:arial; z-index:2; color:white;">t</span><a href="#" class="fa fa-twitter"></a>
<span style="position:absolute; left:865px; margin-top:15px; font-size:35px; font-weight:bold; font-family:arial; z-index:2; color:white;">g+</span><a href="#" class="fa fa-google"></a>
<span style="position:absolute; left:948px; margin-top:18px; font-size:35px; font-weight:bold; font-family:arial; z-index:2; color:white;">in</span><a href="#" class="fa fa-linkedin"></a>
<span style="position:absolute; left:1018px; margin-top:18px; font-size:25px; font-weight:bold; font-family:blackadder ITC; z-index:2; color:white;">Insta</span><a href="#" class="fa fa-instagram"></a>

</div>
</body>
</html>
