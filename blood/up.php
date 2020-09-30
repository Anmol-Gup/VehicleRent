<?php
    session_start();
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $con=$_POST['new'];

    if($name==""||$pass==""||$con=="")
    {
        echo "<script>alert('Fill Required);</script>";
    }
    else
    {
        mysql_connect("localhost","root","");
        mysql_select_db("blood");
        
        $q="select * from signup where name='$name' and password='$pass'";
        $p="select * from signup where password='$con'";
        $s=mysql_query($p);
        $c=mysql_num_rows($s);
        $res=mysql_query($q);
        $r=mysql_num_rows($res);
        if($r==0)
        {
        echo "<script>alert('User Does Not Exists');window.location.href='update.php';</script>";
        }
        else if($c!=0)
        {
        echo "<script>alert('Password Already Exists');window.location.href='update.php';</script>";
        }
        else
        {
        $u="Update signup set password='$con' where name='$name' and password='$pass' ";
        mysql_query($u);
        echo "<script>alert('Password Updated!!');window.location.href='login.php';</script>";
        }
    }
?>