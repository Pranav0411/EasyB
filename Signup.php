<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style1.css">

    <link rel="stylesheet" href="css/owl1.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style1.css">

    <title>Sign up</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Sign up </h3>
            <p class="mb-4">Want to buy/sell house hold appliances ? Sign up and check out the website!!</p>
            <form action="signmain.php" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" name="username" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
              </div>

              <input type="submit" value="Sign up" name="submit" class="btn btn-block btn-primary"></br>
              <div class="text-center">Already have an account?
                <a href="login.php" class="txt2 hov1" style="color:#f54611;">
                  Log In
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.2.min.js"></script>
    <script src="js/popper1.min.js"></script>
    <script src="js/bootstrap1.min.js"></script>
    <script src="js/main1.js"></script>
  </body>
</html>