<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet"  href="signup.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>SignUp</title>    
  </head>
  <body>
    <h1 align="Center"><i class='fas fa-clinic-medical' style='font-size:36px;color:black; padding-top:5px;'></i>&nbsp;&nbsp;S.P.G. Medical Centre</h1>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <ul class="nav nav-pills justify-content-right" style="padding-left: 5px; background-color: cornsilk;" >
        <li class="nav-item ">
          <a class="nav-link" id="ho"  target="_blank" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  id="con" target="_blank" href="contact.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  id="log" target="_blank"  href="login.php">Login</a>
        </li>
    </ul><br><br>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="container" align="center"><br><br><br>
                  <h4 align="center" style="color:red;">Help save a life, give the gift of blood. 
                  </h4>
                  <h4 align="center" style="color: red;">SignUp and Donate Now!!!</h4>
                </div><br>
                <Center><button type="button" class="btn btn-primary" data-toggle="modal" id="sign" data-target="#exampleModal" data-whatever="@fat">SignUp</button>
                  </Center><br>        
                         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">SignUp</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                 <form method="POST" action="signup.php">
                                   <div class="form-group">
                                     <label for="recipient-name" class="col-form-label">Name :</label>
                                     <input type="text"  required class="form-control" id="recipient-name" name="user">
                                   </div>
                                   <div class="form-group">
                                     <label for="message-text" class="col-form-label">Email :</label>
                                     <input type="email"  required class="form-control" id="message-text" name="mail"
                                     pattern="[a-z0-9._/%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Must start from lowercase letters & at least 1 no.">
                                   </div>
                                   <div class="form-group">
                                    <label for="message-text" class="col-form-label">Password :</label>
                                    <input type="password"  required class="form-control" id="message-text" name="pass"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
                                    & 1 lowercase letter & at 8 or more characters"><br>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                  </div>
                                 </form>
                               </div>
                               <!--<div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                               </div>-->
                             </div>
                           </div>
                         </div>
                  </div>
            <div class="col-sm"><br>
                <figure>
                    <img src="bd.jpg" alt="Failed To Load"  class="img-fluid img-responsive">
                </figure>
            </div>
        </div>
    </div><br><br><br><br>
    <footer class="foot-container">
        <div class="container"><br>
            <div class="row">
                <div class="col-sm">
                  <figure>
                    <img src="bloodicon.jpg" class="img-fluid img-responsive" width="100" height="100" alt="Failed To Load">
                    <br><br>
                    <h3 style="color: red; text-align: center;">Life is in blood – donate Blood – give life</h3>
                  </figure>
                </div>
                <div class="col-sm">
                  <br><br>
                  <h3 align="center"><u>Links</u></h3>
                    <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="TC.html">Terms & Conditions</a></li>
                    </ul>
              </div>
            </div>
        </div>
        <br><hr>
        <h6 align="Center">&copy; Copyright <script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</h6>
        <h6 align="center">Made with &#10084; in India.</h6><br>
    </footer>
</body>
</html>