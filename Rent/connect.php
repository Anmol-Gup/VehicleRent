<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];

if($m==""||$n==""||$o==""||$p=="")
{
	echo "<script>alert('Please fill all fields');</script>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("ucem");
	$query="SELECT * FROM project WHERE email='$n' AND password='$p'";
	$result=mysql_query($query);
	$row=mysql_num_rows($result);
	if($row==0)
	{
		$query1="INSERT INTO project(name,email,mobile,password) VALUES ('$m','$n','$o','$p')";		
        mysql_query($query1);
		echo "<script>alert('Congratulations!!! You are registered.Now login.');window.location.href='login1.php';</script>";
		//echo "<a href='login1.php'>Click Here To Login</a>";
	}
	else
	{
		echo "<script>alert('User Already Exists...Try Again.');window.location.href='reg.php';</script>";
		//echo "<a href='reg.php'>Try Again</a>";
	}
}
//echo "<a href='login1.php'>Click Here To Login</a>";
?>