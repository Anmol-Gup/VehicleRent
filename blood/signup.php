<?php

    $n=$_POST['user'];      //name
    $m=$_POST['mail'];     //email
    $p=$_POST['pass'];     //password


    if($n=="" || $m=="" || $p=="")
    {
        echo "<script>alert('Field Required');window.location.href='sign.php';</script>";
    }
    else
    {
        mysql_connect("localhost","root","");
        mysql_select_db("blood");
        
        $q="Select * from signup where email='$m' or password='$p' ";
        $res=mysql_query($q);
        $r=mysql_num_rows($res);

        if($r!=0)
        {
            echo "<script>alert('User Already Exists');window.location.href='sign.php';</script>";
        }
        else
        {
            $s="INSERT INTO signup(name,email,password) VALUES('$n','$m','$p')";
            mysql_query($s);
            echo "<script>alert('Successful SignUp...');window.location.href='login.php';</script>";
        }
    }
?>