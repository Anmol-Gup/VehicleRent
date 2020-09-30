<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
   
    <title> Blood Donate</title>
  </head>
  <body>
    <h1 align="center"><i class='fas fa-clinic-medical' style='font-size:36px;color:black; padding-top:5px;'></i>&nbsp;&nbsp;S.P.G. Medical Centre</h1>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--nav bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav nav-pills">
        <h3 class="navbar-brand" >Donor Registration</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto" id="menu">
            <li class="nav-item active">
              <a class="nav-link" href="index.html" target="_blank">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="sign.php" target="_blank">
                SignUp
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.html" target="_blank" style="color: white; background-color: tomato;">Contact Us</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="logout.php" target="_blank">
                Logout
              </a>
            </li>
          </ul>
        </div>
      </nav><br><br>
      <!--Donor Registration Form-->
      <div class="container">
          <div class="row">
              <div class="col-sm">
                <fieldset>
                    <legend>Donor Registration</legend>
                    <form method="POST" action="register.php">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Donor Name</label>
                            <input type="text" required class="form-control" id="inputEmail4" placeholder="Enter Donor Name" name="user">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">E-mail</label>
                            <input type="email" required class="form-control" id="inputPassword4" placeholder="Enter Email"  
                             pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            title="Must start from lowercase letters & at least 1 no." name="mail">
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPasssword">Password</label>
                            <input type="password"   required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and
                             lowercase letter, and at least 8 or more characters"
                            class="form-control" id="inputAddress" placeholder="Enter Your Password" name="pass">
                          </div>
                          <div class="form-group">
                            <label for="inputMobile">Mobile No.</label>
                            <input type="tel"   required pattern="[6-9]{1}[0-9]{9}" title="Must contain on 10 digits & start from either 6,7,8 or 9"
                            class="form-control" id="inputAddress" placeholder="Enter Your Mobile No." name="mob">
                          </div>
                          
                        <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input type="text" required class="form-control" id="inputAddress" placeholder="Enter Your Address" name="addr">
                        </div>
                        <div class="form-group col-xs-5">
                          <label for="inputState">Blood Group</label>
                          <select id="inputState" class="form-control" required name="bdgroup">
                            <option selected disabled>--Select--</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                          </select>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" required class="form-control" id="inputCity" placeholder="Enter Your City" name="city">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control" required name="state">
                              <option selected disabled>--Select--</option>
                              <option>Andhra Pradesh</option>
                              <option>Arunachal Pradesh</option>
                              <option>Assam</option>
                              <option>Bihar</option>
                              <option>Chattisgarh</option>
                              <option>Goa</option>
                              <option>Gujarat</option>
                              <option>Haryana</option>
                              <option>Himachal Pradesh</option>
                              <option>Jammu & Kashmir</option>
                              <option>Jharkhand</option>
                              <option>Karnataka</option>
                              <option>Kerala</option>
                              <option>Madhya Pradesh</option>
                              <option>Maharashtra</option>
                              <option>Manipur</option>
                              <option>Meghalaya</option>
                              <option>Mizoram</option>
                              <option>Nagaland</option>
                              <option>Odisha</option>
                              <option>Punjab</option>
                              <option>Rajasthan</option>
                              <option>Sikkim</option>
                              <option>Tmail Nadu</option>
                              <option>Telangana</option>
                              <option>Tripura</option>
                              <option>Uttarakhand</option>
                              <option>Uttar Pradesh</option>
                              <option>West Bengal</option>
                            </select>
                          </div>
                          <!--<div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text"  required pattern="[0-9]{6}" title="nnnnnn" class="form-control zipcode" id="inputZip">
                          </div>-->
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required name="tc">
                            <label class="form-check-label" for="gridCheck">
                              I agree to terms & conditions.
                            </label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                      </form>
                </fieldset>
              </div>
              <div class="col-sm"><br><br>
                <figure align="right">
                  <img src="donate.jpg" alt="Failed To Load" class="img-fluid img-responsive">
                </figure>
              </div>
          </div>
      </div><br><br><br><br>
      <footer class="foot">
        <div class="container">
          <div class="row">
            <div class="col-sm"><br>
              <figure align="center">
               <center> <img src="logo.jpg" alt="Failed To Load" class="img-fluid img-responsive"></center><br>
                <br><h5 align="center" style="color: red;">You don’t have to be a doctor to save a life: Just donate blood.
                </h5>
              </figure>
            </div><br>
            <div class="col-sm"><br>
              <h3 align="center"><u>Links</u></h3>
                <ul>
                  <li>
                      <a href="index.html" target="_blank">Home</a>
                  </li>
                  <li>
                      <a href="#" target="_blank">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="about.html" target="_blank">About Us</a>
                  </li>
                  <li>
                    <a href="TC.html" target="_blank">Terms & Conditions</a>
                  </li>
                </ul><br>
                <div>
                  <h3 align="center"><u>Contacts</u></h3>
                  <center><i align="center" class='fas fa-map-marker-alt' style='font-size:36px; color:red'></i></center>
                  <center><h6> &nbsp;&nbsp;Location : Prayagraj, Uttar Pradesh.</h6></center><br>
                  <center><i class='fas fa-phone-volume' style='font-size:36px; color:red'></i></center>
                  <center><h6>Contact : +91 1234567890</h6></center>
                </div>
            </div>
          </div>
        </div><br><br>
        <h6 align="center">&copy; Copyright <script>document.write(new Date().getFullYear());</script>. All Right Reserved.</h6>
        <h6 align="center">Made with &#10084;  in India.</h6><br>
      </footer>
</body>
</html>