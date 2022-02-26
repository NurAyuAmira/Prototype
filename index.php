<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Mouse Gaming</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>  
    <!-------------------------------------------------General Header Website Part 1--------------------------------------------------------------------->
    <div id="top"> <!-- top begin-->
        <div class="container"><!-- container begin-->
            
            <div class="col-md-6 offer"><!-- col-md-6 offer begin-->
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php" >4 Items In Your Cart | Total Price: RM 300.00</a>
            </div><!-- col-md-6 offer finish-->
            
                <div class="col-md-6"><!-- col-md-6  begin-->
                    <ul class="menu">
                        <li><a href="customer_registration.php">Register</a></li>
                        <li><a href="history">My Account</a></li>
                        <li><a href="cart.php">Go to Cart</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div><!-- col-md-6  finish-->
            
        </div><!-- container finish-->
    </div> <!-- top finish-->
   
    <!-----------------------------Bawah header punya dalam [head]  Part 2--------------------------------------------------------------------------------->
    <div id="navbar" class="navbar navbar-default"><!--navbar navbar-default begins-->
        <div class="container"><!-- container begin-->
            
            <!------------------Logo dalam-------------------------------------------------------------------->
            <div class="navbar-header"><!--navbar-header begins-->
                <a href="index.php" class="navbar-brand home">
                    <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo " class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                </a>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>   
            </div><!--navbar-header finish-->
            
               <!------------------------------bawah header punya dalam isi  [kepala]----------------------------------------->
            <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse begins-->
                
                <div class="padding-nav"><!--padding-nav begins-->
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                             <a href="history.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
                </div><!--padding-nav finish-->
                
               <!------------------------------button cart biru---------------------------------------------------------------->
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items In Your Cart</span>
                </a>
                
                <!-------------------------------------button search biru------------------------------------------------------>
                <div class="navbar-collapse collapse right"> <!--navbar-collapse collapse right begins-->
                    <button class="btn navbar-btn btn-primary " type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div> <!--navbar-collapse collapse right finish-->    
                
                <!-----------------------------------------------search bar--------------------------------------------------->
                <div class="collapse clearfix" id="search"> <!--collapse clearfix begins-->
                    <form method="get" action="result.php" class="navbar-form">
                        <div class="input-group"><!--input-group begins-->
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                                <span class="input-group-btn">
                                    <button type="submit" name="search" value="Search" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div><!--input-group finish-->
                    </form>                
                </div><!--collapse clearfix finish-->
            </div><!--navbar-collapse collapse finish-->
        </div><!-- container finish-->
    </div><!--navbar navbar-default finish-->
    
    <!------------------------------------------------------------Ads Slider Part 3----------------------------------------------------------------------------->
    <div class="container" id="slider"> <!--container Begin-->
        <div class="col-md-12"> <!-- col-md-12 Begin-->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!--carousel slide Begin-->
                
                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                
                <div class="carousel-inner"> <!--carousel-inner Begin-->
                    
                    <div class="item active">  
                        <img src="admin_area/slides_images/slide-1.jpg" alt="Slider Image 1">
                    </div>
                    
                    <div class="item">  
                        <img src="admin_area/slides_images/slide-2.jpg" alt="Slider Image 2">
                    </div>
                    
                    <div class="item">  
                        <img src="admin_area/slides_images/slide-3.jpg" alt="Slider Image 3">
                    </div>
                    
                      <div class="item">  
                        <img src="admin_area/slides_images/slide-4.jpg" alt="Slider Image 4">
                    </div>
                    
                </div><!--carousel-inner Finish-->
                
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                 <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                
                
            </div><!-- carousel slide Finish-->
        </div> <!-- col-md-12 Finish-->
    </div><!--container Finish-->

    <!----------------------------------------------------------------Box AdvantagePart 13/14-------------------------------------------------------->
    <div id="advantage">
        <div class="container">
            <div class="same-height-row">
                
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                            <h3><a href="#">BEST PRICES</a></h3>
                            <p>You can check on all others sites about the prices and than compare with us. </p>
                    </div>
                </div>
                
                 <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                            <h3><a href="#">WE LOVED OUR CUSTOMER</a></h3>
                            <p>We are known to provide best possible service ever </p>
                    </div>
                </div>
                
                 <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                            <h3><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h3>
                            <p>Free returns on everything for 3 months. </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!---------------------------------------------------------------Divider Part 15----------------------------------------->
    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Latest this week</h2>
                </div>
            </div>
        </div>
    </div>
    
    <!--------------------------------------------Styling display product main page Part 16----------------------------------------------------->
    <div id="content" class="container">
        <div class="row">
            
            <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-1.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Razer Viper</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
    
            
               <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-3.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Bentenb Mouse</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>

      
            
              <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-8.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Bentenb Mouse</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
             <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-1.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Razer Viper</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
    
            
               <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-3.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Bentenb Mouse</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>

      
            
              <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-8.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Bentenb Mouse</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
             <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-3.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Bentenb Mouse</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>

      
            
              <div class="col-sm-4 col-sm-6 single"> 
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/product-8.png" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Bentenb Mouse</a></h3>
                        <p class="price"> RM 399.00 </p>
                        <p class="buttons"> 
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping cart"></i>Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    
    <!--------------------------------------------------Footer part 17--------------------------------------------------------------------->
    <?php include("includes/footer.php");?>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>