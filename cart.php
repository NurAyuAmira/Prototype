<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Cart </title>
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
                        <li >
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                             <a href="history.php">My Account</a>
                        </li>
                        <li class="active">
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
                    <li>Cart</li>
                </ul>
            </div>

            <!-------------------------Notice----------------------------->
            <div class="col-md-9" id="cart">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart/form-data">
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">Currently you have 3 item(s) in your cart</p>
                            <div class="table-responsive">
                                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Mouse Type</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="1">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="admin_area/product_images/product-1.png"></td>
                                            <td>Mardaz pack of 5</td>
                                            <td>2</td>
                                            <td>RM 300.00</td>
                                            <td>Bluetooth</td>
                                            <td><input type="checkbox" name="remove[]"></td>
                                            <td>RM 600.00</td>
                                        </tr>
                                          <tr>
                                            <td><img src="admin_area/product_images/product-1.png"></td>
                                            <td>Mardaz pack of 5</td>
                                            <td>2</td>
                                            <td>RM 30.00</td>
                                            <td>USB</td>
                                            <td><input type="checkbox" name="remove[]"></td>
                                            <td>RM 60.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">RM 600.00</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="index.php" class="btn btn-default">
                                        <i class="fa fa-chevron-left">Continue Shopping</i>
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                        <i class="fa fa-refresh"> Update Cart</i>
                                    </button>
                                    <a href="checkout.php" class="btn btn-primary">
                                        Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        
                    </form>
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
            
            <div class=col-md-3>
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">
                        Shipping and addiitonal costs are calculated based on the values you have entered
                    </p>
                    
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order Subtotal</td>
                                        <th>RM 600.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <td>RM 0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>RM 0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>RM 600.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
              </div>
            
    <!--------------------------------------------------Footer part 17--------------------------------------------------------------------->
          </div>
    </div> 

    <?php include("includes/footer.php");?>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>