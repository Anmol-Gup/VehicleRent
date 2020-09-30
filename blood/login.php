<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <h1 align="center"><i class='fas fa-clinic-medical' style='font-size:36px;color:black; padding-top:5px;'></i>&nbsp;&nbsp;S.P.G. Medical Centre</h1><br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--nav bar-->
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link" style="color:red ; font-size: larger;" target="_blank" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:red; font-size: larger;" target="_blank" href="contact.html">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color:white; font-size: larger; background-color: red;" target="_blank" href="sign.php">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:red; font-size: larger;" target="_blank" href="update.php">Update</a>
        </li>
      </ul><br><br><br>
      <!--img-->
      <div class="container">
          <div class="row">
              <div class="col-sm">
                <figure>
                    <img src="bld.jpg" class="img-fluid img-responsive">
                </figure>
              </div>
              <!--form-->
              <div class="col-sm"><br>
                  <div class="container">
                    <form method="POST" action="connect.php">
                         <fieldset style="text-align: center; background-color:lightcyan;">
                            <legend style="color:blue; text-align:center;">
                               <h2 >Login</h2> 
                            </legend><br>
                               <Center><input class="input-field" type="text"  required style="width: 80%; height:6vh; padding-left: 5px; border-radius: 5px; " 
                                placeholder="Username" name="user"></Center>
                                <br><br>
                                <Center><input class="input-field" type="password"  style="width: 80%; height: 6vh; padding-left:5px; border-radius: 5px;" 
                                  placeholder="Password" name="pass"></Center>
                                 <br><br>
                                <Center><button type="submit" class="btn btn-primary btn-lg" style="width: 30%;" >Login</button></Center><br><br>
                        </fieldset>
                   </form>
                </div>
              </div>
          </div>
      </div>
      <br><br><hr style="color: black;"> 
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <br>
              <figure>
                <img src="blood.jpg" class="img-fluid img-responsive">
              </figure>
            </div>
            <div class="col-sm">
              <br><br>
              <h4 style="color: red; text-align: center;">Donating blood is a divine experience, Try it today!
              </h4>
            </div>
            <div class="col-sm">
              <br>
              <h3 align="center"><u>Links</u></h3>
              <ul style="list-style-type: none; text-align: center;">
                <li><a href="index.html">Home</a></li>
                <li><a href="#" style="text-align: center;">Privacy Policy</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="TC.html">Terms & Conditions</a></li>
              </ul>
          </div>
        </div>
      </footer>
</body>
</html>