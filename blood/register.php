<?php
    session_start();
    $n=$_POST['user'];    //name
    $m=$_POST['mail'];    //email
    $p=$_POST['pass'];    //pass
    $no=$_POST['mob'];    //mobile
    $adr=$_POST['addr'];  //address
    $bg=$_POST['bdgroup']; //blood group
    $c=$_POST['city'];        //city 
    $s=$_POST['state'];         //state

    $_SESSION['email']=$m;
    $_SESSION['passwd']=$p;

    mysql_connect("localhost","root","");
    mysql_select_db("blood");
    
    $q="select * from signup where email='$m' and password='$p'";
    $res=mysql_query($q);
    $r=mysql_num_rows($res);

    if($r!=0)
    {
        $q="INSERT INTO donate(name,email,password,mobile,address,bgroup,city,state) VALUES ('$n','$m','$p','$no','$adr','$bg','$c','$s')";
        mysql_query($q);
        echo "<script>alert('Successfully Registered');window.location.href='display.php';</script>";  
    }
    else{
        echo "<script>alert('User Email or Password Not Registered');window.location.href='reg.php';</script>";
    }

?>

