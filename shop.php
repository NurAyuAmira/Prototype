<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Shop Mouse Gaming</title>
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
                        <li><a href="history.php">My Account</a></li>
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
                        <li >
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
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
   
    <!-----------------------------------------------------Shop isi ---------------------------------------------------------------------------------------->
    <div id="content">
        <div class="container">
           
            <!---------------------------Bar Nav------------------------------->
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
    <!-------------------------------------Sidebar---------------------------------------------->
            <div class="col-md-3">
                <?php 
                include("includes/sidebar.php");
                ?>
            </div>
        
    
            <div class="col-md-9">
                
                <!-----------box intro--------------------->
                <div class="box">
                    <h1>Shop</h1>
                    <p>This is gaming mouse product </p>
                </div>
                
                <!----------------------------shop baju----------------------------->
                <div class="row">
                    
                    <div class="col-md-4 col-sm-6 center responsive ">
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product-1.png" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Razer Mouse</a>
                                </h3>
                                <p class="price">RM 200</p>
                                <p class="buttons">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-md-4 col-sm-6 center responsive ">
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product-3.png" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Razer Mouse</a>
                                </h3>
                                <p class="price">RM 200</p>
                                <p class="buttons">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-md-4 col-sm-6 center responsive ">
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product-8.png" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Razer Mouse</a>
                                </h3>
                                <p class="price">RM 200</p>
                                <p class="buttons">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-md-4 col-sm-6 center responsive ">
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product-1.png" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Razer Mouse</a>
                                </h3>
                                <p class="price">RM 200</p>
                                <p class="buttons">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-md-4 col-sm-6 center responsive ">
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product-3.png" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Razer Mouse</a>
                                </h3>
                                <p class="price">RM 200</p>
                                <p class="buttons">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-md-4 col-sm-6 center responsive ">
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product-8.png" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Razer Mouse</a>
                                </h3>
                                <p class="price">RM 200</p>
                                <p class="buttons">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
       
                </div>
                
                <!---------------------------------------------Pagination page part 28----------------------------->
                <center>
                    <ul class="pagination">
                        <li><a href="shop.php">First Page</a></li>
                        <li><a href="shop.php">2</a></li>
                        <li><a href="shop.php">3</a></li>
                        <li><a href="shop.php">4</a></li>
                        <li><a href="shop.php">5</a></li>
                        <li><a href="shop.php">Last Page</a></li>
                    </ul>
                </center>
                
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