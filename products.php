<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php">BAVA Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" id="content">

        <!-- Jumbotron Header -->
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <h1>Welcome to our BAVA Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

        </div>
        <hr>

        <div class="row text-center" id="cameras">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="5.jpg" alt="">
                    <div class="caption">
                        <h3>Cannon EOS </h3>
                        <p>Price: Rs. 36000.00 </p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="2.jpg" alt="">
                    <div class="caption">
                        <h3>Nikon EOS </h3>
                        <p>Price: Rs. 40,000.00 </p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="3.jpg" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 50000.00</p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="4.jpg" alt="">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs. 50000.00</p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="watches">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="7.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model #301 </h3>
                        <p>Price: Rs. 13000.00 </p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="9.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs. 3000.00 </p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="10.jpg" alt="">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price: Rs. 8000.00 </p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="11.jpg" alt="">
                    <div class="caption">
                        <h3>Faber Luba #111 </h3>
                        <p>Price: Rs. 18000.00 </p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="shirts">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="6.jpg" alt="">
                    <div class="caption">
                        <h3>H&W </h3>
                        <p>Price: Rs. 800.00 </p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="8.jpg" alt="">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price: Rs. 1000.00</p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="13.jpg" alt="">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price: Rs. 1500.00</p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="14.jpg" alt="">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price Rs. 1300.00</p>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <footer>
        <div class="container">
            <center>
                <p>Copyright &copy; BAVA Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
            </center>
        </div>
    </footer>
</body>
</html>
