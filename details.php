<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Details Mouse Gaming</title>
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
            
 <!-------------------------------------------------Details page------------------------------------------------------------------->           
            <div class="col-md-9">
                <div class="row" id="productmain">
                    <!----------------------------------slider start---------------------------------->
                    <div class="col-sm-6">
                        <div id="mainimage">
                            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel" data-slide-to="1" ></li>
                                    <li data-target="#mycarousel" data-slide-to="2" ></li>
                                </ol>
                                
                                <div class="carousel-inner">
                                    
                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images/product-1a.jpg" class="img-responsive">
                                        </center>
                                    </div>
                                    
                                     <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product-1a.jpg" class="img-responsive">
                                        </center>
                                    </div>
                                    
                                     <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product-1a.jpg" class="img-responsive">
                                        </center>
                                    </div>
                                    
                                </div>
                                
                                <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                  
                                 <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                
                            </div>
                        </div>
                    </div> <!-----------------------------------------slider finish---------------------------------->
                   
                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts for Men </h1>
                            <form action="details.php" method="post" class="form-horizontal">
                                
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Quantity</label>
                                    <div class="col-md-7">
                                        <select name="product_qty" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-md-5 control-label">Type of Mouse</label>
                                    <div class="col-md-7">
                                        <select name="product_size" class="form-control">
                                            <option>Select the mouse</option>
                                            <option>Bluetooth</option>
                                            <option>USB</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <p class="price">RM 300.00</p>
                                <p class="text-center buttons">
                                   <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"><a href="cart.php"> Add to cart</a></i>
                                   </button>
                                </p>
                                
                            </form>
                        </div>
                        
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product-1.png" class="img-responsive">
                            </a>
                        </div>
                        
                         <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product-1.png" class="img-responsive">
                            </a>
                        </div>
                        
                         <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product-1.png" class="img-responsive">
                            </a>
                        </div>
                        
                    </div>
                </div>
                
                <!-----------------------------------------------Product Details------------------------------------>
                <div class="box" id="details">
                    <h4>Product Details</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                
                    <h4>Type of mouse</h4>
                    <ul>
                        <li>Bluetooth</li>
                        <li>USB</li>
                    </ul>
                </div>
                
                <!-------------------------------------------also like these products------------------------->
                <div id="row same-height-row">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You Also Like These Products</h3>
                        </div>
                    </div>
                    
                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/product-3.png" class="img-responsive">
                            </a>
                            
                            <div class="text">
                                <h3><a href="details.php">Mardaz Murlrjd clor</a></h3>
                                <p class="price">RM 300.00</p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/product-8.png" class="img-responsive">
                            </a>
                            
                            <div class="text">
                                <h3><a href="details.php">Mardaz Murlrjd clor</a></h3>
                                <p class="price">RM 300.00</p>
                            </div>
                        </div>
                    </div>
                    
                          <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/product-3.png" class="img-responsive">
                            </a>
                            
                            <div class="text">
                                <h3><a href="details.php">Mardaz Murlrjd clor</a></h3>
                                <p class="price">RM 300.00</p>
                            </div>
                        </div>
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