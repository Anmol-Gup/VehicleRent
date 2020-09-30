<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Update Password</title>
    <style>
        section
        {
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .container{
            width: 100%;
            height: 400px;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        a{
            font-size:1.2rem;
        }
        h1{
            font-size:2rem;
        }
    </style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
        <h1 class="navbar-brand" ><i class='fas fa-clinic-medical' style='font-size:36px;color:black; padding-top:5px;'></i>
        &nbsp;&nbsp;S.P.G. Medical Centre</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><BR>
    <section>
        <div class="container">
        <form method="POST" action="up.php">
            <div class="form-group row">
                <label for="inputname" class="col-sm-2 col-form-label">Name</label>&nbsp;&nbsp;
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputname" name="username" style="width;100%" required placeholder="Enter Your Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>&nbsp;&nbsp;
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password" required 
                 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
                & 1 lowercase letter & at 8 or more characters"placeholder="Enter Your Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>&nbsp;
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="new" required placeholder="Enter New Password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one no. & 1 uppercase 
                & 1 lowercase letter & at 8 or more characters">
               <br><br>
                <Center><button type="submit" class="btn btn-primary btn-md btn-block">Update</button></Center>
                </div>
            </div>
        </form>
    </div>
</section><br><br>
        <hr>
    <footer>
        <h6 align="center">&copy; Copyright <script>document.write(new Date().getFullYear());</script>. All Right Reserved.</h6>
        <h6 align="center">Made with &#10084;  in India.</h6><br>
    </footer>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </body>
</html>