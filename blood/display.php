<html>
<head>
    <title>Donor Details</title>
    <style>
        nav{
            display:flex;
            justify-content:space-around;
            flex-direction:row;
            align-items:center;
        }
        h1{
            font-size:2rem;
        }
        a{
            font-size:1.5rem;
            text-decoration:none;
        }
        a:hover{
            text-decoration:underline;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body> 
              
    <nav class="navbar bg-light" >
        <h1><i class='fas fa-clinic-medical' style='font-size:36px;color:black; padding-top:5px;'></i>
        &nbsp;&nbsp;S.P.G. Medical Centre</h1>
        <a class='navbar-brand light' href='logout.php'>Logout</a>
    </nav><hr><br>
                <?php
                    session_start();
                    $em=$_SESSION['email'];
                    $pas=$_SESSION['passwd'];
                
                    mysql_connect("localhost","root","");
                    mysql_select_db("blood");

                    $q="Select * from donate where email='$em' and password='$pas'";
                    $res=mysql_query($q);
                    $row=mysql_num_rows($res);


                    if(row!=0)
                    {
                        echo "<script>alert('First Register');window.location.href='reg.php'; </script>";
                    }
                    else
                    {       

                        $row=$row2="";
                        while($row2=mysql_fetch_array($res))
                        {
                            $row=$row2;
                        }
                            echo "<div class='container' style='display:flex; justify-content:center'>";
                            echo "<fieldset  style='width:50%;'><legend><h2 align='left' style='padding-left:5px;'><u>Details</u></h2></legend>";
                            echo "<figure align='center'><img src='thank.png' class='ing-fluid img-responsive'></figure>";
                            echo "<span style='text-align:left;'>Name  :&#160;&#160;".$row[0]."</span><br><br>";
                            echo "<td >Email  :&#160;&#160;".$row[1]."</td><br><br>";
                            echo "<td>Password   : &#160;&#160;".$row[2]."</td><br><br>";
                            echo "<td>Mobile No.  : &#160;&#160;".$row[3]."</td><br><br>";
                            echo "<td>Address  :&#160;  &#160;".$row[4]."</td><br><br>";
                            echo "<td>Blood Group  :&#160;&#160;    ".$row[5]."</td><br><br>";
                            echo "<td>City   :   &#160;&#160; ".$row[6]."</td><br><br>";
                            echo "<td>State  :&#160;&#160;".$row[7]."</td><br><br>";
                            echo "</fieldset>";
                            echo "</div>";
                        
                    }
                ?>
               <br><br> <br><hr>
                 <footer>
        <h3 align="center">&copy; Copyright <script>document.write(new Date().getFullYear());</script>. All Right Reserved.</h3>
        <h3 align="center">Made with &#10084;  in India.</h3><br>
    </footer>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>