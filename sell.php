<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easybuy.com</title>

    <link rel="shortcut icon" href="images4/easybuy.jpeg" type="image/png">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts4/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css4/style4.css">
</head>
<body>
  
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="sellmain.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title">Sell your products!!</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="productname" id="productname" placeholder="Product Name"/>
                        </div>
                        <div class="form-group">
                            <label>Item Category</label>
                            <input type="radio" id="car" name="estatus" value="car">
                            <label for="car">Car</label>
                            <input type="radio" id="2wheeler" name="estatus" value="2wheeler">
                            <label for="2wheeler">2-Wheeler</label>
                            <input type="radio" id="household" name="estatus" value="household">
                            <label for="household">Household</label>
                            <input type="radio" id="book" name="estatus" value="book">
                            <label for="book">Book</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="cost" id="price" placeholder="Product Price"/>
                        </div>
                        <div class="form-group">
                          <h4>Product pic</h4>  
                             <input type="file" class="form-input" placeholder="Photo" name="pic" >      
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="mobile" id="mobile" placeholder="Contact Number"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Upload Details"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor4/jquery/jquery4.min.js"></script>
    <script src="js4/main4.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>